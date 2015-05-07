$(document).ready(function(){
	$("#submit").click(function(){
		var fname=document.form.fnames.value;
		var sname=document.form.mnames.value;
		var lname=document.form.lnames.value;
		var contact=document.form.contact.value;
		var email=document.form.email.value;
		var dob=document.form.dob.value;
		
		
		var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/; 
		if(contact.value.match(phoneno)){
			alert("great");
		}
		alert(email+dob);
	});

});