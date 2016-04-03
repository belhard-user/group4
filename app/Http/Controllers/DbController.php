<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\TestsRequest;
use App\Photo;
use Illuminate\Http\Request;
use DB;

class DbController extends Controller
{
    public function index()
    {
        /*$articles = DB::table('articles')
            ->where('short_description', 'Лукашенко')
            ->orWhere('id', '>', 2)
            // ->whereNotIn('id', [2, 4, 5])
            //->where('id', 1)
            // ->orWhere('title', 'LIKE',  '%asdas%')
            // ->distinct()
            ->get();*/

        $articles = DB::table('articles')->sum('id');

        dd($articles);



        return view('db.index', compact('articles'));
    }

    public function insert()
    {
        $articles = DB::table('articles')
            ->where('short_description', 'Лукашенко')
            ->orWhere('id', '>', 2)
            ->get();

        $records = [
            ['title' => 'Test7', 'short_description' => 'test2', 'description' => 'testt description2', 'user_id' => 1],
            ['title' => 'Test3', 'short_description' => 'test2', 'description' => 'testt description2', 'user_id' => 1],
            ['title' => 'Test4', 'short_description' => 'test2', 'description' => 'testt description2', 'user_id' => 1],
            ['title' => 'Test5', 'short_description' => 'test2', 'description' => 'testt description2', 'user_id' => 1]
        ];

        DB::table('articles')->insert($records);

        return view('db.index', compact('articles'));
    }

    public function update()
    {
        /*$r = DB::table('articles')->whereIn('id', [10, 11, 12, 100])->update([
            'title' => 'Update2 test records'
        ]);*/

        $discount = 10;
        $price = 100;

        $i = $price - $discount;

        DB::table('tests')->whereId(1)->decrement('cnt', $i, [
            'address' => 'change',
            'updated_at' => new \DateTime(),
            'created_at' => new \DateTime()
        ]);


    }

    public function add()
    {
        return view('db.insert');
    }

    public function store(TestsRequest $request)
    {
        DB::table('tests')->insert($request->except(['_token']));

        return redirect()->back();
    }

    public function image()
    {
        return view('db.imag');
    }
}
