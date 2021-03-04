<?php

define( 'WP_POST_REVISIONS', false );

$host = explode('.', $_SERVER['HTTP_HOST']);

// Local development environment
if (end($host) === 'loc') {

  // DB Configuration
  define('DB_NAME', 'conreality');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', 'localhost');

  // Debug
  define('WP_DEBUG', true);
}
