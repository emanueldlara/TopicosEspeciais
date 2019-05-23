<h1>Excluir Registro</h1>
<hr>
<form action="/mensagens/{{$mensagem->id}}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p> Então isso é um adeus ... Deseja excluir o registro {{$mensagem->id}} das mensagens</p>
<input type="submit" value="Deletar">
</form>