
$(document).ready(function() {

	$("#signup").click(function(){ 
		email_address = $("#email_address").val();
		if (email_address != "") {
			$.ajax({
				url: 'signup.php?email=' + email_address,
				success: function(data) {
					if (data != "") {
						$("#newsletter_signup").html(data);
					}
				}
			});
		}
	});
	
	$("#show_past_events").click(function(){ 
		$("#future_events").hide();
		$("#past_events").fadeIn();
	});
	
	$("#show_future_events").click(function(){ 
		$("#past_events").hide();
		$("#future_events").fadeIn();
	});
	
});
 