<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::select('id', 'title', 'body')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $post = new Post();
            $post->title = $request->title;
            $post->body = $request->body;

            if($post->save()){
                return response()->json(['status' => 'success', 'message' => 'Post created successfully!']);
            }
        } catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $post = Post::findOrFail($id);
            $post->title = $request->title;
            $post->body = $request->body;

            if($post->save()){
                return response()->json(['status' => 'success', 'message' => 'Post updated successfully!']);
            }
        } catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $post = Post::findOrFail($id);
            if($post->delete()){
                return response()->json(['status' => 'success', 'message' => 'Post deleted successfully!']);
            }
        } catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
