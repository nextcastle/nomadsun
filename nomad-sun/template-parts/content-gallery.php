<!-- this is our gallery block -->

<!-- essa div representa todas as imagens da galeria -->
<div class="gallery container flex flex-wrap center ph4-l">
    <?php $images = get_sub_field('gallery'); ?>

    <?php foreach ($images as $image): ?>

    <!-- essa div representa cada imagem individual -->
      <div class="gallery-image ph3 mb4 <?php the_field('image_width', $image['id']); ?>">
          <!-- código para puxar a imagem da galeria -->
          <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

          <!-- código para puxar a legenda, se houver -->
          <?php $caption = wp_get_attachment_caption($image['id']); ?>
          <?php if(!empty ($caption)) : ?>
          <p class="caption archivo-regular f5 o-50 pt3 mv0">
          <?php echo $caption; ?>
          </p>
          <?php endif; ?>
      </div>

    <?php endforeach; ?>
</div>
