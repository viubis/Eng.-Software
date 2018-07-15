<!DOCTYPE html>
<html>
<head>

  <title>Relatório Geral</title>
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Indicador</th>
        <th scope="col">Janeiro</th>
        <th scope="col">Fevereiro</th>
        <th scope="col">Marco</th>
        <th scope="col">Abril</th>
        <th scope="col">Maio</th>
        <th scope="col">Junho</th>
        <th scope="col">Julho</th>
        <th scope="col">Agosto</th>
        <th scope="col">Setembro</th>
        <th scope="col">Novembro</th>
        <th scope="col">Outubro</th>
        <th scope="col">Dezembro</th>
        <th scope="col">Total (Ano)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @php $cadastro = $logs->where('operacao_id', '=', 1)->first() @endphp
        <th scope="row">{{'Cadastros'}}</th>
        <td>{{$cadastro->whereMonth('data', '01')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '02')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '03')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '04')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '05')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '06')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '07')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '08')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '09')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '10')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '11')->get()->count()}}</td>
        <td>{{$cadastro->whereMonth('data', '12')->get()->count()}}</td>
        <td>{{$cadastro->count()}}</td>
        
      </tr>
    </tbody>
  </table>
</body>
<style type="text/css">
    body{
        font-size: small;
    }
</style>
</html>

