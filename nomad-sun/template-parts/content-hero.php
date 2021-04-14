
<!-- <h1><a href="<?php the_permalink(); ?>"> Check out <?php the_title(); ?>! </a></h1> -->

<a class="db link hero min-vh-100 cover bg-center ma0 pa0 flex items-center justify-center"
style="<?php nice_background('hero_image')?>" href="<?php the_permalink(); ?>">
		<div class="hero-content tc white ph3 ph4-l">
				<h1 class="hero-heading archivo f2 f1-l b mt0 mb3 ttu white tc lh-title">
					<?php the_title(); ?>
				</h1>

				<!-- aqui ele primeiro verifica a existencia do campo subhead, depois ele puxa o campo -->
				<?php if(get_field('subhead')): ?>
				<p class="hero-subhead tenor f2 f1-l mb5 mb6-l mt0 ttu lh-title">
					<?php the_field('subhead'); ?>
				</p>
				<?php endif; ?>

				<?php if (get_field('date') ): ?>
				<p class="date archivo f6 ma0 ttu tracked b">
						<?php nice_date(get_field('date')); ?>
					<?php endif; ?>
		</div>

</a>
