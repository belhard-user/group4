<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'path', 'th_path'];

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['path'] = 'article/' . $name;
        $this->attributes['th_path'] = 'article/th-' . $name;
    }

    public function article()
    {
        return $this->belongsTo(\App\Article::class);
    }
}
