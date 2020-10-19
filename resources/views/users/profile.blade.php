<?php
use App\User;
?>
@extends('layouts.frontLayout.front_design')
@section('content')
  <div id="right_container">
        <div style="padding:20px 15px 30px 15px;">
          <h1>{{ $userDetails->name }} {{ $userDetails->surname }}</h1>
          @foreach($userDetails->photos as $key => $photo)
            @if($photo->default_photo == "Yes")
              <?php $user_photo = $userDetails->photos[$key]->photo; ?>
            @else
              <?php $user_photo = $userDetails->photos[0]->photo; ?>
            @endif
          @endforeach
          <div>
            @if(!empty($user_photo))
              <img src="{{ asset('images/frontend_images/photos/'.$user_photo) }}" alt="" width="210" class="aboutus-img" />
            @else
              <img src="{{ asset('images/frontend_images/photos/default.png') }}" alt="" width="210" class="aboutus-img" />
            @endif  
            <strong>Profile ID:</strong> {{ $userDetails->username }}<br>
            <strong>Name:</strong> {{ $userDetails->name }}<br>
            <strong>Surnmae:</strong>{{ $userDetails->surname }}<br>
            <strong>Gender:</strong> {{ $userDetails->details->gender }}<br>
            <strong>Marital Status:</strong> {{ $userDetails->details->marital_status }}<br>
            <strong>Age:</strong> <?php
                      echo $diff = date('Y') - date('Y',strtotime($userDetails->details->dob)); 
                    ?> Yrs.<br>
            <strong>Height:</strong> {{ $userDetails->details->height }}<br>
            <strong>Body Type:</strong> {{ $userDetails->details->body_type }}<br>
            <strong>Complexion:</strong> {{ $userDetails->details->complexion }}<br>
            <strong>Languages:</strong> {{ $userDetails->details->languages }}<br>
            <strong>Hobbies:</strong> {{ $userDetails->details->hobbies }}<br>
            <strong>City:</strong> {{ $userDetails->details->city }}<br>
            {{-- <strong>State:</strong> {{ $userDetails->details->state }}<br> --}}
            <strong>Country:</strong> {{ $userDetails->details->country }}<br>
            <strong style="float:right;">
              <script type="text/javascript">
                  var viewer = new PhotoViewer();
                  @foreach($userDetails->photos as $key => $photo)
                    viewer.add('/images/frontend_images/photos/<?php echo $userDetails->photos[$key]->photo ?>');
                  @endforeach
              </script>
                <a href="javascript:void(viewer.show(0))" style="float: right; margin-top: 60px; margin-right: -220px;">
                  <i class="fa fa-photo" aria-hidden="true" style="color: blue"></i>&nbsp;&nbsp;Photo Album</a>
            </strong><br>
            <strong style="float:right;">
              @if(Auth::check()) 
                @if(Auth::User()->username == $userDetails->username)
                  <a href="{{ url('/step/2') }}" style="color: red; float: right; margin-top: 65px; margin-right: -220px;">
                    <i class="fa fa-pencil" aria-hidden="true" style="color: red"></i>&nbsp;&nbsp;Edit Profile</a>
                @else
                  <a href="{{ url('/contact/'.$userDetails->username) }}" style="color: red; float: right; margin-top: 65px; margin-right: -220px;">
                    <i class="fa fa-comment" aria-hidden="true" style="color: red"></i>&nbsp;&nbsp;Contact Profile</a>  
                @endif
              @else
                  <a href="{{ url('/contact/'.$userDetails->username) }}" style="color: red; float: right; margin-top: 65px; margin-right: -220px;">
                    <i class="fa fa-comment" aria-hidden="true" style="color: red"></i>&nbsp;&nbsp;Contact Profile</a>
              @endif
            </strong><br>
            <strong style="float: right; margin-top: 70px; margin-right: -220px;">
              <?php 
                $isOnline = User::isOnline($userDetails->id); 
                if ($isOnline) {
                  echo "<font color='green'><strong><i class='fa fa-user-o' aria-hidden='true'></i>
                        Online</strong></font>";
                }else {
                  echo "<font color='red'><strong><i class='fa fa-user-o' aria-hidden='true'></i>
                        Offline</strong></font>";
                }
              ?>
            </strong>
            @if(!empty($friendrequest)) 
              @if(Auth::check())
                @if(Auth::User()->username != $userDetails->username)             
                  <strong style="float:right;">
                    @if($friendrequest=="Add Friend")
                      <a href="{{ url('/add-friend/'.$userDetails->username) }}" style="color: green; float: right; 
                          margin-top: 85px;; margin-right: -220px;">
                      <i class="fa fa-user-plus" aria-hidden="true" style="color: green"></i>&nbsp;&nbsp;{{ $friendrequest }}</a>
                    @elseif($friendrequest=="Friends (Unfriend)")
                      <a href="{{ url('/remove-friend/'.$userDetails->username) }}" style="color: green; float: right; 
                        margin-top: 85px;; margin-right: -220px;">
                      <i class="fa fa-minus-circle" aria-hidden="true" style="color: green"></i>&nbsp;&nbsp;{{ $friendrequest }}</a> 
                    @elseif($friendrequest=="Confirm Friend Request")
                      <a href="{{ url('/confirm-friend-request/'.$userDetails->username) }}" style="color: green; float: right; 
                        margin-top: 85px;; margin-right: -220px;">
                      <i class="fa fa-minus-circle" aria-hidden="true" style="color: green"></i>&nbsp;&nbsp;{{ $friendrequest }}</a>               
                    @else
                      <span style="color: green; float: right; margin-top: 85px;; margin-right: -220px;">
                      <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;{{ $friendrequest }}</span>  
                    @endif
                  </strong>
                @endif
                <br />
                <br />
                <div class="clear"></div>                            
              @endif 
              <div class="clear"></div>              
            @else
              <strong style="float: right; margin-top: 90px;; margin-right: -220px;">
                <a href="" onclick="return loginuser();" style="color: green;">Add Friend</a></strong>
            @endif
          </div>
          <div class="clear"></div>
          <div>
            <h6 class="inner">Education & Career</h6>
            <div>
              <strong>Highest Education:</strong> {{ $userDetails->details->hobbies }}<br>
              <strong>Occupation:</strong> {{ $userDetails->details->hobbies }}<br>
              <strong>Income:</strong> {{ $userDetails->details->hobbies }}<br>
            </div>
          </div>
          <div class="clear"></div>
          <div class="aboutcolumnzone">
            <div class="aboutcolumn1">
              <div>
                <h5 class="inner">About Myself</h5>
                <div>{{ $userDetails->details->about_myself }}</div>
              </div>
            </div>
            <div class="aboutcolumn2">
              <div>
                <h5 class="inner">About My Preferred Partner</h5>
                <div>{{ $userDetails->details->about_partner }}</div>
              </div>
            </div>
          </div> 
          <div class="clear"></div>
          <div>
            <h6 class="inner" style="margin-top: 20px;">My Friends</h6>
            <div class="recent_add_prifile">
              @if(count($friendsList)>0)
              <?php $count=1; ?>
              @foreach($friendsList as $user)
                @if(!empty($user->details) && $user->details->status == 1)
                  @if($count<=5)
                    @if(Auth::check())
                      @if(Auth::User()->username != $user->details->username)
                        <div class="profile_box">              
                          @foreach($user->photos as $key => $photo)
                            @if($photo->default_photo == "Yes")
                              <?php $user_photo = $user->photos[$key]->photo; ?>
                            @else
                              <?php $user_photo = $user->photos[0]->photo; ?>
                            @endif
                          @endforeach
                          @if(!empty($user_photo))
                            <span class="photo"><a href="{{ url('profile/'.$user->username) }}">
                              <img src="{{ asset('images/frontend_images/photos/'.$user_photo) }}" alt="" /></a></span>
                          @else
                            <span class="photo"><a href="{{ url('profile/'.$user->username) }}">
                              <img src="{{ asset('images/frontend_images/photos/default.png') }}" alt="" /></a></span>
                          @endif
                          <p class="left">Name:</p>
                          <p class="right">{{ $user->name }}</p>
                          <p class="left">Surname:</p>
                          <p class="right">{{ $user->surname }}</p>
                          <p class="left">Age:</p>
                          <p class="right">
                            <?php
                              $dob = $user->details->dob;
                              echo $diff = date('Y') - date('Y',strtotime($dob));
                            ?> Years
                            </p>             
                          <p class="left">Location:</p>
                          <p class="right">@if(!empty($user->details->city)) {{ $user->details->city }} @endif</p>
                          <p class="left">Interest:</p>
                          <p class="right">Dating</p>
                          <a href="#"><img src="images/frontend_images/more_btn.gif" alt="" class="more_1" /></a> 
                        </div>
                      @endif
                    @else
                      <div class="profile_box">              
                        @foreach($user->photos as $key => $photo)
                          @if($photo->default_photo == "Yes")
                            <?php $user_photo = $user->photos[$key]->photo; ?>
                          @else
                            <?php $user_photo = $user->photos[0]->photo; ?>
                          @endif
                        @endforeach
                        @if(!empty($user_photo))
                          <span class="photo"><a href="{{ url('profile/'.$user->username) }}">
                            <img src="{{ asset('images/frontend_images/photos/'.$user_photo) }}" alt="" /></a></span>
                        @else
                          <span class="photo"><a href="{{ url('profile/'.$user->username) }}">
                            <img src="{{ asset('images/frontend_images/photos/default.png') }}" alt="" /></a></span>
                        @endif
                        <p class="left">Name:</p>
                        <p class="right">{{ $user->name }}</p>
                        <p class="left">Surname:</p>
                        <p class="right">{{ $user->surname }}</p>
                        <p class="left">Age:</p>
                        <p class="right">
                          <?php
                            $dob = $user->details->dob;
                            echo $diff = date('Y') - date('Y',strtotime($dob));
                          ?> Years
                          </p>             
                        <p class="left">Location:</p>
                        <p class="right">@if(!empty($user->details->city)) {{ $user->details->city }} @endif</p>
                        <p class="left">Interest:</p>
                        <p class="right">Dating</p>
                        <a href="#"><img src="images/frontend_images/more_btn.gif" alt="" class="more_1" /></a> 
                      </div>
                    @endif
                    <?php $count = $count+1; ?>
                  @endif
                @endif
              @endforeach
              @else
                <h6>No Friends</h6>
              @endif
            </div>
          </div>        
        </div>
      </div>
@endsection

@section('title')
{{ $userDetails->name }}'s Profile
@endsection

<script>
  function loginuser(){
    alert("Please login to Add Friend");
    window.location = "/add-new-friend/<?php echo $userDetails->username; ?>";
  }
</script>