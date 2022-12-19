@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center " style=" justify-content:center; align-items:center; margin:2rem;">
        @foreach($resturants as $key => $value)

        <div class="col col-md-2 " style=" margin:4rem; border:solod 1px black;">
            <!-- <a href="/list-of-categories/{{$value->id}}" style=" text-decoration: none; color:black"> -->
            <div class="card" style="width:300px; height:300px; display: flex;
justify-content: center; align-items:center">
                <img style="max-width:200px; max-height:250px; min-width:200px; min-height:200px; border-radius:100px" src={{$value->image}} class="card-img-top" alt={{$value->name}}>
                <div class="card-body ">
                    <h3>{{$value->name}}</h3>
                    <p class="card-text">{{$value->description}}</p>
                </div>
            </div>
            <!-- </a> -->
        </div>


        @endforeach

    </div>
</div>
@endsection