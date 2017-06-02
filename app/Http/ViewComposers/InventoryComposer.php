<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class InventoryComposer {
	public function create(View $view) {		
      $item_categories = DB::table('item_categories')->where('active', 1)->get();
      $item_suppliers = DB::table('item_suppliers')->where('active', 1)->get();

      $view->with('item_categories', $item_categories);
      $view->with('item_suppliers', $item_suppliers);
	}
}