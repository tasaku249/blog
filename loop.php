<div class="article-list">

    <?php while(have_posts()):the_post(); ?>
    <article>
        
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="article-title"><a href="<?php the_permalink(); ?>" > <?php the_title(); ?></a></div>
        <ul class="meta">
        <li><?php the_time('Y/m/d'); ?></li>
        </ul>

    </article>
    <?php endwhile; ?>

</div>