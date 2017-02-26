<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/index.css">

<div class="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
			$args = array('post_type'=>'slider', 'showposts'=>5);
			$my_slider = get_posts( $args );
			$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count==0 ): ?> class="active"
                    <?php endif; ?>></li>
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
                <div class="item <?php if($cont == 0) echo " active "; ?>">
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
        <h3 class="title-portifolio">Portifólio
            <p>Últimos álbuns postados</p>
        </h3>

        <?php
			$new_query = new WP_Query( array(
			    'posts_per_page' => 6,
			    'post_type'      => portifolio,
			    'orderby'        => 'menu_order',
			    'paged'          => $paged
			) );
			while ( $new_query->have_posts() ) : $new_query->the_post(); {
?>

            <!-- FOTOS PARA O INDEX TAMANHO 470x470px -->
            <div class="col-md-2 col-lg-2">
              <div class="hoverzoom">
                <?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?>
                <div class="retina ">
                  <a align="center" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                </div>

            </div>
		            <?php
						}
									endwhile;
									wp_reset_postdata();
								?>
            <div class="clear"></div>
            <!-- <a class="acessar-portifolio" align="center" href="category/portifolio">ACESSAR PORTIFÓLIO</a> -->
    </div>
</div>

<li style="list-style-type: none;">
    <hr style="height:1px; border:none; color:#000000; background-color:#000; margin-top: 10px; margin-bottom: 12px;" />
</li>


<div id="blog" class="blog">
    <div class="row">
        <h3 class="title-blog">Blog
            <br>
            <p>Últimos posts</p>
        </h3>
        <?php
			$new_query = new WP_Query( array(
			    'posts_per_page' => 6,
			    'post_type'      => blog,
			    'orderby'        => 'date',
					'order'					 => 'CRES',
			    'paged'          => $paged
			) );
			while ( $new_query->have_posts() ) : $new_query->the_post(); {
?>
            <div class="col-md-4 col-lg-4">
                <a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>
                <a class="" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
                <p></p>
                <div class="data_blog">
                  <?php the_date(); ?>
                </div>
            </div>
            <?php } endwhile; ?>
            <div class="clear"></div>
            <span><a class="acessar-blog" align="center"  href="category/blog">ACESSAR BLOG</a></span>
    </div>
</div>



<!-- FOTOS NO TAMANHO QUADRADO DE 780x520px -->
<div id="depoimentos" class="depoimentos">
    <div align="center" class="container">
        <h2 class="title-depoimentos" style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Depoimentos de Clientes</h2>

        <?php
			$args = array('post_type'=>'depoimento', 'showposts'=>4);
			$my_posts = get_posts( $args );
			if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
		 ?>

            <div class="col-md-3 col-lg-3">
                <?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_excerpt(); ?>
            </div>

            <?php
				endforeach;
				endif;
			?>

    </div>
</div>


<div class="container">
    <div id="sobre" class="sobre">
        <div class="row">

            <div class="col-md-4 col-lg-4">
                <h5>Facebook

            </div>

            <div class="col-md-4 col-lg-4">
                <h5>Jane Sena Novais
                    <img src="/photograph/wp-content/themes/wp-bootstrap/assets/images/jane.jpg" class="img-responsive" alt="Responsive image">

                    <div class="link"><a class="acessar-sobre" href="sobre">Saiba mais sobre mim</a></div>
            </div>

            <div class="col-md-4 col-lg-4">
                <h5>Contato</h5>
                <h3><a href="contato">SOLICITE UM ORÇAMENTO AQUI</a></h3>


                <p>+55 (69) 9.9324-5206
                    <p>janesennafotografias@gmail.com
                        <p>Rua Abílio Freire
                            <p>Ji-Paraná - RO</p>

                            <h6>REDES SOCIAIS</h6>
                            <ul class="soc">
                                <li>
                                    <a class="soc-facebook" href="https://www.facebook.com/janesennafotografias"></a>
                                </li>
                                <li>
                                    <a class="soc-instagram" href="https://www.instagram.com/janesennafotografias/"></a>
                                </li>
                                <li>
                                    <a title="janesennafotografias@gmail.com" class="soc-mail" href="contato"></a>
                                </li>
                                <li>
                                    <a title="(69)9.99743782 | (69)9.9324-5206" class="soc-whatsapp soc-icon-last tooltip" href="#"></a>
                                </li>
                            </ul>
            </div>


        </div>
    </div>
</div>

<div id="instagram" class="instagram">


</div>

<?php get_footer(); ?>
