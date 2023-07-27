@extends('layout.app')

@section('title', 'login')
@section('content')
    <div class="row ">
        <div class="col-md-12 ">
            <div class="card col-md-12">
                <div class="card-body">
                    <h1 class="text-center">Login</h1>
                    @if (session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif
                    <form action="{{ url('login') }}" class="form-control" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password address</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
