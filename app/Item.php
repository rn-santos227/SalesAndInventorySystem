<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'items';
	protected $fillable = [
		'name', 'item_code', 'item_category_id', 'item_supplier_id', 'description', 'quantity', 'price'
	];

   	public function item_category()
    {
        return $this->belongsTo('App\Item_Category');
    }

    public function item_supplier()
    {
        return $this->belongsTo('App\Item_Supplier');
    }

}
