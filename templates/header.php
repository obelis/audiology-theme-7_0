<header class="location">
	<div class="container">
	<div class="col-md-8">
	  <?php 
		$display_logo = of_get_option('display_logo');
		$logo_url = of_get_option('logo_upload');
		$display_logo_attachment_id = kd_get_attachment_id($logo_url);
		$logo_feature_size = wp_get_attachment_image_src( $display_logo_attachment_id, 'full' );
		$display_slogan = of_get_option('display_slogan');	
		$company_name = of_get_option('company_name');	
		$slogan = of_get_option('slogan');
		
		if ( of_get_option('logo_upload') && $display_logo == 1) { ?>
	            <a href="<?php echo home_url(); ?>"><img src="<?php echo $logo_feature_size[0];  ?>" class="img-responsive" id="logo" alt="<?php bloginfo('name'); ?>"/></a>
      <?php } 
        if ($display_slogan == 1){
			echo '<h2 id="logo_name">'.$company_name.'</h2><h3>'.$slogan.'</h3>';
		}
		?>
    </div>
    
    <div class="col-md-4">
	    <?php dynamic_sidebar('header-widgets'); ?>
    </div>
	</div>
</header>
<section class="banner navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</section>
