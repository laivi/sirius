@extends('principal')
@section('conteudo')

<div class="col-lg-13" style="padding: 10px;min-height: 80vh">
  <div class="card col-lg-4 col-md-6" style="float:left;min-height: 80vh; padding: 10px">
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Dados da ocorrência</font></li>
        </ul>
      </div>
    </div>   

    <div class="card-body">
      <table class="table table-hover">
        <tbody>
          <tr>
            <th scope="row">Muncipio da ocorrência:</th>
            <td id="municipio">Teresina</td>
          </tr>
          <tr>  
            <th scope="row" >Nome do solicitante:</th>
            <td id="solicitante">Deusimar Teixeira da Silva Junior</td>
          </tr>
          <tr>
            <th scope="row">Local:</th>
            <td id="local">Rua coronel elpidio</td>
          </tr>
          <tr>  
            <th scope="row">Nome do paciente:</th>
            <td id="paciente">Deusimar Teixeira da Silva Junior</td>
          </tr>

          <tr>
            <th scope="row">Ponto de referência:</th>
            <td id="ref">Dogão</td>
          </tr>
          <tr>  
            <th scope="row">Zona:</th>
            <td id="zona">Urbana</td>
          </tr>

          <tr>
            <th scope="row">Telefone:</th>
            <td id="tel">(89) 99417-5533</td>
          </tr>
          <tr>  
            <th scope="row">Tipo:</th>
            <td id="tipo">Padrão</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>  

  <div class="col-lg-8 col-md-6" style="float: right;margin-left:-5px;">
    <form>

      <div class="card" style="min-height: 25vh; padding: 10px">
        <div class="breadcrumb-holder">
          <div class="container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Natureza da ocorrência</font></li>
            </ul>
          </div>
        </div>

        <div style="padding: 10px;">
          <table width="100%">
            <tbody>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="che1" type="checkbox" value="" class="form-control-custom">
                    <label for="che1"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che2" type="checkbox" value="" class="form-control-custom">
                    <label for="che2"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che3" type="checkbox" value="" class="form-control-custom">
                    <label for="che3"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che4" type="checkbox" value="" class="form-control-custom">
                    <label for="che4"> 
                      Option two checked
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="che1" type="checkbox" value="" class="form-control-custom">
                    <label for="che1"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che2" type="checkbox" value="" class="form-control-custom">
                    <label for="che2"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che3" type="checkbox" value="" class="form-control-custom">
                    <label for="che3"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che4" type="checkbox" value="" class="form-control-custom">
                    <label for="che4"> 
                      Option two checked
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="che1" type="checkbox" value="" class="form-control-custom">
                    <label for="che1"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che2" type="checkbox" value="" class="form-control-custom">
                    <label for="che2"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che3" type="checkbox" value="" class="form-control-custom">
                    <label for="che3"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che4" type="checkbox" value="" class="form-control-custom">
                    <label for="che4"> 
                      Option two checked
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="i-checks">
                    <input id="che1" type="checkbox" value="" class="form-control-custom">
                    <label for="che1"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che2" type="checkbox" value="" class="form-control-custom">
                    <label for="che2"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che3" type="checkbox" value="" class="form-control-custom">
                    <label for="che3"> 
                      Option two checked
                    </label>
                  </div>
                </td>
                <td>
                  <div class="i-checks">
                    <input id="che4" type="checkbox" value="" class="form-control-custom">
                    <label for="che4"> 
                      Option two checked
                    </label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
       </div>   
     </div>

    <div class="card" style="margin-top:-20px;min-height: 20vh; padding: 10px">

        <div class="breadcrumb-holder">
          <div class="container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Recolhimento de dados</font></li>
            </ul>
          </div>
        </div>
        <div style="padding: 10px">
        
        <div class="form-group-material" style="margin-top: 5px">
          <label>Dados clinicos: </label>
          <input id="register-username" type="text" name="registerUsername" required="" class="input-material" style="margin-top:-20px">
        </div>
        <div style="margin-top: -15px;">
          <label>Prioridade: </label>
          <select name="account" class="form-control">
            <option><i class="fa fa-square" aria-hidden="true"></i>Emergência</option>
            <option><i class="fa fa-square" aria-hidden="true"></i>Muito Urgente</option>
            <option><i class="fa fa-square" aria-hidden="true"></i>Urgente</option>
            <option><i class="fa fa-square" aria-hidden="true"></i>Pouco Urgente</option>
            <option><i class="fa fa-square" aria-hidden="true"></i>Nada Urgente</option>
          </select>
        </div>
      </div>
    </div>
    <div class="card" style="min-height: 30vh; padding: 10px">
  

    </div>
      <a class="btn" id="" data-toggle="modal" data-target=".bs-example-modal-sm-cancel" style="width: 49.5%;padding: 10px;background: #e9ecef;margin-top: -15px;background: #0C9"><i class="fa fa-check" aria-hidden="true"></i><br> Repassar</a>

      <a class="btn" id="" data-toggle="modal" data-target=".bs-example-modal-sm" style="width: 49.5%;padding: 10px;background: #e9ecef;margin-top: -15px;background: #C00"> <i class="fa fa-folder-open-o" aria-hidden="true"></i><br>Arquivar</a>

  </form>
  </div>
</div>
@stop


