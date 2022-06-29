<?php get_header(); ?>



<?php

$termName = single_term_title( '', false, get_query_var( 'taxonomy' ) );
$termDiscription = term_description( '', get_query_var( 'taxonomy' ) );
$termID = get_queried_object()->term_id;
$termSlug = get_queried_object()->slug;

?>



<main>


	<?php get_template_part('partials/page_banner'); ?>

	<div class="mobile-get-in-touch visible-xs visible-sm">
		<span>Get in touch</span>
		<a href="#">
			<i class="fa fa-envelope"></i>
		</a>
		<a href="#">
			<i class="fa fa-phone"></i>
		</a>
	</div>

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

	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
						<h1 class="hidden-lg hidden-md hidden-sm"><?php echo $termName; ?></h1>
						
						<?php echo $termDiscription; ?>
					
				</div>
			</div>
		</div>
	</div>

	<div class="sub-categories-products">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<span class="sub-categories-title"><?php echo $termName; ?></span>
				</div>
			</div>

			<div class="row">
				
				<?php 

					//GET SUB CATEGORIES
					$terms = get_terms('products', array(
						'child_of'	=>	$termID
					));


					foreach ($terms as $term) {
						?>
				
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 term-product-col">

								<a class="term-product" href="/products/<?php echo $term->slug; ?>/">

					      			<img src="<?php echo get_field('product_category_thumbnail', 'products_'.$term->term_id.''); ?>" alt="<?php echo $term->name; ?>" />

					      			<h2 class="title"><?php echo $term->name; ?></h2>

					      			<section>
					      				<?php echo get_field('product_category_excerpt', 'products_'.$term->term_id.''); ?>
					      			</section>

					      			<span>Read More</span>

					      		</a>
								
							</div>

						<?php
					}
				
					
					//GET PRODUCTS IN THIS CATEGORY
					$args = array(
						'post_type' 	=> 'security_solution',
						'security_solutions' 		=> $termSlug,
						'post_status' 	=> 'publish'
					);

					$args = array(
						'post_type' 	=> 'security_solution',
						'post_status' 	=> 'publish',
						'tax_query' => array(
						    array(
						      'taxonomy' => 'security_solutions',
						      'field' => 'id',
						      'terms' => $termID,
						      'include_children' => false
						    )
						  )
					);

					$products = get_posts( $args );

					foreach ($products as $product) {

						?>

							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 term-product-col">

								<a class="term-product" href="/product/<?php echo $termSlug.'/'.$product->post_name; ?>/">

					      			<img src="<?php echo get_field('product_thumbnail', $product->ID); ?>" alt="<?php echo $product->post_title; ?>" />

					      			<h2 class="title"><?php echo $product->post_title; ?></h2>

					      			<section>
					      				<?php echo $product->post_excerpt; ?>
					      			</section>

					      			<span>Read More</span>

					      		</a>
								
							</div>


						<?php

					}

				 ?>

			</div>

		</div>
	</div>

	<div class="usp-row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
					<div class="usp-container">
						<div class="usp">
							<img src="<?php echo get_template_directory_uri(). '/images/small-blue-shield.png'; ?>">
							<p>Reliable full-circle service</p>
							<p>From the initial design process to aftercare and maintenance, our dedicated teams will provide expert support throughout the entire purchase process.</p>

						</div>
						<div class="usp">
							<img src="<?php echo get_template_directory_uri(). '/images/small-blue-shield.png'; ?>">
							<p>Competitive Pricing</p>
							<p>We always strive to give our customers value for money – without compromising on the quality.</p>
						</div>
						<div class="usp">
							<img src="<?php echo get_template_directory_uri(). '/images/small-blue-shield.png'; ?>">
							<p>Modern Technology</p>
							<p>Every product you find at Expert Security UK features up-to-the-minute technology with sophisticated design.</p>
						</div>
						<div class="usp">
							<img src="<?php echo get_template_directory_uri(). '/images/small-blue-shield.png'; ?>">
							<p>Bespoke Service</p>
							<p>We’re proud to give all our clients a service that is created with their specifications in mind. We never treat two customers the same.</p>
						</div>
					</div>
						

				</div>
			</div>
		</div>
	</div>

	<div class="more-info-strip">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p class="more-info-strip-text">If you need more information, or are looking to book a free no-obligation site survey</p>
					<a href="/contact/">Get in touch</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="installers-of">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3>Approved Installers Of</h3>

					<div id="installers-carousel" class="owl-carousel owl-theme">
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/bft.png'; ?>" alt="bft"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/bpt.png'; ?>" alt="bpt"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/came.png'; ?>" alt="came"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/faac.png'; ?>" alt="faac"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/goosafe.png'; ?>" alt="goosafe"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/ievo.png'; ?>" alt="ievo"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/nortech.png'; ?>" alt="nortech"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/paxton.png'; ?>" alt="paxton"></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(). '/images/installers/videx.png'; ?>" alt="videx"></div>
	
					</div>

				</div>
			</div>
		</div>
	</div>

</main>



<?php get_footer(); ?>