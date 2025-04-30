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
<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex items-center">
        <a href="#" class="text-2xl font-bold text-gray-800">Logo </a>
      </div>
      <div class="hidden md:flex space-x-6 items-center">
        <a href="#" class="text-gray-600 hover:text-blue-600">Home</a>
        <a href="#" class="text-gray-600 hover:text-blue-600">About</a>
        <a href="#" class="text-gray-600 hover:text-blue-600">Services</a>
        <a href="#" class="text-gray-600 hover:text-blue-600">Contact</a>
      </div>
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pt-2 pb-4 space-y-1">
    <a href="#" class="block text-gray-600 hover:text-blue-600">Home</a>
    <a href="#" class="block text-gray-600 hover:text-blue-600">About</a>
    <a href="#" class="block text-gray-600 hover:text-blue-600">Services</a>
    <a href="#" class="block text-gray-600 hover:text-blue-600">Contact</a>
  </div>
</nav>

<script>
  const btn = document.getElementById("mobile-menu-button");
  const menu = document.getElementById("mobile-menu");
  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>
