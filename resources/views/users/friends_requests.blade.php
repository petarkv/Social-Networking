<?php 
use App\User;
?>
@extends('layouts.frontLayout.front_design')
@section('content')
<style>
.seenResponse{
    font-weight: normal !important;
}
</style>
<div id="right_container">
    <div style="padding:20px 15px 30px 15px;">
        <h1>Friends Requests</h1>
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

            @foreach($friendsRequests as $request)
            <?php
            $sender_name = User::getName($request->user_id);
            $sender_surname = User::getSurname($request->user_id);
            $sender_city = User::getCity($request->user_id);
            $sender_username = User::getUsername($request->user_id);
            ?>
            <tr align="center">                
                <td><a target="_blank" href="{{ url('profile/'.$sender_username) }}">{{ $sender_name }} {{ $sender_surname }}</a></td>
                <td>{{ $sender_city }}</td>                
                <td>{{ $request->created_at }}</td>
                <td>
                    <a href="{{ url('accept-friend-request/'.$request->user_id) }}">
                        <i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i></a>&nbsp;&nbsp;
                    <a href="{{ url('reject-friend-request/'.$request->user_id) }}">
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
    Fiends Requests
@endsection