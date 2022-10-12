@extends('layouts.struct')

@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="about_img mt-3"><img src="/images/img-8.png"></div>
                    <br>
                    <p class="lorem_text">Posted On: {{ $article->created_at }}
                    </p>
                    <h2 class="most_text">{{ $article->title }}</h2>
                    <p class="lorem_text">{{ $article->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
