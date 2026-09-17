<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function ask(Request $request)
    {
        $message = strtolower($request->input('message'));

        if (str_contains($message, 'how many')) {

            $count = Product::count();

            return response()->json([
                'message' => "There are $count products."
            ]);
        }

        if (str_contains($message, 'laptop')) {

            $product = Product::where('name', 'Laptop')->first();

            return response()->json([
                'message' => $product
            ]);
        }

        if (str_contains($message, 'product')) {

            $products = Product::all();

            return response()->json([
                'message' => $products
            ]);
        }

        return response()->json([
            'message' => 'I do not understand your question.'
        ]);
    }
}