<?php

namespace App\Http\Controllers;

use App\Article;
use DB;
//to use SQL querys
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Article::all();
        //  return view('posts.index')->with('posts',$posts);
        return response()->json($posts, 200);
    }


//***----------------------localhost:8000/api/posts/store---------------------------------- */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return response()->json("ok", 200);
    }

    // islemk@360medlink.com


//***--------------------------------------------------------------------------------- */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        //return view('posts.show')->with('post',$post);
        return response()->json($post, 200);
    }


//***--------------------------------------------------------------------------------- */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


//***--------------------------------------------------------------------------------- */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->is_approved = "1";
        $post->save();
        return response()->json($post, 200);
    }

    public function disaprove(Request $request, $id)
    {
        $post = Post::find($id);
        $post->is_approved = "1";
        $post->save();
        return response()->json($post, 200);
    }



//***------------------------------localhost:8000/api/posts/delete/1 ------------------------------ */
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
        //return  redirect('/posts');
        return response()->json(['message'=>'post was deleted',$post], 200);
    }
}
