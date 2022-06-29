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

	<br>
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
				<h1 class="title"><?php the_title(); ?> - <?php the_field('date'); ?></h1>
			
				<img src="<?php the_field('logo'); ?>" />

				<?php the_content(); ?>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>