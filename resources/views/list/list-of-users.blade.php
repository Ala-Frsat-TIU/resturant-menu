@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::user()->type=="admin")
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($users as $key => $user)



            <tr>
                <th scope=" row">{{$user->id}}</th>
                <td id="name" name="name">{{$user->name}}</td>
                <td id="email" name="email">{{$user->email}}</td>
                <td id="type" name="type">{{$user->type}}</td>
                <td> <a type="submit" class="btn btn-primary" href="/list-of-users/{{$user->id}}">Update</a>

                </td>


            </tr>


            @endforeach

        </tbody>
    </table>
    @endif
</div>
@endsection