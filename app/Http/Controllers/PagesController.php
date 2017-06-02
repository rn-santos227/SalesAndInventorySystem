<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index() {
      return view('home');
    }

    public function inventory() {
      return view('inventory.inventory');
    }

    public function list() {
      return view('inventory.items');
    }
}
