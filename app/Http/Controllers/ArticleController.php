<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        // dd('index');
        $articles = Article::all();
        
        // foreach ($articles as $article) {
        //     dd($article->title);
        // }

        return view('articles.index', compact('articles')); 
    }
}
