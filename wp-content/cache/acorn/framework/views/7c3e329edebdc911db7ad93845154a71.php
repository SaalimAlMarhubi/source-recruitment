<header class="banner bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-[90px]">
            <a class="brand text-purple-800 font-bold text-2xl" href="<?php echo e(home_url('/')); ?>">
                <?php echo $siteName; ?><span class="text-[#CFFF4D]">.</span>
            </a>

            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button id="mobile-menu-button" type="button"
                    class="text-gray-500 hover:text-purple-700 focus:outline-none focus:text-purple-700"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" id="mobile-menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <?php if(has_nav_menu('primary_navigation')): ?>
                <!-- Desktop menu -->
                <nav class="hidden md:flex items-center space-x-4 z-10 list-none"
                    aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
                    <?php echo wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'flex items-center space-x-4',
                        'echo' => false,
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'walker' => new \App\Walkers\TailwindNavWalker(),
                    ]); ?>

                    <a href="/connect"
                        class="bg-custom-gradient text-white px-4 py-2 rounded-full transition-colors hover:bg-gradient-to-b from-[#342C67] to-[#291B64]">
                        Connect
                    </a>

                    <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                        <?php echo file_get_contents(asset('/images/LinkedIn.svg')); ?>

                    </a>
                    <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                        <?php echo file_get_contents(asset('/images/Insta.svg')); ?>

                    </a>
                </nav>
            <?php endif; ?>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'space-y-1',
                    'echo' => false,
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'walker' => new \App\Walkers\TailwindNavWalker(),
                ]); ?>

            <?php endif; ?>
            <a href="/connect"
                class="block bg-purple-700 text-white px-3 py-2 rounded text-base font-medium hover:bg-purple-600 transition-colors">Connect</a>
            <div class="flex space-x-4 mt-4">
                <a href="#" class="text-gray-600 hover:text-purple-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-purple-700">

                </a>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/sections/header.blade.php ENDPATH**/ ?>