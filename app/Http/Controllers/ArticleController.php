<?php

namespace App\Http\Controllers;

use App\Article;
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

        $articles = Article::newest()->get();
        //dd($articles);
        return view('articles.index', compact('articles'));
    }

    public function search(Request $request){
        //dd($request->user_id);
        $articles = Article::newest()
            ->where('user_id', $request->user_id)
            ->get();
        //->toSql();
        //$articles = Article::all();
        //dd($articles);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
