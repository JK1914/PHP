<?php

namespace App\Http\Controllers;

use App\Exceptions\NotFoundException;
use Illuminate\Http\Request;
use App\Models\Building;


class BuildingController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string|max:255',
            'lat' => 'required|numeric|max:255',
            'lon' => 'required|numeric|max:255',
        ]);        
        $building = new Building($validated);         
        $building->save();
        return $building;
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
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'desc' => 'required|string|max:255',
                'lat' => 'required|numeric|max:255',
                'lon' => 'required|numeric|max:255',
            ]);        
            $building = Building::find($id)->update($validated);            
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
