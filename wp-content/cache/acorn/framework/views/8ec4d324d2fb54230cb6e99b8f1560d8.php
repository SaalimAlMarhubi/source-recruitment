<footer class="bg-[#1D153C] text-white py-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="footer-menu">
                <?php if($logo = get_field('footer_logo', 'option')): ?>
                    <img src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['alt']); ?>" class="mb-4 max-w-[200px]">
                <?php else: ?>
                    <a class="brand text-purple-800 font-bold text-3xl mb-4 inline-block" href="<?php echo e(home_url('/')); ?>">
                        <?php echo $siteName; ?><span class="text-white">.</span>
                    </a>
                <?php endif; ?>

                <?php if(has_nav_menu('footer_menu')): ?>
                    <?php echo wp_nav_menu([
                        'theme_location' => 'footer_menu',
                        'menu_class' => 'footer-nav space-y-2 text-sm',
                        'echo' => false,
                    ]); ?>

                <?php else: ?>
                    <p><?php echo e(__('Please assign a menu to the Footer Menu location', 'sage')); ?></p>
                <?php endif; ?>
            </div>

            
            <div class="footer-map">
                <h2 class="text-xl font-semibold mb-4"><?php echo e(get_field('map_heading', 'option') ?: 'Find out more'); ?></h2>
                <?php echo $__env->make('components.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            
            <div class="footer-social">
                <h2 class="text-xl font-semibold mb-4"><?php echo e(get_field('social_heading', 'option') ?: 'Follow Us'); ?></h2>
                <div class="flex space-x-4">
                    <?php
                        // Get the menu object for the location 'footer_menu'
                        $menu_name = 'footer_menu';
                        $menu = wp_get_nav_menu_object($menu_name);

                        // Retrieve menu items if the menu exists
                        $menu_items = $menu ? wp_get_nav_menu_items($menu->term_id) : [];
                    ?>

                    <?php if($menu_items): ?>
                        <?php $__currentLoopData = $menu_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $logo = get_field('social_media_logo', $item->ID);
                                $url = $item->url;
                            ?>
                            <?php if($logo && $url): ?>
                                <a href="<?php echo e($url); ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo e($logo['url']); ?>" alt="<?php echo e($item->title); ?>" class="w-6 h-6">
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</footer>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/sections/footer.blade.php ENDPATH**/ ?>