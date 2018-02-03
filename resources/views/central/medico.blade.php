@extends('principal')
@section('conteudo')

<div class="col-lg-13" style="padding: 10px;min-height: 80vh;">
  <div class="card col-lg-4 col-md-6" style="float:left;min-height: 83vh; padding: 10px">
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Dados da ocorrência</font></li>
        </ul>
      </div>
    </div>   

    <div class="card-body" style="margin-top: 30px;">
      <table class="table table-hover" style="color:#999;">
        <tbody>
          <tr>
            <th scope="row">Muncipio da ocorrência:</th>
            <td id="municipio"></td>
          </tr>
          <tr>  
            <th scope="row" >Nome do solicitante:</th>
            <td id="solicitante"></td>
          </tr>
          <tr>
            <th scope="row">Local:</th>
            <td id="local"></td>
          </tr>
          <tr>  
            <th scope="row">Nome do paciente:</th>
            <td id="paciente"></td>
          </tr>

          <tr>
            <th scope="row">Ponto de referência:</th>
            <td id="ref"></td>
          </tr>
          <tr>  
            <th scope="row">Zona:</th>
            <td id="zona"></td>
          </tr>

          <tr>
            <th scope="row">Telefone:</th>
            <td id="tel"></td>
          </tr>
          <tr>  
            <th scope="row">Tipo:</th>
            <td id="tipo"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="width: 100%">
    
    <a class="btn" data-toggle="modal" data-target=".bs-example-modal-sm-accept" style="width: 49.3%;padding: 10px;background: #e9ecef;margin-top: -15px;background: #0C9"><i class="fa fa-check" aria-hidden="true"></i><br> Repassar</a>

    <div id="myModal" class="modal fade bs-example-modal-sm-accept" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" style="margin-left:-20vh;width: 80vh;height: 40vh;border-radius: 5px;background: #f5f7fa">  
          <div style="background:#0C9;color:white;width: 100%; text-align: center;">
            <h3 style="font-size: 18px;padding: 10px">Encaminhar ocorrencia para a base <h3>
          </div>
          <div style="padding: 20px;text-align: center;">
            <label>Base disponíveis:</label>
            <select class="form-control">
              <option>Paulistana</option>
            </select>
          </div>
          <a class="btn btn_modal" id="btn_repassar" onclick="medico_encaminhar('{{$key}}')">Repassar</a>
        </div>
      </div>  
    </div>


      <a class="btn" id="" data-toggle="modal" data-target=".bs-example-modal-sm" style="width: 49.3%;padding: 10px;background: #e9ecef;margin-top: -15px;background: #C00"> <i class="fa fa-folder-open-o" aria-hidden="true"></i><br>Arquivar</a>

      <div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" style="margin-left:-20vh;width: 80vh;height: 40vh;border-radius: 5px;">  
          <div style="background: red;width: 100%; text-align: center;">
            <h3 style="font-size: 18px;padding: 10px">Arquivar ocorrencia<h3>
          </div>
          <a class="btn btn_modal" onclick="arquivar('{{$key}}')">Arquivar</a>             
        </div>
      </div>  
    </div>

    </div>
  </div> 

  <div class="col-lg-8 col-md-6" style="float: right;margin-left:-5px;color:#999;">
    <form>
      <div class="card" style="min-height: 25vh; padding: 10px">
        <div class="breadcrumb-holder">
          <div class="container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Natureza da ocorrência</font></li>
            </ul>
          </div>
        </div>

        <div style="padding: 15px;">
          <table width="100%">
            <tbody>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="c_med_1" type="checkbox" value="Acidente com animais peçonhentos" class="form-control-custom">
                    <label for="c_med_1"> 
                      Acidente com animais peçonhentos 
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_2" type="checkbox" value="Acidente com animais peçonhentos" class="form-control-custom">
                    <label for="c_med_2"> 
                      Acidente com outros animais 
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_3" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_3"> 
                      Acidente de trânsito
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_4" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_4"> 
                      Afogamento
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="c_med_5" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_5"> 
                      Urgência Obstétrica
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_6" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_6"> 
                      Arma Branca
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_7" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_7"> 
                      Arma de Fogo
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_8" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_8"> 
                      Choque Elétrico
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="c_med_9" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_9"> 
                      Envenenamento
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_10" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_10"> 
                      Mal Súbito
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_11" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_11"> 
                      Outros
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_12" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_12"> 
                      Queda
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="c_med_13" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_13"> 
                      Queimadura
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_14" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_14"> 
                      Suicídio
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_15" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_15"> 
                      Urgência Clínica 
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="c_med_16" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_16"> 
                      Agressão 
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="c_med_17" type="checkbox" value="" class="form-control-custom">
                    <label for="c_med_17"> 
                      Urgência Psiquiatra
                    </label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>   
      </div>

      <div class="card" style="margin-top: -20px;min-height: 20vh; padding: 10px">
        <div class="breadcrumb-holder">
          <div class="container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Recolhimento de dados</font></li>
            </ul>
          </div>
        </div>
        <div style="padding: 10px">
          <label>Dados clinicos: </label>
          <input id="dados_c" type="text" class="line" style="width: 100%; margin-bottom: 15px;margin-top:-15px;">

          <label>Prioridade: </label>
          <select id="prioridade" class="line" style="margin-bottom: 15px;margin-top: -10px;">
            <option></option>
            <option value="5">Emergência</option>
            <option value="4">Muito Urgente</option>
            <option value="3"></i>Urgente</option>
            <option value="2"></i>Pouco Urgente</option>
            <option value="1"></i>Nada Urgente</option>
          </select>

          <label>Sobre o(s) paciente(s):</label>
          <textarea id="dados_p" cols="30" rows="5" class="form-control" style="min-height: 12vh; max-height: 12vh"></textarea>
        </div>  
      </div>
    </form>
  </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
var atendimento = firebase.database().ref('ocorrencias/{{$key}}/atendimento');
var base_ag = firebase.database().ref('fila_base/aguardando');
var med_at = firebase.database().ref('fila_medico/atendendo');

  banco.child('{{$key}}').once('value', snap2 => { 
    var object = snap2.val();
      document.getElementById("municipio").innerText = object.localizacao.municipio;
      document.getElementById("solicitante").innerText = object.solicitante;
      document.getElementById("local").innerText = object.localizacao.local;
      document.getElementById("ref").innerText = object.localizacao.referencia;
      document.getElementById("zona").innerText = object.localizacao.zona;  
      document.getElementById("tel").innerText = object.contato.telefone;
      document.getElementById("tipo").innerText = object.tipo;
      document.getElementById("paciente").innerText = object.paciente;
    });

    function medico_encaminhar(key){
      atendimento.update({dados_clinicos:document.getElementById("dados_c").value,prioridade:document.getElementById("prioridade").value,dados_paciente:document.getElementById("dados_p").value});
        banco.child('{{$key}}').update({status:"fila_base"});
        med_at.child(key).remove();
        base_ag.update({[key]:"true"});
        window.location.assign("/medico_fila");
    }

    function arquivar(key){
      med_at.child(key).remove();
      banco.child(key).update({status:"arquivada"});    
    }
  
</script>
@stop


