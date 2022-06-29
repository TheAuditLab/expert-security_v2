<?php get_header(); ?>

<?php 

$current_product_id = get_the_ID();

?>

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
<?php
		if(get_field('product_slider')){
			$slider = get_field('product_slider');
			foreach($slider as $slide){
				$background = $slide['image'];
				break;
			}
		} else {
			$background="//placehold.it/500x500";
		}
?>
	<div>
    <section class="productinfo" style="background-image: url('<?php echo $background;?>')";>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 head-title">
                    <div class="producttitel">
                        <h1><?php the_title(); ?></h1>
                    </div>

                </div>

                <div class="col-sm-4 head-back">
                    <div id="enquire" class="row main-form">

                        <h2>Enquiry</h2>
                        <?php echo do_shortcode( '[contact-form-7 id="1812" title="Porudct"]' ); ?>
					</div>
					
					<?php 

				if(get_field('pdf')){
					?>
						<a href="<?php the_field('pdf'); ?>" class="downloadpdf cta-btn inline" target="_blank">Download Our <?php the_title(); ?> Guide</a>
					<?php	
				}

				?>

                </div>
            </div>
        </div>

    </section>

    <section id="who-we-have-worked-with">
<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Who we have worked with...</h2>

					<div class="owl-carousel owl-theme" id="worked-with-carousel">

						<?php 
							$worked_with = get_field('worked_with',2);

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
    <section class="product-detail padding-80" style="
position: relative;
">
        <div class="container">
            <div class="col-sm-7">
                <h2>Product Details</h2>
                <div class="tab-content clearfix">
                    <div role="tabpanel" class="tab-pane fade clearfix active in" id="specifications">
                        <div class="col-sm-12 specgridcol">
                            <div class="cblock">
								<?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <h2>Images</h2>
                <div id="product_images_carousel" class="owl-carousel owl-theme owl-loaded owl-drag">
				<?php 

					if(get_field('product_slider')){

						$slider = get_field('product_slider');

						foreach($slider as $slide){

						$image = $slide['image'];

						echo '<div class="item">';
						echo '<img src="'.$image.'" class="img-responsive">';
						echo '</div>';
						}

					} else {

						echo '<div class="item">';
						echo '<img src="//placehold.it/500x500" class="img-responsive">';
						echo '</div>';

					}

					?>
				</div>
				<?php if(get_field('additional_content')){ ?>
				<h2>Technical details</h2>
				<?php } ?>
                <div id="tab1" role="tabpanel" class="tab-pane clearfix">
				<?php if(get_field('additional_content')){ ?>
                    <div class="table-responsive">
						<?php echo get_field('additional_content'); ?>
					</div>
					<?php } ?>
                    <div class="flex flex-center button-tenders">
                        <a id="generate-your-tenders" href="/contact/" class="a-button">Contact Us Now</a>
                    </div>
				</div>
            </div>
        </div>
    </section>
</div>
	<div class="product-attributes">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="product-attributes-container">
						<div class="product-attribute-column">
							<p>Reliable full-circle service</p>
							<p>From the initial design process to aftercare and maintenance, our dedicated teams will provide expert support throughout the entire purchase process.</p>

						</div>
						<div class="product-attribute-column">
							<p>Competitive Pricing</p>
							<p>We always strive to give our customers value for money – without compromising on the quality.</p>
						</div>
						<div class="product-attribute-column">
							<p>Modern Technology</p>
							<p>Every product you find at Expert Security UK features up-to-the-minute technology with sophisticated design.</p>
						</div>
						<div class="product-attribute-column">
							<p>Bespoke Service</p>
							<p>We’re proud to give all our clients a service that is created with their specifications in mind. We never treat two customers the same.</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<?php

		$terms = get_the_terms(get_the_ID(), 'products');

		$termName = $terms[0]->name;
		$termID = $terms[0]->term_id;
		$termSlug = $terms[0]->slug;

		$args = array(
			'post_type' 	=> 'product',
			'posts_per_page'   => 2,
			'post_status' 	=> 'publish',
			'orderby'          => 'rand',
			'exclude'		=> array(get_the_ID()),
			'tax_query' => array(
			    array(
			      'taxonomy' => 'products',
			      'field' => 'id',
			      'terms' => $termID,
			      'include_children' => false,
			      'exclude'		=> array(get_the_ID())
			    )
			  )
		);

		$related_products = get_posts($args);

		if($related_products){


	?>
			<div class="related-products">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2>Other <b><?php echo $termName; ?> Products</b></h2>
						</div>
					</div>
					<div class="row">
						
						<?php 
							foreach($related_products as $related_product){

								$product = get_post($related_product);
									
								if($current_product_id != $product->ID){	


							?>
										<div class="related-product">
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
												<img src="<?php echo get_field('product_thumbnail', $product->ID); ?>" alt="" class="img-responsive">
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
												<h3><?php echo $product->post_title; ?></h3>

												<div class="product-excerpt">
													<p><?php echo $product->post_excerpt; ?></p>
												</div>

												<a href="<?php the_permalink($related_product->ID); ?>">Read More</a>
											</div>
										</div>
							<?php
							
								}

							}
						?>



					</div>
				</div>
			</div>
	<?php 
		} 
	?>

	<?php echo get_template_part('partials/get_in_touch'); ?>

</main>
<script defer src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script>
	jQuery( document ).ready(function() {
jQuery('#product_images_carousel img').click(function(){
  imgSrc = jQuery(this).attr('src');
});
 
jQuery('#product_images_carousel img').magnificPopup({
  type:'image',
  callbacks: {
    elementParse: function(item) {
      item.src = imgSrc;
    }
  }
});
		});
</script>
<?php get_footer(); ?>