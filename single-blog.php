<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/single-portifolio.css">

<div class="container">
      <div align="center"  class="col-md-12 col-lg-12">
        <div class="conteudo-blog">
        <?php
        if ( have_posts() ) {
          while (have_posts() ) {
            the_post();
        ?>

          <h2><?php the_title(); ?></h2>
          <?php the_date(); ?>
          <br><br>

              <?php the_content(); ?>
          </div>

        <?php
          }
        }
        ?>

        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//janesennafotografias-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>



      </div>
  </div>
</div>






<?php get_footer(); ?>
