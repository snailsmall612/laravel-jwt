<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function get()
    {
        $articles = Article::all();

        return response()->json([
            'status' => 'success',
            'articles' => $articles
        ]);
    }
}