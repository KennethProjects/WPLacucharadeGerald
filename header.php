<html>
<head>
	<title><?php bloginfo('name');?> La cuchara de Gerald </title>
	<link rel="stylesheet" type="text/css" href="<?php echo
     get_stylesheet_uri(); ?>">
	<?php wp_head();?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
    
</head>
<body <?php body_class();?>>
     <nav class="navbar navbar-expand-lg py-lg-4 navbar-light" role="navigation" >
      <div class="container">
        <div class="site-heading text-center d-none d-lg-block ">
             <span class="site-heading-upper text-primary mb-3">
              <a class="mx-auto" href="#">
                <img class="img-fluid logo" src=" <?php bloginfo('template_directory'); ?>/assets/images/logo.png">
              </a>
     
        </div>
           <a class="navbar-brand text-uppercase d-lg-none" href="#">
                <img class="img-fluid logo" src=" <?php bloginfo('template_directory'); ?>/assets/images/logo.png">
           </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ) );
            ?>
    </div>
    


</nav>
