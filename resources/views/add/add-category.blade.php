@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container py-5 h-150">
        <div class="row d-flex justify-content-center align-items-center ">

            @if(Auth::user()->type =="")
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h2 class="mb-5">Add Category</h2>
                        <div class="mb-5 col-md-offset-4">
                            <img src="https://images.pexels.com/photos/4551521/pexels-photo-4551521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:200px; height:200px" />

                        </div>
                        <form method="POST" action="{{ route('add-category') }}">
                            @csrf
                            <div class="form-outline mb-4">
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus placeholder="Category Name">

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $category }}</strong>
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

                                <button class="btn btn-primary btn-lg btn-block active btn-lg" type="submit">Add Category</button>

                            </div>




                    </div>

                    </form>

                </div>
            </div>
        </div>
        @endif
    </div>
</div>
</div>
@endsection