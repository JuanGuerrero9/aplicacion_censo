var $ = jQuery.noConflict();

let cookie = document.cookie
let csrfToken = cookie.substring(cookie.indexOf('=') + 1)


function abrir_modal(url) {
	$('#modal').load(url, function () {
        $(this).modal('show');
	});
}

function abrir_modal_edicion(url) {
	$('#edicion').load(url, function () {
        $(this).modal('show');
	});
}

function cerrar_modal() {
	$('#modal').modal('hide');
}

function cerrar_modal_edicion() {
	$('#edicion').modal('hide');
}