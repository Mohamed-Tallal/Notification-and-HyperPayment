@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-sm-6">
            <div class="card">
                <div class="card">
                    <h5 class="card-header">@if(auth()->user()->id == $post->users->id){Me}@else{{$post->users->name}}@endif</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{$post->tittle}}</h5>
                        <p class="card-text">{{$post->body}}</p>
                        <hr>
                        <form method="post" action="{{route('Add.comment')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Add Comment</label>
                                <input type="text" class="form-control"  name="comment" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('comment')
                                    <small style="color: red !important;" class="form-text text-muted">{{$message}}</small>
                                @enderror
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        @foreach($post->comments as $commet)
                            <hr>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">@if(auth()->user()->id == $commet->user_id){Me}@else{{$post->users->name}}@endif</h5>
                                    <p class="card-text">{{$commet->comment}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection

