<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=Category::all();

        return view('admin.category.list', compact('categorys'));
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
        
        $this->validate(
            $request, 
            [   
                'name' => 'required|max:255|string|unique:categories',
                
            ],[   
                
                'name' => 'category name',
                
            ]
        );

        $category = new Category;
        $category->name = $request->name;
        $category->status = 1;
        $category->save();

        session()->flash('message', "Category Created");
        return redirect()->route('category.list');
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
    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        $this->validate(
        $request, 
        [   
            'name' => 'required|max:255|string|unique:categories',
            
        ],
        [   
            
            'name' => 'category name',
            
        ]
    );


        $category = Category::find($category_id);

        $category->name = $request->name;
        $category->save();
        session()->flash('message', "Category Updated");

        return redirect()->route('category.list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inactive($category_id)
    {
        $category = Category::find($category_id);
        
        $category->status = 0;
        $category->save();
        session()->flash('message', "Category Inactived");

        return redirect()->route('category.list');
    }
    public function active($category_id)
    {
        $category = Category::find($category_id);
        
        $category->status = 1;
        $category->save();
        session()->flash('message', "Category Actived");

        return redirect()->route('category.list');
    }
}
