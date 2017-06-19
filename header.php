<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package esdlp
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Escola Superior de Design do IPCA: Novas instalações</title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/plugins/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/plugins/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/framework/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/framework/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/esdlp/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,700,800" rel="stylesheet"> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  