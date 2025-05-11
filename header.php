<?php
/**
 * The header for our theme
 *
 * @package Colony_Suppliers
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'colony_suppliers' ); ?></a>

  <header id="header" class="header">
    <div class="container-fluid d-flex align-items-center justify-content-between ">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-colony.png" alt="colony Logo">
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu d-none d-xl-block">
        <ul>
          <li><a class="nav-link" href="#home">Home</a></li>
          <li><a class="nav-link" href="#aboutus">About</a></li>
          <li><a class="nav-link" href="#products">Products & Categories</a></li>
          <li><a class="nav-link" href="#team">Our Team</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </nav>

      <!-- Mobile Icons -->
      <div class="mobile-nav-icons d-xl-none">
        <i class="mobile-nav-toggle bi bi-list"></i>
        <i class="mobile-nav-close bi bi-x"></i>
      </div>
    </div>

    <!-- Mobile Nav -->
    <nav class="navmenu-mobile d-xl-none">
      <ul>
        <li><a class="nav-link" href="#home">Home</a></li>
        <li><a class="nav-link" href="#aboutus">About</a></li>
        <li><a class="nav-link" href="#products">Products & Categories</a></li>
        <li><a class="nav-link" href="#team">Our Team</a></li>
        <li><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;
    const navToggle = document.querySelector('.mobile-nav-toggle');
    const navClose = document.querySelector('.mobile-nav-close');
    const mobileMenu = document.querySelector('.navmenu-mobile');

    navToggle.addEventListener('click', () => {
      body.classList.add('mobile-nav-active');
      mobileMenu.classList.add('show');
    });

    navClose.addEventListener('click', () => {
      body.classList.remove('mobile-nav-active');
      mobileMenu.classList.remove('show');
    });
  });
</script>

</body>
</html>