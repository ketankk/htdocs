//increase and decrease font size
$(document).ready(function(){
function size_change(element,t){
var current = parseInt(t.css('font-size'));
if(element=='bigger')
{
var new_size=current+2;
}

if(element=='smaller')
{
var new_size=current-2;
}
t.css('font-size',new_size+'px');

}

$('#smaller').click(function(){
size_change('smaller',$('p'));
});
$('#bigger').click(function(){
size_change('bigger',$('p'));
});

});
