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
         <!-- <tr>
           <th>Producto</th>
           <th>Precio</th>
           <th>Supermercado</th>
           <th>id pivot</th>
         </tr> -->
         <tr>
           <th>Producto</th>
           <th>Precio</th>
           <th>Supermercado</th>
         </tr>
       </thead>
       <tbody class="bg-white">
           @forelse($carrito as $product)
           <tr>
             <td>{{ $product->productsList->producto}}</td>
             <td>{{ number_format($product->productsList->precio,2)}} €</td>
             <td>{{ $product->productsList->market->supermarket}}</td>
             <td>@include('shopping_carts.delete')</td>
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
           	<td colspan="1" class="text-center bg-primary">
           		<h6 class="p-0 m-0"><span class=" pl-2 m-1 text-white">
           			TOTAL
	           	</span></h6>
  	       </td>
           	<td class="bg-primary text-white"><strong> {{number_format($total,2)}} € </strong></td>
           </tr>
        </tbody>  
      </table>
      @if($total > 0)
      <div class="text-right">
        @include('shopping_carts.form')
      </div>
      @endif
    </div>
  </div>
</div>
@endsection

@section('scripts')
 <script type="text/javascript">
   (function(){

     $.('.form-prevent-multiple-submits').on('submit', function(){
        $.('.button-prevent-multiple-submits').atrr('disabled', 'true');
     });
   })();
 </script>
@endsection