<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class RemotePostController extends Controller
{
    public function store(Request $request)
    {
       try{
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'author_id' => 'required|integer',
            ])

            $post = Post::create($validated);
            return response()->json([
                'message' => 'success post',
                'data' => $post
            ], 201);
        } catch(\Exception $e){
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }     
}
