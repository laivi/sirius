@extends('principal')
@section('conteudo')

<div id="daily-feeds" class="card updates daily-feeds" style="margin-top: 20px;margin-left: 30%;max-width: 40%; max-height:70vh;height: 70vh">
      <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
        <h2 class="h5 display">Ocorrências em espera</h2>
        <div class="right-column">
          <div class="badge badge-primary" id="num_element"></div>
        </div>
      </div>
      <div id="feeds-box" role="tabpanel" class="collapse show"  style="overflow: auto;">
        <div class="feed-box">
          <ul class="feed-elements list-unstyled" id="list_med">
            <!-- List-->
          </ul>
        </div>
      </div>
    </div>
@stop


