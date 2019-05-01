<?php /* Template Name: Spacecrafts */ ?>

<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>
</div><!-- /col -->
</div><!-- /row -->
<?php
$spacecrafts = get_posts(array('post_type' => 'spacecraft'));
?>

<div class="column">
    <?php foreach ($spacecrafts as $spacecraft): ?>
                <div class="col mt-4">
                    <h2><a href="<?php the_permalink($spacecraft); ?>"><?php echo the_field('name', $spacecraft); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <img src="<?php echo the_field('image', $spacecraft, 'thumbnail'); ?>" />
                    <p>About this spacecraft: <?php echo the_field('content', $spacecraft); ?></p>

    <?php endforeach; ?>

<?php get_footer(); ?>
