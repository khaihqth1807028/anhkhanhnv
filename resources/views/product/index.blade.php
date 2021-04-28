@extends('layouts.app');
@section('content')


    @foreach($data as $item)
    <div class="card" style="width: 18rem;display: inline-flex">
        <img class="card-img-top" style="width: 286px;height: 265px" src="{{asset($item->thumbnail)}}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{$item->name}}</h2>
            <h3 style="color: #0fbbad ;font-weight: bold ">{{$item->price}}</h3>
            <p class="card-text">{{substr($item->description,0,100)}}</p>
            <a href="{{asset('/addCart?id='.$item->id)}}" class="btn btn-primary">Add Cart</a>
        </div>
    </div>
    @endforeach
    @endsection
