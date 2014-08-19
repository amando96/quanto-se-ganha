
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Quanto se ganha?</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Quanto se ganha?</h3>
              <ul class="nav masthead-nav">
                <li class="{{ Route::current()->getUri() == '/' ? 'active' : '' }}"><a href="{{ URL::to('/') }}">Início</a></li>
                <li class="{{ Route::current()->getUri() == 'procurar' ? 'active' : '' }}"><a href="{{ URL::to('procurar') }}">Procurar</a></li>
                <li class="{{ Route::current()->getUri() == 'submeter' ? 'active' : '' }}"><a href="{{ URL::to('submeter') }}">Submeter</a></li>
                <li class="{{ Route::current()->getUri() == 'privacidade' ? 'active' : '' }}"><a href="{{ URL::to('privacidade') }}">Privacidade</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Para que serve este website?</h1>
            <p class="lead">
                Procure pela empresa onde trabalha para saber se ganha mais ou menos que os seus colegas.
            </p>
            <p class="lead">
                Partilhe o seu salário, posição e empresa onde trabalha, não precisa de criar uma conta e estará sempre em anonimato absoluto.<br/>
                
                <a href="{{ URL::to('privacidade') }}" class="btn btn-lg btn-default">Mais sobre a nossa política de privacidade</a>
            </p>
            <p class="lead">
                Descubra quanto realmente se ganha em Portugal para determinada função.<br/>                 
            </p>
            <p class="lead">
              <a href="{{ URL::to('procurar') }}" class="btn btn-lg btn-default">Começar</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Footer</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
