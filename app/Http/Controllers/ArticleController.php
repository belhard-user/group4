<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(15);

        return view('article.index', compact('articles'));
    }
    public function create()
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request)
    {
        $req = $request->all();
        $req['user_id'] = 1;

        $article  = Article::create($req);

        return redirect()->route('article.show', ['article' => $article->id]);
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect()->back();
    }

    public function addPhoto(Article $article, Request $request)
    {
        $file = $request->file('file');
        $name = time() . '_' .$file->getClientOriginalName();

        $path = 'article/';

        $file->move($path, $name);
        return 'done';
    }
}
