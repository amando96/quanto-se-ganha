<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('/') }}">Quanto se ganha?</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{ Route::current()->getUri() == '/' ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Início</a></li>
            <li class="{{ Route::current()->getUri() == 'procurar' ? 'active' : '' }}"><a href="{{ URL::to('procurar') }}">Procurar</a></li>
            <li class="{{ Route::current()->getUri() == 'submeter' ? 'active' : '' }}"><a href="{{ URL::to('submeter') }}">Submeter</a></li>
            <li class="{{ Route::current()->getUri() == 'privacidade' ? 'active' : '' }}"><a href="{{ URL::to('privacidade') }}">Privacidade</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>