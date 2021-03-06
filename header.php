<!DOCTYPE html>
<html>
<head>
	<?php   $home = get_template_directory_uri(); ?>
  <link rel="stylesheet" href="<?= $home ?>/reset.css">
  <link rel="stylesheet" href="<?= $home ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

<?php wp_head(); ?>
<!-- <link href="wp-content/themes/wp-bootstrap/assets/fonts/Quicksand-Light.ttf" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<script type="text/javascript">

	$(document).ready(function(){
		$('.box').hide();

		$(window).scroll(function(){
			if($(this).scrollTop()>250){
				$('.box').fadeIn();
			} else {
				$('.box').fadeOut();
			}
		});

		$('.box').click(function(){
			$('body').animate({
				scrollTop: 0
			});
		})

	});
</script>

<?php if (is_home()) { ?>

	<script type="text/javascript">
						$(function() {
							$(window).on("scroll", function() {
								if($(window).scrollTop() > 5) {
										$(".navbar-default").addClass("navbar-fixed-top");
									} else {
										$(".navbar-default").removeClass("navbar-fixed-top");
								}
							});
						});

						$(function() {
							$(window).on("scroll", function() {
								if($(window).scrollTop() > 5) {
										$(".navbar-brand").addClass("nav-bar-logo");
									} else {
										$(".navbar-brand").removeClass(" nav-bar-logo");
								}
							});
						});
	</script>
<?php } ?>

<script type="text/javascript">
	$(document).ready(function (){

								$("#menu-item-242").click(function (){
								$('html, body').animate({
										scrollTop: $(".blog").offset().top
								}, 1000);
						});

                $("#menu-item-118").click(function (){
                $('html, body').animate({
                    scrollTop: $(".portifolio").offset().top
                }, 1000);
            });

            $("#menu-item-350").click(function (){
                $('html, body').animate({
                    scrollTop: $(".sobre").offset().top
                }, 1000);
            });

						$("#menu-item-349").click(function (){
								$('html, body').animate({
										scrollTop: $(".depoimentos").offset().top
								}, 1000);
						});


            $("#menu-item-350").click(function (){
                $('html, body').animate({
                    scrollTop: $(".contato").offset().top
                }, 1000);
            });
        });


</script>
</head>
<?php flush(); ?>
<body>
<!--
BLOQUEANDO O ACESSO COM BOTÃO DIREITO DO MOUSE - CONTRA COPIAS -
oncontextmenu="return false" ondragstart="return false" onselectstart="return false" -->

<div class="container">
		<div  class="box">
			<spamicone class="glyphicon glyphicon-menu-up" aria-hidden="true"></spamicone>
		</div>
</div>

<?php
if(is_home()):
 ?>

<div  class="header">
	<nav id="menu" class="navbar navbar-default text-center">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php bloginfo('url') ?>"><spam>JANE SENNA </spam>FOTOGRAFIAS</a>
		    </div>

			<?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
		    <?php
            wp_nav_menu( array(
                'menu'              => 'Menu',
                'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-collapse-custom',
        		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

		  </div><!-- /.container-fluid -->
		</nav>
</div>
<?php
    elseif (is_category('blog')):
 ?>
<div   class="header-page">
	<nav class="navbar navbar-default navbar-custom text-center">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php bloginfo('url') ?>"><spam>JANE SENNA </spam>FOTOGRAFIAS</a>
		    </div>

				<div class="collapse navbar-collapse navbar-collapse-custom" id="bs-example-navbar-collapse-1">
		       <ul class="nav navbar-nav nav navbar-nav navbar-right">
		         <li><a href="/photograph">HOME</a></li>
						 <li><a href="/photograph/portifolio">PORTIFÓLIO</a></li>
						 <li><a href="/photograph/category/blog">BLOG</a></li>
						 <li><a href="/photograph/#depoimentos">DEPOIMENTOS</a></li>
							<li><a href="/photograph/sobre">SOBRE</a></li>
							<li><a href="/photograph/contato">CONTATO</a></li>
						 <!-- <li> <?php get_search_form(); ?></li> -->
				</div>

		  </div><!-- /.container-fluid -->
		</nav>
		<?php
		    else :
		 ?>
		 <div   class="header-page">
	 	<nav class="navbar navbar-default navbar-custom text-center">
	 		  <div class="container">
	 		    <!-- Brand and toggle get grouped for better mobile display -->
	 		    <div class="navbar-header">
	 		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	 		        <span class="sr-only">Toggle navigation</span>
	 		        <span class="icon-bar"></span>
	 		        <span class="icon-bar"></span>
	 		        <span class="icon-bar"></span>
	 		      </button>
	 		      <a class="navbar-brand" href="<?php bloginfo('url') ?>"><spam>JANE SENNA </spam>FOTOGRAFIAS</a>
	 		    </div>

					<div class="collapse navbar-collapse navbar-collapse-custom" id="bs-example-navbar-collapse-1">
			       <ul class="nav navbar-nav nav navbar-nav navbar-right">
			         <li><a href="/photograph">HOME</a></li>
							 <li><a href="/photograph/portifolio">PORTIFÓLIO</a></li>
							 <li><a href="/photograph/category/blog">BLOG</a></li>
							 <li><a href="/photograph/#depoimentos">DEPOIMENTOS</a></li>
								<li><a href="/photograph/sobre">SOBRE</a></li>
								<li><a href="/photograph/contato">CONTATO</a></li>

					</div>

	 		  </div><!-- /.container-fluid -->
	 		</nav>

	 <article>
	 		<div class="bg-page" data-speed="15">
	 			<div class="container">
	 		<?php if (is_category( '' )): ?>
	 			<!-- <h2>PORTIFÓLIO</h2> -->
	 		<?php else : ?>
	 			<!-- <h2><?php the_title(); ?></h2> -->
	 		<?php endif; ?>

	 			<BR>
	 			<!-- <?php wp_custom_breadcrumbs(); ?> -->
	 			</div>
	 		</div>
	 </article>

	 </div>


<?php endif;

 ?>
