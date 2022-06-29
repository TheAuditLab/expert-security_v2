<a name="getintouch"></a>
<section id="get-in-touch">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
<script type="text/javascript">
	
jQuery(document).ready(function($){


	// $('form#frmSalesForce').on("submit", function(e) {
	$('form#frmSalesForce input#button').click(function(e) {

		// submit what we have in the form to the processing script via ajax
		$.ajax({
			url: '/wp-content/themes/expert-security/processenquiry.php',
			type: 'POST',
			data: $('form#frmSalesForce').serialize(),
			dataType : "json",
			success  : function (data) {
				// console.log(data);
				if (data.code == 1) {
					$('div#enquire div#response').html('<p>' + data.response + '</p>');
					// submit form
					$('form#frmSalesForce').submit();
				} else {
					$('div#enquire div#response').html('<p>' + data.response + '</p>');
				}
			},
			error	: function( xhr, status, errorThrown ) {
            alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
			}
		})
		.done(function(response) {
			//no need to do anything here
		});


	});

});								

</script>

							<div id="enquire" class="row">
								<div class="col-xs-12">
									<h4>Get in touch</h4>

								</div>
								<?php
								echo(do_shortcode('[contact-form-7 id="1512" title="Contact form"]'));
								?>
								<!--
								<div id="response" style="color:#FF0000; padding-left: 15px; font-weight: bold;"></div>		
								<form id="frmSalesForce" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post">
									<fieldset class="col-lg-6 col-md-6">
										<input type="hidden" name="oid" value="00D20000000D1de">
										<input type="hidden" name="retURL" value="http://www.expertsecurityuk.co.uk/thanks">
										<input class="form-control" id="company" maxlength="40" placeholder="Company" name="company" size="20" type="text"><br>
										<input class="form-control" placeholder="First Name *" id="first_name" maxlength="40" name="first_name" size="20" type="text" required><br>
										<input class="form-control" id="last_name" placeholder="Last Name *" maxlength="80" name="last_name" size="20" type="text" required><br>
										<input class="form-control" id="email" maxlength="80" placeholder="Email *" name="email" size="20" type="text" required><br>
										<input class="form-control" id="phone" maxlength="40" placeholder="Phone *" name="phone" size="20" type="text" required><br>
									</fieldset>
								
									<fieldset class="col-lg-6 col-md-6">		
										<textarea class="form-control" name="description" placeholder="Description"></textarea><br>
										<div style="float: right; margin-bottom: 10px;" class="g-recaptcha" data-sitekey="6LdMHTMUAAAAANXeM6NJz-PeJ7tp50JhBMVWJtD1"></div><br />
										<div class="Actions">
											<input id="button" type="button" class="action" value="Submit" name="btnsubmit">
										</div>
									</fieldset>
								

								</form>
								-->

			</div>
		</div>
	</div>
</section>
<style type="text/css">
	body section#get-in-touch input { margin-bottom: 0px !important; }
</style>
