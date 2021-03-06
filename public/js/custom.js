function select_li(object, key) {
	central_atendendo(key);
	document.getElementById('cab_dados').classList.remove('none');
	document.getElementById('body_dados').classList.remove('none');
	document.getElementById('btn_repassar').setAttribute('onClick','central_encaminhar('+JSON.stringify(key)+')');
	document.getElementById('btn_arquivar').setAttribute('onClick','arquivar('+JSON.stringify(key)+')');
	document.getElementById('map').setAttribute('style', 'height: 35vh;');
	document.getElementById("solicitante").innerText = object.solicitante;
  document.getElementById("key").innerText = key;
	document.getElementById("ref").innerText = object.localizacao.referencia;
	document.getElementById("zona").innerText = object.localizacao.zona;	
	document.getElementById("tel").innerText = object.contato.telefone;
	document.getElementById("tipo").innerText = object.tipo;
	document.getElementById("paciente").innerText = object.paciente;
	var long = object.localizacao.lgt;
	var lat = object.localizacao.lat;
	map(long,lat,key);
}

function select_li_base(object, key) {
	base_atendendo(key);
	document.getElementById('cab_dados').classList.remove('none');
	document.getElementById('body_dados').classList.remove('none');
	document.getElementById('btn_repassar').setAttribute('onClick','base_encaminhar('+JSON.stringify(key)+')');
	document.getElementById('btn_arquivar').setAttribute('onClick','arquivar('+JSON.stringify(key)+')');
	document.getElementById('map').setAttribute('style', 'height: 35vh;');
	document.getElementById("solicitante").innerText = object.solicitante;
	document.getElementById("ref").innerText = object.localizacao.referencia;
	document.getElementById("zona").innerText = object.localizacao.zona;	
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
	var long = object.localizacao.lgt;
	var lat = object.localizacao.lat;
	map(long,lat,key);
}

function contarElementos(){
 	var lis = document.getElementById("list").getElementsByTagName('li');
 	var n_element = document.getElementById("num_element");
 	n_element.innerText=lis.length+" mensagens";	
}

(function ($) {
    $.extend({
        playSound: function () {
            return $(
                   '<audio class="sound-player" autoplay="autoplay" style="display:none;">'
                     + '<source src="' + arguments[0] + '" />'
                     + '<embed src="' + arguments[0] + '" hidden="true" autostart="true" loop="false"/>'
                   + '</audio>'
                 ).appendTo('body');
        },
        stopSound: function () {
            $(".sound-player").remove();
        }
    });
})(jQuery);


