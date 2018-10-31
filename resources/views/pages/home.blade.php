@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

    <!-- start slider -->
    <div class="slider">
        <!---start-image-slider---->
        <div class="image-slider">
             <div class="wrapper">

        <div id="ei-slider" class="ei-slider">
            <ul class="ei-slider-large">
                <li>
                    <img src="images/slider-image1.jpg" alt="image06"/>
                    <div class="ei-title">
                        <h2>Warung Modal <br> </h2><br>
                        <h3 class="btn">Bagikan Produk Usahamu, <br>Dapatkan Modal untuk Usahamu</h3>
                    </div>
                </li>
                <li>
                    <img src="images/slider-image2.jpg" alt="image01" />
                    <div class="ei-title">
                        <h2>Warung Modal <br> </h2><br>
                        <h3 class="btn">Bagikan Produk Usahamu, <br>Dapatkan Modal untuk Usahamu</h3>
                    </div>
                </li>
                <li>
                    <img src="images/slider-image3.jpg" alt="image02" />
                    <div class="ei-title">
                        <h2>Warung Modal <br> </h2><br>
                        <h3 class="btn">Bagikan Produk Usahamu, <br>Dapatkan Modal untuk Usahamu</h3>
                    </div>
                </li>
                <li>
                    <img src="images/slider-image4.jpg" alt="image03"/>
                    <div class="ei-title">
                        <h2>Warung Modal <br> </h2><br>
                        <h3 class="btn">Bagikan Produk Usahamu, <br>Dapatkan Modal untuk Usahamu</h3>
                    </div>
                </li>
                <li>
                    <img src="images/1.jpg" alt="image04"/>
                    <div class="ei-title">
                        <h2>Warung Modal <br> </h2><br>
                        <h3 class="btn">Bagikan Produk Usahamu, <br>Dapatkan Modal untuk Usahamu</h3>
                    </div>
                </li>
                <li>
                    <img src="images/slider-image5.jpg" alt="image05"/>
                    <div class="ei-title">
                         <h2>Warung Modal <br> </h2><br>
                        <h3 class="btn">Bagikan Produk Usahamu, <br>Dapatkan Modal untuk Usahamu</h3>
                       
                    </div>
                </li>
                <li>
                    <img src="images/2.jpg" alt="image07"/>
                    <div class="ei-title">
                        <h2>Warung Modal <br> </h2><br>
                        <h3 class="btn">Bagikan Produk Usahamu, <br>Dapatkan Modal untuk Usahamu</h3>
                       
                    </div>
                </li>
            </ul>

            <!-- ei-slider-large -->
            <ul class="ei-slider-thumbs">
                <li class="ei-slider-element">Current</li>
                <li class="active"><a href="#"><span>UMKM Kerajinan</span></a><img src="images/slider-image1.jpg" alt="thumb01" /></li>
                <li class="hide"><a href="#"><span>UMKM Makanan</span></a><img src="images/slider-image2.jpg" alt="thumb01" /></li>
                <li class="hide"><a href="#"><span>UMKM Kerajinan Tas</span></a><img src="images/slider-image3.jpg" alt="thumb02" /></li>
                <li class="hide"><a href="#"><span>UMKM Sepatu</span></a><img src="images/slider-image4.jpg" alt="thumb03" /></li>
                <li class="hide"><a href="#"><span>UMKM Baju</span></a><img src="images/1.jpg" alt="thumb01" /></li>
                <li class="hide"><a href="#"><span>UMKM Kerajinan Tanah Liat</span></a><img src="images/slider-image5.jpg" alt="thumb01" /></li>
                <li  class="hide"><a href="#"><span>UMKM Kesenian Telenan</span></a><img src="images/2.jpg" alt="thumb02" /></li>
            </ul><!-- ei-slider-thumbs -->
        </div><!-- ei-slider -->
            
            </div><!-- wrapper -->
        </div>
        <!---End-image-slider---->  
    </div>
    <!-- end slider -->


    <!-- start image1_of_3 -->
    <div class="top_bg">
    <div class="wrap">
    <div class="main1">
        <div class="image1_of_3">
            <img src="images/slider-image5.jpg" alt=""/>
            <a href="details.html"><span class="tag">Produk Kerajinan</span></a>
        </div>
        <div class="image1_of_3">
            <img src="images/slider-image2.jpg" alt=""/>
            <a href="details.html"><span class="tag">Produk Makanan</span></a>
        </div>
         <div class="image1_of_3">
            <img src="images/3.jpg" alt=""/>
            <a href="details.html"><span class="tag">Produk Sandang</span></a>
        </div>
       
        <div class="clear"></div>
    </div>
    </div>
    </div>


    <!-- start main -->
    <div class="main_bg">
    <div class="wrap">
    <div class="main">
        <div class="top_main">
            <h2>Produk UMKM</h2>
            <a href="#">show all</a>
            <div class="clear"></div>
        </div>
        
        <!-- start grids_of_3 -->
        
        <div class="grids_of_3">
            @foreach($produks as $produk)
            <div class="grid1_of_3">
                <a href="{{ URL('produk/show') }}/{{ $produk->slug }}" class="image featured"><img src="images/{{ $produk->picture }}" alt="{{ $produk->nama_produk }}"> </a>
                <ul class="actions">
                    <h3><a href="{{ URL('produk/show') }}/{{ $produk->slug }}">{{ $produk->nama_produk }}</a></h3>
                    <span class="price">Baca..</span>
                </ul>
            </div>
            @endforeach
            <div class="clear"></div>
        </div>  
        <div class="clear"></div>
        
    </div>
    </div>
    </div>
    
    <!-- start footer -->
    <div class="footer_top">
    <div class="wrap">
    <div class="footer">
        <!-- start grids_of_3 -->
        <div class="span_of_3">
            <div class="span1_of_3">
                <h3>Cara Donatur memberikan Donasi kepada UMKM</h3>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
            </div>
          

             <div class="span1_of_3">
                <h3>Cara UMKM Menawarkan Produk nya</h3>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
            </div>

            <div class="span1_of_3">
                <h3>Cara UMKM Menawarkan Produk nya</h3>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
            </div>
           
            <div class="clear"></div>
        </div>
    </div>
    </div>
    </div>
    
