<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
        $max_blocks = 2; // Adjust to the number of content blocks
        $max_cards = 3; // Adjust to the number of cards
    ?>

    
    <?php for($i = 1; $i <= $max_blocks; $i++): ?>
        <?php if(get_field('heading_' . $i)): ?>
            <?php echo $__env->make('partials.content-block', [
                'heading' => get_field('heading_' . $i),
                'subheading' => get_field('subheading_' . $i),
                'description' => get_field('description_' . $i),
                'cta1' => get_field('cta_1_link_' . $i),
                'cta2' => get_field('cta_2_link_' . $i),
                'imgSrc' => get_field('image_' . $i),
                'reverse' => get_field('reverse_layout_' . $i),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endfor; ?>

    
    <?php echo $__env->make('components.cards', ['max_cards' => $max_cards], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/template-custom.blade.php ENDPATH**/ ?>