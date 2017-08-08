@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<div class="panel-heading">Carrito
					<span class="span4 pull-right">
						<a href="{{ route('products.index') }}">Ver más productos</a>
					</span>
				</div>
				<div class="panel-body">
					@foreach($details as $detail)
						@component('details.item', $detail)
							<p>Adicional</p>
						@endcomponent
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection