@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container py-5 h-150">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h2 class="mb-5">Add Menu</h2>
                        <div class="mb-5 col-md-offset-4">
                            <img src="https://images.pexels.com/photos/313700/pexels-photo-313700.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:200px; height:200px" />

                        </div>
                        <form method="POST" action="{{ route('add-menu') }}">
                            @csrf
                            <div class="form-outline mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Menu Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $name }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input id="res_id" type="text" class="form-control @error('res_id') is-invalid @enderror" name="res_id" value="{{ old('res_id') }}" required autocomplete="res_id" autofocus placeholder="Resturant ID">

                                @error('res_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $res_id }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus placeholder="Image URL">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $image }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">

                                <button class="btn btn-primary btn-lg btn-block active btn-lg" type="submit">Add Menu</button>

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