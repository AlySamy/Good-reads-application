<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class postcontrolar extends Controller
{


     /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $postes = post::get();
        return view('index', ['postes' => $postes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',

        // ]);

        post::create($request->all());
        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        // function viewpost($id){
        //     $onePost = post::find($id);
        //    return view('view',compact('onePost'));

        return view('show',compact('post'));


    }

   /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {

        $post=post::find($id);
        return view ('update',compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit ($id ,Request $request)
    {

        $post=post::find($id);
        $post->update($request->except(['_method,_token']));
        return redirect()->route('index');
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
        $post->delete();
        return redirect()->route('index');
    }

}



