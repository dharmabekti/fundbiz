<!DOCTYPE html>
<html>
<head>
<title>Warung Modal</title>
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
    <h1>Register Warung Modal</h1>
    <div class="main-agileits">
    <!--form-stars-here-->
        <div class="form-w3-agile">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-sub-w3 {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Fullname" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-sub-w3 {{ $errors->has('username') ? ' has-error' : '' }}">
                    <input id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Username " required autofocus>
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
                    <input id="password" type="password" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-sub-w3">
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-sub-w3 {{ $errors->has('role_id') ? ' has-error' : '' }}">
                    <select id="role_id" name="role_id" placeholder="Role">
                        <option value="" disabled selected>Choose Role...</option>
                        <option value="2">Pemilik Usaha</option>
                        <option value="3">Donatur</option>
                    </select>
                </div>
            
            <label class="select_expandLabel" for="awesomeness-opener"></label>
        </li>
    </ul>

                <p class="p-bottom-w3ls">Are you already have account?<a class="w3_play_icon1" href="{{ url('/login') }}">  Log In here</a></p>
                
                <div class="submit-w3l">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
        <!--//form-ends-here-->
    </div>
</body>
</html>