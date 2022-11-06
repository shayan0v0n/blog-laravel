<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use GuzzleHttp\Psr7\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getArticles() {
        $articles = Article::all();
        return view('admin.index', ['articles' => $articles]);
    }

    public function getArticle($articleSlug) {
        $article = Article::where('slug', $articleSlug)->get();
        cookie()->queue('viewLastArticle', $article[0]->id, 60, '/');
        return view('admin.article', ['article' => $article[0]]);
    }

    public function deleteArticle($articleDelete) {
        cookie()->queue(cookie()->forget('viewLastArticle'));
        Article::where('id', $articleDelete)->delete();
        return redirect('/admin');
    }
    
    public function getCreateArticle() {
        return view('admin.create');
    }

    public function postCreateArticle(ArticleRequest $request) {
        $validator = $request->validated();


        Article::create([
            'title' => $validator['articleTitle'],
            'user_id' => auth()->user()->id,
            'description' => $validator['articleDescription'],
            'content' => $validator['articleContent']
        ]);

        return redirect('/admin');
    }

    public function getUpdateArticle($articleSlug) {
        $article = Article::where('slug', $articleSlug)->get();
        return view('admin.update', ['article' => $article[0]]);
    }
    
    public function putUpdateArticle($articleID, ArticleRequest $request) {
        $validator = $request->validated();
        $article = Article::findOrFail($articleID);
        
        $article->update([
            'title' => $validator['articleTitle'],
            'description' => $validator['articleDescription'],
            'content' => $validator['articleContent']
        ]);

        return redirect('/');
    }
}
