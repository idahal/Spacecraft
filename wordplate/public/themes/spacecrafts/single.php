<?php get_header(); ?>

<div class="row">
  <div class="col-6">
<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_date() ?>
        <?php the_content(); ?>
        <div class="row mb-4">
          <?php the_post_thumbnail('medium'); ?>
        </div>

        <div class="float-left">
               <?php previous_post_link(); ?>
             </div>

             <div class="float-right">
               <?php next_post_link(); ?>
             </div>
    <?php endwhile; ?>

<?php endif; ?>

</div> <!--end columns-->
</div> <!--end rows-->


<?php get_footer(); ?>
