<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'email', 'rip_date'];

    protected $dates = ['rip_date'];

    // public $timestamps = false;

    // protected $perPage = 5;

    /*public function getDates()
    {
        return [];
    }*/

}
