<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function getArticles() {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }
    
    public function getArticle($articleSlug) {
        $article = Article::where('slug', $articleSlug)->get();
        $author = User::where('id', $article[0]->user_id)->get();
        return view('articles.article', ['article' => $article, 'author' => $author]);
    }
}
