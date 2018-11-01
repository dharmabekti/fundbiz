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
                
                <table width="100%;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <tr>
                        <td width="10%">Nama Profil</td>
                        <td>
                            <input type="text" name="name" required="required" class="form" placeholder="Nama Profile Pengguna" value="{{$user->name}}"
                            oninvalid="this.setCustomValidity('Nama Profil Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="username" required="required" class="form" placeholder="Username" value="{{$user->username}}"
                            oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" class="form" placeholder="Password" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email" required="required" class="form" placeholder="Email" value="{{$user->email}}"
                            oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong')" oninput="this.setCustomValidity('')">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                            <input type="file" name="avatar">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            @if($user->avatar)
                            <img src="{{ asset('/images/uploads/users/' . $user->avatar) }}" style=" width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="relative fullwidth col-xs-12">
                                <!-- Send Button -->
                                <input type="submit" value="Update Data"/> 
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- Clear -->
                <div class="clear"></div>
            </form>
        </div><!-- End Contact Form Area -->
    </div>
    </div>
</div>
    