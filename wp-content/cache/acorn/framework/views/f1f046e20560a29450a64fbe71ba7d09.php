<article <?php (post_class()); ?>>
  <header>
    <h2 class="entry-title">
      <a href="<?php echo e(get_permalink()); ?>">
        <?php echo $title; ?>

      </a>
    </h2>

    <?php echo $__env->make('partials.entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </header>

  <div class="entry-summary">
    <?php (the_excerpt()); ?>
  </div>
</article>
<?php /**PATH /Users/saalim/Local Sites/source-recruitment/app/public/wp-content/themes/source-recruitment/resources/views/partials/content.blade.php ENDPATH**/ ?>