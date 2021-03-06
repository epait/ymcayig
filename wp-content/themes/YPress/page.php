<?php get_header() ?>
<!-- Main Content -->
        <div class="row-fluid">
        	<div class="col-sm-12">
	            <div class="single-content">
	            	<?php if (have_posts()) : ?>
	            		<?php while (have_posts()) : the_post(); ?>
	            			<div class="headerImage"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></div>
	            			<div id="breadcrumb">
		  						<div id="bc_left">
		  							<?php if(function_exists('bcn_display')) {
		        						bcn_display();
		    						}?>
								</div>
		  						<div id="bc_spacer"></div>
		  						<div id="bc_right"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		  					</div>
	            			<div class="pageTitle"><?php the_title(); ?></div>
							<?php the_content() ?>
							<?php
								// check if the repeater field has rows of data
								if( have_rows('page_sections') ): ?>
									<br />
									<?php 
								 	// loop through the rows of data
								    while ( have_rows('page_sections') ) : the_row();
								        // display a sub field value
								        the_sub_field('additional_section');
								        ?> <br /> <?php 
								    endwhile;
								else :
								    // no rows found
								endif;
							?>
	            		<?php endwhile; ?>
	            	<?php endif; ?>
	            </div>
        	</div>
        </div>
<?php get_footer() ?>