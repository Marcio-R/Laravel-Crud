<div class="container p-3">
    @include('Admin.includes.alerts')
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{$client->name ??old('name')}}">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com" value="{{$client->email ??old('email')}}">
          </div>

        <div class="form-group">
          <label>Telefone</label>
          <input type="tel" class="form-control" name="phone" placeholder="Telefone" value="{{$client->phone ?? old ('phone')}}">
        </div>

        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" class="form-control" name="date_birth" placeholder="Data de Nascimento" value="{{$client->date_birth ?? old ('date_birth')}}">
          </div>

          <div class="form-group">
            <label>CPF</label>
            <input type="number" class="form-control" name="cpf" placeholder="Cpf" value="{{$client->cpf  ?? old('cpf')}}">
          </div>
          @php
            
          @endphp
        <div class="form-group">
          <label for="exampleFormControlSelect1">Estado Civil</label>
          <select class="form-control" name="marital_status">
            <option value="S" {{old('marital_status',$client->maritalStatus) == 'S'?'selected="selected"':''}}>Solteiro</option>
            <option value="C" {{old('marital_status',$client->maritalStatus) == 'C'?'selected="selected"':''}}>Casado</option>
            <option value="D" {{old('marital_status',$client->maritalStatus) == 'D'?'selected="selected"':''}}>Divorsiado</option>
          </select>
        </div>
                
        <div class="radio">
            <label>
                <input type="radio" name="sex" value="m" {{old('sex',$client->sex)== 'm'?'checked ="checked"':''}}> Masculino
            </label>
        </div>

        <div class="radio">
            <label>
                <input type="radio" name="sex" value="f" {{old('sex',$client->sex )== 'f'?'checked ="checked"':''}}> Feminino
            </label>
        </div>

        <div class="form-group">
            <label>Deficiencia Fisica</label>
            <input class="form-control" name="physical_disability" placeholder="DF" value="{{$client->physical_disability ?? old('physical_disability')}}">
        </div>
        
        <div class="radio">
            <label>
                Inadimplante?
            </label>  
                <input type="radio" name="defaulter" value="s" {{old('defaulter',$client->defaulter) == 's'?'checked ="checked"':''}}>Sim
                <input type="radio" name="defaulter" value="n" {{old('defaulter',$client->defaulter) == 'n'?'checked ="checked"':''}}>Não
            </label>
        </div>
        <div class="form-group">
          <input type="file" name="image" class="form-control" value="Enviar">
        </div>
</div>