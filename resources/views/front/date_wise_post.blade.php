@extends('front.layouts.master')

@section('content')


<!-- Feature News Section -->

<section id="category_section" class="category_section">
<div class="container">
<div class="row">
<div class="col-md-8">

@foreach($date_wise_data as $row)
<div class="category_section mobile">
    <div class="article_title header_purple">
        <h2><a href="{{route('category.post', $row->id)}}" target="_self">{{$row->name}}</a></h2>
    </div>
    <!----article_title------>
   
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="top_article_img">
                    <a href="single.html" target="_self"><img class="img-responsive" src="{{asset('public/post_photoes/thumb/'.$row->thumb_image)}}" alt="feature-top">
                    </a>
                </div>
                <!----top_article_img------>
            </div>
            <div class="col-md-6">
                <span class="tag purple">{{$row->category->name}}</span>

                <div class="category_article_title">
                    <h2><a href="{{route('details.post',$row->id,)}}" target="_self">{{$row->title}}</a></h2>
                </div>
                <!----category_article_title------>
                <div class="category_article_date"><a href="{{route('date.post', $row->created_at->format('d-m-Y'))}}">{{$row->created_at->format('d/m/Y')}}</a>, by: <a href="{{route('author.post',$row->created_by)}}">{{$row->user->name}}</a></div>
                <!----category_article_date------>
                <div class="category_article_content">
                    {{$row->short_description}}
                </div>
               
            </div>
        </div>
    </div>
    
</div>
@endforeach


</div>
<!-- Left Section -->

<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Viewed</a></h2>
    </div>
    @foreach($mostview as $row)
    <div class="media">
        <div class="media-left">
            <a href="{{route('details.post', $row['id'])}}"><img class="media-object" src="{{asset('public/post_photoes/list/'.$row->list_image)}}" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('details.post', $row['id'])}}" target="_self">{{$row->title}}</a>
            </h3> <a href="{{route('date.post', $row->created_at->format('d-m-Y'))}}">{{$row->created_at->format('d/m/Y')}}</a>,  by: <a href="{{route('author.post',$row->user->id)}}">{{$row->user->name}}</a>

            
        </div>
    </div>
    @endforeach
    
    
</div>


</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
<!-- Category News Section -->



@endsection
<!-- Video News Section -->