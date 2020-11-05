<?php

namespace App\Http\Controllers;

use App\Commet;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(CommentRequest $request){

        Commet::create([
            'comment' => $request->comment,
            'user_id' => auth()->user()->id,
            'post_id' => $request->post_id
        ]);
        return redirect()->route('notification');

    }
}
