<!DOCTYPE html>
<html>
<head>
<title>FUNDBIZ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
	<h1>Login Warung Modal</h1>
	<div class="main-agileits">
	<!--form-stars-here-->
		<div class="form-w3-agile">
			@if(session()->has('message'))
				<script type="text/javascript">alert("{{ session()->get('message') }}");</script>
			@endif
	        <form method="POST" action="">
	            {{ csrf_field() }}

	            <div class="form-sub-w3 {{ $errors->has('username') ? ' has-error' : '' }}">
                   	<input id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Username " required autofocus
                   	oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')"
                   	oninput="this.setCustomValidity('')">
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                    <div class="icon-w3">
		                <i class="fa fa-user" aria-hidden="true"></i>
		            </div>
                </div>

                <div class="form-sub-w3 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" placeholder="Password" required 
                    oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')"
                   	oninput="this.setCustomValidity('')">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="icon-w3">
		                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
		            </div>
                </div>
	            
	            <p class="p-bottom-w3ls">Are you new to Warung Modal?<a class="w3_play_icon1" href="{{ route('register') }}">  Register here</a></p>
	            
	            <div class="submit-w3l">
	                <input type="submit" value="Login">
	            </div>
	        </form>
	    </div>
	    <!--//form-ends-here-->
	</div>
</body>
</html>