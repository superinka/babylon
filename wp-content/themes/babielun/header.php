<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<?php wp_head(); ?>

    

</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<header id="header">
		<?php get_template_part( 'templates/header/header-top' );?>
		<?php get_template_part( 'templates/header/header-bot' );?>
		<?php get_template_part( 'templates/menu/main-menu' );?>

	</header>
	<!-- main -->
    <div id="main" class="clearfix mt30">
    