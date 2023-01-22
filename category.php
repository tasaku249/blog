<?php get_header(); ?>

<div class="works-header"></div>
<div class="works-title">Works</div>
<hr class="title-hr">

<?php
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
    ?>
<nav id="navi">
  <ul>
    <li><a class=<?php echo (is_category('column')) ? 'click' : 'no-click' ?> href="<?php echo esc_url(home_url('/category/column/')); ?>">azure</a></li>
    <li><a class=<?php echo (is_category('news')) ? 'click' : 'no-click' ?> href="<?php echo esc_url(home_url('/category/news/')); ?>">illust</a></li>
    <li><a class=<?php echo (is_category('hotel')) ? 'click' : 'no-click' ?> href="<?php echo esc_url(home_url('/category/hotel/')); ?>">others</a></li>
  </ul>
</nav>

<div id="container" class="wrapper">
  <main>  
    <!--<h1 class="page-title"><?php echo $catname; ?></h1>-->
    <?php
      if (have_posts()):
        get_template_part('loop');

        if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
        }
      endif;
    ?>
  </main>

</div>

<?php get_footer(); ?>
