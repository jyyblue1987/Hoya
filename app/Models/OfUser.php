<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTime;
use \DateInterval;
use Illuminate\Pagination;

class OfUser extends Model { 
	protected $table = 'ofUser';
	
	public $timestamps = false;
}
