<?php get_header(); ?>


	<div class="category-blog">
	<div class="container">
					<div class="form-blog">

									<div class="row">
										<br>
											<?php $cont =1; if(have_posts()) : while (have_posts()) : the_post(); ?>
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
<br>
</div>
</div>

<div class="clear"></div>

</div>


<?php get_footer(); ?>
