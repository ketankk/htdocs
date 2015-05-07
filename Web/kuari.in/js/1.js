$(document).ready(function(){

$("#submit").click(function(){validate();});

function validate(){
	var namestr=/^[A-Za-z]+$/;
	//var emailstr=;
	//var contactstr=;
	
	var names=$("#name").val();
	var email=$("#email").val();
	var contact=$("#contact").val();

	if(name=="")
	{
		$('#name').after('<span class="invalid">Please enter your </span>');
	}

	else if(namestr.test(names))
				$('#name').after('<span class="valid">Please</span>');

}
});