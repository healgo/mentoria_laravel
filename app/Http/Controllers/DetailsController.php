<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailRequest;
use Illuminate\Http\Request;

use App\Product;
use App\Detail;


class DetailsController extends Controller
{

	public function index()
	{
		$details = Detail::with(['product'])->get()->toArray();
		// dd($details);
		return view('details.index',['details'=>$details]);
	}

	public function show($id)
	{
		$detail = Detail::with(['product'])->find($id);
		dd($detail);
	}

	public function edit($id)
	{
		$detail = Detail::with(['product'])->find($id);
		dd($detail);
	}

	public function update(DetailRequest $request, $id)
	{
		$detail = Detail::find($id);
		$detail->quantity = $request->get('quantity');
		$detail->save();
		return redirect()->route('details.index');
	}

	public function borrar($id)
	{
		$detail = Detail::destroy($id);
		return redirect()->route('details.index');
	}

	public function store(DetailRequest $request)
	{
		$request = $request->all();
		$product = Product::with(['detail'])->find($request['product_id']);
		// var_dump($product->detail);
		if($product->detail)
			return redirect()->route('details.index');

		$detail = [];
		$detail['quantity'] = $request['quantity'];
		$detail['product_id'] = $request['product_id'];
		$detail['price'] = $product->price;
		Detail::create($detail);
		return redirect()->route('details.index');
	}


}
