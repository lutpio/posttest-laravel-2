<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SuperArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.super.article.index',[
            "title" => "Artikel",
            "articles"=> Article::all(),
            "categoryy"=>DB::table('categories')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        return view('dashboard.super.article.create',[
            "title" => "Artikel",
            "hrefReturn" => "/dashboard/super/article",  
            "categories" => Category::all()          
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',        
            'category_id' => 'required',
            'image'=> 'image|file|max:1024',//1 mb            
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('article-images');
        }                    
        $validatedData['slug'] = $request->slug . "-" . time();        
        
        Article::create($validatedData);
        return redirect('/dashboard/super/article')->with('success', 'artikel berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('dashboard.super.article.show',[
            "title" => "Article",
            "hrefReturn" => "/dashboard/super/article",
            "article"=> $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
