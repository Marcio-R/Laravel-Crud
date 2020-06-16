@extends('Admin.Master.Layout')
@section('title','Lista de Clientes')

@section('content')
<div class="container-fluid p-2 ml-auto">
    <h2 style="text-align: center">Listagem de Clientes</h2>
    <a href="{{route('client.create')}}" class="btn btn-primary">Novo Cadastro</a>
    <hr>
    <form action="{{route('client.search')}}" method="post" class="form form-inline">
      @csrf
      <input type="search" name="filter" placeholder="Filtrar" class="form-control">
      <input type="submit" class="btn btn-info" value="Pesquisar">
    </form>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Data Nasc</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>status</th>
            <th>Devedor</th>
            <th>Deficiencia</th>
            <th width="100">Imagem</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cls)
          <tr>
            <td>{{$cls->id}}</td>
            <td>{{$cls->name}}</td>
            <td>{{$cls->cpf}}</td>
            <td>{{$cls->date_birth}}</td>
            <td>{{$cls->email}}</td>
            <td>{{$cls->phone}}</td>
            <td>{{$cls->sex}}</td>
            <td>{{$cls->marital_status}}</td>
            <td>{{$cls->defaulter}}</td>
            <td>{{$cls->physical_disability}}</td>
            <td>
                @if ($cls->image)
                  <img src="{{url("storage/$cls->image}")}}" style="max-width:100px;">
                @endif
            </td>
            <td>
              <a href="{{route('client.show',$cls->id)}}">Detalhes</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
  </div>
  @if (isset($filter))
    {!!$clientes->appends($filter)->links()!!}
  @else
    {!!$clientes->links()!!}  
  @endif
 
@endsection