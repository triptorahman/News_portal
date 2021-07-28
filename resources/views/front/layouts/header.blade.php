<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                                            <span class="date">
                                                {{date('D')}},
                                            </span>
                        <!-- Date -->
                                            <span class="time">
                                                {{date('d-M-Y')}}
                                            </span>
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic" href="https://www.facebook.com/triptorahman47"><i class="fa fa-facebook"></i></a>
                            <!--Facebook-->
                            <a class="icons-sm tw-ic" href="https://www.linkedin.com/in/md-samiur-rahman-08251a139"><i class="fa fa-linkedin"></i></a>
                            <!--LinkedIn +-->
                            <a class="icons-sm inst-ic" href="https://github.com/triptorahman/"><i class="fa fa-github"></i></a>
                            <a class="icons-sm inst-ic" href="https://join.skype.com/invite/bSWr86vdNjkP"><i class="fa fa-skype"></i></a>
                            <!--Github-->
                            
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('public/front/img/logo.png')}}" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            
                        </ul>
                        
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
                            <li class="active"><a href="{{route('home.index')}}">Home</a></li> 
                            @foreach ($categories as $element)
                               <li><a href="{{route('category.post', $element->id)}}">{{ $element->name }}</a></li> 
                            @endforeach
                            
                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Authors
                                <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">
                                                @foreach ($authors as $element)
                                                    <li><a href="{{route('author.post',$element->id)}}">{{$element->name}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>