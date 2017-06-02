<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Category extends Model
{
	protected $table = 'item_categories';
	protected $fillable = [
		'ref_id', 'name', 'description'
	];

	public function setNameAttribute($value) {
        $this->attributes['name'] = ucfirst($value);
    }
}
