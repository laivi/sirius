@extends('principal')
@section('conteudo')

<img class="img_home" src="{{ asset('img/logo.png')}}">
<div style="margin-top:80px; width: 80%;margin-left:15%">
	<a class="btn_home" href="/atendente">Atendente</a>
	<a class="btn_home" href="/medico_fila">medico</a>
	<a class="btn_home" href="">Base</a>
</div>

@stop