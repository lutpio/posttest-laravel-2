<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class SuperCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.super.category.index',[
            "title" => "Kategori",
            "categories"=> Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        return view('dashboard.super.category.create',[
            "title" => "Kategori",
            "hrefReturn" => "/dashboard/super/category",            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',                    
        ]);

        Category::create($validatedData);
        return redirect('/dashboard/super/category')->with('success', 'category berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($category)
    {
        $data = Category::where('id',Crypt::decrypt($category))->first();
        return view('dashboard.super.category.show',[
            "title" => "Kategori",
            "hrefReturn" => "/dashboard/super/category",    
            "category" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
