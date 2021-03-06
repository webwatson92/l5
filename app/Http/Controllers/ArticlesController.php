<?php

namespace App\Http\Controllers;

use App\Article;
use App\C7;
use App\Http\Requests\ArticleRequest;
use App\User;
use Carbon\Carbon;
use \Debugbar;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use Mockery\CountValidator\Exception;

class ArticlesController extends Controller {

  const RUBRIQUE = 'articles';


  public function __construct() {

    // Rend authentification nécessaire pour tout ce qui concerne les articles
    // sauf le listage et la vue d'un article'
    $this->middleware('auth')
         ->except([
                    'index',
                    'show'
                  ]);
    //    return $archives;
  }


  /**
   * Show all articles
   *
   * @return mixed Response
   */
  public function index() {

    $articles = Article::latest('published_at')
                       ->filter(request([
                                          'month',
                                          'year'
                                        ]))
                       ->published()
                       ->leftjoin('users', 'user_id', '=', 'users.id')
                       ->get([
                               'articles.id',
                               'users.username',
                               'title',
                               'body',
                               'articles.created_at'
                             ]);


    Carbon::setLocale('fr');

    foreach ($articles as $article) {
      $article->slug                 = str_slug($article->id . '-' . $article->title, '-');
      $article['court_published_at'] = substr($article->published_at, 0, 10);
      $article->delai                = ucfirst($article->created_at->diffForHumans());
    }

    return view('articles.index', compact('articles'));
  }


  public function show(Article $article) {

    //    $article = Article::find($article->id);
    //        return ($article);

    //    vd($article->user->username);

    $users = User::all();
    //    $us = $users;
    $users = $users->pluck('email', 'username');
    //    return ($users);
    Debugbar::addMessage($users, 'Users');
    // TODOLI Afficher pseudo de l'auteur de l'article

    //    $article = Article::findOrFail($id);
    //    return $article->created_at->addDays(8)->format('Y-m');


    if ($article) {

      return view('articles.show', compact('article'));
    }
    else {

      return 'Erreur 404';
    }
  }


  public function create() {

    return view('articles.create');
  }


  /**
   * Save a new article
   *
   * @param ArticleRequest $request
   * @return mixed
   */
  public function store(ArticleRequest $request) {

    //    dd($request);
    Article::create($request->all());
    //    $archives = $this->archives;
    return redirect('articles');
  }


  public function edit($id) {

    $article = Article::findOrFail($id);
    //    return dd($article);

    return view('articles.edit', compact('article'));
  }


  /**
   * Update un article
   *
   * @param ArticleRequest $request
   * @return mixed
   */
  public function update($id, ArticleRequest $request) {

    $article = Article::findOrFail($id);

    $article->update($request->all());

    return redirect('articles');
  }
  
  
  public function destroy($id) {

    debug('Effacement');

    return redirect('articles');
  }


  public function reset() {

    debug('ok');
    //    C7::TablesReset();

    return redirect('articles');
  }

}
