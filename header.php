<!DOCTYPE html>

<html lang="en">

  <head>
	<!-- Wszystko powyżej tego wpisu pochodzi z hostingu  -->
    <script>console.log('Sprawdzone - Błędy w konsoli pochodzą z hostingu');</script>
	
	<meta charset="utf-8">

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="lnb Theme">

    <meta name="author" content="Łukasz Bilnik">


    <link href="<?php bloginfo ('stylesheet_url')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/Portfolio.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>

      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    

    <script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/js/jquery-1.8.3.min.js"></script>
			
	<script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/js/Galery.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo ('template_directory'); ?>/js/custom.js"></script>

     <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "CreativeWork",
  "url": "https://lnbtheme.000webhostapp.com/.",
  "author": "Łukasz Bilnik",
  "name": "LnB Theme"
}
</script>
	
	<?php wp_head(); ?>

</head>

<body>

<header id="header">

    	<div id="top">

        		<div class="top-content container clearfix">

            		<h1><a id="logo" href="<?php echo site_url(); ?>"><img src="<?php bloginfo ('template_directory'); ?>/img/logo.png" alt=""></a></h1>

					<div id="header-menu-wrap">

                    	<nav id="menu-top">

                			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

                    	</nav>

                	</div>

                </div>  

        </div>

		

		<?php if (! is_home()) { ?>

		 <div class="container clearfix">

           <hgroup class="top-title">

		   <br/>

		   <br/>

              <h1 class="page-title"><?php the_title(); ?></h1>

           </hgroup>

         </div>

        <?php } ?>

    </header>

