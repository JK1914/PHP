<?php

namespace App\Http\Controllers;

use App\Exceptions\NotFoundException;
use Illuminate\Http\Request;
use App\Models\Building;


class BuildingController extends Controller
{
    public function create(Request $request)
    {
        $building = new Building();
        $building->name = $request->name;
        $building->desc = $request->desc;
        $building->lat = $request->lat;
        $building->lon = $request->lon;        
        $building->save();
    } 
    
    public function list()
    {
        $building = Building::get();
        return $building;        
    } 

    public function item($id)
    {
        if (empty($id))
        {
            throw new NotFoundException("Id пустой!");            
        }
        else
        {
            $building = Building::where('id', $id)->with('rooms')->first();
            return $building;        
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
            $building = Building::where('id', $id)->first();
            $building->room_id = $request->room_id;
            $building->booked = $request->booked;
            $building->user_id = $request->user_id;
            $building->time_start = $request->time_start;
            $building->time_end = $request->time_end;
            $building->save();
            return $building;          
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
            $building = Building::where('id', $id)->delete();          
        }     
    } 
}
