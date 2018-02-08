@extends('principal')
@section('conteudo')

<img class="img_home" src="{{ asset('img/logo.png')}}">
<div style="margin-top:80px; width: 80%;margin-left:15%;">
	<a class="btn_home btn" href="/atendente">Atendente</a>
	<a class="btn_home btn" href="/medico_fila">Médico</a>
	<a class="btn_home btn" href="/base">Base</a>
</div>

@stop