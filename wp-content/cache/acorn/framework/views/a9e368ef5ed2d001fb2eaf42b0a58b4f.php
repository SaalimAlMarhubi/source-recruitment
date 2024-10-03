

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php for($i = 1; $i <= $max_cards; $i++): ?>
            <?php if(get_field('card_image_' . $i)): ?>
                <?php echo $__env->make('components.card', [
                    'image' => get_field('card_image_' . $i),
                    'header' => get_field('header_' . $i),
                    'subheader' => get_field('subheader_' . $i),
                    'description' => get_field('description_' . $i),
                    'link' => get_field('link_' . $i),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/components/cards.blade.php ENDPATH**/ ?>