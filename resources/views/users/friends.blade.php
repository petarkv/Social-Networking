<?php 
use App\User;
?>
@extends('layouts.frontLayout.front_design')
@section('content')

<div id="right_container">
    <div style="padding:20px 15px 30px 15px;">
        <h1>Friends</h1>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
        </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif  
        <table id="responses" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Date/Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach($friends as $friend) --}}
            @foreach($friendsList as $friend)
            <?php
            // if(Auth::user()->id!=$friend->user_id){
                // $sender_name = User::getName($friend->user_id);
                // $sender_surname = User::getSurname($friend->user_id);
                // $sender_city = User::getCity($friend->user_id);
                // $sender_username = User::getUsername($friend->user_id);
            // }else{
            //     $sender_name = User::getName($friend->friend_id);
            //     $sender_surname = User::getSurname($friend->friend_id);
            //     $sender_city = User::getCity($friend->friend_id);
            //     $sender_username = User::getUsername($friend->friend_id);
            // } 
            
            
                $sender_name = User::getName($friend->id);
                $sender_surname = User::getSurname($friend->id);
                $sender_city = User::getCity($friend->id);
                $sender_username = User::getUsername($friend->id);
            ?>
            
            <tr align="center">                
                <td><a target="_blank" href="{{ url('profile/'.$sender_username) }}">{{ $sender_name }} {{ $sender_surname }}</a></td>
                <td>{{ $sender_city }}</td>                
                <td>{{ $friend->created_at }}</td> 
                <td> 
                    {{-- @if(Auth::user()->id!=$friend->user_id)                  
                        <a href="{{ url('reject-friend-request/'.$friend->user_id) }}">
                            <i class="fa fa-times-circle" aria-hidden="true" style="color: red;"></i></a>
                    @else
                        <a href="{{ url('reject-friend-request/'.$friend->friend_id) }}">
                            <i class="fa fa-times-circle" aria-hidden="true" style="color: red;"></i></a>
                    @endif --}}

                    <a href="{{ url('reject-friend-request/'.$friend->id) }}">
                        <i class="fa fa-times-circle" aria-hidden="true" style="color: red;"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="clear"></div>
</div>
@endsection

@section('title')
    Fiends
@endsection