@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container py-5 h-150">
        <div class="row d-flex justify-content-center align-items-center ">
            @if(Auth::user()->type=="admin")
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h2 class="mb-5">Add Resturant</h2>
                        <div class="mb-5 col-md-offset-4">
                            <img src="https://images.pexels.com/photos/2253643/pexels-photo-2253643.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:200px; height:200px" />

                        </div>
                        <form method="POST" action="{{ route('add-resturant') }}">
                            @csrf
                            <div class="form-outline mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="category" autofocus placeholder="Resturant Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $name }}</strong>
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
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Address">

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $address }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $phone }}</strong>
                                </span>
                                @enderror
                            </div>




                            <div class="form-outline mb-4">

                                <button class="btn btn-primary btn-lg btn-block active btn-lg" type="submit">Add Resturant</button>

                            </div>




                    </div>

                    </form>

                </div>
            </div>
            @endif
        </div>
    </div>
</div>
</div>
@endsection