<?php
namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\UserProfile;

use App\Http\Requests;
use App\Http\Controllers\Controller;


		
class FrontController extends Controller
{
	function index(Request $request)
	{	
		
		
		 $item = 10;	
		$slideitems = Advertisement::paginate($item);
									
		return view('pages.home')->with('slideitems', $slideitems);
	}
}
