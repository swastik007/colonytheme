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
  
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        
        <img class="logo-default" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-colony.png" alt="colony Logo">
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#aboutus">About</a></li>
          <li><a href="#highlighted-items">Highlighted Items</a></li>
          <li><a href="#ourservice">Our Services</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
  <script>
document.addEventListener('DOMContentLoaded', function () {
  const body = document.querySelector('body');
  const mobileToggle = document.querySelector('.mobile-nav-toggle');

  if (mobileToggle) {
    mobileToggle.addEventListener('click', function () {
      body.classList.toggle('mobile-nav-active');
    });
  }
});
</script>
