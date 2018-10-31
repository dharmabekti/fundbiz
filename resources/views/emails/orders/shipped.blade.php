@component('mail::message')
# Pemberitahuan Donasi

 **Donasi** Anda berhasil Dikirim


@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
Kunjungi Web
@endcomponent

Thanks,  <br>
{{ config('app.name')}}

@endcomponent
