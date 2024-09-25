<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

         // Use Validator to manually handle the validation
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Blog::create($validator->validated());

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

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // If validation passes, get the validated data
        $validatedData = $validator->validated();

        // Update the blog with the validated data
        $blog->update($validatedData);

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
