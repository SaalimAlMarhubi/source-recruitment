<footer class="bg-[#1D153C] text-white py-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="footer-menu">
                <?php if($logo = get_field('footer_logo')): ?>
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
                <h2 class="text-xl font-semibold mb-4"><?php echo e(get_field('map_heading') ?: 'Find out more'); ?></h2>
                <?php echo $__env->make('components.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            
            <div class="footer-social">
                <h2 class="text-xl font-semibold mb-4"><?php echo e(get_field('social_heading') ?: 'Follow Us'); ?></h2>
                <div class="flex space-x-4">
                    
                    <?php if($facebook_url = get_field('facebook_url')): ?>
                        <?php if($facebook_logo = get_field('facebook_logo')): ?>
                            <a href="<?php echo e($facebook_url); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo e($facebook_logo['url']); ?>" alt="Facebook" class="w-6 h-6">
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    
                    <?php if($x_url = get_field('x_url')): ?>
                        <?php if($x_logo = get_field('x_logo')): ?>
                            <a href="<?php echo e($x_url); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo e($x_logo['url']); ?>" alt="Twitter" class="w-6 h-6">
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    
                    <?php if($instagram_url = get_field('instagram_url')): ?>
                        <?php if($instagram_logo = get_field('instagram_logo')): ?>
                            <a href="<?php echo e($instagram_url); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo e($instagram_logo['url']); ?>" alt="Instagram" class="w-6 h-6">
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    
                    <?php if($linkedin_url = get_field('linkedin_url')): ?>
                        <?php if($linkedin_logo = get_field('linkedin_logo')): ?>
                            <a href="<?php echo e($linkedin_url); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo e($linkedin_logo['url']); ?>" alt="LinkedIn" class="w-6 h-6">
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/sections/footer.blade.php ENDPATH**/ ?>