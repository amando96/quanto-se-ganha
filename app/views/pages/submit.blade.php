<!DOCTYPE html>
<html lang="en">
    <head> 
        @include('includes.head')
    </head>
    <body>
        @include('includes.nav')
        <div class="container">   
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label for="company" class="col-sm-2 control-label">Empresa</label>
                      <div class="col-sm-10">
                        <input id="company" type="company" class="form-control" placeholder="Empresa">
                        <p class="help-block">Comece a escrever o nome da empresa e seleccione um dos resultados, caso não disp i sira</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="position" class="col-sm-2 control-label">Posição</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="position" placeholder="Posição">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submeter</button>
                      </div>
                    </div>
                 </form>
        </div>  
        @include('includes.footer')
  </body>
</html>