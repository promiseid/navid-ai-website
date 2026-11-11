<?php get_header(); ?>
<main id="content" class="inner-page"><div class="container">
  <div class="section-head"><span class="section-kicker">NAVID AI JOURNAL</span><h1><?php echo esc_html( is_home() ? 'آخرین نوشته‌ها' : get_the_archive_title() ); ?></h1></div>
  <div class="posts-grid">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'post-card' ); ?>>
          <small><?php echo esc_html( get_the_date() ); ?></small>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 23 ) ); ?></p>
          <a href="<?php the_permalink(); ?>">مطالعه نوشته ←</a>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>هنوز نوشته‌ای برای نمایش وجود ندارد.</p>
    <?php endif; ?>
  </div>
  <div class="pagination"><?php the_posts_pagination(); ?></div>
</div></main>
<?php get_footer(); ?>
