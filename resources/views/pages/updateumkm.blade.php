@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start main -->
    <div class="main_bg">
    <div class="wrap">
    <div class="main">
        <div class="contact-form">
            <h2 class="style" align="center">FORM Usaha Kelompok Menengah Kecil</h2>
            <!-- Form -->
            <form id="contact-us" method="post" action="">
            {{ csrf_field() }}
                <input type="text" name="name" required="required" class="form" placeholder="Nama Umkm" value="{{$umkm->nama_umkm}}"/>          
                <input type="text" name="address" required="required" class="form" placeholder="Alamat Umkm" value="{{$umkm->alamat_umkm}}" />
                <input type="text" name="telp" required="required" class="form" placeholder="Nomor Telp" value="{{$umkm->nomor_telp}}"/>
                <input type="text" name="rekening" required="required" class="form" placeholder="Nomor Rekening" value="{{$umkm->nomor_rekening}}"/>
                <textarea name="description" class="form textarea"  placeholder="Deskripsi"> {{$umkm->deskripsi_umkm}}</textarea>
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
    
    