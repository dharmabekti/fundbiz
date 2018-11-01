@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start main -->
<div class="main_bg">
    @if(session()->has('message'))
        <script type="text/javascript">alert("{{ session()->get('message') }}");</script>
    @endif
    <div class="wrap">
    <div class="main">
        <div class="contact-form">
            <h2 class="style" align="center">Donate Form</h2>
            <!-- Form -->
            <form id="contact-us" method="post" action="{{route('pages.donasi', [$produk->id_produk]) }}" }}">
                {{ csrf_field() }}

                 <h4 class="share-desc">Your Email Address :</h4>
                <input type="text" name="email_penerima" id="email_penerima" required="required" class="form" value="{{ Auth::user()->email}}"  />    

                <h4 class="share-desc">Product Name :</h4>
                <input type="text" name="name" id="name" required="required" class="form" placeholder="{{ $produk->nama_produk }}" readonly />          
                <h4 class="share-desc">Product Price :</h4>
                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="{{ $produk->dana }}" readonly/>
                
                <h4 class="share-desc">Donate :</h4>
                <input type="text" name="amount" id="amount" required="required" class="form" placeholder="Jumlah Donasi" />
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
    
    