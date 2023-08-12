<?php get_header(); ?>

<section class="page-block">
    <div class="container">
        <div class="page-content">
            <div class="page-title">
                <h1 class="title-page-h1"><?php the_title(); ?></h1>
            </div>
            <div class="page-block-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
