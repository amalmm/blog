<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::all();
        return  response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::create([
            'title' => 'new blog created'
        ]);

         return response()->json( ['message'=>'created'] ,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
         return  response()->json($blog, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update([
            'title' => $request->input('title')
        ]);
        return  response()->json($blog, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return  response()->json(['message'=>'data deleted'], 200);
    }
}
