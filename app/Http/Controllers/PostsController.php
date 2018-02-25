<?php

namespace App\Http\Controllers;

use App\Post;
use Session;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $posts = Post::all();
        return View('posts.index', ['posts' => $posts]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return View('posts.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate(
        $request,
    ['title' => 'required',
    'date' => 'required',
    'desc' => 'required',
    'dificulties' => 'required',
    'acquired' => 'required',
    'codingTime' => 'required',
  ]
    );

        $input = $request->all();
        Post::create($input);

        Session::flash('flash_message', 'tout est ok !');

        return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        // dd($post);

        return View('posts.show', ['post' => $post]);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return View('posts.edit', ['post' => $post]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $this->validate($request, [
    'title' => 'required',
    'date' => 'required',
    'desc' => 'required',
    'dificulties' => 'required',
    'acquired' => 'required',
    'codingTime' => 'required',
  ]);

        $input = $request->all();

        $post->fill($input)->save();

        Session::flash('flash_message', 'Post successfully added!');

        return redirect()->back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $post = Post::FindOrFail($id);

        $post->delete();

        Session::flash('flash_message', 'Post effacé !');

        return redirect()->route('posts.index');
    }
}
