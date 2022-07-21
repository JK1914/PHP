<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    public function lesson(Request $request)
    {
        dump($request->name);
        return 'Hello browser';
    }

    #region User
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

    }    

    public function list()
    {
        $user=User::get();
        return $user;
    }    

    public function item($id)
    {
        //$user=User::where('id', $id)->first();

        $user=User::where('id', $id)->with('userInfo')->first();
        return $user;
    }
    #endregion

    #region UserInfo
    public function createUserInfo(Request $request)
    {
        $user = new UserInfo();        
        $user->full_name = $request->full_name;
        $user->info = $request->info;        
        $user->user_id = $request->user_id;
        $user->save();
    }

    public function listUserInfo()
    {
        $user=UserInfo::get();
        return $user;
    }

    public function itemUserInfo($id)
    {
        $user=UserInfo::where('id', $id)->first();
        return $user;        
    }

    public function deleteUserInfo($id)
    {
        $user=UserInfo::where('id', $id)->delete();
        return $user;        
    }
    #endregion


    public function lesson1(Request $request)
    {
        //$user = User::where('id', 1)->first();
        //$user->email = 'test@mail.com';
        //$user->save();
        
        $user_with_info = User::with('userInfo')->get();

        DB::query("update set 'email' = 'test' from user id = 1" );
        DB::query("select * from t1 join t2 on t1.id = t2.id" );


        return 'Hello browser';
    }

    public function calculator()
    {
        return view('index');
    }

    //
}
