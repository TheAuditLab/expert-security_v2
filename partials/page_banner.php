<div class="page-banner-carousel hidden-xs">
	<div class="owl-carousel owl-theme" id="page-banner-carousel">

		<?php 

		if(is_front_page()){

			$slider = get_field('slider');

			foreach($slider as $image)
			{

			?>

				<div class="item">
					<img src="<?php echo $image['image']; ?>">
					<div class="banner-content">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<p class="banner-title"><?php echo $image['title']; ?></p>
									<a href="<?php echo $image['button_link']; ?>" class="page-banner-btn"><?php echo $image['button_text']; ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php

			}

		} else {

			$title = "Experts in domestic &<br> commercial security fields";

			if(is_page()){
				$image = get_field('banner', get_the_ID());
				$title = get_the_title();
			}


			if(is_tax()){
				$title = single_term_title( '', false, get_query_var( 'taxonomy' ) );
				$termID = get_queried_object()->term_id;

				$image = get_field('product_category_banner', 'term_'.$termID);
			}

			?>
	
				<div class="item">
					<img src="<?php echo $image; ?>">
					<div class="banner-content no-button">
						<div class="container">
							<div class="row">
								<div class="col-xs-8">
									<h1 class="banner-title"><?php echo $title; ?></h1>
								</div>
								<div class="col-xs-4 contact-form">
									<h2>Unsure on the right bollard for you? </br>Enquire here and let us help you</h2>
									<?php
										echo(do_shortcode('[contact-form-7 id="2124" title="Contact form v2"]'));
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php

		}

		?>


		

	</div>
</div>