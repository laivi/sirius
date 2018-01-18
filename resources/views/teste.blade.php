@extends('principal')
@section('conteudo')

<div class="col-lg-13" style="padding: 10px;min-height: 80vh">


  <div class="card col-lg-8 col-md-6" style="float:left;min-height: 80vh; padding: 10px">
    <div class="breadcrumb-holder">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-crosshairs" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Monitoramento</font></li>
        </ul>
      </div>
    </div>   
    <div id="map"></div>
    
    <div class="breadcrumb-holder" style="margin-top: 15px">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-database" aria-hidden="true"></i><font style="font-size:17px;vertical-align: inherit;">Dados da ocorrência</font></li>
        </ul>
      </div>
    </div>

    <div class="card-body">
      <table class="table table-hover">

        <tbody>
          <tr>
            <th scope="row">Muncipio da ocorrência:</th>
            <td>Teresina</td>
            <th scope="row">Nome do solicitante:</th>
            <td>Deusimar Teixeira da Silva Junior</td>
          </tr>
          <tr>
            <th scope="row">Local:</th>
            <td>Rua coronel elpidio</td>
            <th scope="row">Nome do paciente:</th>
            <td>Deusimar Teixeira da Silva Junior</td>
          </tr>

          <tr>
            <th scope="row">Ponto de referência:</th>
            <td>Dogão</td>
            <th scope="row">Zona:</th>
            <td>Urbana</td>
          </tr>

          <tr>
            <th scope="row">Telefone:</th>
            <td>(89) 99417-5533</td>
            <th scope="row">Tipo:</th>
            <td>Padrão</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>  


   <div class="col-lg-4 col-md-6" style="float: right;margin-left:-5px;">
    <!-- Daily Feed Widget-->
    <div id="daily-feeds" class="card updates daily-feeds" style="max-height:70vh">
      <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
        <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Atendimentos Pendentes </a></h2>
        <div class="right-column">
          <div class="badge badge-primary">10 messages</div>
        </div>
      </div>
      <div id="feeds-box" role="tabpanel" class="collapse show"  style="overflow: auto;">
        <div class="feed-box">
          <ul class="feed-elements list-unstyled">
            <!-- List-->
            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>

            <li class="clearfix btn btn-defoult" style="width: 100%">
              <div class="feed d-flex justify-content-between">
                <div class="feed-body d-flex justify-content-between"><img src="img/avatar-icon.png" alt="person" class="img-fluid rounded-circle feed-profile">
                  <div class="content"><strong>Aria Smith</strong><small>(89) 99456-4567 </small>
                    <div class="full-date"><small>Hoje 5:60 pm </small></div>
                  </div>
                </div>
                <div class="date"><small>5min ago</small></div>
              </div>
            </li>   
          </ul>
        </div>
      </div>
    </div>
    <a class="btn"  data-toggle="modal" data-target=".bs-example-modal-sm" style="width: 49.5%;padding: 10px;background: #e9ecef;margin-top: -15px;background: #0C9"><i class="fa fa-check" aria-hidden="true"></i><br> Repassar</a>
    <a class="btn"  data-toggle="modal" data-target=".bs-example-modal-sm" style="width: 49.5%;padding: 10px;background: #e9ecef;margin-top: -15px;background: #C00"> <i class="fa fa-times" aria-hidden="true"></i><br>Recusar</a>
  </div>

  <div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content"> 
        ssssssssss
      </div>  
    </div>  
  </div>
</div>
@stop


