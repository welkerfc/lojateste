@extends('site.layout')
@section('title', 'Loja Teste')
@section('conteudo')
  
<div class="row container">
    @foreach ($produtos as $item)
        
    
    <div class='col s12 m3'>
        <div class="card">
            <div class="card-image">
              <img src="{{$item->imagem}}">
              <span class="card-title">{{$item->nome}}</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>{{ Str::limit($item->descricao, 15)}}</p>
            </div>
          </div>
    </div>
    @endforeach

    
</div>

<div class="row center">
    {{$produtos->links('custom.pagination')}}
</div>
@endsection