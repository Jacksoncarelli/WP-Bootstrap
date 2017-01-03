<?php get_header(); ?>


<div class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	<?php
			$args = array('post_type'=>'slider', 'showposts'=>5);
			$my_slider = get_posts( $args );
			$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
	    	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active"<?php endif; ?>></li>
		<?php
			$count ++ ;
	    	endforeach;
	    	endif;
	     ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<?php
			$cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
		    <div class="item <?php if($cont == 0) echo "active"; ?>">
		      <?php the_post_thumbnail('full'); ?>
		      <div class="carousel-caption">
				<!-- <h2><?php the_title(); ?></h2>
				<a class="leia-mais" href="#">LEIA MAIS</a> -->
		      </div>
		    </div>
	    <?php
	    	$cont ++ ;
	    	endforeach;
	    	endif;
	     ?>

	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>


<div id="portifolio" class="portifolio">


		<div class="row">
						<h3 class="title-portifolio">PORTIFÓLIO</h3>
			<?php
				$args = array('post_type'=>'portifolio', 'showposts'=>4);
				$my_posts = get_posts( $args );
				if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
			 ?>

				<div class="col-md-3 col-lg-3">
					<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
				</div>

			 <?php
		    	endforeach;
		    	endif;
	     	?>
	     	<div class="clear"></div>
			<div class="link"><a class="acessar-portifolio" href="category/portifolio">ACESSAR PORTIFÓLIO</a></div>
		</div>
	</div>
</div>



	<div class="container">
<div id="sobre" class="sobre">
		<div class="row">
	<P>JANE SENNA FOTOGRAFIAS
			<div class="col-md-12 col-lg-12">
					 <img src="/photograph/wp-content/themes/wp-bootstrap/assets/images/jane.jpg" class="img-responsive" alt="Responsive image">

	<br>
					 <ul class="soc-sobre">
						 <li><a class="soc-sobre-facebook" href="#"></a></li>
						 <li><a class="soc-sobre-googleplus" href="#"></a></li>
						 <li><a class="soc-sobre-instagram" href="#"></a></li>
						 <li><a class="soc-sobre-whatsapp soc-sobre-icon-last" href="#"></a></li>
					 </ul>
					 	<div class="link"><a class="acessar-sobre" href="sobre">CONHECER</a></div>

			</div>


		</div>
	</div>
</div>
</div>

<div id="contato" class="contato">
	 <div class="container">
		<h2 class="title-sobre" style="text-align: center; margin-top: 50px; margin-bottom: 50px;">CONTATO</h2>

					<br>
								<br>
											<br>
														<br>
																	<br>
																				<br>
																							<br>

	</div>

</div>
<?php get_footer(); ?>
