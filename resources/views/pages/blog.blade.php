@extends('layouts.struct')

@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">


                <div class="col-lg-8 col-sm-12 mt-3">
                    @foreach ($article as $article)
                        <div class="about_img"><img src="/images/img-8.png"></div>

                        <p class="lorem_text">Posted On: {{ $article->created_at }}
                        </p>
                        <h2 class="most_text"><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h2>
                        <p class="lorem_text">{{ $article->exerpt }}</p>

                        <div class="social_icon_main mt-5 mb-3">

                            <div class="btn btn-info"><a href="/article/{{ $article->id }}">Read More</a></div>
                        </div>
                    @endforeach
                </div>


                <div class="col-lg-4 col-sm-12">
                    <div class="newsletter_main">
                        <h1 class="recent_taital">Recent post</h1>
                        <div class="recent_box">
                            @foreach ($articles as $article)
                                <div class="recent_left">
                                    <div class="image_6"><img src="/images/img-7.png"></div>
                                </div>
                                <div class="recent_right">
                                    <h3 class="consectetur_text">
                                        <a href="/article/{{ $article->id }}">{{ $article->title }}</a>
                                    </h3>
                                    <p class="dolor_text">{{ $article->exerpt }} </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
