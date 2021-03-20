<?php

namespace App\Http\Controllers\Site;

use App\Cart\SessionCart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItem(Request $request)
    {

    }

    public function removeItem(Request $request)
    {

    }

    public function flush(Request $request)
    {

    }

    public function get(Request $request)
    {
        return SessionCart::make()->toArray();
    }
}
