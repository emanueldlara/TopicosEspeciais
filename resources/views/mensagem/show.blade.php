<h1>Mensagem {{$mensagem->id}}</h1>
<hr>
	<h3><b>ID:</b>{{$mensagem->id}}</h3>
    <h3><b>Título:</b>{{$mensagem->titulo}}</h3>
    <h3><b>Data do Evento:</b>{{$mensagem->autor}}</h3>
    <h3><b>Descrição:</b>{{$mensagem->texto}}</h3>
    <h3><b>Criada em:</b>{{$mensagem->created_at}}</h3>
    <h3><b>Atualizada em:</b>{{$mensagem->updated_at}}</h3>

    <!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->


