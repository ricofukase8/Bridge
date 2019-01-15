$(function() {
	$(document).on('click', '#next-btn', function() {
   		let name = $('#name').val(); //idがnameの値を変数nameに代入
   		$('#result_name').text(name); idのresult_namに
   	})
	$(document).on('click', '#next-btn', function() {
   		let name = $('#email').val();
   		$('#result_email').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#password').val();
   		$('#result_password').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#img_name').val();
   		$('#result_img_name').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#status').val();
   		$('#result_status').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#batchnumber').val();
   		$('#result_batchnumber').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#period').val();
   		$('#result_period').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#course').val();
   		$('#result_course').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#plofile').val();
   		$('#result_plofile').text(name);
   	})
   	$(document).on('click', '#next-btn', function() {
   		let name = $('#fb').val();
   		$('#result_fb').text(name);

})