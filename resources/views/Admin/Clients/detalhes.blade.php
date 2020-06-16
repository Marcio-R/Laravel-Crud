@extends('Admin.Master.Layout')

@section('titel','Detalhes do Cliente')
    
@section('content')
    <div class="container-fluid p-2 ml-auto">
        <h3 style="text-align:center">Detalhes do Cliente</h3>
        <a href="{{route('client.index')}}" class="btn btn-primary" >Voltar</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Data Nasc</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">status</th>
                    <th scope="col">Devedor</th>
                    <th scope="col">Deficiencia</th>
                    <th scope="col">Ações</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->cpf}}</td>
                    <td>{{$client->date_birth}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->sex}}</td>
                    <td>{{$client->marital_status}}</td>
                    <td>{{$client->defaulter}}</td>
                    <td>{{$client->physical_disability}}</td>
                    <td><a href="{{route('client.edit',$client->id)}}"class="btn btn-success">Editar</a></td>
                    <td>
                        <form action="{{route('client.destroy',$client->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Excluir">
                        </form>
                    </td>
                </tr>
            </tbody> 
        </table> 
    </div>
@endsection