<?php get_header(); ?>



<div class="category-blog">
	<div class="container-fluid">
		<div class="row">
			<!-- <div style="float: right;"  class="col-sm-3 col-sm-offset-1 blog-sidebar">
						<?php if(is_active_sidebar('sidebar-1')): ?>
								<?php dynamic_sidebar('sidebar'); ?>
					  <?php endif; ?>
			</div> -->



			<div class="form-blog">
					<br>
					<?php $args = array(
						'post_type'=>'portifolio');
						$loop = new WP_Query($args);
						?>

							<?php $cont =1; if($loop -> have_posts()) : while ($loop -> have_posts()) : $loop -> 	the_post(); ?>
								<div class="col-md-8">

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>

								<ul>
									<li style="list-style-type: none;"><hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 10px; margin-bottom: -12px;"/></li>

								    <li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> </li>
								    <li style="list-style-type: none;"><hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/></li>
										<br>
										<li><span> <?php the_date(); ?> </span></li>
										 <li><?php the_excerpt(); ?></li>
								</ul>


								<!-- <div class="link"><a class="acessar-post-blog" href="<?php the_permalink(); ?>">ACESSAR</a></div> -->
								</div>
								<?php endwhile; endif; ?>
			</div>
		</div>
  </div>
</div>



<?php get_footer(); ?>
