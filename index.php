<?php get_header(); ?>

<div class="main-wrapper">
  <main role="main">
    <!-- START HOME SECTION -->
    <section class="home" style="background: url('<?= get_header_image(); ?>'); background-size: cover;">
      <div class="overlay-section">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <div class="home-inner">
                <h1 class="home-title"><?= get_bloginfo('name') ?></h1>
                <p><?= get_bloginfo('description') ?></p>
                <a class="hire-me-btn btn waves-effect waves-light btn-large" href="#footer">Hire Me <i class="mdi-content-send left"></i>
                </a>
                <!-- Call to About Button -->
                <a href="#about" class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- START ABOUT SECTION -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <div class="about-inner">
              <div class="row">
                <div class="col s12 m4 l3">
                  <div class="about-inner-left">
                      <?php 
                        $page_id = 31;
                        $url = wp_get_attachment_url( get_post_thumbnail_id($page_id) );
                       ?>
                       <img src="<?= $url; ?>" />
                  </div>
                </div>
                <div class="col s12 m8 l9">
                  <div class="about-inner-right">
                    <?php
                    //About Me Section
                    $id = 31;
                    $p = get_page($id);
                    echo apply_filters('the_content', $p->post_content);


                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Start Resume -->

    <!-- Start Skill -->
    <section id="skill" class="skill">
      <div class="container">
        <div class="skill-inner">
          <h2 class="title"><?= get_the_title( 33 ); ?></h2>
          <?php
                    // Skills Section
                    $id = 33;
                    $p = get_page($id);
                    echo apply_filters('the_content', $p->post_content);


                    ?>

        </div>
      </div>
    </section>

    <!-- Start Experience -->
    <section id="experience" class="experience">
      <div class="container">
        <div class="experience-inner">
          <h2 class="title exp-title"><?= get_the_title( 67 ); ?></h2>
          <?php
                    // Experience Section
                    $id = 67;
                    $p = get_page($id);
                    echo apply_filters('the_content', $p->post_content);


                    ?>

               

      </div>
    </section>

    <!-- Start Education -->
    <section class="education">
      <div id="education">
      <div class="container">
        <div class="education-inner">
          <h2 class="title"><?= get_the_title( 29 ); ?></h2>

          <?php
                    // Experience Section
                    $id = 29;
                    $p = get_page($id);
                    echo apply_filters('the_content', $p->post_content);


                    ?>
        </div>     
      </div>
    </div>
    </section>
   
    <!-- Start Portfolio -->
    <section id="portfolio">
      <div class="portfolio-top">
        <div class="container">
          <div class="portfolio-top-inner">
            <h2 class="title"><?= get_the_title( 35 ); ?></h2>
            <!-- <div class="controls">
              <button class="filter waves-effect waves-light btn" data-filter="all">All</button>
              <button class="filter waves-effect waves-light btn" data-filter=".html">HTMl</button>
              <button class="filter waves-effect waves-light btn" data-filter=".design">Design</button>
              <button class="filter waves-effect waves-light btn" data-filter=".fashion">Fashion</button>
            </div> -->
          </div>
        </div>
      </div>
      <div class="portfolio-bottom">
        <div class="container">
          <div class="portfolio-bottom-inner">
            <div id="portfolio-list">
            <?php
                    // Experience Section
                    $id = 35;
                    $p = get_page($id);
                    echo apply_filters('the_content', $p->post_content);


                    ?>
            
              

            </div>
          </div>
        </div>
      </div>
    </section>
   


    <!--Footer-->
    <?php get_footer(); ?>