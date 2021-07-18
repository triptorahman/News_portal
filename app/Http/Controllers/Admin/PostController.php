<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Image;
use Auth;
use File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid=Auth::id();
        $posts=Post::all()->where('created_by',$userid);

        $exitCode = Artisan::call('view:clear');
        return view('admin.post.list',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all()->where('status',1);
        /*dd($categories);*/
        return view('admin.post.create',compact('categories'));    
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
            [   
                'title' => 'required|max:255',
                'short_description' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'image' => 'required',
                
            ]
        );
        $slug = Str::slug($request->title, '-');
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->status = 0;
        $post->view_count = 0;
        $post->hot_news = 0;
        $post->main_image = '';
        $post->thumb_image = '';
        $post->list_image = '';
        $post->created_by = Auth::id();
        $post->save();
        $file=$request->file('image');
        $extension= $file->getClientOriginalExtension();
        $main_image='post_main_'.$post->id.'.'.$extension;
        $thumb_image='post_thumb_'.$post->id.'.'.$extension;
        $list_image='post_list_'.$post->id.'.'.$extension;
        Image::make($file)->resize(653,569)->save(public_path('post_photoes/main/'.$main_image));
        Image::make($file)->resize(360,309)->save(public_path('post_photoes/thumb/'.$thumb_image));
        Image::make($file)->resize(122,122)->save(public_path('post_photoes/list/'.$list_image));
        $post->main_image=$main_image;
        $post->thumb_image=$thumb_image;
        $post->list_image=$list_image;
        $post->save();

        session()->flash('message', "Post Created");
        return redirect()->route('user.post.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post_id)
    {
        $post = Post::find($post_id);
        return view('admin.post.edit',compact('post')); 
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
        $post_previous = Post::find($post_id);

        $this->validate(
            $request, 
            [   
                'title' => 'required|max:255',
                'short_description' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                
                
            ]
        );

    
        $post = Post::find($post_id);
        $post->title = $request->title;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        if(isset($request->image))
        {
            File::delete('public/post_photoes/list/'.$post->list_image);
            File::delete('public/post_photoes/main/'.$post->main_image);
            File::delete('public/post_photoes/thumb/'.$post->thumb_image);
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $main_image='post_main_'.$post->id.'.'.$extension;
            $thumb_image='post_thumb_'.$post->id.'.'.$extension;
            $list_image='post_list_'.$post->id.'.'.$extension;
            Image::make($file)->resize(653,569)->save(public_path('post_photoes/main/'.$main_image));
            Image::make($file)->resize(360,309)->save(public_path('post_photoes/thumb/'.$thumb_image));
            Image::make($file)->resize(122,122)->save(public_path('post_photoes/list/'.$list_image));
            $post->main_image=$main_image;
            $post->thumb_image=$thumb_image;
            $post->list_image=$list_image;
        }
        else{
            
            
        }
        $post->save();


        session()->flash('message', "Post Updated!"); 
        return redirect()->route('user.post.list');




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
        return redirect()->route('user.post.list');
    }
}
