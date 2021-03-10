<?php get_header();?>

<section id="intro" class="intro" data-light-bg="false">

  <!-- Parallax -->
  <div class="intro-bg" parallax data-x="0.35" data-y="0.35"></div>
  <div class="turret" parallax data-x="0.35" data-y="0.35"></div>
  <div class="bullet-back" parallax data-x="-0.35"></div>
  <div class="soldier" parallax data-x="0.7" data-y="0.7">
    <div class="person"></div>

    <div id="healthHUD" class="hud health-hud">
      <div class="hud-point"></div>
      <?php svg_embed('img/hud/health-hud'); ?>
      <div class="hud-title">
        <div class="text" data-text="BPM"></div>
        <div class="icon">
          <?php svg_embed('img/hud/icons/heart') ?>
        </div>
      </div>
      <div class="hud-desc large"><div></div></div>
    </div>

    <div id="connectHUD" class="hud connect-hud">
      <div class="hud-point"></div>
      <?php svg_embed('img/hud/connect-hud'); ?>
      <div class="hud-title">
        <div class="text" data-text="CONNECTED"></div>
        <div class="icon">
          <?php svg_embed('img/hud/icons/bluetooth') ?>
        </div>
      </div>
      <div class="hud-desc large"><div></div></div>
    </div>

    <div id="map3dHUD" class="hud map3d-hud">
      <div class="hud-point"></div>
      <?php svg_embed('img/hud/map3d-hud'); ?>
      <div class="hud-title">
        <div class="text" data-text="MAP <span>3D</span>"></div>
      </div>
      <div class="hud-desc large"><div></div></div>
    </div>

    <div id="navHUD" class="hud navigation-hud">
      <div class="hud-point"></div>
      <?php svg_embed('img/hud/navigation-hud'); ?>
      <div class="hud-title left">
        <div class="text" data-text="NAVIGATION"></div>
        <div class="icon">
          <?php svg_embed('img/hud/icons/map') ?>
        </div>
      </div>
      <div class="hud-title right">
        <div class="text" data-text="MAP <span>2D</span>"></div>
      </div>
      <div class="hud-desc large left"><div></div></div>
      <div class="hud-desc large right"><div></div></div>
      <div class="compass" parallax data-x="0.3" data-y="0.3">
        <?php svg_embed('img/hud/compass'); ?>
      </div>
    </div>

    <div class="hud terrain" parallax data-x="0.2" data-y="0.2"></div>
    <div class="hud terrain-top-hud">
      <?php svg_embed('img/hud/terrain-top-hud'); ?>
    </div>
    <div class="hud terrain-bottom-hud" parallax data-x="0.2" data-y="0.2">
      <?php svg_embed('img/hud/terrain-bottom-hud'); ?>
    </div>
  </div>
  <div class="bullet-front" parallax data-x="2" data-y="1"></div>
  <div class="intro-bg-noise"></div>
  <div class="red-light"></div>
  <div class="grass"></div>

  <!-- Text info -->
  <div class="text-block">
    <div class="stripe"><?php the_field('s1-stripe'); ?></div>
    <h1><?php the_field('s1-title'); ?></h1>
    <p class="regular"><?php the_field('s1-subtitle'); ?></p>
    <a class="button" href="#contacts">
      Contact us
    </a>
  </div>
</section>

<section id="about" class="about" data-light-bg="true">
  <div class="title-block">
    <h1><?php the_field('s2-title'); ?></h1>
  </div>
  <div class="image-block">
    <div class="text">
      <p class="regular"><?php the_field('s2-desc'); ?></p>
    </div>
    <div class="image image1">
      <?php $thumb = (!wp_is_mobile()) ? 'about-thumb1' : 'about-thumb1-mob'; ?>
      <?php echo wp_get_attachment_image(get_field('image-1'), $thumb); ?>
    </div>
    <div class="image image2">
      <?php $thumb = (!wp_is_mobile()) ? 'about-thumb2' : 'about-thumb2-mob'; ?>
      <?php echo wp_get_attachment_image(get_field('image-2'), $thumb); ?>
    </div>
  </div>
</section>

<section id="turret" class="turret" data-light-bg="false">
  <div class="title-block">
    <h1><?php the_field('s3-title'); ?></h1>
    <div class="showreel">
      <div class="showreel-image">
        <?php echo wp_get_attachment_image(get_field('video-thumb'), 'video-thumb'); ?>
      </div>
      <div class="showreel-control">
        <div class="play">
          <?php svg_embed('img/play-icon');?>
        </div>
        <p class="medium"><?php the_field('video-desc'); ?></p>
      </div>
    </div>
  </div>

  <?php $models = get_field('models'); if($models): ?>
  <div class="turret-blocks">
    <?php foreach($models as $model) : ?>
    <div class="block">
      <div class="image">
        <?php $thumb = (!wp_is_mobile()) ? 'model-thumb' : 'model-thumb-mob'; ?>
        <?php echo wp_get_attachment_image($model['image'], $thumb); ?>
      </div>
      <div class="desc">
        <h2><?php echo $model['title']; ?></h2>
        <p class="regular"><?php echo $model['desc']; ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</section>

<section id="facts" class="facts" data-light-bg="true">
  <div class="title-block">
    <h1><?php the_field('s4-title'); ?></h1>
    <p class="regular"><?php the_field('s4-subtitle'); ?></p>
  </div>
  <?php $facts = get_field('facts'); if($facts) :?>
  <div class="facts-wrapper">
    <div class="facts-blocks">
      <?php foreach($facts as $fact) : ?>
      <div class="block">
        <span class="title"><?php echo $fact['title']; ?></span>
        <p class="medium"><?php echo $fact['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>
</section>

<section id="gallery" class="gallery" data-light-bg="false">
  <?php $slides = get_field('gallery'); ?>

  <div class="left-slider">
    <div class="dark-slider swiper-container">
      <div class="swiper-wrapper">
        <?php foreach($slides as $slide): ?>
        <div class="swiper-slide">
          <?php $thumb = (!wp_is_mobile()) ? 'slider-thumb' : 'slider-thumb-mob'; ?>
          <?php echo wp_get_attachment_image($slide['image'], $thumb); ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="dark-slider__overlay"></div>
    <div class="title-block">
      <h2><?php echo $slides[0]['title']; ?></h2>
      <p class="regular"><?php echo $slides[0]['desc']; ?></p>
    </div>
    <div class="slides-nav">
      <div class="slides-nav__button prev-slide">
        <?php svg_embed('img/nav-icon');?>
      </div>
      <div class="slides-nav__button next-slide">
        <?php svg_embed('img/nav-icon');?>
      </div>
    </div>
  </div>
  <div class="right-slider swiper-container">
    <div class="swiper-wrapper">
      <?php foreach($slides as $slide): ?>
      <div class="swiper-slide" data-title="<?php echo $slide['title']; ?>" data-text="<?php echo $slide['desc']; ?>">
        <?php $thumb = (!wp_is_mobile()) ? 'slider-thumb' : 'slider-thumb-mob'; ?>
        <?php echo wp_get_attachment_image($slide['image'], $thumb); ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="team" class="team" data-light-bg="false">
  <div class="title-block">
    <h1><?php the_field('s6-title'); ?></h1>
  </div>
  <?php $team = get_field('team'); ?>
  <div class="team-block">
    <?php foreach($team as $member) : ?>
    <div class="member">
      <div class="image">
        <?php echo wp_get_attachment_image($member['photo'], 'member-thumb'); ?>
      </div>
      <h2><?php echo $member['name']; ?></h2>
      <p class="regular"><?php echo $member['position']; ?></p>
      <a href="<?php echo $member['twitter']; ?>">Twitter</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="contacts" class="contacts" data-light-bg="true">

  <div class="content">
    <div class="text-block">
      <div class="contact-info">
        <div class="title">
          <h1><?php the_field('contacts-title', 'options'); ?></h1>
          <p class="regular"><?php the_field('contacts-subtitle', 'options'); ?></p>
        </div>
        <p class="medium">
          <?php the_field('address', 'options'); ?>
        </p>
        <div class="links">
          <?php $tel = get_field('phone', 'options'); if($tel) : ?>
          <a class="phone" href="tel:<?php echo preg_replace('/[^0-9]/', '', $tel); ?>">
            <?php echo $tel; ?>
          </a>
          <?php endif; ?>
          <?php $email = get_field('email', 'options'); if($email) : ?>
          <a class="email" href="mailto:<?php echo antispambot($email, 1); ?>">
            <?php echo $email; ?>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="image-block">
      <?php echo wp_get_attachment_image(get_field('contacts-image', 'options'), 'contacts-thumb'); ?>
    </div>
  </div>

  <div class="copyright">
    <div class="year">
      Conreality® 2015-<?php echo date('Y'); ?>
    </div>
    <div class="createdby">
      <span>Designed & Developed by</span> <a href="https://bambukstudio.com" target="_blank">Bambuk</a>
    </div>
  </div>

</section>

<?php get_footer();?>