<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingRoom extends Controller
{

    function add(Request $request){
        DB::beginTransaction(); 
        try{
            
            
     
            $customer_id = $request->input('customer_id'); 
            $room_id = $request->input('room_id');
            

          
            $usr = new Bookings; 
            $usr->customer_id = $customer_id; 
            $usr->room_id = $room_id;
          
            $usr->save();


            DB::commit();
          
        }

        catch(\Exception $e){
            DB::rollBack();
            return response()->json(["message" => $e->getMessage()],500);

        }
    }
}
