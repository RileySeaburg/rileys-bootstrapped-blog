<?php get_header(  )?>
<main class="container">
  <div class="row">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        This is a work in progress.
      </h3>
 <?php if(have_posts()) : ?>
  <?php while (have_posts()) : the_post( ) ?>
      <div class="blog-post">
        <a href="<?php the_permalink() ?>">
        <h2 class="blog-post-title"><?php the_title(  ) ?></h2>
        </a>
        <p class="blog-post-meta"><?php the_date( ); ?> by <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' )) ?>"><?php the_author_meta('nickname'); ?></a></p>
        <?php if(has_post_thumbnail( )) : ?>
          <div class="container post-thumbnail">
          <?php the_post_thumbnail( ); ?>
          </div>
        <?php endif; ?>
        <?php the_excerpt(  ); ?>
      </div>
      <a href="<?php the_permalink( ) ?>" class="btn btn-secondary">Read More</a><!-- /.blog-post -->
 <?php endwhile;?>
 <?php else: ?>
  <p><?php __('No Posts Found');  ?></p>
<?php endif; ?>
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div>

    <aside class="col-md-4">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside>

  </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer( )?>