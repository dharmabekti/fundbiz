@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start main -->
    <div class="main_bg">
    <div class="wrap">
    <div class="main">
        <div class="top_main">
            <a href="{{ url('user/update') }}/{{ Auth::user()->id }}" >Update Account</a>
            <div class="clear"></div>
        </div>  
       <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <img src="images/uploads/{{ Auth::user()->photo }}" style=" width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
           
            </div>
        </div>
    </div>

        <div class="grids_of_3">
            <div class="grid2_of_3"> 
                <h3>Nama : {{ Auth::user()->name }}</h3>
                <h3>Username : {{ Auth::user()->username }}</h3>
                <h3>Email : {{ Auth::user()->email }}</h3>
            </div>
            <div class="clear"></div>
        </div>

        
    </div>
    </div>
    </div>