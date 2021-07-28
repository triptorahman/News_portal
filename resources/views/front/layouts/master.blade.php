<!DOCTYPE html>
<html>
<head>
    @include('front.layouts.top')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
@include('front.layouts.header')
<!-- header_section_wrapper -->

@yield('content')



<!-- Subscriber Section -->

@include('front.layouts.footer')
</div>
<!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li class="active"><a href="{{route('home.index')}}">Home</a></li> 
            @foreach ($categories as $element)
               <li><a href="{{route('category.post', $element->id)}}">{{ $element->name }}</a></li> 
            @endforeach
                 
                <li style="font-weight: bold !important; font-size: 18px !important;">Authors <i class="fa fa-angle-down"></i></li> 

            @foreach ($authors as $element)
                <li><a href="{{route('author.post',$element->id)}}">{{$element->name}}</a></li>
            @endforeach
                
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->

<!-- jquery Core-->
@include('front.layouts.bottom')
</body>
</html>