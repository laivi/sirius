@extends('principal')
@section('conteudo')

<div class="col-lg-13" style="padding: 10px;min-height: 80vh">

  <div class="card col-lg-4 col-md-6" style="float:left;min-height: 85vh; padding: 10px">
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Localização</font></li>
        </ul>
      </div>
    </div>   
    <div id="map"></div>
  </div>

  <div class="col-lg-8 col-md-6" style="float: right;margin-left:-5px;">
    <div class="card " style="padding: 10px;min-height: 85vh">
          <div id="body_dados" class="card-body">

          <div class="breadcrumb-holder">
              <div class="container-fluid">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Status da o corrência</font></li>
                </ul>
              </div>
            </div>
            
            

            <div class="breadcrumb-holder">
              <div class="container-fluid">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Dados da ocorrência</font></li>
                </ul>
              </div>
            </div>

            <table class="table ">
              <tbody>
                <tr>
                  <th scope="row">Muncipio da ocorrência:</th>
                  <td id="municipio"></td>
                  <th scope="row" >Nome do solicitante:</th>
                  <td id="solicitante"></td>
                </tr>
                <tr>
                  <th scope="row">Local:</th>
                  <td id="local"></td>
                  <th scope="row">Nome do paciente:</th>
                  <td id="paciente"></td>
                </tr>

                <tr>
                  <th scope="row">Ponto de referência:</th>
                  <td id="ref"></td>
                  <th scope="row">Zona:</th>
                  <td id="zona">Urbana</td>
                </tr>

                <tr>
                  <th scope="row">Telefone:</th>
                  <td id="tel"></td>
                  <th scope="row">Tipo:</th>
                  <td id="tipo">Padrão</td>
                </tr>
            </tbody>
          </table>
          <table class="table" style="margin-top: -15px">
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

          </div>
        </div>
      </div>

    @stop

    @section('scripts')

    <script type="text/javascript">

    banco.child('{{$key}}').once('value', snap2 => { 
      var object = snap2.val();
      document.getElementById("municipio").innerText = object.localizacao.municipio;
      document.getElementById("solicitante").innerText = object.solicitante;
      document.getElementById("ref").innerText = object.localizacao.referencia;
      document.getElementById("zona").innerText = object.localizacao.zona;  
      document.getElementById("tel").innerText = object.contato.telefone;
      document.getElementById("tipo").innerText = object.tipo;
      document.getElementById("local").innerText = object.localizacao.local;
      document.getElementById("paciente").innerText = object.paciente;
      document.getElementById("info").innerText = object.atendimento.dados_paciente;
      document.getElementById("natureza").innerText = object.atendimento.natureza_ocorrencia;
      document.getElementById("dados_c").innerText = object.atendimento.dados_clinicos;
      switch(object.atendimento.prioridade){
        case "1":
          document.getElementById("prioridade").innerText = "Emergência" ;
          break;
        case "2":
          document.getElementById("prioridade").innerText = "Muito Urgente";
          break;
        case "3":
          document.getElementById("prioridade").innerText = "Urgente" ;
          break;
        case "4":
          document.getElementById("prioridade").innerText = "Pouco Urgente" ;
          break;
        case "5":
          document.getElementById("prioridade").innerText = "Nada Urgente";
          break;        
      }
      map_(object.localizacao.lgt, object.localizacao.lat);
  });

      function map_(long,lat) {
        var uluru = {lat:lat,lng:long};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }  
</script>

@stop