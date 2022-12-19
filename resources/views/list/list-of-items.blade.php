@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">

        <tbody>




            @foreach($items as $key => $item)

            <tr style="justify-content:center; align-items:center; text-align:center">
                <th scope=" row">{{$item->name}}</th>
                <td class="text-center" id="name" name="name" style="align-items:center;justifiy-content:center">{{$item->description}}</td>
                <td class="text-center" id="email" name="email">${{$item->price}}</td>
                <td class="text-center" id="type" name="type"> <span class="badge badge-primary badge-pill"> <img style="max-width:100px; max-height:100px; min-width:100px; min-height:100px;" src="{{$item->image}}" class="card-img-top" alt="menu">
                    </span></td>
                </td>
                <td> <a type="submit" class="btn btn-primary" href="/update-item/{{$item->id}}">Update</a>


            </tr>
            @endforeach


        </tbody>
    </table>
</div>
@endsection