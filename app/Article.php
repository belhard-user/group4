<?php

namespace App;

use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'user_id'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function attachPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class);
    }

    public function getTagListAttribute()
    {
        return $this->tags()->lists('tag_id', 'tag_id')->all();
    }
}
