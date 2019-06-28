<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title><?= wp_title(); ?></title>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <?php wp_head(); ?>
    
    </head>

    <body id="home">
      <!-- BEGAIN PRELOADER -->         
      <!-- <div id="preloader">        
        <div class="progress">
          <div class="indeterminate"></div>
        </div>        
      </div> -->
      <!-- END PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
            <nav id="site-navigation" class="main-navigation">
            
            <!-- LOGO -->
            
            <!-- TEXT BASED LOGO -->
           
              <!-- <div class="the-logo"><//?php the_custom_logo(); ?></div> -->
           
            
            <div class="container">
              <div class="nav-wrapper">
                <div class="hide-on-med-and-down custom-nav menu-scroll">
                   <a href="index.php" class="brand-logo"><?php the_custom_logo(); ?></a>
                    <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'showcaseskills' ); ?></button> -->
                    <?php
                    wp_nav_menu( array(
                      'theme_location' => 'menu-1',
                      'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </div>    
                  <!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a> -->
                  <div id="slide-out" class="side-nav menu-scroll">
                  <?php
                      wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                      ) );
                      ?>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  </div>
                </div>
              </div>
              <!-- #site-navigation -->

                <!-- Image Based Logo -->                
                 <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                <!-- <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#resume">Resume</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#testimonial">Testimonial</a></li>
                  <li><a href="#blog">Blog</a></li>
                  <li><a href="#footer">Contact</a></li>
                </ul> -->
                <!-- For Mobile View -->
                <!-- <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#resume">Resume</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#testimonial">Testimonial</a></li>
                  <li><a href="#blog">Blog</a></li>
                  <li><a href="#footer">Contact</a></li>
                </ul> -->
          </nav>
        </div>  
      </header>