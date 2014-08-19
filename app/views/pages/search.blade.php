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
                              <li><a href="#contains">Posição</a></li>
                              <li><a href="#its_equal">Empresa</a></li>
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
            
            <table class="table search-results table-hover">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Posição</th>
                    <th>Salário Mensal</th>
                    <th>Género</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Intermarché</td>
                    <td>Caixa</td>
                    <td>525€</td>
                    <td>Feminino</td>
                </tr>
                <tr>
                    <td>Lidl</td>
                    <td>Caixa</td>
                    <td>550€</td>
                    <td>Feminino</td>
                </tr>
                <tr>
                    <td>Lidl</td>
                    <td>Armazém</td>
                    <td>625€</td>
                    <td>Masculino</td>
                </tr>
            </tbody>
        </table>
        </div>   
        @include('includes.footer')
  </body>
</html>