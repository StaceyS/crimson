<!doctype html>
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('tagline'); ?>">
  <meta name="author" content="">

  <!-- Twitter Card data -->
  <!-- Documentation at https://dev.twitter.com/cards/types/summary-large-image -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@username">
  <meta name="twitter:title" content="Title should be concise and will be truncated at 70 characters">
  <meta name="twitter:description" content="A description that concisely summarizes the content of the page, as appropriate for presentation within a Tweet. Do not re-use the title text as the description, or use this field to describe the general services provided by the website. Description text will be truncated at the word to 200 characters.">
  <meta name="twitter:creator" content="@username of creator">
  <meta name="twitter:image" content="url/img.jpg Images at least 280px in width, and at least 150px in height, and less than 1MB.">

  <!-- Open Graph data -->
  <!-- Documentation at https://developers.facebook.com/docs/sharing/best-practices -->
  <meta property="og:title" content="Page Title" />
  <meta property="og:type" content="website <- default. All types here http://ogp.me/#types" />
  <meta property="og:url" content="A URL with no session id or extraneous parameters." />
  <meta property="og:image" content="url/image.jpg - At least 1200 x 630 pixels for hi-res devices." />
  <meta property="og:description" content="A detailed description of the piece of content, usually between 2 and 4 sentences. This tag is technically optional, but can improve the rate at which links are read and shared." />

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php bloginfo('url'); ?>favicon.png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/theme/apple-touch-icon.png">

  <!-- Pingback url -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<body class="<?php echo $post->post_name; ?>">

    <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-circle.svg">

    <header class="primary-nav">
			<?php wp_nav_menu( array( 
				'theme_location' => 'menu-1',
				'sort_column' => 'menu_order',
				'container' => 'false', 
			) ); ?>
      <a class="nav-toggle" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/layout/nav-toggle-white.svg"></a> 
    </header>    
