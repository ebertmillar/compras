<?php

namespace App;

use App\ShoppingCart;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
	protected $fillable = ['estado'];


    public function inShoppingCart(){
        return $this->hsMany('App\inShoppingCart');
    }

    public function products(){
        return $this->belongsToMany('App\Product', 'in_shopping_carts');
    }

    public function total(){
        return $this->products()->sum('precio');
    }

    public function productsQuantity(){
        return $this->products()->count();
    }


    public static function findOrCreateBySessionId($shopping_cart_id){

        if($shopping_cart_id){
            return ShoppingCart::findBySession($shopping_cart_id);

        }else{
            //crear un carrito de compras
            return ShoppingCart::createWithoutSession();
        }
    
    }

    public static function findBySession($shopping_cart_id){
        return ShoppingCart::findOrFail($shopping_cart_id);
        }

    public static function createWithoutSession(){
        return ShoppingCart::create([
        'estado' => 'incompleto'

        ]);
    }


}
