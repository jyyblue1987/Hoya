<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

use App\Models\Country;
use App\Models\User;
use App\Models\Career;
use App\Models\OfflineMessage;
use App\Models\PushTask;
use Services_Twilio;
use Services_Twilio_TinyHttp;

//use Request;

define("SUCCESS", "200"); 			// successfully

define("MISSING_PARAMETER", "100"); // Parameter missing
define("INVALID_PARAMETER", "101"); // Parameter is invacheckUserValiditylid

define("USER_EXIST", "201");		// user already exist
define("NO_VERIFIED", "202"); 		// not verified user
define("STATUS_INACTIVE", "203"); 	// status inactive

define("NO_USER_EXIST", "301"); 	// user not exist
define("INVALID_PASSWORD", "302");	// user or password is not valid
define("INVALID_VCODE", "303");		// verify code is invalid
define("NO_PERMISSIONS", "304"); 	// no permissions
define("EXPIRED_VCODE", "305");		// verify code is expired
define("SERVER_INTERNAL_ERROR", "401"); // server process error
define("CHAT_SERVER_ERROR", "402"); // chat server down


define("DEVICE_IPHONE", "iphone");	// device type iPhone
define("DEVICE_ANDROID", "android");// device type Android

require_once('openfire_api.php');
require_once('push_message.php');
require('twillo_service/Twilio.php');

function isNullOrEmptyString($question)
{
    return (!isset($question) || trim($question)==='');
}

class ProcessController extends Controller
{

    function process(Request $request, $action)
	{		
		switch($action)
		{
			case 'getcountrylist';
				$this->getCountryList();				
				break;
			case 'verify';
				$this->verify($request);				
				break;
			case 'login';
				$this->login($request);				
				break;
			case 'uploadphoto';
				$this->uploadphoto($request);				
				break;
			case 'push';
				$this->pushMessage($request);				
				break;
			case 'offline';
				$this->sendOfflineMessage($request);				
				break;
			case 'sms';
				$this->sendSMSwithService('+8618841568752');				
				break;
			case 'uploadfile';
				$this->uploadfile($request);				
				break;
			case 'changeuser';
				$this->changeUser($request);				
				break;
		}
		
	}		
	
	private function getCountryList()
	{
		$countries = Country::orderBy('name')->get();
		$this->outputResult( SUCCESS, $countries );	
	}	

	private function sendSMS($user)
	{
		$number = '+' . $user->username;
		$global = str_replace('_', ' ', $number);		
	}
	
	private function sendSMSwithService($number)
	{
		$sid = "AC6cc65840fa48f73b081c1d9de93b86ff"; // Your Account SID from www.twilio.com/user/account
		$token = "e5be7fe5056ded64bb8e5ed67db0ba58"; // Your Auth Token from www.twilio.com/user/account

		$http = new Services_Twilio_TinyHttp(
			'https://api.twilio.com',
			array('curlopts' => array(
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_SSL_VERIFYHOST => 2,
			))
		);
		
		//$client = new Services_Twilio($sid, $token, "2010-04-01", $http);
		
	
		$client = new Services_Twilio($sid, $token);
		$message = $client->account->messages->sendMessage(
		  "+12568260600", // From a valid Twilio number
		  $number, // Text this number
		  "Hello monkey!"
		);

		print $message->sid;
	}
	private function verify($request)
	{
		if( $request->has('country_code') == false ||
			$request->has('mobile') == false ||
			$request->has('vcode') == false )
		{ 
			$this->outputResult(MISSING_PARAMETER);
			return;
		}
		
		$country_code = $request->input('country_code', '60');
		$mobile = $request->input('mobile', '123456789');
		$vcode = $request->input('vcode');
		$device = $request->input('device', '1');
		$pushkey = $request->input('pushkey', '');
		
		$global = $country_code . '_' . $mobile;
		
		$user = getUser($global);
		
		switch( $user['code'] )
		{
			case 0:	// Openfire server is not responding
				$this->outputResult( CHAT_SERVER_ERROR );
				break;
			case 200: // user exist
				deleteUser($global);				
			case 400: // no user
			case 404: // no user
				$this->activeUser($global, $vcode, $device, $pushkey);
				break;				
		}				
	}
	
	private function activeUser($number, $vcode, $device, $pushkey)
	{
		// check verify code
		$verifyResult = User::isRightVerifyCode($number, $vcode);
		if( $verifyResult > 0 )
		{
			switch( $verifyResult )
			{
				case 1: // no user
					$this->outputResult(NO_USER_EXIST);
					break;
				case 2: // verify code is not correct
					$this->outputResult( INVALID_VCODE );				
				    break;
				case 3: // verify code is expired
					$this->outputResult( EXPIRED_VCODE );				
				    break;
			}	
			return;
		}
		
		// add openfire
		$ret = addUser($number, strrev($number));

		switch($ret['code'])
		{
			case 0:	// Openfire server is not responding
				$this->outputResult( CHAT_SERVER_ERROR );
				break;
			case 201: // add user is ok
			case 409: // user exist
				$user = User::activateUser($number, $device, $pushkey);
				if( empty($user) ) // User does not exist
				{
					$this->outputResult(NO_USER_EXIST);
					return;
				}
				$this->outputResult( SUCCESS, $user );		
			    break;				
		}
	}
	
	private function login($request)
	{
		if( $request->has('country_code') == false ||
			$request->has('mobile') == false )
		{ 
			$this->outputResult(MISSING_PARAMETER);
			return;
		}
		
		$country_code = $request->input('country_code', '60');
		$mobile = $request->input('mobile', '123456789');
		$device = $request->input('device', '1');
		$pushkey = $request->input('pushkey', '');

		$global = $country_code . '_' . $mobile;
		
		$user = getUser($global);
		
		switch( $user['code'] )
		{
			case 0:	// Openfire server is not responding
				$this->outputResult( CHAT_SERVER_ERROR );
				break;
			case 200: // get user is ok
				$user = User::login($global, $device, $pushkey);
				if( empty($user) || $user->active !== 1 )	// user is not exist or not activated
				{
					deleteUser($global);
					$this->registerAction($global, $device, $pushkey);								
				}
				else
					$this->outputResult( SUCCESS, $user );
				break;
			default:			
				User::deleteUser($global);				
				$this->registerAction($global, $device, $pushkey);
				break;				
		}
	}
	
	private function registerAction($number, $device, $pushkey)
	{
		$user = User::registerUser($number, $device, $pushkey);
		$this->sendSMS($user);
		$this->outputResult(NO_VERIFIED, $user);		
	}

	private function changeUser($request)
	{
		$user = $this->checkUserValidity($request);
		if($user === null)
			return;
		
		$username = $request->username;
		$password = strrev($username);
		$name = $request->name;
		$email = $request->email;

		$result = updateUser($username, $password, $name, $email);
		if( $result['code'] == 200 )
			$this->outputResult(SUCCESS, "" );
		else
			$this->outputResult(INVALID_PARAMETER, "" );
	}
	
	private function checkUserValidity($request)
	{
		$username = $request->input('username');
		$token = $request->input('token');

		if( $username == null || $token == null )
		{
			$this->outputResult( MISSING_PARAMETER );
			return null;
		}

		$user = User::where('username', '=', $username)->first();
		
		if( empty($user) )	// user does not exist
		{
			$this->outputResult( INVALID_PARAMETER );
			return null;
		}
		
		if( $user->token != $token )
		{
			$this->outputResult( NO_PERMISSIONS );
			return null;
		}

		return $user;
	}
	
	private function uploadphoto($request)
	{
		$user = $this->checkUserValidity($request);
		if($user === null)
			return;
		
		$filekey = 'myfile';
		if($request->hasFile($filekey) === false )
		{
			$this->outputResult( MISSING_PARAMETER );
			return;
		}
		
		if ($request->file($filekey)->isValid() === false )
		{
			$this->outputResult( INVALID_PARAMETER );
			return;
		}
		
		$file_ext	= pathinfo($_FILES[$filekey]["name"], PATHINFO_EXTENSION);
		$file_name = $user->username . '_' . time() . '.' . $file_ext;
		
		$ret = $request->file($filekey)->move("uploads/", $file_name);
		
		if( empty($ret) )
			$this->outputResult(SERVER_INTERNAL_ERROR, 'There was an error uploading your file.');
			
		if( $user->avastar != '' )
		{
			$old_filepath = $this->getPhotoFilePath( $user->avastar );
			
			if( file_exists($old_filepath) )
				unlink( $old_filepath );
		}

		$user->avastar = $file_name;
		if( !$user->save() )
			$this->outputResult(SERVER_INTERNAL_ERROR, "Cannot save file" );

		$this->outputResult(SUCCESS, $file_name );
	}
	
	public function getPhotoFilePath( $file_name )
	{
		$dir_path = "uploads/";
		$file_path = $dir_path . $file_name;

		return $file_path;
	}
	
	private function uploadfile($request)
	{
		$user = $this->checkUserValidity($request);
		if($user === null)
			return;
		
		$filekey = 'myfile';
		if($request->hasFile($filekey) === false )
		{
			$this->outputResult( MISSING_PARAMETER );
			return;
		}
		
		if ($request->file($filekey)->isValid() === false )
		{
			$this->outputResult( INVALID_PARAMETER );
			return;
		}
		
		$file_name = $_FILES[$filekey]["name"];
	
		if( !$request->file($filekey)->move("uploads/", $file_name) )
			$this->outputResult(SERVER_INTERNAL_ERROR, 'There was an error uploading your file.');
		
		$this->outputResult(SUCCESS, $file_name );
	}
	
	
	private function outputResult( $retcode, $content = '', $error_msg = null )
	{
		header('Content-type: application/json');

		if( $error_msg == null )
		{
			switch ($retcode)
			{
			case SUCCESS:
				$error_msg = '';
				break;
			case MISSING_PARAMETER:
				$error_msg = 'Parameter is missing';
				break;
			case INVALID_PARAMETER:
				$error_msg = 'Parameter is invalid';
				break;
			case USER_EXIST:
				$error_msg = 'User is already exist';
				break;
			case NO_USER_EXIST:
				$error_msg = 'User is not exist';
				break;
			case INVALID_PASSWORD:
				$error_msg = 'Your input password is not correct';
				break;
			case INVALID_VCODE:
				$error_msg = 'Verification code is invalid';
				break;
			case EXPIRED_VCODE:
				$error_msg = 'Verification code is expired';
				break;
			case STATUS_INACTIVE:
				$error_msg = 'You can not login, you are disabled by administrator';
				break;
			case NO_VERIFIED:
				$error_msg = 'You are not verified yet.';
				break;
			case NO_PERMISSIONS:
				$error_msg = 'You have no permission';
				break;
			case SERVER_INTERNAL_ERROR:
				$error_msg = 'Server internal process error.';
				break;
			case CHAT_SERVER_ERROR:
				$error_msg = 'Chat server is not responding.';
				break;
			default :
				$error_msg = '';
				break;
			}
		}

		$response = array( 'retcode'=>$retcode, 'content'=>$content, 'error_msg'=>$error_msg );

		echo json_encode($response);		
	}
	
	private function pushMessage($request)
	{
		$message = $request->input('message');
		if( empty($message) )
			return;
		
		$android_users = User::where('device', '=', '1')->get();
		$ios_users = User::where('device', '=', '2')->get();
		
		$gcm_key = array();
		foreach( $android_users as $android )
		{
			$pushkey = $android->pushkey;
			if( empty($pushkey) )
				continue;
			$gcm_key[] = $pushkey;
		}		
		
		$apn_key = array();
		foreach( $ios_users as $ios )
		{
			$pushkey = $ios->pushkey;
			if( empty($pushkey) )
				continue;
			$apn_key[] = $pushkey;
		}		
		
		$ret1 = push2Android($gcm_key, $message);
		$ret2 = push2IPhone($apn_key, $message);		
	}
	
	private function sendOfflineMessage()
	{
		$lastid = PushTask::max('lastid');
		
		if( empty($lastid) )
			$messages = OfflineMessage::all()->take(1000)->get();
		else			
			$messages = OfflineMessage::where('messageID' , '>', $lastid)->take(1000)->get();
		
        $maxid = $lastid;		
		foreach( $messages as $msg )
		{
			$pushkey = $msg->user['pushkey'];
			$content = $msg->stanza;
			
			if( empty($pushkey) )
				continue;
			
			$id = $msg->messageID;
			if( $id > $maxid )
				$maxid = $id;
			if( $msg->user['device'] === 1 ) // android
			{
				$gcm_key = array();
				$gcm_key[] = $pushkey;
				push2Android($gcm_key, $content);
			}
			else if( $msg->user['device'] === 2 ) // iOS
			{
				$apn_key = array();
				$apn_key[] = $pushkey;
				push2IPhone($apn_key, $content);
			}
		}
		
		$task = new PushTask();
		$task->lastid = $maxid;
		$task->save();
	}
}
