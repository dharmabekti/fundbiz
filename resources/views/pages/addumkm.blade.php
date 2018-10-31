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
            <form id="contact-us" method="post" action="#">
                <input type="text" name="name" id="name" required="required" class="form" placeholder="Nama Umkm" />          
                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Alamat Umkm" />
                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Nomor Telp" />
                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Nomor Rekening" />
                <textarea name="message" id="message" class="form textarea"  placeholder="Deskripsi"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class="relative fullwidth col-xs-12">
                    <!-- Send Button -->
                    <input type="submit" value="Save Data"/> 
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>
        </div><!-- End Contact Form Area -->
    </div>
    </div>
    </div>
    
    