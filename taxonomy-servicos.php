<?php
get_header();
$servico = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy') );
?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/category.css">
<div class="container">
    <div class="category-blog">
      <!-- <h1>BLOG</h1> -->
        <br>
	<!-- <h2><?php echo $servico->name; ?></h2> -->
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div id="post-<?php echo get_the_ID(); ?>" class="post">
          <div class="col-md-8 col-centered">
              <ul>
                  <li>
                      <h2>
                          <a href="<?php the_permalink(); ?>">
                              <?php the_title(); ?>
                          </a>
                      </h2>
                  </li>
                  <br>
                  <li><span> <?php the_date(); ?> </span></li>
                  <li>
                      <?php the_excerpt(); ?>
                  </li>
                  <li style="list-style-type: none;">
                      <!-- <hr style="height:1px; border:none; color:#000000; background-color:#000; margin-top: 10px; margin-bottom: 12px;" /> -->
                  </li>
              </ul>
              <a class="text-center" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
              <!-- <div class="link"><a class="acessar-post-blog" href="<?php the_permalink(); ?>">ACESSAR</a></div> -->
            </div>
				<?php
			}
		}
		?>
	</div>
</div>
</div>
<?php get_footer(); ?>
