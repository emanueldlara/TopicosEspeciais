<h1>Excluir Registro</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p> Então isso é um adeus ... Deseja excluir o registro {{$atividade->id}} das atividades</p>
<input type="submit" value="Deletar">
</form>