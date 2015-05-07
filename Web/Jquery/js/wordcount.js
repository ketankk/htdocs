$(document).ready(function(){
var max_count=55;
$('#text_count').html(max_count +' words remaining');
$('#area').keyup(function(){
var len=$('#area').val().length;

var rem_count=max_count-len;
$('#text_count').html(rem_count +' words remaining');

});
});