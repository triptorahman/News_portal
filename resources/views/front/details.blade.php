@extends('front.layouts.master')

@section('content')

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive top_static_article_img" src="{{asset('public/post_photoes/main/'.$post->main_image)}}"
                             alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">{{$post->category->name}}</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{{route('details.post',$post->id,)}}" target="_self">{{$post->title}}</a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">{{$post->user->name}}</a>,<a href="#" target="_self">{{$post->created_at->format('d/m/Y')}}</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            {{$post->short_description}}
                        </div>
                        <!-- feature_article_content -->

                        
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                
                <!-- feature_article_wrapper -->

            </div>
            <!-- col-md-7 -->

            <div class="col-md-5">
                <div class="feature_static_wrapper">
                    <h3>Details:</h3>
                    <div>{!!$post->description!!}</div>
                    
                    

                </div>
                <!-- feature_static_wrapper -->

            </div>

            <!-- col-md-5 -->

            
            

        </div>
        <!-- Row -->

    </div>
    <!-- container -->

</section>

@endsection
<!-- Video News Section -->