@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container py-5 h-150">
        <div class="row d-flex justify-content-center align-items-center ">


            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h2 class="mb-5">Update User</h2>
                        <div class="mb-5 col-md-offset-4">
                            <img src="https://www.shutterstock.com/image-vector/partnership-icon-users-600w-522233548.jpg" style="width:200px; height:200px" />

                        </div>
                        <form method="POST" action="/list-of-users/{{$user->id}}">
                            @csrf
                            @method('PUT')

                            <div class="form-outline mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $name }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $email }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{$user->type }}" autocomplete="type" autofocus placeholder="User Type">

                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $type }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">






                                <div class="form-outline mb-4">

                                    <button class="btn btn-primary btn-lg btn-block active btn-lg" type="submit">Update User</button>

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