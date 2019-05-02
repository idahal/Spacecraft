<?php /* Template Name: Homes */ ?>

<?php get_header(); ?>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>

<?php
    $homepages = get_posts(array('post_type' => 'home'));
?>

<div class="row">
        <?php foreach ($homepages as $home): ?>
            <div class="col mt-5">
                <h1 class="title"><?php echo the_field('welcome', $home); ?></h1>
                <img class="image_front_page" src="<?php echo the_field('image_front_page', $home); ?>" />
            </div><!-- /col -->
        <?php endforeach; ?>
</div><!-- /row -->
<?php get_footer(); ?>
