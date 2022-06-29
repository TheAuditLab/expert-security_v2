<?php get_header(); ?>

<main>
	<div class="mobile-get-in-touch visible-xs visible-sm">
		<span>Get in touch</span>
		<a href="#">
			<i class="fa fa-envelope"></i>
		</a>
		<a href="#">
			<i class="fa fa-phone"></i>
		</a>
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

				<h1 class="title"><?php the_title(); ?></h1>
				
				<img src="<?php the_field('logo'); ?>" />

				<?php the_content();

				$query = new WP_Query( array( 'post_type' => 'projects', 'posts_per_page' => -1 ) );

				while ( $query->have_posts() ) : $query->the_post();

				?>
					<div style="display: block; width: 100%; clear: both; margin-bottom: 30px;" class="project-item">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<?php
									if(get_field('work_image')){
								?>
									<img src="<?php echo get_field('work_image'); ?>" class="img-responsive" alt="<?php echo the_title(); ?>">
								<?php
									} else {
								?>
									<img src="/wp-content/themes/expert-security/images/expert-placeholder.jpg" class="img-responsive" alt="<?php echo the_title(); ?>">
								<?php
									}
								?>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
								<h2>
									<a href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a>
								</h2>
							
								<img src="<?php echo get_field('logo'); ?>" class="alignleft" width="150" />
								<?php echo the_excerpt(); ?>
								<a href="<?php echo get_the_permalink(); ?>">Read More &raquo;</a>
							</div>
						</div>
							
					</div>

				<?php

				endwhile;
				
				?>
				
			</div>
		</div>
	</div>
	
	


				

	

</main>

<?php get_footer(); ?>