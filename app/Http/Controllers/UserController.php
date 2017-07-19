<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;
use App\Models\OfUser;
use App\Models\UserProfile;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use \SimpleXMLElement;

use App\Modules\Functions;
//use Illuminate\Pagination;


function convertMobileNumber($number)
{
	return "+" . str_replace("_", " ", $number);
}		
class UserController extends Controller
{
	function login()
	{
		 if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return view('login');
		}else{	
		//return redirect()->intended('/admin/advertisement'); // 
			return redirect()->intended('/admin/advertisement');
		}
		return view('login');
	}
	
	function logout()
	{
		$_SESSION["login"] = '0';
		$_SESSION["email"] = '';
		unset($_SESSION['login']); 
			
		return redirect()->intended('login');
	}
	
	public function postLogin(Request $request)
	{
 		$default_email = 'admin@gmail.com';
		
		/*if (User::where('email', '=', $default_email)->exists() === false) {
			$user = new User();
			$user->email = $default_email;
			$user->password = Hash::make('hoyaadmin');
			$user->save();
		} */
		//echo $request->input('email');
		$email = $request->input('email');
		$password = $request->input('password');
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			$_SESSION["email"] = $email;
			$_SESSION["login"] = '1';
			return redirect()->intended('/admin/advertisement');
        }
		else
		{
			$_SESSION["login"] = '0';
			$_SESSION["email"] = '';
			return redirect()->intended('login');
		}	
	}
	
	function index(Request $request)
	{	
	
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}	
		$item = $request->get('pageSize');
		
		if($item == null)
		{
			$item = 10;				
		}
		
		$users = OfUser::where('username', '<>', 'admin')->paginate($item);	
		foreach( $users as &$value )	
		{
			$value['mobile'] = convertMobileNumber($value['username']);	
			if( $value['email'] === 'false' )
				$value['email'] = '';
			if( $value['name'] === 'false' )
				$value['name'] = '';
		} 
		
									
		return view('users.user')->with('users', $users)->with('item_v',$item);
	}
	
	function search(Request $request)
	{	
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}
		$input = $request->get('name');
		$item = $request->get('pageSize');
		if($item == null)
		{
			$item = 10;				
		}
		
		$user = OfUser::where('username', 'like', '%' . $input . '%')
						->orWhere('name', 'like', '%' . $input . '%')
						->orWhere('email', 'like', '%' . $input . '%')
							->paginate($item);
		foreach( $user as &$value )	
		{
			$value['mobile'] = convertMobileNumber($value['username']);	
			if( $value['email'] === 'false' )
				$value['email'] = '';
			if( $value['name'] === 'false' )
				$value['name'] = '';
		}
		
		return view('users.user')->with('users', $user)->with('item_v',$item);
	}
	
	function process($id = AUTH)	
	{
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}
		//echo $id;
		return view('users.process')->with('action', $id);
	}
	function email(Request $request)
	{
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}
		
		$error = '';
		
		if( $request->isMethod('post') )
		{
			$admin = User::where('email', '=', $_SESSION['email'])->first();
			if( empty($admin) )
				return redirect()->intended('login');
			
			if( $request->get('password1') !== $request->get('password2') )
				$error = Functions::GetMessage ('ACCOUNT_PASS_MISMATCH');
			else if( strlen($request->get('password1')) < 6 || strlen($request->get('password1')) > 32 )
				$error = Functions::GetMessage('ACCOUNT_PASS_CHAR_LIMIT', array(6, 32));
			else
			{
				$admin->email = $request->get('email');
				$admin->name = $request->get('username');
				$admin->password = Hash::make($request->get('password1'));
				$admin->save();
				
				$_SESSION['email'] = $admin->email;	
				$error = 'SUCCESS';
			}
		}
		else
		{
			$email = $_SESSION["email"];
			$admin = User::where('email', '=', $email)->first();
		}
		return view('users.email')->with('admin', $admin)->with('error',$error);		
	}
	
	function update(Request $request)
	{
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}
		if( !isset($_SESSION['email']) ) 
		{
			return redirect()->intended('login');
		}
		
		
		
		return redirect()->intended('/');	
	}
	
	function userprofile(Request $request)
	{
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}
		
		$username = $request->get('pname');
		$userinfo = UserProfile::where('username', '=', $username)->first();
		
		if( empty($userinfo) )
		{
			$profile = array();	
			$profile['mobile'] = convertMobileNumber($username);
			return view('users.exceptuserprofile')->with('profile',$profile);
		}
		
		$xml_parser = xml_parser_create() or die ("XML 파서를 생성하지 못했습니다.");
		xml_parse_into_struct($xml_parser, $userinfo->vcard, $value, $index);  
		xml_parser_free($xml_parser);  
		
		$middle = '';
		$family = '';
		foreach($value as $v){  
			if( $v['tag'] === 'MIDDLE' )
			{
				$middle = $v['value'];
			}
			if( $v['tag'] === 'FAMILY' )
			{
				$family = $v['value'];
			}
		}
	
		$profile = json_decode($middle, true);	
		$profile['mobile'] = convertMobileNumber($username);
		if( $profile['role'] === '0' )
			$profile['role'] = 'Patient';
		else
			$profile['role'] = 'Doctor';
	
		return view('users.userprofile')->with('profile',$profile);
	}
}
