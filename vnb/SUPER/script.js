$(document).ready(function(){
$("#submit").click(function(){
var name=$("#name").val();
var password=$("#password").val();
var email=$("#email").val();
var datastring = 'name='+name+'&password='+password+'&email='+email;
console.log(datastring);
if(name==''||password==''||email=='')
{alert("Fill all boxes");}
else {
$.ajax({
type:"POST",
url:"submit_admin.php",
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