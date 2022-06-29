		<footer>
			
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						
						<div class="row">
							<div class="col-xs-12">
								<a href="/">
									<img src="<?php echo get_template_directory_uri(). '/images/footer-logo.png'; ?>" alt="" class="img-responsive footer-logo">
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="copyright-chas">
									<p class="footer-copyright">&copy; <?php echo date('Y'); ?> Expert Security UK LTD</p>
									<img src="<?php echo get_template_directory_uri(). '/images/chaslogo-white.png'; ?>" class="chas-footer">
								</div>
									
							</div>
						</div>
								
					</div>
					<div class="col-lg-8 col-md-8">
						
						<div class="footer-contact">
							<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
<span style="display:inline" itemprop="streetAddress">Expert Security UK, Unit 4, Lowercroft Business Park, Lowercroft Rd,</span>
<span style="display:inline" itemprop="addressLocality">Bury,</span>
<span style="display:inline" itemprop="postalCode">BL8 3PA</span>
</div>

							<p>
								<b>
									<span>Telephone: <a href="tel:0800 211 8413" class="rTapNumber216426">0800 211 8413</a></span>
									<span>Email: <a href="mailto:info@expertsecurityuk.co.uk">info@expertsecurityuk.co.uk</a></span>
								</b>
							</p>
						<br>
			
							<div class="social-footer">

								<a href="https://twitter.com/expertsecurity0" target="_blank">
									<img src="<?php echo get_template_directory_uri(). '/images/footer-twitter.png'; ?>" alt="Twitter">
								</a>
								<a href="https://www.facebook.com/pages/Expert-Security-Systems-UK-LTD/514239565336592" target="_blank">
									<img src="<?php echo get_template_directory_uri(). '/images/footer-facebook.png'; ?>" alt="Facebook">
								</a>

							</div>

						</div>

						<div class="footer-links">
							<a href="/terms/">Terms &amp; Conditions</a>
							<a href="/contact/">Contact</a>
							<a href="/sitemap/">Sitemap</a>
							<a href="/help-desk/">FAQs</a>
						</div>
							

					</div>
				</div>
			</div>

		</footer>

		<?php wp_footer(); ?>
		
		<script src="<?php echo get_template_directory_uri(). '/js/jquery.visible.min.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri(). '/js/jquery.smartmenus.min.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri(). '/js/custom.js'; ?>"></script>
		<script>
			var $ = jQuery.noConflict();
			// SmartMenus init
			$(function() {
			  $('#main-menu').smartmenus({
			    mainMenuSubOffsetX: -1,
			    mainMenuSubOffsetY: 4,
			    subMenusSubOffsetX: 6,
			    subMenusSubOffsetY: -6
			  });
			});

			// SmartMenus mobile menu toggle button
			$(function() {
			  var $mainMenuState = $('#main-menu-state');
			  if ($mainMenuState.length) {
			    // animate mobile menu
			    $mainMenuState.change(function(e) {
			      var $menu = $('#main-menu');
			      if (this.checked) {
			        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
			      } else {
			        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
			      }
			    });
			    // hide mobile menu beforeunload
			    $(window).bind('beforeunload unload', function() {
			      if ($mainMenuState[0].checked) {
			        $mainMenuState[0].click();
			      }
			    });
			  }
			});
		</script>
	</body>

</html>