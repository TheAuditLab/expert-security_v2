<?php get_header(); ?>







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



	<div class="products-page container">

		<div class="col-xs-12 row">

			<h1 class="hidden-lg hidden-md hidden-sm"><?php the_title(); ?></h1>
			<p>At Expert Security, we understand the importance of keeping what you value safe and secure. So, whether you’re looking for security solutions for business premises or you want to improve the safety for your home, we can help.</p>



<p>We’re proud to supply a range of reliable domestic and commercial security products, from surveillance and monitoring systems to access controls and intruder alarms, to ensure that your property is continuously protected 24 hours a day.</p>



<p>Buying from Expert Security is simple: you choose the products you want, and we’ll handle specifications and installation. Our experts will conduct a full survey of your property to determine the most efficient and effective way of installing our security products, while keeping any interruptions to your schedule to a minimum.</p>



<p>Take the next step to a safer tomorrow by getting your free, no-obligation quote today, or browse our selection of products below.</p></div>



		<div class="products">



			<div class="container">

				<div class="row">

					

					<?php



					$terms = get_terms('products');



			   		foreach ($terms as $term) {





				    	$wpq = array ('taxonomy'=>'product','term'=>$term->slug);

				      	$myquery = new WP_Query ($wpq);

				      	$article_count = $myquery->post_count;



				      	if($term->parent == 0)

				      	{



				    ?>



							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-col">

								

								<a class="product" href="/security-s/<?php echo $myquery->query['term']; ?>/">



					      			<h2 class="title"><?php echo $term->name; ?></h2>



					      			<img src="<?php echo get_field('product_category_thumbnail', 'security_solutions_'.$term->term_id.''); ?>" alt="<?php echo $term->name; ?>" />



					      			<span>View Products</span>



					      		</a>

							



							</div>



				    <?php

				    	}



					}



					?>





				</div>

			</div>

		</div>

		

			



	</div>



</main>







<?php get_footer(); ?>