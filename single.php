<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="single-wrapper">
<h2><?php echo CFS()->get('b_title');?></h2>
    <div class="single-wrapper-inner">
        <div class="single-image">
            <img src="<?php echo CFS()->get('thumbnail');?>" alt="">
        </div>
        <div class="single-contents">
            
            <div><?php echo CFS()->get('b_text');?></div>
        </div>
    </div>
    <div class="date"><?php echo CFS()->get('b_data');?></div>
</div>
<?php previous_post_link('%link'); ?>
<?php next_post_link('%link'); ?>
<?php endwhile; endif; ?>
<?php get_footer();?>