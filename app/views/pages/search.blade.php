<!DOCTYPE html>
<html lang="en">
    <head> 
        @include('includes.head')
    </head>
    <body>
        @include('includes.nav')
        <div class="container">
            <div class="row">    
                <div class="col-md-12">
                            <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">Pesquisar por</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#district">Distrito</a></li>
                                <li><a href="#position">Posição</a></li>
                                <li><a href="#company">Empresa</a></li>
                                <li><a href="#greather_than">Salário maior do que</a></li>
                                <li><a href="#greather_than">Salário menor do que</a></li>
                                <li class="divider"></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">         
                        <input type="text" id="search" class="form-control" name="x" placeholder="Termo da pesquisa...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </div>
            </div>            
            <div id="ajax-results">
                
            </div>
            <div class="spinner"></div>
        </div>   
        @include('includes.footer')
  </body>
</html>