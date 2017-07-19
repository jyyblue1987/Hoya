<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTime;
use \DateInterval;
use Illuminate\Pagination;

class Career extends Model { 
	protected $table = 'hc_career';
	
	public $timestamps = false;
}
