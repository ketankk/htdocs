$(document).ready(function(){
var topLevelDomains = ["com", "net", "org","in","edu"];
var domains = ['hotmail.com', 'gmail.com', 'yahoo.com','rediffmail.com','dce.edu','dce.ac.in'];


$('#email').on('blur', function() {
  $(this).mailcheck({
    domains: domains,                       // optional
    topLevelDomains: topLevelDomains,       // optional
    suggested: function(element, suggestion) {
      // callback code
	     $('#suggestion').html("Did you mean <b><i>" + suggestion.full + "</b></i>?");

    },
    empty: function(element) {
      // callback code
	        $('#suggestion').html('No Suggestions :(');

    }
  });
});
});