@extends('dash-layouts.app')

@section('container-fluid')
<div class="container h-75">
	<div class="table-responsive-sm ">
	  <table class="table">
	    <thead class="bg-primary text-white">
	    	<tr>
	    		<th>id</th>
	    		<th>producto</th>
	    		<th>precio</th>
	    		<th>Supermercado</th>
	    	</tr>
	    </thead>
	    <tbody class="bg-white">
	    	@foreach($products as $product)
	    	<tr>
	    		<td>{{$product->id}}</td>
	    		<td>{{$product->producto}}</td>
	    		<td>{{$product->precio}}</td>
	    		<td>{{$product->market->supermarket}}</td>
	    	</tr>
	    	@endforeach
	    </tbody>
	  </table>
	</div>
</div>


@endsection