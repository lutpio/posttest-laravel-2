<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('articles',[
            "title" => "artikel",
            'articles'=>Article::all()
        ]);
    }
    public function show(Article $article){
        return view('article',[
            "title" => "artikel",            
            "article"=> $article
        ]);
    }
}
