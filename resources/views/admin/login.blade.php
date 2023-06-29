@extends('layouts.admin_app')
@section('title')
    Admin | Login
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                @if (session('error'))
                    <div class="alert alert-danger">
                        <span>{{ session('error') }}</span>
                    </div>
                @endif
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                @endif
                <div class="card card-body border-0 shadow-lg p-4">
                    <h4 class="text-center mb-4">Admin | Login</h4>
                    <form action="{{ route('admin') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="login">Login</label>
                            <input type="text" id="login" name="login"  class="form-control mt-2" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="login">Parol</label>
                            <input type="password" id="password" name="password" class="form-control mt-2" />
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-success mt-2 w-100" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection