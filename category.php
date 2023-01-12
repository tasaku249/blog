<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
    <?php
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
    ?> aaaaa
    <h1 class="page-title"><?php echo $catname; ?></h1>

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
