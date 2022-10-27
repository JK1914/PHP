<?

namespace App\Services;
use App\Models\Room;

class RoomsService{

    public function create($data)
    {              
        $rooms = new Room($data); 
        $rooms->save();        
        return $rooms;   
    } 

    public function list($data)
    {
        $rooms = Room::query();
        // if(){
        //     $rooms->wheer('square', '>' , 1)->orderBy('id', 'DESC');
        // }
        $rooms->paginate(15);
        return $rooms;
    }
}


