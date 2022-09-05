<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class PageController extends Controller
{
    // tampilkan halaman awal
    public function index()
    {
        $articles = Article::orderBy('date', 'DESC')->get();
        return view('home', compact('articles'));
    }

    //tampilkan detail artike
    public function detailArticle($id)
    {
        $article = Article::find($id);
        return view('detail_article', compact('article'));
    }
    //tampilkan artikel berdasarkan author
    public function authorArticle($id)
    {
        $user = User::find($id);
        $articles = $user->articles()->orderBy('date', 'DESC')->get();
        return view('author_article', compact('articles','user'));
    }
}
