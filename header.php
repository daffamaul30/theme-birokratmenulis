<!DOCTYPE html>
<html>
<head>
	<title>
		Birokrat Menulis
	</title>
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<!-- <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		<?php

		// $defaults = array(
		// 	'theme_location'  => 'header_nav',
		// 	'menu'            => '',
		// 	'container'       => '',
		// 	'container_class' => '',
		// 	'container_id'    => '',
		// 	'menu_class'      => '',
		// 	'menu_id'         => '',
		// 	'echo'            => true,
		// 	'fallback_cb'     => 'wp_page_menu',
		// 	'before'          => '',
		// 	'after'           => '',
		// 	'link_before'     => '',
		// 	'link_after'      => '',
		// 	'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
		// 	'depth'           => 2,
		// 	'walker'          => new wp_bootstrap_navwalker()
		// );

		// wp_nav_menu( $defaults );

		// ?>



    </div>
  </div>
</nav> -->

<nav class="navbar navbar-default navbar-expand-md">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <?php

$defaults = array(
	'theme_location'  => 'header_nav',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
	'depth'           => 2,
	'walker'          => new wp_bootstrap_navwalker()
);

wp_nav_menu( $defaults );

?>
  <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul> -->
  </div>  
</nav>

