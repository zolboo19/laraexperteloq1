@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article</div>
                    <div class="card-body">
                        <form action="{{ route('articles.store') }}" method="post">
                            @csrf
                            Author:
                            <select name="user_id" class="form-control">
                                @foreach ($users as $user_id => $name)
                                    <option value="{{$user_id}}">{{$name}}</option>
                                @endforeach
                            </select>
                            <br>
                            Title:
                            <input type="text" name="title" class="form-control">
                            <br/>
                            Article text:
                            <textarea name="article_text" rows="10" class="form-control"></textarea>
                            <br/>
                            <input type="submit" class="btn btn-primary" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

