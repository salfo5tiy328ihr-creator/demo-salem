<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        $orders = DB::table('orders')->get();
        $order_items = DB::table('order_items')->get();
        $products = DB::table('products')->get();
        $users = DB::table('users')->get();

        return view('tables.index', compact(
            'categories',
            'orders',
            'order_items',
            'products',
            'users'
        ));
    }
}