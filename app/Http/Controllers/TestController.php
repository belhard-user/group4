<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
        $names = [
            'Neo',
            'Morpheus',
            'Trinity',
            'Tank',
            'Switch',
            'Dozer',
            null
        ];

        $test = 0;

        $names = array_reverse($names);

        return view('test.index', compact('names', 'test'));
    }

    public function hello($name)
    {
        return view('test.hello', compact('name'));
    }

    public function about()
    {
        return "Page about";
    }
}
