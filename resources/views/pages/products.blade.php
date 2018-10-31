@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
    <div class="top_main">
        <h2>Produk UMKM</h2>
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
                <!-- <li><a href="{{ URL('/destroy') }}/{{ $produk->id_produk }}" class="" >hapus</a></li>
                <li><a href="{{ URL('/update') }}/{{ $produk->id_produk}}" class="icon ">edit</a></li> -->
            </ul>
        </div>
        @endforeach
        <div class="clear"></div>
    </div>  
    <div class="clear"></div>
    
</div>
</div>
</div>