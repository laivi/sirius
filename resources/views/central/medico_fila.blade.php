@extends('principal')
@section('conteudo')

        <!-- Daily Feed Widget-->
        <div id="daily-feeds" class="card updates daily-feeds" style="margin-top: 20px;margin-left: 30%;max-width: 40%; max-height:70vh;height: 70vh">
          <div class="breadcrumb-holder" ">
            <ul class="breadcrumb">
              <li class="breadcrumb-item" style="width: 100%;text-align: center;"><font style="font-size:17px;vertical-align: inherit;">Ocorrências em espera</font></li>
              <div class="right-column">
                <div class="badge badge-primary" id="num_element"></div>
              </div>
            </ul>
          </div>   

          <div id="feeds-box" role="tabpanel" class="collapse show"  style="overflow: auto;">
            <div class="feed-box">
              <ul class="feed-elements list-unstyled" id="list_med">
                <!-- List-->
              </ul>
            </div>
          </div>
        </div>
      </div>
@stop

@section('scripts')

<script type="text/javascript">
    
  var med_ag = firebase.database().ref('fila_medico/aguardando');
  var med_at = firebase.database().ref('fila_medico/atendendo');

  // Insere o li(card) da ocorrencia na lista de espera da cenral 
  med_ag.on('child_added', snap => {
    
    var key = snap.key;
    var value = snap.val();

    banco.child(key).once('value', snap2 => { 
      console.log(value);
      var object = snap2.val();
      var list = document.getElementById("list_med");    
      var new_li = document.createElement("LI");       
      new_li.setAttribute('class', 'clearfix btn btn-defoult');
      new_li.setAttribute('style', 'width: 100%');
      new_li.setAttribute('id', snap.key);
      new_li.setAttribute('onClick', 'medico_atendendo('+JSON.stringify(snap2.key)+');');
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
      //contarElementos();
    });
  });

  // verifica quando a ocorrencia sair da fila de espera da central.
 
  
  function medico_atendendo(key){
    med_ag.child(key).remove();
    med_at.update({[key]:"medico_atendendo"});
    window.location.assign("/ocorrencia/"+key+"/show");
  }

</script>

@stop


