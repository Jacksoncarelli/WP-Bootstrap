<?php get_header(); ?>



<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/category.css">

<div class="container text-center">
  <?php get_search_form(); ?>
    <div class="category-blog">
      <!-- <h1>BLOG</h1> -->
        <br>
        <?php $args = array(
						'posts_per_page' => 10,
						'paged' => get_query_var('paged'),
						'post_type'=>'blog');
						$loop = new WP_Query($args);
						?>
        <?php $cont =1; if($loop -> have_posts()) : while ($loop -> have_posts()) : $loop -> 	the_post(); ?>
          <h2>
              <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
              </a>
          </h2>
        <div class="col-md-8 col-centered">

            <ul>
                <li>

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

        <?php endwhile; endif; ?>



    </div>





    <?php wp_link_pages(); ?>

</div>

<?php get_footer(); ?>
