<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="text/html">

	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
	<style>
	/* Mobile first layout SmartMenus Core CSS (it's not recommended editing these rules)
	   You need this once per page no matter how many menu trees or different themes you use.
	-------------------------------------------------------------------------------------------*/
	.sm{box-sizing:border-box;position:relative;z-index:9999;-webkit-tap-highlight-color:rgba(0,0,0,0);}
	.sm,.sm ul,.sm li{display:block;list-style:none;margin:0;padding:0;line-height:normal;direction:ltr;text-align:left;}
	.sm-rtl,.sm-rtl ul,.sm-rtl li{direction:rtl;text-align:right;}
	.sm>li>h1,.sm>li>h2,.sm>li>h3,.sm>li>h4,.sm>li>h5,.sm>li>h6{margin:0;padding:0;}
	.sm ul{display:none;}
	.sm li,.sm a{position:relative;}
	.sm a{display:block;}
	.sm a.disabled{cursor:default;}
	.sm::after{content:"";display:block;height:0;font:0px/0 serif;clear:both;overflow:hidden;}
	.sm *,.sm *::before,.sm *::after{box-sizing:inherit;}



@media (min-width:768px){.main-menu-btn{position:absolute;top:-99999px;}
 #main-menu-state:not(:checked) ~ #main-menu{display:block;}
}
body{margin:8px;background:#fff;color:#aaa;font:16px/1.5em 'Helvetica Neue', Helvetica, Arial, sans-serif;}
.demo-text{margin:3em 22px;}
.demo-text p{margin-bottom:1em;}
.demo-text a{color:#999;}
.hide-large{display: none;}


/* ============================= 
 ! Layout for ipad 
 ============================= */

@media only screen and (max-width:1048px) {
body nav.page-nav{display: block !important;}
#mega-menu-wrap-header-menu #mega-menu-header-menu{padding: 0;}
#mega-menu-wrap-header-menu #mega-menu-header-menu > li.mega-menu-item > a.mega-menu-link{padding: 0 9px;}
 .logo-shield img{width: 80px;}
 .logo-text img{width: 320px;}
   
}
@media (min-width:768px){#main-menu{float:right;clear:none;}}
/* ============================= 
 ! Layout for 767  
 ============================= */

@media only screen and (max-width: 767px) {
.hide-large{display: block;}
.hide-small, body nav.page-nav{display: none !important;}
header .container, .page-nav .container{width: 100%; max-width: 1170px;}
.main-nav{background:#fff; }
.main-nav:after{clear:both;content:"\00a0";display:block;height:0;font:0px/0 serif;overflow:hidden;}
.nav-brand{float:left;margin: 15px;}
 #main-menu{clear:both;}

.main-menu-btn{float:right;margin: 25px 15px;position:relative;display:inline-block;width: 30px;height:29px;text-indent:29px;white-space:nowrap;overflow:hidden;cursor:pointer;-webkit-tap-highlight-color:rgba(0, 0, 0, 0); font-size: 0;}
.main-menu-btn-icon,.main-menu-btn-icon:before,.main-menu-btn-icon:after{position:absolute;top:50%;left:2px;height: 4px;width: 30px;background: #2797c2;-webkit-transition:all 0.25s;transition:all 0.25s;}
.main-menu-btn-icon:before{content:'';top: -8px;left:0;}
.main-menu-btn-icon:after{content:'';top: 8px;left:0;}
#main-menu-state:checked ~ .main-menu-btn .main-menu-btn-icon{height:0;background:transparent;}
#main-menu-state:checked ~ .main-menu-btn .main-menu-btn-icon:before{top:0;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);}
#main-menu-state:checked ~ .main-menu-btn .main-menu-btn-icon:after{top:0;-webkit-transform:rotate(45deg);transform:rotate(45deg);}
#main-menu-state{position:absolute;width:1px;height:1px;margin:-1px;border:0;padding:0;overflow:hidden;clip:rect(1px, 1px, 1px, 1px);}
#main-menu-state:not(:checked) ~ #main-menu{display:none;}
#main-menu-state:checked ~ #main-menu{display:block;} 

.headere-mobile-logo{margin-bottom: -7px;}


#main-menu{max-height: calc(100% - 92px);position: fixed;background:#2797c2;  color: #fff; width: 100%;top: 92px;margin: 0;overflow-y: auto;left: auto;right: 0;z-index:999;border: 0;box-shadow: none;}

#main-menu a{padding: 7px 15px; color: #fff; font-size: 18px; line-height: 1.5;}

.sub-arrow{position: absolute;top: 0;right: 0;text-align: center;line-height: 38px;background: transparent;padding: 0;margin: 0;border: 0; border-radius:0; width: 50px; height: 38px; overflow: hidden;}
.sub-arrow:hover, .sub-arrow:focus{background:transparent;}
.sub-arrow:before{content:"\f067"; font-family: 'fontAwesome';}
.sub-arrow .fa{display: none;}
.highlighted .sub-arrow:before{content:"\f068";}
.sub-menu a{padding-left: 30px !important; font-size: 16px !important;}
.sub-menu .sub-menu a{padding-left: 45px !important;}


header{padding: 4px 0 !important; height: 92px; background: #fff; position: fixed; left: 0; top: 0; right: 0; z-index: 9999999; box-shadow: 0 3px 7px rgba(0,0,0,0.1);}
main{overflow: hidden;}
 
}

@media (max-width: 479px) {
	body.home main {
		top: 46px !important;
	}
}

body.tax-products .content {
	margin-top: 0px !important;
}
	</style>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost:8888/wp-content/themes/expert-security_v2/style.css">

	<script type="text/javascript">
	   var adiInit = "30308", adiRVO = true;
	   var adiFunc = null;
	   (function() {
	      var adiSrc = document.createElement("script"); adiSrc.type = "text/javascript";
	      adiSrc.async = true;
	      adiSrc.src = ("https:" == document.location.protocol ? "https://static-ssl" : "http://static-cdn")
	      	+ ".responsetap.com/static/scripts/rTapTrack.min.js";
	      var s = document.getElementsByTagName("script")[0];
	      s.parentNode.insertBefore(adiSrc, s);
	   })();
	</script>

	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style type="text/css">
		div.breadcrumbs { margin-bottom: 15px; margin-top: 15px; }
		body nav.page-nav nav.navigation ul#mega-menu-header-menu > li ul.mega-sub-menu > li ul {
			margin-left: 15px;
			margin-bottom: 15px;
		}
		body nav.page-nav nav.navigation ul#mega-menu-header-menu > li ul.mega-sub-menu > li ul li a {
			font-weight: 700;
		}
		body nav.page-nav nav.navigation ul#mega-menu-header-menu > li ul.mega-sub-menu > li ul.sub-menu li a {
			/*color: #173a69;*/
			font-weight: 300;
		}

		.collapse { display: block; }

	</style>
</head>
<body <?php body_class(); ?>>

	<header class="default">
		
		<div class="md-lg hide-small">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						
						<div class="header-logo">
							<a href="<?php echo home_url(); ?>" class="logo-shield">
								<img src="<?php echo get_template_directory_uri(). '/images/logo-shield.png'; ?>" alt="Expert Security Logo">
							</a>
							<a href="<?php echo home_url(); ?>" class="logo-text">
								<img src="<?php echo get_template_directory_uri(). '/images/logo-text.png'; ?>" alt="Expert Security Logo">
							</a>
						</div>
							

					</div>
					<div class="col-xs-6">
						<div class="header-contact-details">
							
							<a href="tel:0800 211 8413" class="phone">
								<i class="fa fa-phone"></i>
								<span class="rTapNumber216426">0800 211 8413</span>
							</a>

							<a href="mailto:info@expertsecurityuk.co.uk" class="email">
								<i class="fa fa-envelope"></i>
								<span>info@expertsecurityuk.co.uk</span>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sm-xs hide-large">
			<nav class="main-nav" role="navigation">
			<!-- Mobile menu toggle button (hamburger/x icon) -->
			<input id="main-menu-state" type="checkbox" />
			<label class="main-menu-btn" for="main-menu-state">
				<span class="main-menu-btn-icon"></span> Toggle main menu visibility
			</label>
  			<h2 class="nav-brand"><a href="/"><img src="<?php echo get_template_directory_uri(). '/images/header-mobile-logo.png'; ?>" class="headere-mobile-logo"></a></h2>
  			<div class="header-right">
	          	<div class="header-search">
	            	<a href="#!" rel="nofollow" class="search-icon"><i class="fa fa-search"></i></a>
	            	<?php get_search_form(); ?>
	          	</div>
	        </div>
		  	<!-- Sample menu definition -->
		  	<?php 
			wp_nav_menu( array( 
				'theme_location' => 'header-menu-mobile', 
				'container' => false,
				'container_class' => false,
				'menu_class' => 'sm sm-clean',
				'menu_id' => 'main-menu',
				) 
			);
			?>
			</nav>
		</div>
			
			
	</header>

	<nav class="page-nav">

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navigation">

						<a href="<?php echo home_url(); ?>" class="sticky-shield">
							<img src="<?php echo get_template_directory_uri(). '/images/mid-white-shield.png'; ?>" alt="">
						</a>

						<?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>

						<a href="tel:0800 211 8413" class="sticky-phone">
							<i class="fa fa-phone"></i>
							<span class="rTapNumber216426">0800 211 8413</span>
						</a>

						<div class="header-right">
				          	<div class="header-search">
				            	<a href="#!" rel="nofollow" class="search-icon"><i class="fa fa-search"></i></a>
				            	<?php get_search_form(); ?>
				          	</div>
				        </div>

					</nav>
				</div>
				
			</div>
		</div>

	</nav>


	<section id="usp-strip">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<table>
						<tr>
							<td>
								<img src="<?php echo get_template_directory_uri(). '/images/small-white-shield.png'; ?>" alt="">
								Nationwide Service
							</td>
							<td>
								<img src="<?php echo get_template_directory_uri(). '/images/small-white-shield.png'; ?>" alt="">
								Free, No Obligation Site Survey & Consultation 
							</td>
							<td>
								<img src="<?php echo get_template_directory_uri(). '/images/small-white-shield.png'; ?>" alt="">
								Design, Installation & Maintenance
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>