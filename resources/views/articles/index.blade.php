@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article list</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Article text</th>
                            </tr>
                            @foreach($articles as $article)
                            <tr>
                                <td>{{$article->title}}</td>
                                <td>{{$article->article_text}}</td>
                            </tr>
                            @endforeach
                        </table>
                        {{-- {{$articles->links()}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection