@extends ('layouts.articles')

@section('title')
  {{count($articles)}} Articles
  @endSection

@section('content')

  <div class="blog-post" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

    <h5 class="alert alert-info noDeco"><a href="{{url('articles/create')}}"><span
            class="glyphicon glyphicon-plus"></span>&nbsp;Ajouter un article</a></h5>

    @if(count($articles))
      Effacer
      <div class="title">
        <h1>Tous les Articles<span class="mini"><a href="{{url('articles/reset')}}">(Les ré-initialiser
              tous)</a></span></h1>

        @foreach ($articles as $article)

          <article>

            <h1>
              <b><a href="{{ url('articles', $article->id )}}">{{ $article->title }}</a></b>
                <span class="links petit">

                  <a href="{{ url('articles/'. $article->id.'/edit' )}}">
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></button>
                  </a>

                  <a href="#">
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                  </a>

                </span>

            </h1>
            {{--TODOLI Fctn Effacer à rendre opérationnelle--}}

            {{ $article->slug }} le
            <b>{{ $article->published_at->formatLocalized('%A %e %B %Y') }}</b> <em>( {{ $article->delai }}
              )</em><br/><br/>

            <div class="jumbotron contenu">{{ $article->body }}</div>

          </article>

          <br/>

        @endforeach
        @endif

        @if(count($articles)>3) {{-->5--}}

        <nav>
          <ul class="pager">
            <li><a href="#">Précédent</a></li>
            <li><a href="#">Suivant</a></li>
          </ul>
        </nav>
        {{--TODOLI faire fontionner la pagination--}}

        @endif

      </div>
  </div><!-- /.blog-post -->
@endsection
 