<?php get_header(); ?>

<div class="blog-wrapper">
    <div class="blog-wrapper-inner">
    <?php 
        $args = array(
          'post_type'=>'blogs',
          
        );
        $the_query=new WP_Query($args);
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); 
        ?>
            <li class="listchi">
              <h6><?php echo CFS()->get('b_data');?></h6>
              <p><a href="<?php the_permalink();?>"><?php echo CFS()->get('b_title'); ?></a></p>
            </li>
        <?php endwhile;
        endif; ?>
        <?php  wp_reset_postdata();?>

    </div>
</div>
<?php get_sidebar();?>
<?php get_footer(); ?>