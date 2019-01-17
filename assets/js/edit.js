$(function() {
	$(document).on('click', '#next-btn', function() {
    	$('html,body').scrollTop(0);
})


 	$(document).on('click', '#panel-btn', function() {
    	$("#company-toggle").slideToggle(400);
    	$("#panel-btn-icon").toggleClass("close");
    	return false;
    })


})