<?php get_header(); ?>
<main id="content" class="inner-page"><div class="container content">
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
  <div class="section-kicker"><?php echo esc_html( get_the_date() ); ?></div>
  <h1><?php the_title(); ?></h1>
  <div class="entry-content"><?php the_content(); ?></div>
</article>
<?php the_post_navigation(); ?>
<?php endwhile; ?>
</div></main>
<?php get_footer(); ?>
