$(document).ready(function(){

	$.get('footer.txt', function(response) {
	 	
	 	$("#cargafooter").text(response);
	 	
	});

});