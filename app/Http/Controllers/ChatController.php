<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatMessage;
use App\User;
use Auth;

class ChatController extends Controller
{
    public function userChatBox($username){
        if(Auth::user()['username']!=$username){
            return \redirect('/');
        }
        return \view('users.chat')->with(compact('username'));
    }

    public function sendMessage(Request $request){
        if ($request->isMethod('post')) {
        $data = $request->all();
        $username = $data['username'];
        $text = $data['text'];
        // echo "<pre>"; print_r($username); die;
        $chatMessage = new ChatMessage();
        $chatMessage->sender_username = $username;
        $chatMessage->message = $text;
        $chatMessage->save();
        }
    }

    public function isTyping(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $username = $data['username'];
            $chat = User::where('username',$username)->first();
            if ($chat->username == $username) {
                User::where('username',$username)->update(['user_is_typing'=>1]);
            }
        }
    }

    public function notTyping(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $username = $data['username'];
            $chat = User::where('username',$username)->first();
            if ($chat->username == $username) {
                User::where('username',$username)->update(['user_is_typing'=>0]);
            }
        }
    }

    public function retrieveChatMessages(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $username = $data['username'];
            $message = ChatMessage::where('sender_username','!=',$username)->where('read',0)->first();
            if ($message) {
                $message->read = 1;
                $message->save();
                return "<strong>".$message->sender_username.": </strong>".$message->message;
            }
        }
    }

    public function retrieveTypingStatus(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $username = $data['username'];
            $chat = User::where('username',$username)->first();
            if ($chat->username == $username) {
                if ($chat->user_is_typing) {
                    return $chat->username;
                }
            }
        }
    }
}
