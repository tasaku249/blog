<?php get_header(); ?>

<div class="works-header"></div>

<div id="container" class="wrapper">
  <main>
    <div class="article">
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <article>
            <h1 class="article-title">
                <?php the_title(); ?>
            </h1>
            <ul class="meta">
            <li><?php the_time('Y/m/d'); ?></li>
            </ul>
            <a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <div class="text"><?php the_content(); ?></div>
        </article>
        <?php endwhile;endif; ?>
    </div>
  </main>

</div>

<?php get_footer(); ?>