<?php

namespace App\Http\Controllers;

use App\Exceptions\NotFoundException;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|max:255',
            'square' => 'required|max:255',
            'has_pojector' => 'required|boolean|max:255',
            'building_id' => 'required|max:255',            
        ]);         
        $rooms = new Room($validated); 
        $rooms->save();        
        return response()->json($rooms, 201);   
    } 
    
    public function list()
    {
        $rooms = Room::get();
        return $rooms;        
    } 

    public function item($id)
    {
        if (!is_numeric($id))
        {
            throw new NotFoundException("Id пустой!");            
        }
        else
        {
            $rooms = Room::where('id', $id)->with('building')->first();
            return $rooms;  
        }             
    } 

    public function update($id, Request $request)
    {
        if (!is_numeric($id))
        {
            throw new NotFoundException("Id пустой!");            
        }
        else
        {
            $validated = $request->validate([
                'number' => 'required|max:255',
                'square' => 'required|max:255',
                'has_pojector' => 'required|boolean|max:255',
                'building_id' => 'required|max:255',            
            ]);        
            $rooms = Room::find($id)->update($validated);
            return $rooms; 
        }           
    } 

    public function delete($id)
    {
        if (!is_numeric($id))
        {
            throw new NotFoundException("Id пустой!");            
        }
        else
        {
            $rooms = Room::where('id', $id)->delete();  
            return `Комната с ${id} удалена!`;
        }                
    } 

}
