<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('wordpress/wp-blog-header.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Imaginary Photons</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="tbs/docs/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="tbs/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="tbs/docs/assets/css/imaginary_photons.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="tbs/docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="tbs/docs/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="tbs/docs/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="tbs/docs/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="tbs/docs/assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a href="index.html">HOME</a></li>
              <li><a href="gallery.html">GALLERY</a></li>
			        <li class="active"><a href="#">R&D</a></li>
			        <li><a href="about.html">ABOUT</a></li>
			        <li><a href="contact.html">CONTACT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="row">
      <div class="span6 offset2">
	    <br />

		  <?php query_posts('showposts=3'); ?>
		  <?php while (have_posts()) : the_post(); ?>
		  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		  <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
		  <div class="entry">
  		    <?php the_content(); ?>
 		  </div>	
	   	<?php endwhile;?>
	  
      </div>
    </div> <!-- /container -->
    
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="tbs/docs/assets/js/jquery.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-transition.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-alert.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-modal.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-tab.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-popover.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-button.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-collapse.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="tbs/docs/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
