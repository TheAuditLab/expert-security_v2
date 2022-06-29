<div class="grid twitter-feed no-gutters gradient-grey hide-on-mobiles">
<div class="unit one-fifth">
	<i class="fa fa-twitter"></i> Latest Tweets
</div>
<div class="unit four-fifths">
	<?php echo do_shortcode("[twitget]"); ?>
</div>
</div>

<div class="grid">
<div class="unit gradient-grey product-slides" style="border-left: 20px solid #ffffff; border-right: 20px solid #ffffff; margin-bottom: 20px;">
	<?php

$terms = get_terms('products');
   foreach ($terms as $term) {
      $wpq = array ('taxonomy'=>'product','term'=>$term->slug);
      $myquery = new WP_Query ($wpq);

      $article_count = $myquery->post_count;


      echo "<!-- ", var_dump($myquery->query) , " -->";

      echo '<div class="product-thumb" style="margin: 10px;">
      	<a href="'.esc_url( home_url( '/' ) ).'products/'.$myquery->query['term'].'/">
      		<h2 class="title" style="font-size: 14px;">'.ucwords(str_replace('-', ' ', $myquery->query['term'])).'</h2>
      		<img src="'.get_field('product_category_thumbnail', 'products_'.$term->term_id.'').'" height="150" />
      		<span>View Products</span>
      	</a>
      </div>';
}

?>
</div>
</div>