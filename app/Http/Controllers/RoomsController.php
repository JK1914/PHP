<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function create(Request $request)
    {
        $rooms = new Room();
        $rooms->number = $request->number;
        $rooms->square = $request->square;
        $rooms->has_pojector = $request->has_pojector;
        $rooms->building_id = $request->building_id;        
        $rooms->save();
    } 
    
    public function list()
    {
        $rooms = Room::get();
        return $rooms;        
    } 

    public function item($id)
    {
        $rooms = Room::where('id', $id)->first();
        return $rooms;        
    } 

    public function update($id, Request $request)
    {
        if (empty($id))
        {
            throw new CustomException("Id пустой!");            
        }
        else
        {
            $rooms = Room::where('id', $id)->first();
            $rooms = new Room();
            $rooms->number = $request->number;
            $rooms->square = $request->square;
            $rooms->has_pojector = $request->has_pojector;
            $rooms->building_id = $request->building_id;        
            $rooms->save();
            return $rooms; 
        }           
    } 

    public function delete($id)
    {
        $rooms = Room::where('id', $id)->delete();        
    } 
}
