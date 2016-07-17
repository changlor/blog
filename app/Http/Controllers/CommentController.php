<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    
    //protected $table = 'comments';

    public function store(Request $request)
    {
    	//$comment = new Comment;
        //$comment->nickname = $request->get('nickname');
        //$comment->email = $request->get('email');
        //$comment->website = $request->get('website');
        //$comment->article_id = $request->get('article_id');
        //$comment->content = $request->get('content');
        if (Comment::create($request->all())) {
            return redirect()->back();
        } else {
            return redirect()->back()->withInput()->withErrors('评论发表失败！');
        }
    }
}
