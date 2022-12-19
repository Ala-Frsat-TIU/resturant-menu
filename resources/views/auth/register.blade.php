@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container py-5 h-150">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h2 class="mb-5">Register</h2>
                        <h3 class="mb-5">Tishik Resturant Menu</h3>
                        <div class="mb-5 col-md-offset-4">
                            <img src=" https://images.freeimages.com/clg/istock/previews/9183/91834959-menu-vector-logo-restaurant-cafe-cook-chef-icon.jpg" style="width:200px; height:200px" />

                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-outline mb-4">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus placeholder="Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>




                            <div class="row mb-">

                                <div class="form-outline mb-4">

                                    <button class="btn btn-primary btn-lg btn-block active btn-lg" type="submit">Register</button>

                                </div>

                                <div class="form-outline mb-4">

                                    <a href="/login">Login</a>

                                </div>


                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection