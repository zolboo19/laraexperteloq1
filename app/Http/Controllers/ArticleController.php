<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $articles = Article::all();
        $articles = Article::where('user_id', '1')
            ->where(function($query){
                return $query->whereYear('created_at', 2018)
                ->orWhereYear('updated_at', 2020);
            })
            ->get();
            //->toSql();
            //dd($articles);
        return view('articles.index', compact('articles')); */
        //$dateNow = now()->subDays(30);
        //dd($dateNow);

        //$articles = Article::all();
        //dd($articles);

        // $titles = [];
        // foreach($articles as $article){
        //     if(strlen($article->title) > 40){
        //         $titles[] = $article->title;
        //     }
        // }
        //dd($titles);

        // dd($articles->filter(function($article){
        //     return strlen($article->title) > 40;
        // })->map(function($article){
        //     return $article->title;
        // }));
        $articles = Article::all();
        echo 'Нийт зохиол: ' . $articles->count(). '<hr />';
        echo 'Зохиол дахь нийт үгийн тоо: ' . $articles->sum('word_count'). '<hr />';
        echo 'Хамгийн бага: ' . $articles->min('word_count'). '<hr />';
        echo 'Хамгийн их: ' . $articles->max('word_count'). '<hr />';
        echo 'Дундаж: ' . number_format($articles->avg('word_count'), 2). '<hr />';
        echo 'Медиан: ' . number_format($articles->median('word_count'), 2). '<hr />';
        echo 'Олон давтагдсан: ' . implode(', ', $articles->mode('word_count')). '<hr />'; //миний үүсгэсэн утга нь integer or string биш болохоор implode хийж болохгүй байна.

        return view('articles.index', compact('articles'));
    }

    public function search(Request $request){
        //dd($request->user_id);
        //$articles = Article::where('created_at', '>', now()->subDays(1))->get();
        //->toSql();
        //$articles = Article::all();
        //dd($articles);

        $query = Article::query();
        // if(request('user_id')){
        //     $query->where('user_id', request('user_id'));
        // }
        // if(request('title')){
        //     $query->where('title', request('title'));
        // }
        // $articles = $query->get();

        $articles = Article::when(request('user_id'), function($query){
            return $query->where('user_id', request('user_id'));
        })->when(request('title'), function($query){
            return $query->where('title', request('title'));
        })
        ->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users = User::select(['name', 'id'])->get()
        //     ->prepend(new User((['name' => '-- Зохиогч сонгоно уу? --'])));
        // $users = User::select(['name', 'id'])->get()
        //     ->shuffle();
        //$users = User::pluck('name', 'id');
        //dd($users);
        $users = User::select(['name', 'id'])->get()->shuffle()->chunk(10);
        dd($users);
        return view('articles.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
