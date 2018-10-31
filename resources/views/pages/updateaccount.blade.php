@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start main -->
    <div class="main_bg">
    <div class="wrap">
    <div class="main">
        <div class="contact-form">
            <h2 class="style" align="center">Form Update Account</h2>
            <!-- Form -->
            <form enctype="multipart/form-data" method="post" action="">
            {{ csrf_field() }}
           
         
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <img src="images/uploads/{{ $user->avatar }}" style=" width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

                <input type="text" name="name" required="required" class="form" placeholder="Nama Profile Pengguna" value="{{$user->name}}"/>          
                <input type="text" name="username" required="required" class="form" placeholder="Username" value="{{$user->username}}" />
                <input type="password" name="password" required="required" class="form" placeholder="Password" value="" />
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <input type="submit" value="Update Data"/> 
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>
        </div><!-- End Contact Form Area -->
    </div>
    </div>
    </div>
    