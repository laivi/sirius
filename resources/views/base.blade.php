@extends('principal')
@section('conteudo')

<div class="col-lg-13 col">

  <div class="card col-lg-8 col-md-6 col" style="float:left;">
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font class="title_bar">Monitoramento</font></li>
        </ul>
      </div>
    </div>   
    <div id="map"></div>
    <div id="cab_dados" class="breadcrumb-holder none " style="margin-top: 15px" >
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-database" aria-hidden="true"></i><font class="title_bar">Dados da ocorrência</font></li>
        </ul>
      </div>
    </div>

    <div id="body_dados" class="card-body none">
      <table class="table">

        <tbody>
          <tr>
            <th scope="row">Muncipio da ocorrência:</th>
            <td id="municipio">Teresina</td>
            <th scope="row" >Nome do solicitante:</th>
            <td id="solicitante">Deusimar Teixeira da Silva Junior</td>
          </tr>
          <tr>
            <th scope="row">Local:</th>
            <td id="local">Rua coronel elpidio</td>
            <th scope="row">Nome do paciente:</th>
            <td id="paciente">Deusimar Teixeira da Silva Junior</td>
          </tr>

          <tr>
            <th scope="row">Ponto de referência:</th>
            <td id="ref">Dogão</td>
            <th scope="row">Zona:</th>
            <td id="zona">Urbana</td>
          </tr>

        </tbody>
      </table>

      <a class="btn btn_info" data-toggle="modal" data-target=".bs-example-modal-sm-info" ><i class="fa fa-address-card"></i><br> Informações técnicas da ocorrência</a>

      <div id="info_modal" class="modal fade bs-example-modal-sm-info" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal_content_c"> 
            <div class="breadcrumb-holder">
              <div class="container-fluid">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font class="title_bar">Dados médicos</font></li>
                </ul>
              </div>
            </div> 
            <table class="table">
              <tbody>      
                <tr>
                  <th scope="row">Dados clinicos:</th>
                  <td id="dados_c">Sem dados cadastrados.</td>
                </tr>
                <tr>
                  <th scope="row">Natureza da ocrrência:</th>
                  <td id="natureza">Sem dados cadastrados.</td>
                </tr>
                <tr>
                  <th scope="row">Dados sobre o paciente:</th>
                  <td id="info">Sem dados cadastrados.</td>
                </tr>
                <tr>
                  <th scope="row">Prioridade:</th>
                  <td id="prioridade">Sem dados cadastrados.</td>
                </tr>
              </tbody>
            </table>

            <div style="width:100%">
              <a class="btn btn_arquivar" id="btn_arquivar"  data-toggle="modal" data-target=".bs-example-modal-sm"> <i class="fa fa-folder-open-o" aria-hidden="true"></i><br>Arquivar</a>

              <a class="btn btn_repassar" id="btn_repassar"  data-toggle="modal" data-target=".bs-example-modal-sm"> <i class="fa fa-folder-open-o" aria-hidden="true"></i><br>Aceitar</a>
            </div>

          </div>  
        </div>
      </div>
    </div>
  </div>      

  <div class="col-lg-4 col-md-6 c-float-m-5">
    <!-- Daily Feed Widget-->
    <div id="daily-feeds" class="card updates daily-feeds">
      <div class="breadcrumb-holder" ">
        <ul class="breadcrumb">
          <li class="breadcrumb-item ctr"><font class="breadcrumb-text">Ocorrências Pendentes </font></li>
          <div class="right-column">
            <div class="badge badge-primary" id="num_element"></div>
          </div>
        </ul>
      </div>   

      <div id="feeds-box" role="tabpanel" class="collapse show"  style="overflow: auto;">
        <div class="feed-box">
          <ul class="feed-elements list-unstyled" id="list">
            <!-- List-->
            <div id="5"><!-- Nível de prioridade--></div>
            <div id="4"><!-- Nível de prioridade--></div>
            <div id="3"><!-- Nível de prioridade--></div>
            <div id="2"><!-- Nível de prioridade--></div>
            <div id="1"><!-- Nível de prioridade--></div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('scripts')

<script type="text/javascript">


  var base_ag = firebase.database().ref('fila_base/aguardando');
  var base_at = firebase.database().ref('fila_base/atendendo');
  var base_en = firebase.database().ref('fila_base/encaminhado');

  // Insere o li(card) da ocorrencia na lista de espera da cenral 
  base_ag.on('child_added', snap => {

    var key = snap.key;
    var value = snap.val();

    banco.child(key).once('value', snap2 => { 
      console.log(value);
      var object = snap2.val();
      var prioridade = object.atendimento.prioridade;   
      //Adiciona card de acordo com a prioridade   
      var list = document.getElementById(prioridade);
      var new_li = document.createElement("LI");       
      new_li.setAttribute('class', 'clearfix btn btn-defoult');
      new_li.setAttribute('style', 'width: 100%');
      new_li.setAttribute('id', snap.key);
      new_li.setAttribute('onClick', 'select_li_base('+JSON.stringify(object)+','+JSON.stringify(snap2.key)+');');
      var div_avo = document.createElement("DIV");
      div_avo.setAttribute('class', 'feed d-flex justify-content-between');
      var div_pai = document.createElement("DIV");
      div_pai.setAttribute('class', 'feed-body d-flex justify-content-between');
      var img = document.createElement('IMG');
      img.setAttribute('src', 'img/avatar-icon.png');
      img.setAttribute('alt', 'person');
      img.setAttribute('class', 'img-fluid rounded-circle feed-profile');
      var div_filha = document.createElement("DIV");
      div_filha.setAttribute('class', 'content');
      var strong_nome = document.createElement("STRONG");
      strong_nome.innerText = object.solicitante;
      var small_telefone = document.createElement("SMALL");
      small_telefone.innerText = object.contato.telefone;
      var div_neta = document.createElement("DIV");
      div_neta.setAttribute('class', 'full-date');
      var small_hora = document.createElement("SMALL");
      small_hora.innerText = object.hora;
      var div_tempo = document.createElement("DIV");
      div_tempo.setAttribute('class', 'date star_line');
      for (var i = object.atendimento.prioridade -1; i >= 0; i--) {
       div_tempo.innerHTML += "<i class='fa fa-star'></i>";
     }

     new_li.appendChild(div_avo); 
     div_avo.appendChild(div_pai);
     div_avo.appendChild(div_tempo);
     div_pai.appendChild(img);
     div_pai.appendChild(div_filha);
     div_filha.appendChild(strong_nome);
     div_filha.appendChild(small_telefone);
     div_filha.appendChild(div_neta);
     div_neta.appendChild(small_hora);
      list.insertBefore(new_li, null);  // Insert <li> before the first child of <ul>
      $.playSound("http://toquesparabaixar.com/download2/iPhone_SMS_v2_www.ToquesParaBaixar.com.mp3");
      contarElementos();
    });
  });

  // verifica quando a ocorrencia sair da fila de espera da central.
  base_ag.on("child_removed", snap => {
    tira_lista(snap.key)
    contarElementos();
  });

  // stopAtendente
  function tira_lista(key){
    var element = document.getElementById(key);
    element.parentNode.removeChild(element);
  }
  
  function base_atendendo(key){
    base_ag.child(key).remove();
    base_at.update({[key]:"true"});
  }
  
  function arquivar(key){
    base_at.child(key).remove();
    banco.child(key).update({situacao:"arquivada"});
    $('#info_modal').modal('hide'); 
    
  }
  
  function base_encaminhar(key){
    base_at.child(key).remove();
    base_en.update({[key]:"true"});;
    banco.child(key).update({situacao:"deslocando"});
    $('#info_modal').modal('hide'); 
  }

</script>

@stop