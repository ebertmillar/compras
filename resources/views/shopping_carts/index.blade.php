@extends('dash-layouts.app')


@section('container-fluid')

<div class="p-3 mb-2 text-center text-white">
<div class="p-3 mb-2 text-center text-dark">
  <h1>Carrito de compras</h1>
</div>      
<div class="container">
   <div class="table-responsive ">
     <table class="table table-bordered">
       <thead class="bg-gradient-primary text-white">
         <tr>
           <th>Producto</th>
           <th>Precio</th>
           <th>Supermercado</th>
         </tr>
       </thead>
       <tbody class="bg-white">
           @forelse($products as $product)
           <tr>
             <td> {{ $product->producto }}</td>
             <td> {{ $product->precio }} €</td>
           	 <td>{{$product->market->supermarket}}</td>
           </tr>
           @empty
            <tr>
				<td colspan="3" rowspan="1">
					<h4 >No tiene productos en el carrito</h4>
					<a href="{{url('compras/lista')}}" class="btn btn-primary">Agregar Productos <i class="fa fa-list-ul"></i></a>
				</td>
			</tr>
			

           @endforelse
           <tr class="bg-white text-dark bordered-0">
           	<td colspan="2" class="text-left">
           		<h6 class="p-0 m-0"><span class=" pl-2 m-1">
           			Total
	           	</span></h6>
	       </td>
           		

           	<td>{{$total}} €</td>
           </tr>
        </tbody>  
      </table>
      <div class="text-right">
      </div>
    </div>
  </div>

@endsection