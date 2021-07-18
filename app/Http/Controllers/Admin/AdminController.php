<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use Auth;
use File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.dashboard');
    }

    

    
    public function admin_post_list()
    {
        
        $posts=Post::orderBy('status')->get();
        return view('admin.pending_post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showuser($user_id)
    {
        $user = User::find($user_id);
        $posts=Post::all()->where('created_by',$user_id);
        return view('admin.post.userwisepost')->with('user',$user)->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comment($post_id)
    {
        $post = Post::find($post_id);
        return view('admin.pending_post.comment', compact('post'));
    }

    public function editindex()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $this->validate(
        $request, 
        [   
            'comment' => 'bail|string|nullable',
            'status' => 'required',
        ]
        );


        $post = Post::find($post_id);
        $post->comment = $request->comment;
        $post->status = $request->status;
        $post->hot_news = $request->hot_news;
        $post->save();

        session()->flash('message', "Post Has Been Reviewed");
        return redirect()->route('admin.post.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        File::delete('public/post_photoes/list/'.$post->list_image);
        File::delete('public/post_photoes/main/'.$post->main_image);
        File::delete('public/post_photoes/thumb/'.$post->thumb_image);
        $delete = Post::destroy($post_id);
        session()->flash('message', "Post Deleted!"); 
        return redirect()->route('admin.post.list');
    }
}
