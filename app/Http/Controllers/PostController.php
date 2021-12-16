<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        $posts->withPath('/posts');
        return view('posts.index', ['posts' => $posts]);
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

        $validatedData = $request->validate([
            'title' =>  'required|max:127',
            'contents' => 'required|max:1023',
        ]);
        
        $post = new Post;
        $post->user_id = Auth::id();
        $post->title = $validatedData['title'];
        $post->contents = $validatedData['contents'];
        $post->save();
        
        return redirect()->route('posts.index')->with('message','Post was created.');
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
        return view('posts.show',['post'=>$post]);
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
        if(Gate::allows('editPost',['post'=>$post])) {
            return view('posts.edit',['post'=>$post]); 
        }
        else{
            return redirect()->route('posts.show',$post->id)->with('message','Not authorised to edit post.');
        }
        
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
        $validatedData = $request->validate([
            'title' =>  'required|max:127',
            'contents' => 'required|max:1023',
        ]);
        $post = Post::findOrFail($id);
        $post->title = $validatedData['title'];
        $post->contents = $validatedData['contents'];
        $post->save();
        return redirect()->route('posts.index')->with('message','Post was updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::findOrFail($id);
        if(Gate::allows('deletePost',['post'=>$post])) {
            $post->delete();
            return redirect()->route('posts.index')->with('message','Post was deleted.');
        }
        else{
            return redirect()->route('posts.show',$post->id)->with('message','Not authorised to delete post.');
        }
    }
}
