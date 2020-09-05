
<div class="container portfolio">
  <h2 class="project_title"><?php the_title(); ?></h2>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="entry-content">
      <?php
      the_content(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'seo_peaks' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post( get_the_title() )
        )
      );

      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seo_peaks' ),
          'after'  => '</div>',
        )
      );
      ?>
    </div><!-- .entry-content -->
  </article><!-- #post-<?php the_ID(); ?> -->
</div>