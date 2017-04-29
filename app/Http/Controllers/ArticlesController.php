<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller {
  public function index() {

    $articles = Article::all();
    
    foreach ($articles as $article) {
      $article->slug = str_slug($article->id . '-' . $article->title, '-');
    }


    return view('articles.index', compact('articles'));

  }


  public function show($id) {

    $article = Article::findOrFail($id);

    return view('articles.show', compact('article'));

  }


  public function create($id) {

    $article = Article::findOrFail($id);

    return view('articles.create', compact('article'));

  }


}