<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cache;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function details(){
        return $this->hasOne('App\UsersDetail','user_id');
    }

    public function photos(){
        return $this->hasMany('App\UsersPhoto','user_id');
    }

    public static function datingProfileExists($user_id){
        $datingCount = UsersDetail::select('user_id','status')->where(['user_id'=>$user_id,'status'=>1])->count();
        // echo $datingCount; die;
        return $datingCount;
    }

    public static function datingProfileDetails($user_id){
        $datingProfile = UsersDetail::where('user_id',$user_id)->first();
        // echo $datingProfile; die;
        return $datingProfile;
    }

    public static function getName($user_id){
        $getName = User::select('name')->where('id',$user_id)->first();
        return $getName->name;
    }

    public static function getSurname($user_id){
        $getName = User::select('surname')->where('id',$user_id)->first();
        return $getName->surname;
    }

    public static function getCity($user_id){
        $getCity = UsersDetail::select('city')->where('user_id',$user_id)->first();
        return $getCity->city;
    }

    public static function getUsername($user_id){
        $getUsername = User::select('username')->where('id',$user_id)->first();
        return $getUsername->username;
    }

    public static function getUserId($username){
        $getUserId = User::select('id')->where('username',$username)->first();
        return $getUserId->id;
    }

    public static function isOnline($user_id){
        return Cache::has('user-is-online-'.$user_id);
    }

}
