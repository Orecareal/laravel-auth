@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-5 col-lg-5 mx-auto">
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                            placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control" 
                                placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    <br>
                    <div class="text-center">
                        <a class="text-decoration-none" href="">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="text-decoration-none" href="{{ route('login')}}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
