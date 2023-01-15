<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.ico')); ?>">
  	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <?php $anim = (is_home() || is_front_page()) ? 'anim' : ''; ?>
  <header id="header" class="<?php echo $anim; ?>">
    <a class="header-title" href="<?php echo esc_url(home_url()); ?>">MEMOZAKKI</a>
    <nav class="header-navi">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">Works</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">Contact</a></li>
      </ul>
    </nav>
  </header>