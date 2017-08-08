<div class="row bg-info" style="margin-bottom: 10px;">
	<h3 class="col-md-4">{{ $product['titulo'] }}</h3>
	<div class="col-md-4 col-md-offset-4">
		<form action="{{ route('details.update',['id'=>$id]) }}" method="post">
			{{ method_field('PUT') }}
			{{ csrf_field() }}
			<label for="">Quantity</label>
			<input type="hidden" name="product_id" value="{{ $product['id'] }}">
			<input type="text" name="quantity" value="{{ $quantity }}">
			<button>Cambiar</button>
		</form>
	</div>
	<div class="row">{{ $product['descripcion'] }}</div>
	<h3 class="col-md-4">{{ $price }} * {{ $quantity }} = {{ $price * $quantity }}</h3>
	<a class="col-md-4 col-md-offset-4" href="{{ route('details.borrar', ['id'=>$id]) }}">Remove product</a>
</div>