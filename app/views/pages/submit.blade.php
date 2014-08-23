<!DOCTYPE html>
<html lang="en">
    <head> 
        @include('includes.head')
    </head>
    <body>
        @include('includes.nav')
        <div class="container"> 
            <h2>Submeter</h2>
            <p>
                Nesta página poderá inserir o seu salário, relembramos que está em confidencialidade absoluta.<br/>
                Todos os campos são obrigatórios.
            </p>
            <div class="validate-response"></div>
            <form action="insert/salary" method="POST" role="form">
                <div class="form-group col-md-6">
                  <label for="company">Empresa</label>                 
                    <select id="company" name="company" class="required form-control">
                        <option value="" selected="selected">Selecione uma</option>
                        @foreach($data['companies'] as $company)
                        <option value="{{{ $company->company_id }}}">{{{ $company->company_name }}}</option>
                        @endforeach
                    </select>
                    <p class="help-block">Em que empresa trabalha?</p>
                </div>
                <div class="form-group col-md-6">
                    <label for="position">Posição</label>                  
                    <select id="position" name="position" class="required form-control">
                        <option value="" selected="selected">Selecione uma</option>
                        @foreach($data['positions'] as $position)
                        <option value="{{{ $position->position_id }}}">{{{ $position->position_name }}}</option>
                        @endforeach
                    </select>
                    <p class="help-block">O que faz na empresa?</p>
                </div>
                
                
                
                <div class="form-group col-md-6">
                    <label for="gender">Género</label>                 
                    <select class="required form-control" name="gender">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div class="form-group col-md-6">
                    <label for="position">Salário</label>
                    <div class="input-group">
                        <div class="input-group-addon">€</div>
                        <input class="required form-control" type="number" name="salary" placeholder="Insira o seu salário">
                    </div>
                    <p class="help-block">Insira o seu salário líquido, ou seja, o que leva para casa no fim do mês.</p>
                </div>
                
                
                
                <div class="form-group col-md-12">
                  <label for="district">Distrito</label>
                  
                    <select class="required form-control" id="district"name="district">
                        <option value="" selected="selected">Seleccione um</option>
                        @foreach($data['districts'] as $district)
                        <option value="{{{$district->district_id}}}">{{{$district->district_name}}}</option>
                        @endforeach
                    </select>
                  
                </div>
                <!--<div class="form-group">
                  <label for="district" class="col-sm-2 control-label">Observações</label>
                  <div class="col-sm-10">
                    <textarea name="extra" class="form-control" rows="3" placeholder="Se quiser adicionar detalhes"></textarea>
                  </div>
                </div>-->
                <div class="form-group">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submeter</button>
                    </div>
                </div>
             </form>
        </div>  
        @include('includes.footer')
  </body>
</html>