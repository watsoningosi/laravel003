<?php

namespace App\Http\Controllers;
use App\Models\Tag;
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
        // request()->validate([
        //'title' =>['required','min:3','max:255']
        //'title' => 'required',
        // 'exerpt' => 'required',
        // 'body' => 'required'
        //]);

        Article::create(request()->validate([
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required'

        ]));


        return redirect('/pages/create_article')
            ->with('success', 'Your Article has been submitted Successfully.');
    }

    public function show(Article  $article)
    // $article has match with routes/id ie Route::get('pages/{article}',ArticlesController@index)
    {
        // $article = Article::findOrFail($id);
        return view('pages.article', ['article' => $article]);
    }

    public function edit(Article  $article)
    {

        return view('pages.edit_post', compact('article'));
    }
    public function update(Article  $article)
    {
        $article->update(request()->validate([
            //'title' =>['required','min:3','max:255']
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/pages/blog')
            ->with('success', 'Your Article has been updated Successfully.');
    }


    public function destroy(Article $article)
    {
        //
    }
}
