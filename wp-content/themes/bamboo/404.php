<?php get_header(); ?>
<section id="intro" class="intro" data-light-bg="false">
  <!-- Parallax -->
  <div class="intro-bg" parallax data-x="0.5" data-y="0.5"></div>
  <div class="soldier" parallax data-x="1.5" data-y="1.2"></div>
  <div class="bullet" parallax data-x="5" data-y="1"></div>
  <div class="red-light"></div>
  <div class="drone" parallax data-x="-1.5" data-y="-1.5" data-size="2"></div>
  <div class="grass"></div>

  <!-- Text info -->
  <div class="text-block">
    <h1>404</h1>
    <p class="regular">page not found...</p>
    <a class="button" href="<?php echo site_url(); ?>">
      Go home
    </a>
  </div>
</section>
<?php get_footer(); ?>