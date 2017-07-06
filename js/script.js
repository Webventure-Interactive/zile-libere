
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

function showFreeDaysTable(yearnr){
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

function showFreeDays(){
	var year = $('.btn-group.bootstrap-select .filter-option').text();

	if ( year ) {
		removeErrorLabel("year");
		showFreeDaysTable(year);

		setTimeout(function(){ // pentru a se face update si la anul din getDays.php
			$('.the_year').text(year);
		}, 300);
	} else {
		enterErrorLabel("year", "Te rugam sa introduci o valoare valida");
	}
}

$(document).ready(function(){

	calcServicesBoxHeight();

	$('.selectpicker').selectpicker({
		style: 'btn-info',
		size: 4
	});


	$('.the_year').text($('.input_zile').val());

	$('.btn-group.bootstrap-select').change(function(){
		showFreeDays();
	});

});

$(document).keypress(function(e) {
    if(e.which == 13) {
        showFreeDays();
    }
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