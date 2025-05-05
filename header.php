<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colony_Suppliers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'colony_suppliers' ); ?></a>

 <!-- Navbar -->
 <nav class="navbar">
    <div class="container">
      <div class="navbar-logo">
        <a href="#">Logo</a>
      </div>
      <div class="navbar-links" id="navbar-links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
      </div>
      <div class="mobile-menu-button" id="mobile-menu-button">
        <span>&#9776;</span>
      </div>
    </div>
    <div class="mobile-menu" id="mobile-menu">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </div>
  </nav>

<script>
  const btn = document.getElementById("mobile-menu-button");
  const menu = document.getElementById("mobile-menu");
  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>
