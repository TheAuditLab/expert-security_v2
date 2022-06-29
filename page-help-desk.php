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
			
				<?php the_content(); ?>

				<?php
					// check if the repeater field has rows of data
					if( have_rows('faq') ):
					 	// loop through the rows of data
					    while ( have_rows('faq') ) : the_row();

					        // display a sub field value
					        echo '<h2>Q) '.get_sub_field('question').'</h2>';
					        the_sub_field('answer');

					    endwhile;

					endif;
				?>

			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>