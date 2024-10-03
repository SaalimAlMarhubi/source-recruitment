<div class="card bg-white shadow-lg rounded-lg overflow-hidden">

    <div class="p-6">
        
        <?php if($image): ?>
            <img src="<?php echo e($image['url']); ?>" alt="<?php echo e($image['alt']); ?>" class="w-[50px] py-8 object-cover">
        <?php endif; ?>
        
        <?php if($header): ?>
            <h2 class="text-2xl font-semibold mb-2"><?php echo e($header); ?></h2>
        <?php endif; ?>

        
        <?php if($subheader): ?>
            <h3 class="text-xl text-gray-500 mb-4"><?php echo e($subheader); ?></h3>
        <?php endif; ?>

        
        <?php if($description): ?>
            <p class="text-gray-700 mb-6"><?php echo e($description); ?></p>
        <?php endif; ?>

        
        <?php if($link): ?>
            <a href="<?php echo e($link['url']); ?>"
                class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                <?php echo e($link['title']); ?>

            </a>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/components/card.blade.php ENDPATH**/ ?>