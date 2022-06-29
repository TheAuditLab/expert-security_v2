<?php get_header(); ?>


<main>

	<?php get_template_part('partials/page_banner'); ?>

	<div class="mobile-get-in-touch visible-xs visible-sm">
		<span>Get in touch</span>
		<a href="mailto:info@expertsecurityuk.co.uk">
			<i class="fa fa-envelope"></i>
		</a>
		<a href="tel:+448082318282">
			<i class="fa fa-phone"></i>
		</a>
	</div>

	<section id="welcome">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>


	<section id="services">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<div class="home-services">

						<div class="home-service">
							<div class="home-service-bg" style="background: url(<?php echo get_template_directory_uri(). '/images/home-service-design.jpg'; ?>)"></div>
							<div class="home-service-content">
								<h2><?php echo get_field('title_1'); ?></h2>
								<p><?php echo get_field('description_1'); ?></p>
								
								<a href="<?php echo get_field('button_link_1'); ?>"><?php echo get_field('button_text_1'); ?></a>
							</div>
						</div>

						<div class="home-service">
							<div class="home-service-bg" style="background: url(<?php echo get_template_directory_uri(). '/images/home-service-install.jpg'; ?>)"></div>
							<div class="home-service-content">
								<h2><?php echo get_field('title_2'); ?></h2>
								<p><?php echo get_field('description_2'); ?></p>
								
								<a href="<?php echo get_field('button_link_2'); ?>"><?php echo get_field('button_text_2'); ?></a>
							</div>
						</div>

						<div class="home-service">
							<div class="home-service-bg" style="background: url(<?php echo get_template_directory_uri(). '/images/home-service-maintain.jpg'; ?>)"></div>
							<div class="home-service-content">
								<h2><?php echo get_field('title_3'); ?></h2>
								<p><?php echo get_field('description_3'); ?></p>
								
								<a href="<?php echo get_field('button_link_3'); ?>"><?php echo get_field('button_text_3'); ?></a>
							</div>
						</div>

					</div>

				</div>
					
			</div>
		</div>
	</section>



	<?php 

		$args = array(
			'posts_per_page'   	=> 4,
			'post_type'        	=> 'product',
			'orderby'			=> 'rand',
			'meta_query' => array(
				array(
					'key' => 'featured',
					'value' => true,
				)
			)
		);

		$featured_products = get_posts($args);

		if($featured_products){

	?>

			<section id="featured-products">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h4>Featured products</h4>

							<div class="row">

								<?php

									foreach ($featured_products as $product) {
										?>

											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
												<a href="<?php the_permalink($product->ID) ?>" class="featured-product">
													<img src="<?php echo get_field('image_for_featured', $product->ID); ?>" alt="<?php echo $product->post_title; ?>">
													<span><?php echo $product->post_title; ?></span>
												</a>
											</div>

										<?php
									}

								?>

							</div>

						</div>
					</div>
				</div>
			</section>

	<?php 

		}

	?>


	<section id="who-we-have-worked-with">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h4>Who we have worked with...</h4>

					<div class="owl-carousel owl-theme" id="worked-with-carousel">

						<?php 

							$worked_with = get_field('worked_with');

							if($worked_with){

								foreach ($worked_with as $company) {
									?>
										<div class="item"><img src="<?php echo $company['image']; ?>"></div>
									<?php
								}

							}

						?>

					</div>
					

				</div>
			</div>
		</div>
	</section>

	<?php echo get_template_part('partials/get_in_touch'); ?>

</main>


<?php get_footer(); ?>


		