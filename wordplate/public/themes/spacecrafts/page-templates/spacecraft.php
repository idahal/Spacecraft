<?php /* Template Name: Spacecrafts */ ?>

<?php get_header(); ?>

<div class="row">
    <div class="col">
        <?php echo ('hello'); ?>
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

<div class="row">
  <ul>
    <?php foreach ($spacecrafts as $spacecraft): ?>
                <div class="col mt-4">
                    <h3><a href="<?php the_permalink($spacecraft); ?>"><?php echo $spacecraft->post_title; ?></a></h3>
                    <?php the_excerpt(); ?>
                    <img src="<?php echo the_field('image', $spacecraft); ?>" />
                    <p>Event Date: <?php echo the_field('name', $spacecraft); ?></p>
                    <p>Event Date: <?php echo the_field('content', $spacecraft); ?></p>

    <?php endforeach; ?>
  </ul>


<?php get_footer(); ?>
