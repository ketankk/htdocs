$(document).ready(function(){
	$('#area').keyup(function(){
	var text1=$('#area').val();
	$('#text').text(text1).click(function(){
	$('#text').addClass('bb');
	});
	}).click(function(){
	$('#text').removeClass('bb');
	});
});