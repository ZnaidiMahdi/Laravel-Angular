<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Approver($id){
        $post = Post::find($id);
        $post->is_approved = "1";
        $post->save();
        return response()->json($post, 200);
    }

    public function index()
    {
     //   return response()->json(Post::all());
        $posts=Post::all();
      //  return view('posts.index')->with('posts',$posts);
        return response()->json($posts, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $post= new Post();
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->save();
        //return redirect('/posts');
        return response()->json($post, 200);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        auth()->id();
        $post= Post::find($id);
       return view('posts.show')->with('post',$post);
        //return response()->json($post, 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
      //  $post= Post::find($id);
      //  return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
  //      $post = Post::find($id);
   //     $post->title = $request->input('title');
   //     $post->body = $request->input('body');

       // $post->save();

        $post->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        //  redirect('/posts');
       return response()->json(['message'=>'post was deleted',$post], 200);
    }
}
