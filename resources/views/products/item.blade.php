<div class="col-md-6">
    <h3>{{ $titulo }}</h3>
    <p>{{ $descripcion }}</p>
    {{ $slot }}
    <a href="{{ route('products.show',['id'=>$id]) }}">Ver más</a>
    <div class="row">
		<form action="{{ route('details.store') }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="product_id" value="{{$id}}">
			<label for="">Quantity</label>
			<input type="text" name="quantity" value="1">
			<button>Agregar</button>
		</form>
    </div>
</div>