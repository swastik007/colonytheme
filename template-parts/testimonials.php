<section class="home-testimonial">
  <div class="container">
    <div class="text-center mb-5 icon-heading">
      <span>Testimonials/Review</span>
      <h3 class="title-heading">Explore the Customer's Experience</h3>
    </div>

    <div class="testimonial-grid">
      <?php
        $testimonials = [
          [
            "name" => "Rishikesh Shrestha",
            "location" => "Kathmandu, Nepal",
            "image" => "img1.jpg",
            "text" => "Colony Production and Suppliers always delivers fresh seafood and frozen items on time. Their consistency helps our kitchen run smoothly every day.."
          ],
          [
            "name" => "Suraj Giri",
            "location" => "Chitwan, Nepal",
            "image" => "img2.jpg",
            "text" => "As a banquet hall manager, I rely on Colony for reliable deliveries. Their team understands the urgency of the hospitality industry."
          ],
          [
            "name" => "Yorjung Karki",
            "location" => "Pokhara, Nepal",
            "image" => "img3.jpg",
            "text" => "We've been ordering groceries and frozen supplies from Colony for over a year. The quality and service are top-notch."
          ],
          [
            "name" => "Sajeet Bajracharya",
            "location" => "Bandipur, Nepal",
            "image" => "img4.jpg",
            "text" => "Their frozen items are always high-quality and fresh. We never worry about delays or stock issues anymore."
          ]
        ];

        foreach ($testimonials as $t) {
          ?>
          <div class="testimonial-card">
            <div class="testimonial-header">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $t['image']; ?>" alt="<?php echo $t['name']; ?>" class="testimonial-img" />
              <div>
                <h4 class="testimonial-name"><?php echo $t['name']; ?></h4>
                <!-- <p class="testimonial-location"><?php echo $t['location']; ?></p> -->
              </div>
            </div>
            <p class="testimonial-text">“<?php echo $t['text']; ?>”</p>
          </div>
          <?php
        }
      ?>
    </div>
  </div>
</section>
