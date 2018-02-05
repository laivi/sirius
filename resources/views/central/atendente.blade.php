@extends('principal')
@section('conteudo')

<div class="col-lg-13" style="padding: 10px;min-height: 80vh">

  <div class="card col-lg-8 col-md-6" style="float:left;min-height: 85vh; padding: 10px">
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Monitoramento</font></li>
        </ul>
      </div>
    </div>   
    <div id="map"></div>
    <div id="cab_dados" class="breadcrumb-holder none " style="margin-top: 15px" >
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-database" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Dados da ocorrência</font></li>
        </ul>
      </div>
    </div>

    <div id="body_dados" class="card-body none">
      <table class="table table-hover">

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

          <tr>
            <th scope="row">Telefone:</th>
            <td id="tel">(89) 99417-5533</td>
            <th scope="row">Tipo:</th>
            <td id="tipo">Padrão</td>
          </tr>
        </tbody>
      </table>

      <a class="btn btn_repassar" data-toggle="modal" data-target=".bs-example-modal-sm-accept" ><i class="fa fa-check" aria-hidden="true"></i><br> Repassar</a>

      <div id="Repassar_modal" class="modal fade bs-example-modal-sm-accept" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content" style="margin-left:-20vh;width: 80vh;height: 40vh;border-radius: 5px;background: #f5f7fa">  
            <div style="background:#0C9;color:white;width: 100%; text-align: center;">
              <h3 style="font-size: 18px;padding: 10px">Repassar ocorrencia<h3>
              </div>
              <a class="btn btn_modal" id="btn_repassar">Repassar</a>          
            </div>
          </div>  
        </div>

        <a class="btn btn_arquivar"  data-toggle="modal" data-target=".bs-example-modal-sm"> <i class="fa fa-folder-open-o" aria-hidden="true"></i><br>Arquivar</a>

        <div id="Arquivar_modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content" style="margin-left:-20vh;width: 80vh;height: 40vh;border-radius: 5px;background: #f5f7fa">  
              <div style="background: red;width: 100%; text-align: center;">
                <h3 style="font-size: 18px;padding: 10px">Arquivar ocorrencia<h3>
                </div>
                <a class="btn btn_modal" id="btn_arquivar">Arquivar</a>             
              </div>
            </div>  
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" style="float: right;margin-left:-5px;">
        <!-- Daily Feed Widget-->
        <div id="daily-feeds" class="card updates daily-feeds" style="max-height:85vh;height: 85vh">
          <div class="breadcrumb-holder" ">
            <ul class="breadcrumb">
              <li class="breadcrumb-item" style="width: 100%;text-align: center;"><font style="font-size:17px;vertical-align: inherit;">Atendimentos Pendentes </font></li>
              <div class="right-column">
                <div class="badge badge-primary" id="num_element"></div>
              </div>
            </ul>
          </div>   

          <div id="feeds-box" role="tabpanel" class="collapse show"  style="overflow: auto;">
            <div class="feed-box">
              <ul class="feed-elements list-unstyled" id="list">
                <!-- List-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    @stop

    @section('scripts')

    <script type="text/javascript">

      var central_ag = firebase.database().ref('fila_central/aguardando');
      var central_at = firebase.database().ref('fila_central/atendendo');
      var med_ag = firebase.database().ref('fila_medico/aguardando');

  // Insere o li(card) da ocorrencia na lista de espera da cenral 
  central_ag.on('child_added', snap => {

    var key = snap.key;
    var value = snap.val();

    banco.child(key).once('value', snap2 => { 
      console.log(value);
      var object = snap2.val();
      var list = document.getElementById("list");    
      var new_li = document.createElement("LI");       
      new_li.setAttribute('class', 'clearfix btn btn-defoult');
      new_li.setAttribute('style', 'width: 100%');
      new_li.setAttribute('id', snap.key);
      new_li.setAttribute('onClick', 'select_li('+JSON.stringify(object)+','+JSON.stringify(snap2.key)+');');
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
      div_tempo.setAttribute('class', 'date');
      new_li.appendChild(div_avo); 
      div_avo.appendChild(div_pai);
      div_avo.appendChild(div_tempo);
      div_pai.appendChild(img);
      div_pai.appendChild(div_filha);
      div_filha.appendChild(strong_nome);
      div_filha.appendChild(small_telefone);
      div_filha.appendChild(div_neta);
      div_neta.appendChild(small_hora);
      list.insertBefore(new_li, list.childNodes[0]);  // Insert <li> before the first child of <ul>
      $.playSound("http://toquesparabaixar.com/download2/iPhone_SMS_v2_www.ToquesParaBaixar.com.mp3");
      contarElementos();
    });
  });

  // verifica quando a ocorrencia sair da fila de espera da central.
  central_ag.on("child_removed", snap => {
    tira_lista(snap.key)
    contarElementos();
  });

  // stopAtendente
  function tira_lista(key){
    var element = document.getElementById(key);
    element.parentNode.removeChild(element);
  }
  
  function central_atendendo(key){
    central_ag.child(key).remove();
    central_at.update({[key]:"true"});
  }
  
  function arquivar(key){
    central_at.child(key).remove();
    banco.child(key).update({situacao:"arquivada"});
    $('#Arquivar_modal').modal('hide'); 
  }
  
  function central_encaminhar(key){
    console.log("modal aqui");
    central_at.child(key).remove();
    banco.child(key).update({situacao:"fila_medico"});
    med_ag.update({[key]:"true"});
    $('#Repassar_modal').modal('hide'); 
  }

</script>

@stop