<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;


class PostController extends Controller
{

    public function search(Request $request){

      if($request->has('q')){
        $request->flashOnly('q');
        $results = Post::search($request->q)->paginate(5);

      }else{
        $results = [];
      }
      return view('post.search', compact('results'));
    }

    public function searchJs(){

      return view('post.searchjs');
    }




// the main crud functions

    public function index()
    {
        $posts = Post::paginate(25);
        return view('post.index', compact('posts'));
    }


    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content'=> 'required',
        ]);

        $user = Auth::user();

        $post = $user->posts()->create([
          'title' => $request->title,
          'content'=> $request->content,
          'published'=> $request->has('published'),
        ]);

        return redirect()->route('post.show', $post->id);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->published = ($request->has('published') ? true : false);
        $post->save();

        return redirect()->route('post.show', $post->id);
    }


    public function destroy($id)
    {
        Post::destroy($id);
    }
}
