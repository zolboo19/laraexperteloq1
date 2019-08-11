@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User</div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            Name:
                            <input type="text" name="name" class="form-control">
                            <br/>
                            Email:
                            <input type="email" name="email" class="form-control">
                            <br/>
                            Password:
                            <input type="password" name="password" class="form-control">
                            <br/>
                            <input type="submit" class="btn btn-primary" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

