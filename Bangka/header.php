<?php
/**
 * @package Field Studio
 * Header */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	
    <meta name="viewport" content="initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php wp_title('&mdash; ','true','right'); ?></title>
    <meta name="description" content="<?php echo esc_attr(htmlentities(get_the_excerpt()));  ?><?php bloginfo( 'description' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/font-face.css" alt="" />
    <script src="http://cherchow.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" alt="" />
	
	<script src="http://cherchow.com/masonry.min.js" type="text/javascript"></script>
    <script>
		
		      window.onload = function () {
          var images = document.getElementsByTagName('img');

          for( var i=0; i<images.length;i++){
            if (images[i].naturalWidth > images[i].naturalHeight) {
              $(images[i]).addClass('horz');
            } 
            else{ 
              if(images[i].naturalWidth < images[i].naturalHeight) {
                $(images[i]).addClass('vert');  
              }
            }
          }
        }

    </script>
	
</head>
<body>
    <h1 id="title">cher chow <span class="chinese">周馥溢</span></h1>
    <div class="title">       
      
      <button id="show-menu" type="button" onclick="toggleNav()">
        <span id="nav-button">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </span>
      </button>
      <ul id="nav">
          <li><a href="http://cherchow.com">blog</a></li>
          <li><a href="http://cherchow.com/design">design</a></li>
          <li><a href="http://cherchow.com/about">about</a></li>
          <li><a href="http://cherchow.com/about#contact">contact</a></li>
      </ul>  
    </div>

    
    <div id="full-nav" onMouseover="disable_scroll(); disable_scroll_mobile()" onMouseout="enable_scroll(); enable_scroll_mobile()">
      <ul>
          <li><a href="http://cherchow.com">blog</a></li>
          <li><a href="http://cherchow.com/design">design</a></li>
          <li><a href="http://cherchow.com/about">about</a></li>
          <li><a href="http://cherchow.com/about#contact">contact</a></li>
      </ul>
    </div>
    <div id="blog">