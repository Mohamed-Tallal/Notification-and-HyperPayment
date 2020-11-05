@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-sm-6 mt-4">
                <div class="card">
                <img src="{{asset('Image/'.$offers->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$offers->tittle}}</h5>
                        <h5 class="card-title">Tottal Price : {{$offers->price}}</h5>
                        <p class="card-text">{{$offers->description}}</p>
                        <form method="post" action="{{route('checkout.prepare')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$offers->id}}">
                        <input type="hidden" name="price" value="{{$offers->price}}">
                        <button type="submit" class="btn btn-primary">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-4">
                @if (isset($success))
                <div class="alert alert-success col-md-6 offset-md-3 mt-3">
                    {{$success}}
                </div>

                @endif

                @if (isset($error))
                <div class="alert alert-success col-md-6 offset-md-3 mt-3">
                    {{$error}}
                </div>
                @endif

            </div>
    </div>
</div>
@endsection
