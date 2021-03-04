<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="<?php bloginfo('html_type');?>" charset="<?php bloginfo('charset');?>">
  <link rel="preload" as="font" type="font/woff2" href="<?php assets('fonts/BlenderPro-Medium.woff2');?>" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="<?php assets('fonts/Roboto-Medium.woff2');?>" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="<?php assets('fonts/Roboto-Regular.woff2');?>" crossorigin>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
  <script>
      // Detect webp support && add class to body
      var i = new Image;
      i.onload = i.onerror = function() {document.body.classList.add(i.height == 1 ? "webp" : "no-webp")};
      i.src = "data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==";
    </script>
  <?php get_template_part('templates/preloader'); ?>
  <header>

    <?php
        $top_menu = [
            'theme_location' => 'header_menu',
            'container'      => false,
            'echo'           => false,
            'items_wrap'     => '%3$s'
        ];
    ?>

    <?php if (!wp_is_mobile()) {?>
    <div class="header-bg"></div>
    <a class="logo" href="#intro">
      <?php svg_embed('img/logo');?>
    </a>
    <div class="top-menu">
      <nav>
        <?php echo strip_tags(wp_nav_menu($top_menu), '<a>'); ?>
      </nav>
    </div>
    <?php } else {?>
    <div class="menu">
      <nav>
        <?php echo strip_tags(wp_nav_menu($top_menu), '<a>'); ?>
      </nav>
      <?php get_template_part('templates/social');?>
      <p class="regular createdby">
        <span>Designed & Developed <br>
          by</span> <a href="https://bambukstudio.com" target="_blank">Bambuk</a>
      </p>
    </div>
    <a class="logo" href="#intro">
      <?php svg_embed('img/logo');?>
    </a>
    <div class="burger">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <?php }?>

  </header>
  <main>