<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colony_Suppliers
 */

 get_header();
 ?>
 
 <!-- banner section area -->
 <?php get_template_part( 'template-parts/homeslider', 'none' ); ?>
 <!-- banner section area -->
 <?php get_template_part( 'template-parts/highlight', 'none' ); ?>
 <?php get_template_part( 'template-parts/whyus', 'none' ); ?>
 
 <!-- banner section area -->
 <?php get_template_part( 'template-parts/banner-area', 'none' ); ?>
 <!-- banner section area -->

  <!-- aboutus section area -->
  <?php get_template_part( 'template-parts/aboutus', 'none' ); ?>
  <!-- aboutus section area -->
  

  <?php get_template_part( 'template-parts/highlight', 'none' ); ?>
  
  <?php get_template_part( 'template-parts/chairman-message', 'none' ); ?>
  
  <?php get_template_part( 'template-parts/ourservice', 'none' ); ?>
  

  <?php
 
 get_footer();
 