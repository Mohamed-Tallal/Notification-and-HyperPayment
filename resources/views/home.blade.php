@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($orders as $order)
        <div class="col-sm-4 mt-4">
            <div class="card">
            <img src="{{asset('Image/'.$order->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">{{$order->tittle}}</h5>
                        <p class="card-text">{{$order->description}}</p>
                        <a href="{{route('descripe',$order->id)}}" class="btn btn-primary">Display</a>
                </div>
            </div>
        </div>
    @endforeach    
    </div>
    
</div>
@endsection
