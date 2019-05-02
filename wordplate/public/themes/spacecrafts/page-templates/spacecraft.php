<?php /* Template Name: Spacecrafts */ ?>

<?php get_header(); ?>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>
        <?php endif; ?>

<?php
    $spacecrafts = get_posts(array('post_type' => 'spacecraft'));
?>

<div class="row">
        <?php foreach ($spacecrafts as $spacecraft): ?>
            <div class="col mt-5">
                <h2 class="name_spacecraft"><a href="<?php the_permalink($spacecraft); ?>"><?php echo the_field('name', $spacecraft); ?></a></h2>
                <?php the_excerpt(); ?>
                <img src="<?php echo the_field('image', $spacecraft); ?>" />
                <p><b>About this spacecraft: </b><?php echo the_field('content', $spacecraft); ?></p>
            </div><!-- /col -->
      <?php endforeach; ?>
</div><!-- /row -->
<?php get_footer(); ?>
