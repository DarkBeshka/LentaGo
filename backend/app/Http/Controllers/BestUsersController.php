<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BestUsersController extends Controller
{
    public function best_users(){
        $users=User::all();
        return view('best_users', compact('users'));
    }
    public function create(){
        $usersArr=[
            [
                'name'=> 'Юзер Сделанный',
                'vk_id'=>'madewithphp2',
                'telegram'=>'@madewithphp',
                'profile_photo'=>'defaultpicture.jpg',
                'password'=>'123456',
                'sch_time'=>'4',
                //'remember_token'=>'wha?',
            ],
            [
                'name'=> 'Юзер Второй',
                'vk_id'=>'madewithphp4U',
                'telegram'=>'@madewithphp4U',
                'profile_photo'=>'defaultpicture2.jpg',
                'password'=>'123654',
                'sch_time'=>'5',
                //'remember_token'=>'whaaa?',
            ],
        ];

        foreach ($usersArr as $newuser){
            User::create($newuser);
        }

        dd('created');
    }
    public function update(){
        $user=User::find(1);

        $user->update([
            'name'=>'Юзер Обновленный',
            'sch_time'=>10,
        ]);

        dd('updated');
    }
    public function delete()
    {
        //$user=User::find(2);
        //$user->delete();
        //dd('deleted');

        $olduser=User::withTrashed()->find(2);
        $olduser->restore();

    }
    //firstOrCreate, updateOrCreate
}
