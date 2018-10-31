@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start main -->
    <div class="main_bg">
    <div class="wrap">
    <div class="main">
        <div class="top_main">
            <a href="{{ url('umkm/update') }}/{{ $umkm->id }}" >Update UMKM</a>
            <div class="clear"></div>
        </div>
        <!-- start grids_of_3 -->
        <div class="grids_of_3">
            <div class="grid1_of_3">
                <img src="images/4.jpg" alt=""/>
                <h3>Foto UMKM</h3>
            </div>

            <div class="grid2_of_3">
                <h3>Nama UMKM : {{ $umkm->nama_umkm }}</h3>
                <h3>Alamat UMKM : {{ $umkm->alamat_umkm }}</h3>
                <h3>Nomor Telepon UMKM : {{ $umkm->nomor_telp }}</h3>
                <h3>Deskripsi UMKM : {{ $umkm->deskripsi_umkm }}</h3>
            </div>
            <div class="clear"></div>
        </div>

        
    </div>
    </div>
    </div>