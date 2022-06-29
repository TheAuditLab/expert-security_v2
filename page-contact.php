<?php get_header(); ?>

<main class="contact-page">

	<div class="unit whole">
		<script>
			function scrollOn() {
				document.getElementById("contact-map").className = '';
			}

			function scrollOff() {
				document.getElementById("contact-map").className = 'scrolloff';
			}
		</script>
		<div id="contact-map" class="scrolloff" onclick="scrollOn()" onmouseleave="scrollOff()" >
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2367.9121568465234!2d-2.339097!3d53.595029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ba703a761c8b5%3A0xa522df1429b1e6aa!2sExpert+Security+Systems+UK+Ltd!5e0!3m2!1sen!2suk!4v1429464705565" width="100%" height="300" frameborder="0" style="border:0"></iframe>
	</div>

	<br />
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				    <?php
				    if(function_exists('bcn_display'))
				    {
				            bcn_display();
				    }?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<div class="row get-in-touch">

					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact.png" class="img-responsive hidden-xs" style="margin-top: 30px;" />

						<div class="call-for-chat">
							<p>Call our TEAM today for expert advice and ongoing support</p>
							<p><span><i class="fa fa-phone"></i> <a href="tel:0800 211 8413" class="rTapNumber216426">0800 211 8413</a></span></p>
						</div>

					</div>

					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<h1 class="title">Get in Touch</h1>
						
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6">
								<p><label><i class="fa fa-phone"></i> <span>Telephone</span></label><br />
								<a href="tel:0800 211 8413" class="rTapNumber216426" style="color:#000">0800 211 8413</a></p>

								<p><label><i class="fa fa-at"></i> <span>Email</span></label><br />
								<a href="mailto:info@expertsecurityuk.co.uk" style="color:#000">info@expertsecurityuk.co.uk</a></p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<p><label><i class="fa fa-envelope"></i> <span>Address</span></label><br />
								Expert Security UK<br />
								Unit 4<br />
								Lowercroft Business Park<br />
								Lowercroft Rd<br />
								Bury<br />
								BL8 3PA</p>
							</div>
							<div class="col-lg-6 col-md-5">
								<p>Call for a chat, tell us about your future or ongoing projects and ideas for perimeter security. We’re always keen to discuss your requirements and talk through ideas. Alternatively you can drop us an email or complete the enquiry form and we’ll get back to you as soon as possible with ideas to improve your security.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<h2 class="title">Enquire</h2>
							</div>
						</div>
						<div class="row contact-form">

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
							

							<div id="enquire">

								<?php
								echo(do_shortcode('[contact-form-7 id="1512" title="Contact form"]'));
								?>
								<!--
								<div id="response" style="color:#FF0000; padding-left: 15px; font-weight: bold;"></div>		
								<form id="frmSalesForce" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post">
									<fieldset class="col-lg-6 col-md-6">
										<input type="hidden" name="oid" value="00D20000000D1de">
										<input type="hidden" name="retURL" value="http://www.expertsecurityuk.co.uk/thanks">
										<input id="company" maxlength="40" placeholder="Company" name="company" size="20" type="text"><br>
										<input placeholder="First Name *" id="first_name" maxlength="40" name="first_name" size="20" type="text" required><br>
										<input id="last_name" placeholder="Last Name *" maxlength="80" name="last_name" size="20" type="text" required><br>
										<input id="email" maxlength="80" placeholder="Email *" name="email" size="20" type="text" required><br>
										<input id="phone" maxlength="40" placeholder="Phone *" name="phone" size="20" type="text" required><br>
									</fieldset>
								
									<fieldset class="col-lg-6 col-md-6">		
										<textarea name="description" placeholder="Description"></textarea><br>
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

					</div>
				</div>

			</div>
		</div>
	</div>


				

</main>

<?php get_footer(); ?>