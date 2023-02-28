<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\author;

class AuthorController extends Controller
{

     /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $authors = author::get();
        return view('author.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show( author $author)
    {
        // dd($author->postes->title);
        return view('author.show',compact('author'));
     

    }

   /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {


    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit ($id ,Request $request)
    {


    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        // $category->delete();
        // return redirect()->route('index');

        // Product::where('id',$id)->delete();
        // $post = post::find($id);

    }
}
