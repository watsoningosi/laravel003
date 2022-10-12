@extends('layouts.struct')

@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">

                <div id="wrapper" class="col-md-9">
                    <div id="page">
                        <h1>New Article </h1>

                        <form method="post" action="/pages/create_article">
                            @csrf

                            <div class="form-group">
                                <label class="control-label" for="">Title</label>
                                <input class="form-control" type="text" name="title" id="title">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="">Excerpt</label>
                                <input class="form-control" type="text" name="exerpt" id="exerpt">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Body </label>
                                <textarea name="body" cols="19" rows="6" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
