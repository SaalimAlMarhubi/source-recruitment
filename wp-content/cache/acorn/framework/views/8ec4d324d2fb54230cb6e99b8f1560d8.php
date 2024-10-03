<footer class="bg-[#1D153C] text-white py-8 relative">
    <div class="container mx-auto relative">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="footer-menu">
                <?php if($logo = get_field('footer_logo', 'option')): ?>
                    <img src="<?php echo e($logo['url']); ?>" alt="<?php echo e($logo['alt']); ?>" class="mb-4 max-w-[200px]">
                <?php else: ?>
                    <a class="brand text-purple-800 font-bold text-3xl mb-4 inline-block" href="<?php echo e(home_url('/')); ?>">
                        <?php echo $siteName; ?><span class="text-[#CFFF4D]">.</span>
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
                <h2 class="text-xl font-semibold mb-4">Find Us.</h2>
                <?php echo $__env->make('components.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="footer-social">
            </div>
        </div>

        
        <div class="absolute bottom-4 right-4 flex space-x-5">
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                <?php echo file_get_contents(asset('/images/footer-facebook.svg')); ?>

            </a>
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                <?php echo file_get_contents(asset('/images/footer-x.svg')); ?>

            </a>
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                <?php echo file_get_contents(asset('/images/footer-linkedin.svg')); ?>

            </a>
            <a href="#" class="text-gray-600 hover:fill-[#342C67]">
                <?php echo file_get_contents(asset('/images/footer-insta.svg')); ?>

            </a>
        </div>
    </div>
</footer>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/sections/footer.blade.php ENDPATH**/ ?>