<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function create(Request $request)
    {
        $rooms = new Rooms();
        $rooms->number = $request->number;
        $rooms->square = $request->square;
        $rooms->has_pojector = $request->has_pojector;
        $rooms->building_id = $request->building_id;        
        $rooms->save();
    } 
    
    public function list()
    {
        $rooms = Rooms::get();
        return $rooms;        
    } 

    public function item($id)
    {
        $rooms = Rooms::where('id', $id)->first();
        return $rooms;        
    } 

    public function update($id, Request $request)
    {
        $rooms = Rooms::where('id', $id)->first();
        $rooms = new Rooms();
        $rooms->number = $request->number;
        $rooms->square = $request->square;
        $rooms->has_pojector = $request->has_pojector;
        $rooms->building_id = $request->building_id;        
        $rooms->save();
        return $rooms;      
    } 

    public function delete($id)
    {
        $rooms = Rooms::where('id', $id)->delete();        
    } 
}
