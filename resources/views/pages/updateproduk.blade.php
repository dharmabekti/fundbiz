<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Warung Modal</title>


    <link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/form-register.css">
    <link rel="stylesheet" href="css/form-login.css">
    <link rel="stylesheet" href="css/form-basic.css">
  <link href="{{ asset('img/logo4.png') }}" rel="icon" type="img/png">


            <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  


     

    <!-- Styles -->

    
</head>
<body>
    
      



<section id="contact">
            <div class="section-content">
                <h1 class="section-header">Silahkan Masukkan <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Produk UMKM Anda</span></h1>
               
            </div>
            <div class="contact-section">
            <div class="container">

                <form action="{{route('pages.update', [$produks->id_produk]) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Nama Produk</label>

                            <input type="text" class="form-control" 
                             name="nama_produk" id="nama_produk" value="{{$produks->nama_produk}}" placeholder=" Masukan Nama Produk">
                        </div>
                        <div class="form-group">
    <label for="exampleInputEmail">Dana yang Dibutuhkan</label>
                            <input type="text" class="form-control" name="dana" id="dana" value="{{$produks->dana}}" placeholder=" Masukkan Dana Yang Dibutuhkan Produk">
                        </div>  
                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> Deskripsi Produk</label>
                            <textarea  class="form-control" id="description" name="deskripsi_produk"placeholder="Masukkan Deskripsi Produk"> {{$produks->deskripsi_produk}} </textarea>
                        </div>
                        <div>

                            <div class="uploadWrapper">
  <label>
                                             <input type="file" id="picture" name="picture" file="{{$produks->picture}}" >
                                        </label>

                            </div>
 
    <div class ="form-group">
                            <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan </button>
                        </div>

                        </div>
                        
                    </div>
                </form>
            </div>
        </section>
   


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/upload.js"></script>

   <script src="js/sweetalert.min.js"></script>
   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
     <script src="{{ asset('js/main.js') }}"></script>


</body>
</html>
