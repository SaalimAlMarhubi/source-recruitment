<div class="container mx-auto my-8 px-4">
    <div
        class="flex flex-col lg:flex-row items-center lg:space-x-6 space-y-6 lg:space-y-0 <?php echo e($reverse ? 'lg:flex-row-reverse' : ''); ?>">

        <!-- Text Column -->
        <div class="w-full lg:w-1/3 flex flex-col justify-center items-start p-4 lg:p-6">
            <h2 class="text-3xl font-bold mb-2"><?php echo e($heading); ?></h2>
            <h3 class="text-xl text-[#604BD8] font-semibold mb-4"><?php echo e($subheading); ?></h3>
            <p class="text-lg text-[#626262] mb-6"><?php echo e($description); ?></p>
            <div class="flex flex-wrap gap-4">
                
                <?php if($cta1): ?>
                    <a href="<?php echo e($cta1['url']); ?>" target="<?php echo e($cta1['target'] ?? '_self'); ?>"
                        class="bg-custom-gradient text-white px-6 py-2 rounded-full transition-colors hover:bg-gradient-to-b from-[#342C67] to-[#291B64] inline-block">
                        <?php echo e($cta1['title']); ?>

                    </a>
                <?php endif; ?>

                
                <?php if($cta2): ?>
                    <a href="<?php echo e($cta2['url']); ?>" target="<?php echo e($cta2['target'] ?? '_self'); ?>"
                        class="text-[#604BD8] px-6 py-2 rounded-full transition-colors border-[#604BD8] border-2 hover:bg-gradient-to-b from-[#342C67] to-[#291B64] hover:text-white inline-block">
                        <?php echo e($cta2['title']); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Image Column -->
        <div class="w-full lg:w-2/3 relative">
            <div class="aspect-w-16 aspect-h-9 lg:aspect-w-2 lg:aspect-h-1">
                <img src="<?php echo e($imgSrc['url']); ?>" alt="Placeholder Image"
                    class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        </div>

    </div>
</div>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/partials/content-block.blade.php ENDPATH**/ ?>