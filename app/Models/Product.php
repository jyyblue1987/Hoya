<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTime;
use \DateInterval;
use Illuminate\Pagination;

class Product extends Model { 
	protected $table = 'product';
	
	public $timestamps = false;
}
