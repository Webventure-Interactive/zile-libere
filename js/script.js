
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

$(document).ready(function(){

	calcServicesBoxHeight();

	$('.search').click(function(){
		var year = $('.input_zile').val();
		showFreeDays(year);

		setTimeout(function(){ // pentru a se face update si la anul din getDays.php
			$('.the_year').text(year);
		}, 100);
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