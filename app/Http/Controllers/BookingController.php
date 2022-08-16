<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function create(Request $request)
    {
        $booking = new Booking();
        $booking->room_id = $request->room_id;
        $booking->booked = $request->booked;
        $booking->user_id = $request->user_id;
        $booking->time_start = $request->time_start;
        $booking->time_end = $request->time_end;
        $booking->save();
    } 
    
    public function list()
    {
        $booking = Booking::get();
        return $booking;        
    } 

    public function item($id)
    {
        $booking = Booking::where('id', $id)->first();
        return $booking;        
    } 

    public function update($id, Request $request)
    {
        $booking = Building::where('id', $id)->first();
        $booking->room_id = $request->room_id;
        $booking->booked = $request->booked;
        $booking->user_id = $request->user_id;
        $booking->time_start = $request->time_start;
        $booking->time_end = $request->time_end;
        $booking->save();
        return $booking;      
    } 

    public function delete($id)
    {
        $booking = Booking::where('id', $id)->delete();          
    } 

}
