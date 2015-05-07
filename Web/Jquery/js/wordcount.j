$(document).ready(function(){
/*$('#button').click(function(){
$(this).after("<br>k<br>vj");
});
*/
$('#dup').live({
click: function(){
//alert();
$(this).after('<input type="button" id="dup" value="duplicate"></input>');
}

});


});