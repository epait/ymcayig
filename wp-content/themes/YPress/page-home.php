<?php

/*

Template Name: Home Page

*/

?>

<?php get_header(); ?>

<div class="row-fluid">
	<div class="col-sm-12">

		<div class="layerslider">

		    	<?php query_posts('&cat=2'); ?>

	              <?php if (have_posts()) : ?>

	               	<?php while (have_posts()) : the_post(); ?> 

		    			<div class="ls-slide">

		    				<div class="ls-l" data-ls="slidedelay: 7000;">

			    				<div class="row">

			    					<div class="col-sm-7 slider-column">

			    						<div class="slider-content">

				    						<a class="headline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

						                    <p id="sliderContent"><?php the_excerpt(); ?></p>

						                    <a class="black_arrow" href="<?php the_permalink(); ?>">READ MORE</a>

					                    </div>

				                	</div>

				                	<div class="col-sm-5 slider-column">

					                	<div class="featured-tnail">

					                	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 

					                	</div>

				                	</div>

				                </div>

				            </div>

		    			</div>

		    		<?php endwhile; ?>

	            <?php endif; ?>

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

		            <!-- <div class="row"> -->

		                <!-- <div class="col-sm-12"> -->

		                  	<!-- <div class="tnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div> -->

			                <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

			                <div class="post-author">By <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('display_name'); ?></a> on  <?php the_time(get_option('date_format')); ?></div>

			                <div class="excerpt"><?php the_excerpt(); ?></div>

			                <a class="black_arrow" href="<?php the_permalink(); ?>">READ MORE</a>

			            <!-- </div> -->

			        <!-- </div> -->

		        </div> 

		    <?php endwhile; ?>

		    <?php endif; ?>

		</div>

	    <a id="previousPosts" class="black_arrow pull-right clearfix" href="./news">Previous Posts</a>
	    <div style="clear: both;"></div>
	</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>