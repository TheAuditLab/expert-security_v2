<?php get_header(); ?>

<main>
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

				<?php

				the_content(); 

				$query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) );

				?>

				<div class="row">
					<?php 

						while ( $query->have_posts() ) : $query->the_post();
							echo '<div class="col-xs-12 col-sm-6 col-md-4">';
							echo '<a href="'.get_the_permalink().'"><h2>';
							the_title();
							echo '</a></h2>';
							the_excerpt();
							echo '<a href="'.get_the_permalink().'">Read More &raquo;</a>';
							echo '</div>';
						endwhile;

					?>
					
						
					</div>
				</div>

				
			</div>
		</div>
	</div>






</main>

<?php get_footer(); ?>