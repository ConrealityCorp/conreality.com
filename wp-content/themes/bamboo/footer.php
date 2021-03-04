<footer>
  <?php get_template_part('templates/social'); ?>
  <div class="video-popup">
    <div class="video-block">
      <video controls>
        <source src="<?php the_field('s3-video'); ?>" type="video/mp4">
      </video>
      <div class="close-popup">
        <?php svg_embed('img/close-icon'); ?>
      </div>
    </div>
  </div>
</footer>
</main>
<div id="pointer" class="pointer">
  <?php svg_embed('img/pointer'); ?>
  <div class="pointer-center"></div>
</div>
<?php wp_footer(); ?>
</body>

</html>