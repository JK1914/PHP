<?php

namespace App\Http\Controllers;

use App\Exceptions\NotFoundException;
use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'room_id' => 'required|integer|max:255',
            'booked' => 'required|boolean|max:255',
            'user_id' => 'required|integer|max:255',
            'time_start' => 'required|date_format:Y-m-d H:i:s|max:255',            
            'time_end' => 'required|date_format:Y-m-d H:i:s|max:255',            
        ]);        
        $booking = new Booking($validated);        
        $booking->save();
        return $booking;
    } 
    
    public function list()
    {
        $booking = Booking::get();
        return $booking;        
    } 

    public function item($id)
    {
        if (empty($id))
        {
            throw new NotFoundException("Id пустой!");            
        }
        else
        {
            $booking = Booking::where('id', $id)->first();
            return $booking;        
        }     
    } 

    public function update($id, Request $request)
    {
        if (empty($id))
        {
            throw new NotFoundException("Id пустой!");            
        }
        else
        {
            $validated = $request->validate([
                'room_id' => 'required|integer|max:255',
                'booked' => 'required|boolean|max:255',
                'user_id' => 'required|integer|max:255',
                'time_start' => 'required|date_format:Y-m-d H:i:s|max:255',            
                'time_end' => 'required|date_format:Y-m-d H:i:s|max:255',            
            ]);    
            $booking = Booking::find($id)->update($validated);
            return $booking;        
        }  
    } 

    public function delete($id)
    {
        if (empty($id))
        {
            throw new NotFoundException("Id пустой!");            
        }
        else
        {
            $booking = Booking::where('id', $id)->delete();         
        }       
    } 

}
