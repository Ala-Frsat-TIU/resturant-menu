@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container py-5 h-150">
        <div class="row d-flex justify-content-center align-items-center ">
            @if(Auth::user()->type =="")

            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h2 class="mb-5">Add Item</h2>
                        <div class="mb-5 col-md-offset-4">
                            <img src="https://images.pexels.com/photos/255501/pexels-photo-255501.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:200px; height:200px" />

                        </div>
                        <form method="POST" action="add-item">
                            @csrf

                            <div class="form-outline mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Item Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $name }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus placeholder="Item Description">

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $description }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus placeholder="Item Price">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $price }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-outline mb-4">


                                <select class="form-select" aria-label="Default select example" required name="catid" id="catid">
                                    @foreach($categories as $key => $cat)

                                    <option id="catid" type="text" class="form-control @error('catid') is-invalid @enderror" name="catid" value="{{$cat->id }}" required autocomplete="catid" autofocus>{{$cat->name}}</option>

                                    @endforeach

                                </select>
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

                                <button class="btn btn-primary btn-lg btn-block active btn-lg" type="submit">Add Item</button>

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