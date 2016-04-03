<?php

namespace App\Http\Controllers;

use App\Article;
use App\Classes\AddPhotoToArticle;
use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    public function store(Article $article, Request $request)
    {
        $photo = ( new AddPhotoToArticle($request->file('photo'), $article) )->save();

        return $photo;
    }
}
