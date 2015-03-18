<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="pushDiv">
<div id="push">
<div id="wrapper" class="hfeed">

<header id="header" role="banner">

<a href="http://www.peruamateurcircus.com"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="100%" height="100%" alt="Circus Logo" /></a>
</header>
<div id="container">