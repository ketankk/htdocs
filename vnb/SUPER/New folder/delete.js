$(document).ready(function(){
$("#submit").click(function(){
var name=$("#name").val();
var password=$("#password").val();
var contact=$("#contact").val();
var datastring = 'name='+name+'&password='+password+'&contact='+contact;
if(name==''||password==''||contact=='')
{alert("Fill all boxes");}
else {
$.ajax({
type:"POST",
url:"ajaxphp.php",
data:datastring,
cache:false,
success:function(result){
alert(result);
}
});
}
return false;
});
});