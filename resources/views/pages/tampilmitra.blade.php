@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
    <div class="top_main">
        <h2>Daftar Mitra</h2>
        <div class="clear"></div>
    </div>
    
    <!-- start grids_of_3 -->
    
    <div class="grids_of_3">
        @foreach($mitra as $data)
        <div class="grid1_of_3">
            @if($data->avatar)
                <img src="images/uploads/users/{{ $data->avatar }}" alt="{{ $data->avatar }}" width="20%">
            @else
                <img src="images/uploads/default.jpg" alt="{{ $data->avatar }}" width="20%">
            @endif
            <ul class="actions">
                <h3><a href="">{{ $data->name }}</a></h3>
                <li><a href="{{ URL('mitra/destroy') }}/{{ $data->id}}" class="btn" onclick="return confirm('AApakah Ingin Menghapus Mitra?');">Hapus</a></li>
            </ul>
        </div>
        @endforeach
        <div class="clear"></div>
    </div>  
    <div class="clear"></div>
</div>
</div>
</div>