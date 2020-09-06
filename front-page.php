<?php get_header(  ); ?>
<main class="">
    <div class="p-4 p-md-5 mb-4 text-white bg-dark">
        <div class="col-md-12 px-0">
            <h1 class=" display-4 font-italic blog-header">
                <?php echo get_theme_mod( 'Heading', 'Sample Headline Here'); ?></h1>
            <p class="blog-description lead my-3"><?php echo get_theme_mod( 'Subtitle', 'Sample Headline Here'); ?></p>
        </div>
    </div>

    </div>

    <div class="row">
        <div class="col-md-12 d-flex flex-column">
        <p class="lead text-center">Click below to read my blog</p>
            <p class="lead text-center">
                <a href="#" class="btn btn-lg btn-primary font-weight-">Read Now</a>
            </p>
        </div>
    </div>
</main>



<?php get_footer();?>