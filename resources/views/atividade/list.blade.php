<h1>Lista de Atividades</h1>
<hr>

@if (\Session::has('sucess'))
<div class="container">
 <div class="alert alert-sucess">
   {{\Session::get('sucess')}}
   </div>
   </div>
 @endif

@foreach($atividades as $atividade)
	<h3>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a> </p>
	<p>{{$atividade->title}}</p>
	<p>{{$atividade->description}}</p>
	<a href="/atividades/{{$atividade->id}}/edit"> Editar a atividade {{$atividade->id}}</a>
	<br>
	<br>
	<a href="/atividades/{{$atividade->id}}/delete"> Deletar a atividade {{$atividade->id}}</a> 
	<br>
@endforeach



<h2><a href="/atividades/create">Criar Nova Atividade</a></h2>
<br>
<h2><a href="/mensagens">Ir para Mensagens</a></h2>
<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->


