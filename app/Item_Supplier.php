<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Supplier extends Model
{
	protected $table = 'item_suppliers';
	protected $fillable = [
		'ref_id', 'name', 'email', 'address', 'contact', 'description'
	];

}
