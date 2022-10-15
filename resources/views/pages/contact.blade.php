@extends('layouts.struct')

@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">

                <div id="wrapper" class="col-md-9">
                    <div id="page">
                        <h1>Contact us</h1>
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form method="post" action="/pages/contact">
                            @csrf

                            <div class="form-group">
                                <label class="control-label" for="">Full Names</label>
                                <input class="form-control" type="text" name="name" id="title">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="">Email</label>
                                <input class="form-control" type="text" name="email" id="exerpt">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="">Phone</label>
                                <input class="form-control" type="text" name="phone" id="exerpt">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Message </label>
                                <textarea name="message" cols="19" rows="6" class="form-control"></textarea>
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
