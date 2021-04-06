<form action="{{ route('in_shopping_carts.store') }}" method="POST" class="add-to-cart">
	@csrf
	<input type="hidden" name="producto_id" value="{{$product->id}}">
	<input type="submit" value="Agregar al carrito" class="btn btn-primary">


</form>