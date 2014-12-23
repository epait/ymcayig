<?php get_header(); ?>
<div class="row-fluid">
	<div class="col-sm-12">
		<div class="headerImage"></div>
		<div id="breadcrumb">
  			<div id="bc_left">
  				<?php if(function_exists('bcn_display')) {
        			bcn_display();
    			}?>
			</div>
  			<div id="bc_spacer"></div>
  			<div id="bc_right"><a href="/news">News</a></div>
  		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="col-sm-8 homepageBlog">
		<div class="homeTitle"><h4>Program News</h4></div>
		<hr class="">
		<div class="posts-wrapper">
			<?php query_posts('posts_per_page=5&cat=-2'); ?>
		    <?php if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>    
		        <div class="post">
			                <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
			                <div class="post-author">By <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('display_name'); ?></a> on  <?php the_time(get_option('date_format')); ?></div>
			                <div class="excerpt"><?php the_excerpt(); ?></div>
			                <a class="black_arrow" href="<?php the_permalink(); ?>">READ MORE</a>
		        </div> 
		    <?php endwhile; ?>
		    <?php endif; ?>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>