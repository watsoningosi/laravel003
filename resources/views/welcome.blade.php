@extends('layouts.struct')

@section('content')
    <div class="col-md-12">
        <div class="container">
            <div class="row">

                <div class="card-title">
                    <center>
                        <h1 class="mt-3"> Articles Manager</h1>
                    </center>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <colgroup>
                                <col width="2%">
                                <col width="12%">
                                <col width="15%">
                                <col width="30%">
                                <col width="10%">
                                <col width="4%">
                            </colgroup>
                            <thead>

                                <td>#</td>
                                <td>Title</td>
                                <td>Exerpt</td>
                                <td>Body</td>
                                <td>Created at</td>
                                <td>Actions</td>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>{{ $article->id }}</td>
                                        <td> {{ $article->title }}</td>
                                        <td>{{ $article->exerpt }}</td>
                                        <td>{{ $article->body }}</td>
                                        <td>{{ $article->created_at }}</td>
                                        <td>
                                            <form action="{{ url('welcome', [$article->id]) }}" method="Post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
