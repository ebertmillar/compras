<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['producto', 'descripcion', 'precio', 'supermarket_id'];

	public function market(){
		return $this->belongsTo('App\Supermarket','supermarket_id');
	}
    
    
}
