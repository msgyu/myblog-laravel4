<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post) {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $commment = new Comment(['body' => $request->body]);
        $post->comments()->save($commment);
        return redirect()->action('PostContrller@show');
    }

    public function destroy(Post $post, Comment $comment) {
        $comment->delete();
        return redirect()->back();
    }
}
