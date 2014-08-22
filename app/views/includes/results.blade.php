@if($results)
<table class="table search-results table-hover">
    <thead>
        <tr>
            <th>Distrito</th>
            <th>Empresa</th>
            <th>Posição</th>
            <th>Salário Mensal</th>
            <th>Género</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $result)
        <tr>
            <td>{{{ $result->district_name }}}</td>
            <td>{{{ $result->company_name }}}</td>
            <td>{{{ $result->position_name }}}</td>
            <td>&euro;{{{ $result->salary_value }}}</td>
            <td>{{{ $result->salary_gender }}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
    <div class="alert alert-warning search-alert" role="alert">Não foram encontrados resultados para a pesquisa que efectuou</div>
@endif