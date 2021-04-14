<!-- this is our post header -->
<section class="flex-l">
  <div class="w-100 w-60-l vh-50 min-vh-100-l cover bg-center" style="<?php nice_background('hero_image')?>">
  </div>

    <div class="w-100 w-40-l flex items-center justify-center ph4 relative">
      <div class="tc">
        <p class="f6 archivo mt0 mb5 ttu tracked absolute-l top-0-l left-0-l w-100-l pt4 pt5-l mb0-l">
      <?php nice_date(get_field('date')); ?>	<span class="line mt4"></span>
      </p>


      <h1 class="f2 f1-l archivo mt0 mb2 ttu lh-title">
        <?php the_title(); ?>
      </h1>
      <p class="f2 f1-l tenor mt0 mb4 ttu lh-title">
        <?php the_field('subhead'); ?>
      </p>
      <p class="f4 cardo i measure mv0">
        <?php the_sub_field('intro'); ?>
      </p>
    </div>
  </div>
</section>
