<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
	protected $fillable = [
		'product_id',
		'quantity',
		'price'
	];

	public function product()
	{
		return $this->belongsTo('App\Product', 'product_id');
	}
}
