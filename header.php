<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <?php
wp_head();
?>
    </head>
    <body>
    <header>
	<nav class="navbar navbar-expand-lg navbar-scroll sticky-nav custom-nav navbar-dark">
		<?php
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');

?>
			<div class="container-fluid main-header">
               <?php if ($image[0])
{ ?>
				<img src="<?php echo $image[0] ?>" alt="logo">
				<?php
} ?>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <?php
$button = '<li class="menu-item"><a class="btn btn-primary" href="#">Contact Us</a></li>';
wp_nav_menu(array(
    'theme_location' => 'primary',
    'depth' => 2,
    'container' => 'div',
    'main-header',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'navbarNavDropdown',
    'menu_class' => 'navbar-nav ms-auto',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker() ,
));
?>
    </div>
</nav>
	</header>



	<main>
		<!-- Marketing messaging and featurettes
  ================================================== -->
		<!-- Wrap the rest of the page in another container to center all the content. -->
