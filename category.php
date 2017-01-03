<?php get_header(); ?>



<div class="category-blog">
	<div class="container">
		<div class="row">
			<div style="float: right;"  class="col-sm-3 col-sm-offset-1 blog-sidebar">
						<?php if(is_active_sidebar('sidebar-1')): ?>
								<?php dynamic_sidebar('sidebar'); ?>
					  <?php endif; ?>
			</div>


			<div class="form-blog">
					<br>
					<?php $args = array(
						'post_type'=>'portifolio');
						$loop = new WP_Query($args);
						?>

							<?php $cont =1; if($loop -> have_posts()) : while ($loop -> have_posts()) : $loop -> 	the_post(); ?>
								<div class="col-md-8">
					<br>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				  <br>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
					<br>

								<?php the_excerpt(); ?>

								<!-- <div class="link"><a class="acessar-post-blog" href="<?php the_permalink(); ?>">ACESSAR</a></div> -->
								</div>
								<?php endwhile; endif; ?>
			</div>
		</div>
  </div>
</div>



<?php get_footer(); ?>
