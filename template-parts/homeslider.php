<!-- Hero Section -->
<div class="custom-slider owl-carousel owl-theme" id="home">
  <?php
  $slides = [
    [
      'title' => 'Scale Your Business with Us',
      'desc' => 'We provide the tools, partners, and supply chain solutions to grow faster.',
      'img' => 'img3.jpg',
      'alt' => 'Business team working together'
    ],
    [
      'title' => 'Trusted Partners & Suppliers',
      'desc' => 'From sourcing to delivery, we connect you with the best in the industry.',
      'img' => 'img1.jpg',
      'alt' => 'Supplier logistics'
    ],
    [
      'title' => 'Fast & Reliable Delivery',
      'desc' => 'Optimize your operations with seamless supply chain support.',
      'img' => 'img2.jpg',
      'alt' => 'Logistics and shipping'
    ]
  ];

  foreach ($slides as $slide): ?>
    <div class="slide">
      <div class="box d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="slide-text">
          <h1><?= $slide['title'] ?></h1>
          <p><?= $slide['desc'] ?></p>
          <!-- <a href="#" class="btn btn-primary">Get Started</a> -->
        </div>
        <div class="slide-image">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $slide['img'] ?>" alt="<?= $slide['alt'] ?>" class="img-fluid">
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
