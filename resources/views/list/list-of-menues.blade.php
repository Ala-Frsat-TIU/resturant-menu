@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center" style=" justify-content:center; align-items:center; margin:2rem;">

        @for($i=0;$i<6;$i++) <div class="col col-md-2" style="justify-content:center; align-items:center; margin:4rem;">
            <a href="#">
                <div class="card" style="width:250px; height:250px">
                    <img style="max-width:200px; max-height:250px; min-width:250px; min-height:250px;" src="https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="menu">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
    </div>
    @endfor


</div>
</div>
@endsection