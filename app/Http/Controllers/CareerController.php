<?php
namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\UserProfile;

use App\Http\Requests;
use App\Http\Controllers\Controller;


		
class CareerController extends Controller
{
	public function career()
	{
		$users = Career::orderby("sequence","ASC")->get();
		return view('pages.career')->with('users', $users);
	}
	public function message(Request $request)
	{

		$datas['email'] =  '2636970547@qq.com';
		$datas['firstname'] = 'Admin';
		//$target_user = User::where('role','admin')->first();
		//$datas['email']= $target_user->email;
		//$datas['firstname'] = $target_user->firstname;
		
		
		$data['email'] = $request->get('email');
		$data['content'] = $request->get('userMsg');
		$data['phoneno'] = $request->get('phoneno');
		$data['name'] = $request->get('name');

		echo $data['email'];
		
		Mail::send('pages.about', $data, function($message)
		{
			$message->from($data['email'], $data['name']);

			$message->to('2905368844@qq.com', 'John Smith')->subject($data['content']);
		});		
		
		
		return view('pages.career');
	}
	function login()
	{
		
		return view('login'); //
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
 		/* $default_email = 'admin@gmail.com';
		if (User::where('email', '=', $default_email)->exists() === false) {
			$user = new User();
			$user->email = $default_email;
			$user->password = Hash::make('hoyaadmin');
			$user->save();
		}  */
		$email = $request->input('email');
		$password = $request->input('password');
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			$_SESSION["email"] = $email;
			$_SESSION["login"] = '1';
			return redirect()->intended('/admin');
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
		$users = Career::paginate($item);
								
		return view('users.career')->with('users', $users)->with('item_v',$item);
	}

	function car_register(Request $request)
	{	
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}	

		$adver = new Career();
									
		return view('users.career_register')->with('adver',$adver)->with('error', '')->with('mode', 'create');
	}
	
	function addItem(Request $request)
	{
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}	
		
		$data = $request->get('region_data');
		
		$adver = new Career();
		
		$adver->title = $data['title'];
		$adver->descript = $data['desc'];
		$adver->sequence = $data['sequence'];
		
		$adver->save();
		
		$adver = new Career(); 
		return view('users.career_register')->with('adver',$adver)->with('error', 'SUCCESS')->with('mode', 'create');
	}
	
    function car_edit(Request $request, $id)
	{	
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}	

		$page = $request->get('page');
		if( $page === null )
			$page = 1;
		
		$adver = Career::find($id);
		if( $adver == null )
		{
			return redirect()->intended('admin/career?page='.$page);
		}
									
		return view('users.career_register')->with('adver',$adver)->with('error', '')->with('mode', 'edit');

	}		

    function updateItem(Request $request, $id)
    {	
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}	
		
		$adver = Career::find($id);
		if( $adver == null )
		{
			return redirect()->intended('admin/career');
		}
		
		$data = $request->get('region_data');
		
		$adver->title = $data['title'];
		$adver->descript = $data['desc'];
		$adver->sequence = $data['sequence'];
		$adver->save();
		
		return view('users.career_register')->with('adver',$adver)->with('error', 'SUCCESS')->with('mode', 'edit');
	}		

    function car_delete(Request $request, $id)
	{		
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}	

		$page = $request->get('page');
		if( $page === null )
			$page = 1;
		Career::destroy($id);

		return redirect()->intended('admin/career?page='.$page);		
	}			
	
	function car_totaldelete(Request $request)
	{	
		if(empty($_SESSION["login"]) || $_SESSION["login"] !== '1' )
		{
			return redirect()->intended('login');
		}	
		
		$deletions = $_POST['cat_ids'];
		Career::destroy($deletions);
		
		return redirect()->intended('admin/career');		
	}
	
}
