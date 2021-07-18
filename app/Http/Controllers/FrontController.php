<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::where("status", 1)->where('hot_news', '=', 1)->get();
        $top_viewed=Post::where("status", 1)->orderBy('view_count', 'DESC')->limit(2)->get();
        
        $category_wise_post = Category::with(['posts' => function($query) {
            $query->where('status', 1);
        }])->where("status", 1)->limit(5)->get();

        return view('front.home')->with('posts',$post)->with('top_viewed',$top_viewed)->with('category_wise_post',$category_wise_post);    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $post = Post::find($post_id);
        return view('front.details')->with('post',$post);
    }

    public function showcategory($category_id)
    {
        $category_wise_post = Category::with(['posts' => function($query) {
            $query->where('status', 1);
        }])->where("status", 1)->where("id", $category_id)->get();
        return view('front.category_wise')->with('category_wise_post',$category_wise_post);
    }

    public function authorwise($author_id)
    {
        $author_wise_post = User::with(['posts' => function($query) {
            $query->where('status', 1);
        }])->where("type", 2)->where("id", $author_id)->get();
        return view('front.author_wise_post')->with('author_wise_post',$author_wise_post);
    }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
