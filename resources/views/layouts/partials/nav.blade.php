<!-- start header -->
    <div class="top_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="images/logo warung modal.png" alt=""/></a>
            </div>
             <div class="log_reg">
                    <ul>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <span class="log"> or </span>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                             <li class="dropdown">
                                <a href="{{ url('/Detailaccount') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                @if(Auth::user()->avatar)
                                    <img src="{{ asset('images/uploads/users/' . Auth::user()->avatar) }}" style="width:32px; height: 32px; position:absolute; top:1px ;left:10px; border-radius: 50%" >
                                @else
                                    <img src="{{ asset('images/uploads/default.jpg') }}" style="width:32px; height: 32px; position:absolute; top:1px ;left:10px; border-radius: 50%" >
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                   
                           
                        @endif
                        <div class="clear"></div>
                    </ul>
            </div>  
            <div class="web_search">
                <form>
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                    <input type="submit" value=" " />
                </form>
            </div>                      
            <div class="clear"></div>
        </div>  
    </div>
    </div>
    <!-- start header_btm -->
    <div class="wrap">
    <div class="header_btm">
            <div class="menu">
                <ul>
                    @if (Auth::guest())
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/products') }}">Product</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                    @elseif (Auth::user()->role_id == 1)
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/products') }}">Product</a></li>
                        <li><a href="{{ url('/pemilikusaha') }}">Manage Pemilik Usaha</a></li>
                        <li><a href="{{ url('/mitra') }}">Manage Mitra</a></li>
                        <li><a href="{{ url('/Detailaccount') }}">Manage Account</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                    @elseif (Auth::user()->role_id == 2)
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/products') }}">Product</a></li>
                        <li><a href="{{ url('/insert') }}">Manage Products</a></li>
                        <li><a href="{{ url('/umkm/show') }}">Manage UMKM</a></li>
                        <li><a href="{{ url('/Detailaccount') }}">Manage Account</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                    @else
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/products') }}">Product</a></li>
                        <li><a href="{{ url('/Detailaccount') }}">Manage Account</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                    @endif
                    <div class="clear"></div>
                </ul>
            </div>
            <div id="smart_nav">
                <a class="navicon" href="#menu-left"> </a>
            </div>
            
        <div class="header_right">
           
        </div>
        <div class="clear"></div>
    </div>
    </div>
    