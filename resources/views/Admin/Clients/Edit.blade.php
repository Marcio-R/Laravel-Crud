@extends('Admin.Master.Layout')

@section('titel','Formulario de Cadastro')
    
@section('content')
<div class="container p-3">
    <h3 style="text-align:center">Cadastra Edição Cliente</h3>

    <form action="{{route('client.update',$client->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        
        @include('Admin.Clients._Form')

        <input type="submit" class="btn btn-primary" value="Salvar">
        <a href="{{route('client.index')}}" class="btn btn-primary">Voltar</a>
    </form>
  
</div>
@endsection