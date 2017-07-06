
function calcServicesBoxHeight(){
	$('.lista_servicii').each(function(){
		var aux = 0;
		$(this).find('.box_servicii').each(function(){
			if ( $(this).height() > aux ) {
				aux = $(this).height();
			}
		}).height(aux);
	});
};

function showFreeDays(yearnr){
	$.ajax({
        type: 'POST',
        url: "getDays.php",
        method: "POST",
        data: {year: yearnr}
    }).success(function (res) {
		$('.days_table').html(res);
    });
};

function enterErrorLabel(labelName, message) {
    removeErrorLabel(labelName);
    $("*[name='" + labelName + "']").after("<label id='label_error' class='alert alert-danger' for='" + labelName + "'>" + message + "</label>");
}
function removeErrorLabel(labelName) {
    $("label#label_error[for='" + labelName + "']").remove();
}

$(document).ready(function(){

	calcServicesBoxHeight();

	$('.search').click(function(){
		var year = $('.input_zile').val();

		if ( year && year > 1970 ) {
			removeErrorLabel("year");
			showFreeDays(year);

			setTimeout(function(){ // pentru a se face update si la anul din getDays.php
				$('.the_year').text(year);
			}, 100);
		} else {
			enterErrorLabel("year", "Te rugam sa introduci o valoare valida");
		}
	});

});

$(window).resize(function(){
	
	$('.lista_servicii').each(function(){
		var aux = 0;
		$(this).find('.box_servicii').css("height", "auto");
		$(this).find('.box_servicii').each(function(){
			if ( $(this).height() > aux ) {
				aux = $(this).height();
			}
		}).height(aux);
	});

});