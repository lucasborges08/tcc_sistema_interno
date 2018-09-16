<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Event;

class OrderController extends Controller
{
    public function update(Request $request){    	
    	try{
	    	$order = Order::where('id', $request->order_id)->first();
	        $event = new Event;
	        $event->description = $request->description;
	        $event->order_id = $request->order_id;
	        $event->save();


	        return 'ok';    	

    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }
}
