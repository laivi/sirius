function select_li(object) {
	document.getElementById('cab_dados').classList.remove('none');
	document.getElementById('body_dados').classList.remove('none');
	document.getElementById('map').setAttribute('style', 'height: 40vh;');
	
	document.getElementById("municipio").innerText = "null";
	document.getElementById("solicitante").innerText = object.solicitante;
	document.getElementById("local").innerText = "null";
	document.getElementById("ref").innerText = object.localizacao.referencia;
	document.getElementById("zona").innerText = object.localizacao.zona;	
	document.getElementById("tel").innerText = object.contato.telefone;
	document.getElementById("tipo").innerText = object.tipo;
	document.getElementById("paciente").innerText = object.paciente;
	var long = object.localizacao.lgt;
	var lat = object.localizacao.lat;
	map(long,lat);
}
function contarElementos(){
 	var lis = document.getElementById("list").getElementsByTagName('li');
 	var n_element = document.getElementById("num_element");
 	n_element.innerText=lis.length+" mensagens";	
}


