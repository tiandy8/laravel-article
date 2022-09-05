<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Auth;

class ArticleController extends Controller
{
    // Tampillkan semua artikel
        public function index()
        {
            $articles = Article::orderBy('date', 'DESC')->get();
            return view('admin.articles', compact('articles'));
        }
    //tampilkan halaman menambahakan artikel
    public function addArticle()
    {
        return view('admin.articles_add');
    }
    //masukkan data ke database
    public function storeArticle(Request $request)
    {
        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->date = $request->date;
        $article->save();

        return redirect('/admin/articles');

    }

    //menampilkan edit artikel
    public function editArticle($id)
    {
        $article = Article::find($id);
        return view('admin.articles_edit', compact('article'));
    }

    //mengubah data di database
    public function updateArticle(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->date = $request->date;
        $article->update();

        return redirect()->back();
    }
    public function deleteArticle( $id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->back();
    }
}
