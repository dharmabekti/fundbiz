@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="contact-form">
                <h2 class="style" align="center">Peminjaman dari Dontur</h2>
                <hr>
                @foreach($donatur as $data)
                    @if($data->products[0]->user_id == Auth::user()->id)
                    <table width="100%;">
                        <tr>
                            <td>Nama Donatur</td>
                            <td>
                                <input type="text" name="name" class="form" value="{{ $data->users[0]->name }}" readonly="">
                            </td>
                            <td>Email</td>
                            <td>
                                <input type="text" name="name" class="form" value="{{ $data->users[0]->email }}" readonly="">
                            </td>
                            <td>Tanggal</td>
                            <td>
                                <input type="text" name="name" class="form" value="{{ $data->created_at }}" readonly="">
                            </td>
                        </tr>
                        <tr>
                            <td>Produk</td>
                            <td>
                                <input type="text" name="name" class="form" value="{{ $data->products[0]->nama_produk }}" readonly="">
                            </td>
                            <td>Amount</td>
                            <td>
                                <input type="text" name="name" class="form" value="{{ 'Rp ' . number_format($data->amount,0,',','.') }}" readonly="">
                            </td>
                            <td>Pengembalian</td>
                            <td>
                                <input type="text" name="name" class="form" value="{{ 'Rp ' . number_format($data->amount + (0.05 * $data->amount),0,',','.') }}" readonly="">
                            </td>
                        </tr>
                    </table>
                    <hr>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
    
