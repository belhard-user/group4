<?php

namespace App\Http\Controllers;

use App\Article;
use App\Classes\AddPhotoToArticle;
use App\Classes\AddPhotoToScreen;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;

class ArticleController extends Controller
{

    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['store', 'create']]);
    }

    public function index()
    {
        $articles = Article::paginate(15);

        return view('article.index', compact('articles'));
    }
    public function create()
    {
        $all_tags  = Tag::lists('name', 'id');

        return view('article.create', compact('all_tags'));
    }

    public function store(ArticleRequest $request)
    {
        $article = \Auth::user()->article()->save(new Article($request->all()));

        $article->tags()->attach($request->input('tag_list'));

        flash('Ok', 'Запись ' . $article->title . ' успешно добавлена...');

        return redirect()->route('article.show', ['article' => $article->id]);
    }

    public function edit(Article $article)
    {
        $all_tags  = Tag::lists('name', 'id');

        return view('article.edit', compact('article', 'all_tags'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());
        $article->tags()->sync($request->input('tag_list'));

        flash('Ok', 'Запись ' . $article->title . ' успешно обнавлена...');

        return redirect()->back();
    }
}
