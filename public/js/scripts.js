
function stap(fila){
    console.log(fila);
    switch(fila) {
        case "fila_central":
            document.getElementById("stap_1").classList.add('active');
            break;
        case "file_medico":
            document.getElementById("stap_1").classList.remove('active');
            document.getElementById("stap_2").classList.add('active');
            break; 
        case "file_base":
            document.getElementById("stap_2").classList.remove('active');
            document.getElementById("stap_3").classList.add('active');
            break;
        case "deslocando":
            document.getElementById("stap_3").classList.remove('active');
            document.getElementById("stap_4").classList.add('active');
            break;         
    }
}




function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if(direction == 'right') {
		new_value = now_value + ( 100 / number_of_steps );
	}
	else if(direction == 'left') {
		new_value = now_value - ( 100 / number_of_steps );
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

