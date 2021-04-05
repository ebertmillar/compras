<?php

namespace App;

use App\ShoppingCart;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
	protected $fillable = ['estado'];

    public function productsQuantity(){
        return $this->id;
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
