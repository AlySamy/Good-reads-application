<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class postController extends Controller
{
    function getPosts()
    {
        $posts=Posts::get();
        return view('home',[ 'posts' => $posts ]);
    }

    function viewPost($id)
    {
        $post=Posts::find($id);
        return view('view',['post'=>$post]);
    }

    function updatePost($id)
    {
        $post = Posts::find($id);
        return view('update',compact("post"));
    }

    function editPost($id,Request $request)
    {
        // dd($request->all());
        Posts::find($id)->update($request->except(['_method','_token']));
        return redirect()->route('home');
    }

    function deletePost($id)
    {
        Posts::find($id)->delete();
        return redirect()->route('home');
    }

    function createPost()
    {
        return view('create');
    }

    function insertPost(Request $request)
    {
        Posts::create($request->all());
        return redirect()->route('home');
    }

}
