<?php get_header(); ?>

<div class="row">
  <div class="col-6">
<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if(get_field('name')): ?>
                <p><i><?php the_field('name');?></i></p>
            <?php endif;?>

        <?php if( get_field('image') ): ?>
    	       <img src="<?php the_field('image'); ?>" />
        <?php endif; ?>
        <div class="column">
        <?php if(get_field('content')): ?>
            <p>About the spacecraft: <?php the_field('content'); ?></p>

          <?php endif;?>
          <?php if(get_field('fun_fact')): ?>
              <p>Fun fact: <?php the_field('fun_fact'); ?></p>
         <?php endif;?>
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
