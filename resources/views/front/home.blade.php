@extends('front.layout.app')


@section('content')

    <div class="our-blog blog-details blog-details-fg">
        <div class="blog-hero-banner" style="background-image: url({{url('uploads/'.$page->featured_image)}});">
            <div class="blog-custom-container">
                <a href="#" class="date" style="color: black">{{$page->created_at->format('d M, Y')}}</a>
                <h2 class="blog-title"  style="color: black">{{$page->name}}</h2>
            </div> <!-- /.blog-custom-container -->
        </div> <!-- /.blog-hero-banner -->
        <div class="blog-fg-data">
            <div class="post-data">
                <div class="blog-custom-container">
                    <div class="custom-container-bg">
                        {!! $content !!}
                    </div> <!-- /.custom-container-bg -->
                </div> <!-- /.blog-custom-container -->


            </div> <!-- /.post-data -->


        </div> <!-- /.blog-fg-data -->
    </div> <!-- /.our-blog -->
@endsection
