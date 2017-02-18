<?php

/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');






/**************************************
 *  PAGINAÇÃO
/**************************************/
 function wordpress_pagination() {
             global $wp_query;

             $big = 999999999;

             echo paginate_links( array(
                   'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                   'format' => '?paged=%#%',
                   'current' => max( 1, get_query_var('paged') ),
                   'total' => $wp_query->max_num_pages
             ) );
       }

 /**************************************
 *  THE TITLE
 **************************************/
function setup_theme()
{
 add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'setup_theme' );


/**************************************
/Registro das suas widgets
/**************************************/
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar-1',
        'description' => 'Esta sidebar será exibida, mostrando as categorias busca e redes sociais',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
}

add_action ('widgets_init','register_sidebar');

/**************************************
 * Registro Menu Personalizado
 **************************************/
add_theme_support('menus');
register_nav_menus( array(
    'primary' => __( 'Menu header', 'menu-header' ),
    'menu-category' => 'Menu categoria',
) );

/**************************************
 *  SCRIPTS / CSS
 **************************************/
function wp_responsivo_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );
  wp_enqueue_script('jquery.localscroll-1.2.7-min', get_template_directory_uri().'/assets/js/jquery.localscroll-1.2.7-min.js', array('jquery') );
  wp_enqueue_script('jquery.parallax-1.1.3', get_template_directory_uri().'/assets/js/jquery.parallax-1.1.3.js', array('jquery') );
  wp_enqueue_script('jquery.scrollTo-1.4.2-min', get_template_directory_uri().'/assets/js/jquery.scrollTo-1.4.2-min', array('jquery') );
  wp_enqueue_script('jquery.min.js', get_template_directory_uri().'/assets/js/2.2.1/jquery.min.js', array('jquery') );



  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );


/**************************************
 * Registro Custom Post type Slider
 **************************************/
add_action('init', 'slider_registrer');
function slider_registrer(){
     $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Adicionar slider', 'slider'),
        'add_new_item' => __('Adicionar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'view_item' => __('Ver slider'),
        'search_items' => __('Procurar slider'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','thumbnail'),
      );
    register_post_type('slider',$args);
}


// Registrar áreas de widgets
function theme_widgets_init() {
 // Área 1
 register_sidebar( array (
 'name' => 'Primary Widget Area',
 'id' => 'primary_widget_area',
 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
 'after_widget' => "</li>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
  ) );

 // Área 2
 register_sidebar( array (
 'name' => 'Secondary Widget Area',
 'id' => 'secondary_widget_area',
 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
 'after_widget' => "</li>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
  ) );
} // end theme_widgets_init

add_action( 'init', 'theme_widgets_init' );




/**************************************
 * BREADCRUMBS
 **************************************/
function wp_custom_breadcrumbs() {

  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) {

    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';

  } else {

    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</div>';

  }
} // end wp_custom_breadcrumbs()



// Cadastro do POST TYPE BLOG //
function cadastrando_post_type_blog() {

  $nomeplural = 'Blogs';
  $nomesingular = 'Blog';
  $description = $nomeplural.' da empresa';

  $labels = array(
      'name' => $nomeplural,
      'name_singular' => $nomesingular,
      'add_new_item' => 'Adicionar novo '. $nomesingular,
      'edit_item' => 'Editar '. $nomesingular,
      'new_item' => __('Novo '. $nomesingular),
      'all_items' => __('Todos os '. $nomeplural),
      'view_item' => __('Ver '. $nomesingular),
      'search_items' => __('Pesquisar ' .$nomeplural),
      'not_found' =>  __('Não foram encontrados '. $nomeplural),
      'not_found_in_trash' => __('Nenhum '. $nomesingular .' foi encontrado na lixeira'),
      'parent_item_colon' => '',
      'menu_name' => $nomeplural

  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => $supports,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array(
                  'title',
                  'editor',
                  'author',
                  'thumbnail',
                  'excerpt',
                  'comments',
            )
            // 'taxonomies'  => array( 'category' ),
         );

  register_post_type('blog', $args);
  flush_rewrite_rules();

}


add_action('init','cadastrando_post_type_blog');



// Cadastro do POST TYPE PORTIFOLIO //
function cadastrando_post_type_portifolio() {

  $nomeplural = 'Portifólios';
  $nomesingular = 'Portifólio';
  $description = $nomeplural.' da empresa';

  $labels = array(
      'name' => $nomeplural,
      'name_singular' => $nomesingular,
      'add_new_item' => 'Adicionar novo '. $nomesingular,
      'edit_item' => 'Editar '. $nomesingular,
      'new_item' => __('Novo '. $nomesingular),
      'all_items' => __('Todos os '. $nomeplural),
      'view_item' => __('Ver '. $nomesingular),
      'search_items' => __('Pesquisar ' .$nomeplural),
      'not_found' =>  __('Não foram encontrados '. $nomeplural),
      'not_found_in_trash' => __('Nenhum '. $nomesingular .' foi encontrado na lixeira'),
      'parent_item_colon' => '',
      'menu_name' => $nomeplural

  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => $supports,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array(
                  'title',
                  'editor',
                  'author',
                  'thumbnail',
                  'excerpt',
                  'comments',
            )
            // 'taxonomies'  => array( 'category' ),
         );

  register_post_type('portifolio', $args);
  flush_rewrite_rules();

}


add_action('init','cadastrando_post_type_portifolio');


// Cadastro do POST TYPE DEPOIMENTOS //
function cadastrando_post_type_depoimentos() {

  $nomeplural = 'Depoimentos';
  $nomesingular = 'Depoimento';
  $description = $nomeplural.' de clientes';

  $labels = array(
      'name' => $nomeplural,
      'name_singular' => $nomesingular,
      'add_new_item' => 'Adicionar novo '. $nomesingular,
      'edit_item' => 'Editar '. $nomesingular,
      'new_item' => __('Novo '. $nomesingular),
      'all_items' => __('Todos os '. $nomeplural),
      'view_item' => __('Ver '. $nomesingular),
      'search_items' => __('Pesquisar ' .$nomeplural),
      'not_found' =>  __('Não foram encontrados '. $nomeplural),
      'not_found_in_trash' => __('Nenhum '. $nomesingular .' foi encontrado na lixeira'),
      'parent_item_colon' => '',
      'menu_name' => $nomeplural

  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-heart',
    'supports' => $supports,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array(
                  'title',
                  'editor',
                  'author',
                  'thumbnail',
                  'excerpt',
                  'comments',
            )
            // 'taxonomies'  => array( 'category' ),
         );

  register_post_type('depoimento', $args);
  flush_rewrite_rules();

}


add_action('init','cadastrando_post_type_depoimentos');


//REGISTRANDO TAXONOMIA DO SERVICOS //


  function criando_taxonomia_servicos() {
  	$singular = 'Serviço';
  	$plural = 'Serviços';

  	$labels = array(
  		'name' => $plural,
  		'singular_name' => $singular,
  		'view_item' => 'Ver ' . $singular,
  		'edit_item' => 'Editar ' . $singular,
  		'new_item' => 'Novo ' . $singular,
  		'add_new_item' => 'Adicionar novo ' . $singular
  		);

  	$args = array(
  		'labels' => $labels,
  		'public' => true,
       "rewrite" => true,
  		'hierarchical' => true
  		);

  	register_taxonomy('servicos', 'blog', $args);
  }

  add_action( 'init' , 'criando_taxonomia_servicos' );
