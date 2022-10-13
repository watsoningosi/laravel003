<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{


    public function index()
    {
        return view('pages.home');
    }


    public function create()
    {
        return view('pages.create_article');
    }


    public function store(Request $request)
    {
        request()->validate([
            //'title' =>['required','min:3','max:255']
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required'
        ]);
        $article = new Article();

        $article->title = request('title');
        $article->exerpt = request('exerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/pages/create_article');
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('pages.article', ['article' => $article]);
    }


    public function edit($id)
    {
        $article = Article::find($id);

        return view('pages.edit_post', compact('article'));
    }


    public function update($id)
    {
        request()->validate([
            //'title' =>['required','min:3','max:255']
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required'
        ]);

        $article = Article::find($id);

        $article->title = request('title');
        $article->exerpt = request('exerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/pages/blog');
    }


    public function destroy(Article $article)
    {
        //
    }
}
