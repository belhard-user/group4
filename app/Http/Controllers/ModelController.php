<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Http\Requests;

class ModelController extends Controller
{
    const PER_PAGE = 10;
    public function index(Test $test)
    {
        $test->touch();

        return view('model.index', compact('test'));
    }

    public function all()
    {
        $all = Test::paginate();
        // $all = Test::withTrashed()->find(36)->forceDelete();

        // Test::find(36)->delete();

        return view('model.all', compact('all'));
    }

    public function api()
    {
        $all = Test::paginate();
        // $all = Test::withTrashed()->find(36)->forceDelete();

        // Test::find(36)->delete();

        return $all;
    }
}
