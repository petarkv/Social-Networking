<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;

class Friend extends Model
{    
    public static function newRequestsCount(){
        $friend_id = Auth::user()->id;
        $newRequestsCount = Friend::where(['friend_id'=>$friend_id,'accept'=>0])->count();
        return $newRequestsCount;	
    }  
 
    // public static function newFriendsCount(){        
    //     $user_id = Auth::user()->id;
    //     $username = User::getUsername($user_id);
    //     $friend_id = User::getUserId($username);
    //     $newFriendsCount = Friend::where(['friend_id'=>$user_id,'friend_id'=>$user_id,'accept'=>1])->count();
    //     return $newFriendsCount;	
    // } 
}
