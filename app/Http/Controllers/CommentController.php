<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new comment();
        $comment->details = $request->comment_body;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect()->back();
    }
}
