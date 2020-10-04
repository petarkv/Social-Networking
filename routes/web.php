<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#FRONT ROUTES
#INDEX PAGE
Route::get('/','IndexController@index');
#USER REGISTER
Route::any('/register','UsersController@register');


Route::group(['middleware'=>['frontlogin']],function(){

    #LOGIN USER STEP 2
    Route::any('/step/2','UsersController@step2');
    Route::any('/step/3','UsersController@step3');

    #DELETE PHOTO
    Route::get('/delete-photo/{photo}','UsersController@deletePhoto');
    #DEFAULT PHOTO
    Route::get('/default-photo/{photo}','UsersController@defaultPhoto');
    #REVIEW
    Route::get('/review','UsersController@review');
    #RESPONSES
    Route::get('/responses','UsersController@responses');
    #FRIENDS REQUESTS
    Route::get('/friends-requests','UsersController@friendsRequests');
    #FRIENDS
    Route::get('/friends','UsersController@friends');
    #ACCEPT FRIEND REQUEST
    Route::get('/accept-friend-request/{id}','UsersController@acceptFriendRequest');
    #CONFIRM FRIEND REQUEST
    Route::match(['get','post'],'/confirm-friend-request/{username}','UsersController@confirmFriendRequest');
    #REJECT FRIEND REQUEST
    Route::get('/reject-friend-request/{id}','UsersController@rejectFriendRequest');
    #UPDATE RESPONSE
    Route::post('/update-response','UsersController@updateResponse');
    #DELETE RESPONSE
    Route::get('/delete-response/{id}','UsersController@deleteResponse');
    #SENT MESSAGES
    Route::get('/sent-messages','UsersController@sentMessages');
    #CONTACT
    Route::match(['get','post'],'/contact/{username}','UsersController@contactProfile');
    #ADD FRIEND
    Route::match(['get','post'],'/add-friend/{username}','UsersController@addFriend');
    #REMOVE FRIEND
    Route::match(['get','post'],'/remove-friend/{username}','UsersController@removeFriend');
    
});



#LOGIN USER
Route::any('/login','UsersController@login');

#LOGOUT USER
Route::get('/logout','UsersController@logout');
#CHECK USER EMAIL
Route::any('/check-email','UsersController@checkEmail');

#CHECK USERNAME
Route::any('/check-username','UsersController@checkUsername');

#LOGIN ADMIN
Route::get('/admin', 'AdminController@getLogin');
Route::post('/admin', 'AdminController@postLogin');

#LOGOUT ADMIN
Route::get('/admin/logout', 'AdminController@logout');

#PROFILE SEARCH
Route::any('/profile/search','UsersController@searchProfile');
#VIEW USER PROFILE
Route::get('/profile/{username}','UsersController@viewProfile');


#MIDDLEWARE LOGIN ADMIN PROTECTION
Route::group(['middleware' => ['adminlogin']], function(){
    #DASHBOARD
    Route::get('/admin/dashboard', 'AdminController@getDashboard');
    #SETTINGS PAGE
    Route::get('/admin/settings', 'AdminController@getSettings');
    #CHECKING CURRENT PASSWORD
    Route::get('/admin/check-pwd', 'AdminController@checkPassword');
    #UPDATE PASSWORD
    Route::get('/admin/update-pwd', 'AdminController@updatePassword');
    Route::post('/admin/update-pwd', 'AdminController@updatePassword');

    #VIEW USERS
    Route::get('/admin/view-users','UsersController@viewUsers');
    #UPDATE USER STATUS
    Route::post('/admin/update-user-status','UsersController@updateUserStatus');
    #UPDATE USERS PHOTO STATUS
    Route::post('/admin/update-photo-status','UsersController@updatePhotoStatus');
});
