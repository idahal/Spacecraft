<?php get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>
        <div class="row">
            <div class="col mt-5 mb-5">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <div class="col-8 mt-5">
                    <?php if( get_field('image') ): ?>
                	       <img src="<?php the_field('image'); ?>" />
                    <?php endif; ?>

                    <?php if(get_field('name')): ?>
                        <p><i><?php the_field('name');?></i></p>
                    <?php endif;?>

                    <?php if(get_field('content')): ?>
                        <p><b>About the spacecraft: </b><?php the_field('content'); ?></p>
                    <?php endif;?>

                    <?php if(get_field('fun_fact')): ?>
                        <p><b>Fun fact: </b> <?php the_field('fun_fact'); ?></p>
                     <?php endif;?>
                </div> <!--end columns-->

        <div class="float-left">
            <?php previous_post_link(); ?>
         </div>
         <div class="float-right">
           <?php next_post_link(); ?>
         </div>
        </div> <!--end columns-->
    </div> <!--end rows-->
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
