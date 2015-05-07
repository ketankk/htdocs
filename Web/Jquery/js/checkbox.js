$(document).ready(function(){
$('#agree').toggle(function(){
$('#continue').removeAttr('disabled')

},function(){
$('#continue').attr('disabled')
});

});