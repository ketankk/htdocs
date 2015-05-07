<html>
<head>

<title>
Shurti</title>
<link rel="shortcut icon" href="shu.ico" />

<style>

#form {
background-color: #d623ab;
	border: solid 3px #123;
	box-shadow: 0px 0px 50px #333333;
	border-radius: 210px;
	display:block;
	margin-left: 25%;
	margin-top: 5%;
	width: 400px;
	height: 210px;
	padding: 20px;
}
input {
width:52%;
height:30px;
margin-top:50px;
border-radius:3px;
padding:10px;
margin-left:100px;
box-shadow:0 1px 1px 0 #123456
}
input[type=submit] {
background-color:#3C599B;
border:1px solid #fff;
width:30%;
margin-left:130px;
font-family:'Fauna One',serif;
font-weight:700;
font-size:18px;
color:#fff
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script type="text/javascript">
function fun(){

var name= document.getElementById('name').value;
if(name=='shruti'){
alert("Hello Shruti!! Ab kya hi bolu tujhe re....bas dekh kabhi bhi chup na hoio life me..teri bak bak sun sun k mai bhi thoda bhut bolna seekh gya...yaar hamesa sath rhio..main to hu hi tere sath....kismat hi meri itni achhi h ki tune dosti kr li mere se ;) main to kabhi na kr pata :P");
}
else alert("Sorry buddy i don't know who you are ");

}
</script>
</head>
<form>
<div id="form">
<b>:</b>
<input type="text" id ="name" name="name" placeholder="Please enter your first name"/>
<input type="submit" value="SUBMIT" onclick="fun()"/>
</div>
</form>
</html>