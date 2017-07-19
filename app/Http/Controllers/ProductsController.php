<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Product;
use App\Http\Controllers\Controller;
//use Request;



class ProductsController extends Controller {
	
	public function products()
	{
		return view('pages.products');
	}
	
	public function treatment()
	{
		return view('pages.treatment');
	}

	public function photochromics()
	{
		return view('pages.photochromics');
	}

	public function singlevision()
	{
		return view('pages.singlevision');
	}

	public function progressive()
	{
		return view('pages.progressive');
	}

	public function speciality()
	{
		return view('pages.speciality');
	}

	public function fullproduct()
	{
		$item = 4;
		$users = Product::paginate($item);
									
		return view('pages.fullproduct')->with('users', $users);
	}

	public function lensmaterial()
	{
		return view('pages.lensmaterial');
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
		
		
		return view('pages.products');
	}
	
}

