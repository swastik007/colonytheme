<!-- <section id="home-section" class="bg-gray-50 dark:bg-gray-700">
    <div class="container mx-auto lg:max-w-screen-xl md:max-w-screen-md px-4 pt-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
            <div class="col-span-6">
                <h1 class="text-4xl lg:text-7xl font-semibold mb-5 text-black dark:text-white md:4px lg:text-start text-center">Cook anything with the experts</h1>
                <p class="text-black/55 dark:text-white/50 lg:text-lg font-normal mb-10 lg:text-start text-center">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    <br />
                    accusantium doloremque laudantium, totam
                </p>
                <div class="md:flex align-middle justify-center lg:justify-start">
                    <a class="text-xl w-full md:w-auto font-medium rounded-full text-white py-5 px-6 bg-primary hover:text-primary lg:px-14 mr-6 border border-primary hover:bg-transparent" href="#cook-section">Lets cook</a>
                    <a class="flex border w-full md:w-auto mt-5 md:mt-0 border-primary justify-center rounded-full text-xl font-medium items-center py-5 px-10 text-primary hover:text-white hover:bg-primary" href="#about-section">
                        Explore now
                    </a>
                </div>
            </div>
            <div class="col-span-6 flex justify-center relative">
                <div class="flex bg-white p-2 gap-5 items-center bottom-10 left-10 rounded-xl absolute">
                    <img alt="pizza-image" width="68" height="68" src="/chefs-kitchen-nextjs-free/images/hero/pizza.svg" />
                    <p class="text-lg font-normal">
                        More than 500+ <br />
                        products.
                    </p>
                </div>
                <img alt="nothing" width="1000" height="805" src="/chefs-kitchen-nextjs-free/images/hero/banner-image.png" />
            </div>
        </div>
    </div>
</section> -->


<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/veg.jpg" class="absolute block w-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg" class="absolute block w-64 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpg" class="absolute block w-64 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" class="absolute block w-64 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.jpg" class="absolute block w-64 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

