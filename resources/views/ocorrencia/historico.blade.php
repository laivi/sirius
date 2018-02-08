@extends('principal')
@section('conteudo')


<div id="daily-feeds" class="card updates daily-feeds feeds_t">
  <div class="breadcrumb-holder" ">
    <ul class="breadcrumb">
      <li class="breadcrumb-item ctr"><font class="title_bar" >Histórico de Ocorrências</font></li>
      <div class="right-column">
        <div class="badge badge-primary" id="num_element"></div>
      </div>
    </ul>
  </div>   

  <div id="feeds-box" role="tabpanel" class="collapse show"  style="overflow: auto;">
    <div class="feed-box">

      <table width="100%" border="1"  class="table  table-striped table-bordered table-hover">

       <thead>
        <tr class="ctr" ">
         <th>Status</th>
         <th>Telefone</th>
         <th>Municipio</th>
         <th>Solicitante</th>
         <th>Paciente</th>
         <th>Ações</th>
       </tr>
     </thead>
     <div style="overflow: auto;">
     <tbody id="tbody">

     </tbody>	
     </div>
   </table>    

 </div>
</div>

@stop

@section('scripts')

<script type="text/javascript">

  // Insere o td da ocorrencia na tabela 
  banco.on('child_added', snap => {

    var object = snap.val();
    var table = document.getElementById("tbody");    
    var new_tr = document.createElement("TR"); 
    var td_status = document.createElement("TD");
    td_status.setAttribute('id', snap.key);
    console.log(object.situacao);
    switch(object.situacao){
       case "fila_medico": 
       td_status.innerHTML = "<div class='alert medico'>Médico</div>";
       break;
       case "fila_base": 
       td_status.innerHTML = "<div class='alert base'>Base</div>";
       break;
       case "fila_central": td_status.innerHTML = "<div class='alert central'>Central</div>";
       break;
       case "deslocando": td_status.innerHTML = "<div class='alert deslocando'>A caminho</div>";
       break;
       case "arquivada": td_status.innerHTML = "<div class='alert arquivada'>Finalizada</div>";
       break;
    }
     var td_solicitante = document.createElement("TD");
     td_solicitante.innerText = object.solicitante;
     var td_municipio = document.createElement("TD");
     td_municipio.innerText = object.localizacao.municipio;
     var td_tel = document.createElement("TD");
     td_tel.innerText = object.contato.telefone;
     var td_paciente = document.createElement("TD");
     td_paciente.innerText = object.paciente;//ver isso
     var td_acao = document.createElement("TD");
     td_acao.innerHTML = "<a class='btn btn-table' href='/ocorrencia/"+snap.key+"/show'> Ver ocorrência </a>";

     new_tr.appendChild(td_status); 
     new_tr.appendChild(td_tel);
     new_tr.appendChild(td_municipio);
     new_tr.appendChild(td_solicitante);
     new_tr.appendChild(td_paciente);
     new_tr.appendChild(td_acao);

     tbody.insertBefore(new_tr, null);  // Insert <li> before the first child of <ul>
        //contarElementos();
  });

  banco.on('child_changed', snap => {
    var object = snap.val();
    var td_status = document.getElementById(snap.key); 
    switch(object.situacao){
     case "fila_medico": 
     td_status.innerHTML = "<div class='alert medico'>Médico</div>";
     break;
     case "fila_base": 
     td_status.innerHTML = "<div class='alert base'>Base</div>";
     break;
     case "fila_central": td_status.innerHTML = "<div class='alert central'>Central</div>";
     break;
   }
 });

</script>

@stop


