<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OrderController extends Controller
{
    //
    public function create(){
        // $order = Order::create([
        //     'user_id' => 1,
        //     'amount' => 100
        // ]);
        Artisan::call('make:order',['user_id' => 123, 'amount' => 512]);
        return response()->json(['message' => 'Order created successfully']);
    }
}
