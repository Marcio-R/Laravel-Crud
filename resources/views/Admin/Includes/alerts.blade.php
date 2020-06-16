<ul class="alert alert-danger">
    @if ($errors->any())
        @foreach($errors->all() as $erros)
            <li>{{$erros}}</li>
        @endforeach
    @endif
</ul>