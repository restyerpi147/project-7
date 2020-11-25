<?php 

namespace App\Models;

/**
 * 
 */
class Makanan extends Model
{
	
	protected $table = 'makanan';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
	
}