<h1>Formulário de edição da mensagem </h1>
<hr>

	<form action="/mensagens/{{$mensagem->id}}" method ="POST">
    {{csrf_field() }}
    {{method_field ('PUT') }}
    Título:              <input type="text" name="titulo" value="{{$atividade->titulo}}" >    <br>
    Descrição:           <input type="text" name="texto" value="{{$mensagem->texto}}">        <br>
    Agendado para:       <input type="text" name="autor" value="{{$mensagem->autor}}">        <br>
    <input type="submit" value="Salvar">
    </form>

    @if ($errors->any())
<div class="container">
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li> {{ $error }}</li>
@endforeach
</ul>
</div>
</div>
@endif
