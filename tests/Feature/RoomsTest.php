<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class RoomsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_rooms_id()
    {
        $response = $this->get('api/room/2');

        $response->assertStatus(200); 
    }

    
    public function test_rooms_create()
    {
        $response = $this->post('api/rooms/create', [
            'number' => 10,
            'square' =>  150,
            'has_pojector' => true,
            'building_id' => 1]);         

            $data = $response->json();
        $response->assertExactJson($data);        
    }

    public function test_status_rooms_create()
    {
        $response = $this->post('api/rooms/create', [
            'number' => 10,
            'square' =>  150,
            'has_pojector' => true,
            'building_id' => 1]);         

            $data = $response->json();
        $response->assertStatus(201);       
    }

    public function test_get_rooms()
    {
        $response = $this->get('api/rooms');         

        $data = $response->json();        
        $response->assertJSON($data);       
    }

    public function test_rooms_create_json_fragment()
    {
        $response = $this->post('api/rooms/create', [
            'number' => 10,
            'square' =>  150,
            'has_pojector' => true,
            'building_id' => 1]);
            
        $response->assertJsonFragment(['number'=>10]);        
    }

    public function test_rooms_delete_status()
    {
        $response = $this->delete('api/rooms/44');
            
        $response->assertStatus(200);        
    }
}