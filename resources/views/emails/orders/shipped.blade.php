@component('mail::message')
# Pemberitahuan Donasi

 **Donasi** Anda Mendapat Donasi dari {!! $donator->name !!} sebesar Rp. {!! number_format($data_donator['amount'],0,',','.')!!}
 <br>
 Anda harus mengembalikan pinjaman sebesar Rp. {!! number_format($data_donator['amount'] + (0.05*$data_donator['amount']),0,',','.')!!}

Terima Kasih,  <br>
{{ config('app.name')}}

@endcomponent
