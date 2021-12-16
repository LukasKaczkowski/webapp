<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class CommentController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'message' =>  'required|max:254',
        ]);
        $comment = new Comment;
        $comment->user_id = $user->id;
        $comment->post_id = $request['post_id'];
        $comment->message = $request['message'];
        $comment->save();
        return redirect()->route('posts.show',$comment->post_id)->with('message','Comment was created.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        if(Gate::allows('deleteComment',['comment'=>$comment])) {
            $comment->delete();
            return redirect()->route('posts.show',$comment->post_id)->with('message','Post was deleted.');
        }
        else{
            return redirect()->route('posts.show',$comment->post_id)->with('message','Not authorised to delete post.');
        }

    }
}
