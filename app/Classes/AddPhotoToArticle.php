<?php

namespace App\Classes;

use Image;
use App\Photo;
use App\Article;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddPhotoToArticle
{
    private $file;

    private $article;


    public function __construct(UploadedFile $file, Article $article)
    {
        $this->file = $file;
        $this->article = $article;
    }

    public function save()
    {
        $photo = $this->article->attachPhoto($this->makePhoto());

        $this->file->move('article/', $photo->name);

        $this->makeThumbnail($photo->path, $photo->th_path);
        return $photo;
    }

    private function makePhoto()
    {
        return new Photo([
            'name' => $this->makeName()
        ]);
    }

    private function makeName()
    {
        $name = $this->file->getClientOriginalName();

        return time() . '_' . $name;
    }

    private function makeThumbnail($dest, $to)
    {
        Image::make($dest)
            ->fit(200)
            ->save($to);
    }
}