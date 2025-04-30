<section class="bg-white py-10 md:py-16">
    <div class="container max-w-screen-xl mx-auto px-4">
        <h1 class="font-semibold text-gray-900 text-4xl text-center mb-10">Our Gallery</h1>

        <div class="flex flex-wrap justify-center gap-4 md:gap-6 lg:gap-8">
            <?php
            $images = [
                'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg',
                'img5.jpg', 'img6.jpg', 'img7.jpg', 'img8.jpg',
                'img9.jpg', 'img10.jpg'
            ];
            $image_base = get_template_directory_uri() . '/assets/images/';

            foreach ($images as $img) {
                echo '<img src="' . esc_url($image_base . $img) . '" alt="gallery image" class="w-60 h-auto object-cover rounded-md hover:opacity-75 transition duration-500" />';
            }
            ?>
        </div>
    </div>
</section>
