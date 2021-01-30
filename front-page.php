<?php get_header(); ?>
<div class="overlay">
<h1 class="<?php esc_html_e( get_theme_mod( 'cp_name_text_font' ) ); ?>"><?php echo get_theme_mod( 'cp_name_text', 'Title two' ) ?></h1>
</div>


<nav class="nav fixed" id="nav"> 
               <div class="logo <?php esc_html_e( get_theme_mod( 'cp_name_text_font' ) ); ?>">
                <a data-scroll href="#home"><?php echo get_theme_mod( 'cp_name_text', 'Title two' ) ?></a>
              </div>
    <div class="container">
        <div class="main_list" id="main_list">

            <ul id="list_ul" class="<?php esc_html_e( get_theme_mod( 'cp_nav_text_font' ) ); ?>">
            <?php if( get_theme_mod( 'cd_section_one_display', 'show' ) == 'show' ) : ?>
                <li><a data-scroll href="#about"><?php echo get_theme_mod( 'section_one_title', 'Title two' ) ?></a></li>
              <?php endif ?> 
              <?php if( get_theme_mod( 'section_two_display', 'show' ) == 'show' ) : ?>
                <li><a data-scroll href="#skills"><?php echo get_theme_mod( 'section_two_title', 'Title two' ) ?></a></li>
                <?php endif ?> 
                <?php if( get_theme_mod( 'cd_section_three_display', 'show' ) == 'show' ) : ?>
                <li><a data-scroll href="#works"><?php echo get_theme_mod( 'section_three_title', 'Title two' ) ?></a></li>
                <?php endif ?> 
                <?php if( get_theme_mod( 'cd_Sc_s_four', 'show' ) == 'show' ) : ?>
                <li><a data-scroll href="#design"><?php echo get_theme_mod( 'section_four_title', 'Title two' ) ?></a></li>
                <?php endif ?> 
                <li><a data-scroll href="#contact">Contact Me</a></li>
                
            </ul>
        </div>
    </div>
    <div class="nav_button">
        <button class="nav_button_main" id="nav_button">
        <span class="one"></span>
		<span class="two"></span>
        </button>
    </div>
</nav>  
<?php
          function landing_bg_img_url() {
            if ( get_theme_mod( 'landing_bg_img' ) > 0 ) {
                return wp_get_attachment_url( get_theme_mod( 'landing_bg_img' ) );
            } else {
                return get_template_directory_uri() . '/images/landingimg.jpg';
            }
          }
          ?>  
<div class="wrapper">   <!-- .overlay -->
<section class="home" id="home" style=background-image:url(<?php echo esc_url( landing_bg_img_url() ); ?>)>
<div class="filter">
<div class="social-media">
    <ul>
        <?php if( get_theme_mod( 'fb_display', 'show' ) == 'show' ) : ?>
        <li><a href="<?php echo get_theme_mod( 'Main_HL_text', 'https://www.facebook.com' ) ?>"><i class="fa fa-facebook"></i></a></li>
        <?php endif ?> 
        <?php if( get_theme_mod( 'yt_display', 'show' ) == 'show' ) : ?>
        <li><a href="<?php echo get_theme_mod( 'yt_main_link', 'https://www.youtube.com' ) ?>"><i class="fa fa-youtube"></i></a></li>
        <?php endif ?> 
        <?php if( get_theme_mod( 'tw_display', 'show' ) == 'show' ) : ?>
        <li><a href="<?php echo get_theme_mod( 'tw_main_link', 'https://www.twitter.com' ) ?>"><i class="fa fa-twitter"></i></a></li>
        <?php endif ?> 
        <?php if( get_theme_mod( 'ig_display_display', 'show' ) == 'show' ) : ?>
        <li><a href="<?php echo get_theme_mod( 'ig_main_link', 'https://www.instagram.com' ) ?>"><i class="fa fa-instagram"></i></a></li>
        <?php endif ?> 
        <?php if( get_theme_mod( 'ln_display', 'show' ) == 'show' ) : ?>
        <li><a href="<?php echo get_theme_mod( 'ln_main_link', 'https://www.linkedin.com' ) ?>"><i class="fa fa-linkedin"></i></a></li>
        <?php endif ?>
        <?php if( get_theme_mod( 'pin_display', 'show' ) == 'show' ) : ?>
        <li><a href="<?php echo get_theme_mod( 'pin_main_link', 'https://www.pinterest.com' ) ?>"><i class="fa fa-fa fa-pinterest"></i></a></li>
        <?php endif ?> 
    </ul>
</div><!-- .social-media -->
<?php if( get_theme_mod( 'Display_Side', 'show' ) == 'show' ) : ?>
<div id="side" class="side-strip">
    <p class="<?php esc_html_e( get_theme_mod( 'side_text_font' ) ); ?>"><?php echo get_theme_mod( 'side_text', ' Text Here' ) ?></p>
</div>
<?php endif ?> 
<div id="header" class="header">
    <h1 class="<?php esc_html_e( get_theme_mod( 'main_HL_text_font' ) ); ?>"><?php echo get_theme_mod( 'Main_HL_text', ' Text Here' ) ?></h1>
    <?php if( get_theme_mod( 'cd_Sc_heading', 'show' ) == 'show' ) : ?>
    <p class="<?php esc_html_e( get_theme_mod( 'Sc_HL_text_font' ) ); ?>"><?php echo get_theme_mod( 'Sc_HL_text', ' Text Here' ) ?></p>
    <?php endif ?> 
    <button class="button-main <?php esc_html_e( get_theme_mod( 'button_text_font' ) ); ?>"><a data-scroll href="<?php esc_html_e( get_theme_mod( 'button_link' ) ); ?>"><?php echo get_theme_mod( 'button_text', ' Text Here' ) ?></a></button>
</div><!-- .header -->
<?php if( get_theme_mod( 'bottom_bar_display', 'show' ) == 'show' ) : ?>
    <div class="bottom-bar">
        <div class="containers">
        <div class="row">
            <div id="bb-one"class="bottom-tab">
            <?php
                function bb_one_img_url() {
                  if ( get_theme_mod( 'bb_one_img' ) > 0 ) {
                      return wp_get_attachment_url( get_theme_mod( 'bb_one_img' ) );
                  } else {
                      return get_template_directory_uri() . '/images/bb1.jpg';
                  }
                }
                ?>
                <img class="row-img" src="<?php echo esc_url( bb_one_img_url() ); ?>" alt="" />                   
                <h6 class="<?php esc_html_e( get_theme_mod( 'bb_title_text_font' ) ); ?>"><?php echo get_theme_mod( 'bb_one_title', 'Title One' ) ?></h6>
                <p class="<?php esc_html_e( get_theme_mod( 'bb_d_text_font' ) ); ?>"><?php echo get_theme_mod( 'bb_one_d', 'Title One' ) ?></p>
            </div>
            <div id="bb-two" class="bottom-tab">
            <?php
              function bb_two_img_url() {
                if ( get_theme_mod( 'bb_two_img' ) > 0 ) {
                    return wp_get_attachment_url( get_theme_mod( 'bb_two_img' ) );
                } else {
                    return get_template_directory_uri() . '/images/bb2.jpg';
                }
              }
              ?>
                <img class="row-img" src="<?php echo esc_url( bb_two_img_url() ); ?>" alt="" />
                <h6 class="<?php esc_html_e( get_theme_mod( 'bb_title_text_font' ) ); ?>"><?php echo get_theme_mod( 'bb_two_title', 'Title two' ) ?></h6>
                <p class="<?php esc_html_e( get_theme_mod( 'bb_d_text_font' ) ); ?>"><?php echo get_theme_mod( 'bb_two_d', 'Title One' ) ?></p>
            </div>
            <div id="bb-three" class="bottom-tab">
            <?php
              function bb_three_img_url() {
                if ( get_theme_mod( 'bb_three_img' ) > 0 ) {
                    return wp_get_attachment_url( get_theme_mod( 'bb_three_img' ) );
                } else {
                    return get_template_directory_uri() . '/images/bb3.jpg';
                }
              }
              ?>
                <img class="row-img" src="<?php echo esc_url( bb_three_img_url() ); ?>" alt="" />
            <h6 class="<?php esc_html_e( get_theme_mod( 'bb_title_text_font' ) ); ?>"><?php echo get_theme_mod( 'bb_three_title', 'Title two' ) ?></h6>
                <p class="<?php esc_html_e( get_theme_mod( 'bb_d_text_font' ) ); ?>"><?php echo get_theme_mod( 'bb_three_d', 'Title One' ) ?></p>
            </div>
        </div><!-- .row -->
    </div><!-- .bottom-bar -->
    <?php endif ?> 
</div><!-- .container -->
<!-- Go Up button -->
    
<div class="goup" id="goup">
    <a data-scroll href="#home"></a>
</div>
</div><!-- .filter -->
</section><!-- Home section -->    

 



    
<!-- about section -->
<?php if( get_theme_mod( 'cd_section_one_display', 'show' ) == 'show' ) : ?>   
<section class="revealer about MBgC" id="about">
    <h1 class="<?php esc_html_e( get_theme_mod( 'section_one_title_font' ) ); ?>"><?php echo get_theme_mod( 'section_one_title', 'Title two' ) ?></h1>
    <div class="about-container">
    <div class="revealme fromleft">
    <?php
function section_one_url() {
  if ( get_theme_mod( 'section_one_img' ) > 0 ) {
      return wp_get_attachment_url( get_theme_mod( 'section_one_img' ) );
  } else {
      return get_template_directory_uri() . '/images/about1.jpg';
  }
}
?>
<img src="<?php echo esc_url( section_one_url() ); ?>">


    </div>
    <div class="revealme fromright fade-in">
        <h2 class="<?php esc_html_e( get_theme_mod( 'section_one_heading_font' ) ); ?>"><?php echo get_theme_mod( 'section_one_heading', 'Title two' ) ?></h2>
        <p class="<?php esc_html_e( get_theme_mod( 'about_dection_font' ) ); ?>"><?php echo get_theme_mod( 'about_dection', 'Title two' ) ?></p>
    </div> 
</div>
</section>
<?php endif ?> 
<!-- Skills section -->
<?php if( get_theme_mod( 'section_two_display', 'show' ) == 'show' ) : ?>    
<section class="skills revealer MBgC" id="skills">
<h1 class="<?php esc_html_e( get_theme_mod( 'section_two_title_font' ) ); ?>"><?php echo get_theme_mod( 'section_two_title', 'Title two' ) ?></h1>
<div class="Tiles">
  <div class="Tile js-tile">
    <div class="Tile-content">
    <a data-scroll href="#skills">
      <div id="Pone" class="person">
      <?php
          function s_p_one_img_url() {
            if ( get_theme_mod( 's_p_one_img' ) > 0 ) {
                return wp_get_attachment_url( get_theme_mod( 's_p_one_img' ) );
            } else {
                return get_template_directory_uri() . '/images/person1.jpg';
            }
          }
          ?>
          <img class="person-img" src="<?php echo esc_url( s_p_one_img_url() ); ?>">
      
        <div class="person-details">  
            <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_one_name', 'Title two' ) ?></h2>
            <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_one_title', 'Title two' ) ?></p>
        </div><!---.person-details--->
      </div><!--- .person--->
      </a>
    </div>
    <div class="Tile-flyout">
      <div class="Tile-content">
        <div class="team-detail">
            <div class="team-detail-inner">
                <div class="team-detail-left" style=background-image:url(<?php echo esc_url( s_p_one_img_url() ); ?>)>
                <div class="team-detail-photo"><img src="<?php echo esc_url( s_p_one_img_url() ); ?>" alt="">
                </div>
                </div><!--- .team-detail-left--->

                <div class="team-detail-right">
                  <div class="team-detail-bio">
                  <div class="team-detail-header">
                    <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_one_name', 'Title two' ) ?></h2>
                    <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_one_title', 'Title two' ) ?></p>
                    <div class="social">
                      <?php if( get_theme_mod( 'fb_p_one_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'fb_p_one_link', 'https://www.facebook.com' ) ?>"><i class="fa fa-facebook"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'tw_p_one_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'tw_main_p_one_link', 'https://www.twitter.com' ) ?>"><i class="fa fa-twitter"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ln_p_one_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'ln_main_p_one_link', 'https://www.linkedin.com' ) ?>"><i class="fa fa-linkedin"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'yt_p_one_display', 'show' ) == 'show' ) : ?>
		                  <a  href="<?php echo get_theme_mod( 'yt_main_p_one_link', 'https://www.youtube.com' ) ?>"><i class="fa fa-youtube"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ig_p_one_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'ig_main_p_one_link', 'https://www.instagram.com' ) ?>"><i class="fa fa-instagram"></i></a>
                      <?php endif ?>
                      <?php if( get_theme_mod( 'pin_p_one_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'pin_p_one_link', 'https://www.pinterest.com' ) ?>"><i class="fa fa-fa fa-pinterest"></i></a>
                      <?php endif ?> 
                    </div>
                  </div>
                <div id="PoneI" class="team-detail-bio-content">
                  <p class="<?php esc_html_e( get_theme_mod( 'tm_inner_font' ) ); ?>"><?php echo get_theme_mod( 'person_one_d', 'Title two' ) ?></p>
                </div>
              </div><!--- .team-detail-bio--->
                </div><!--- .team-detail-right--->

            </div><!---.team-detail-inner---->
        </div><!---.team-detail---->
      </div>
    </div>
  </div>
  <div class="Tile js-tile">
    <div class="Tile-content">
    <a data-scroll href="#skills">
      <div id="Ptwo" class="person">
      <?php
          function s_p_two_img_url() {
            if ( get_theme_mod( 's_p_two_img' ) > 0 ) {
                return wp_get_attachment_url( get_theme_mod( 's_p_two_img' ) );
            } else {
                return get_template_directory_uri() . '/images/person2.jpg';
            }
          }
          ?>
          <img class="person-img" src="<?php echo esc_url( s_p_two_img_url() ); ?>">
        <div class="person-details">  
            <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_two_name', 'Title two' ) ?></h2>
            <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_two_title', 'Title two' ) ?></p>
        </div><!---.person-details--->
      </div><!--- .person--->
      </a>
    </div>
    <div class="Tile-flyout">
      <div class="Tile-content">
        <div class="team-detail">
            <div class="team-detail-inner">
                <div class="team-detail-left" style=background-image:url(<?php echo esc_url( s_p_two_img_url() ); ?>)>
                <div class="team-detail-photo"><img src="<?php echo esc_url( s_p_two_img_url() ); ?>" alt="">
                </div>
                </div><!--- .team-detail-left--->

                <div class="team-detail-right">
                  <div class="team-detail-bio">
                  <div class="team-detail-header">
                    <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_two_name', 'Title two' ) ?></h2>
                    <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_two_title', 'Title two' ) ?></p>
                    <div class="social">
                      <?php if( get_theme_mod( 'fb_p_two_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'fb_p_two_link', 'https://www.facebook.com' ) ?>"><i class="fa fa-facebook"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'tw_p_two_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'tw_main_p_two_link', 'https://www.twitter.com' ) ?>"><i class="fa fa-twitter"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ln_p_two_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'ln_main_p_two_link', 'https://www.linkedin.com' ) ?>"><i class="fa fa-linkedin"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'yt_p_two_display', 'show' ) == 'show' ) : ?>
		                  <a  href="<?php echo get_theme_mod( 'yt_main_p_two_link', 'https://www.youtube.com' ) ?>"><i class="fa fa-youtube"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ig_p_two_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'ig_main_p_two_link', 'https://www.instagram.com' ) ?>"><i class="fa fa-instagram"></i></a>
                      <?php endif ?>
                      <?php if( get_theme_mod( 'pin_p_two_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'pin_p_two_link', 'https://www.pinterest.com' ) ?>"><i class="fa fa-fa fa-pinterest"></i></a>
                      <?php endif ?> 
                    </div>
                  </div>
                <div id="PtwoI" class="team-detail-bio-content">
                  <p class="<?php esc_html_e( get_theme_mod( 'tm_inner_font' ) ); ?>"><?php echo get_theme_mod( 'person_two_d', 'Title two' ) ?></p>
                </div>
              </div><!--- .team-detail-bio--->
                </div><!--- .team-detail-right--->

            </div><!---.team-detail-inner---->
        </div><!---.team-detail---->
      </div>
    </div>
  </div>
  <div class="Tile js-tile">
    <div class="Tile-content">
    <a data-scroll href="#skills">
      <div id="Pthree" class="person">
      <?php
          function s_p_three_img_url() {
            if ( get_theme_mod( 's_p_three_img' ) > 0 ) {
                return wp_get_attachment_url( get_theme_mod( 's_p_three_img' ) );
            } else {
                return get_template_directory_uri() . '/images/person3.jpg';
            }
          }
          ?>
          <img class="person-img" src="<?php echo esc_url( s_p_three_img_url() ); ?>">
        <div class="person-details">  
            <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_three_name', 'Title two' ) ?></h2>
            <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_three_title', 'Title two' ) ?></p>
        </div><!---.person-details--->
      </div><!--- .person--->
      </a>
    </div>
    <div class="Tile-flyout">
      <div class="Tile-content">
        <div class="team-detail">
            <div class="team-detail-inner">
                <div class="team-detail-left" style=background-image:url(<?php echo esc_url( s_p_three_img_url() ); ?>)>
                <div class="team-detail-photo"><img src="<?php echo esc_url( s_p_three_img_url() ); ?>" alt="">
                </div>
                </div><!--- .team-detail-left--->

                <div class="team-detail-right">
                  <div class="team-detail-bio">
                  <div class="team-detail-header">
                    <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_three_name', 'Title two' ) ?></h2>
                    <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_three_title', 'Title two' ) ?></p>
                    <div class="social">
                      <?php if( get_theme_mod( 'fb_p_three_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'fb_p_three_link', 'https://www.facebook.com' ) ?>"><i class="fa fa-facebook"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'tw_p_three_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'tw_main_p_three_link', 'https://www.twitter.com' ) ?>"><i class="fa fa-twitter"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ln_p_three_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'ln_main_p_three_link', 'https://www.linkedin.com' ) ?>"><i class="fa fa-linkedin"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'yt_p_three_display', 'show' ) == 'show' ) : ?>
		                  <a  href="<?php echo get_theme_mod( 'yt_main_p_three_link', 'https://www.youtube.com' ) ?>"><i class="fa fa-youtube"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ig_p_three_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'ig_main_p_three_link', 'https://www.instagram.com' ) ?>"><i class="fa fa-instagram"></i></a>
                      <?php endif ?>
                      <?php if( get_theme_mod( 'pin_p_three_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'pin_p_three_link', 'https://www.pinterest.com' ) ?>"><i class="fa fa-fa fa-pinterest"></i></a>
                      <?php endif ?> 
                    </div>
                  </div>
                <div id="PthreeI" class="team-detail-bio-content">
                  <p class="<?php esc_html_e( get_theme_mod( 'tm_inner_font' ) ); ?>"><?php echo get_theme_mod( 'person_three_d', 'Title two' ) ?></p>
                </div>
              </div><!--- .team-detail-bio--->
                </div><!--- .team-detail-right--->

            </div><!---.team-detail-inner---->
        </div><!---.team-detail---->
      </div>
    </div>
  </div>
  <?php if( get_theme_mod( 'person_four_display', 'show' ) == 'show' ) : ?>
  <div class="Tile js-tile">
    <div class="Tile-content">
    <a data-scroll href="#skills">
      <div id="Pfour" class="person">
      <?php
          function s_p_four_img_url() {
            if ( get_theme_mod( 's_p_four_img' ) > 0 ) {
                return wp_get_attachment_url( get_theme_mod( 's_p_four_img' ) );
            } else {
                return get_template_directory_uri() . '/images/person4.jpg';
            }
          }
          ?>
          <img class="person-img" src="<?php echo esc_url( s_p_four_img_url() ); ?>">
        <div class="person-details">  
            <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_four_name', 'Title two' ) ?></h2>
            <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_four_title', 'Title two' ) ?></p>
        </div><!---.person-details--->
      </div><!--- .person--->
      </a>
    </div>
    <div class="Tile-flyout">
      <div class="Tile-content">
        <div class="team-detail">
            <div class="team-detail-inner">
                <div class="team-detail-left" style=background-image:url(<?php echo esc_url( s_p_four_img_url() ); ?>)>
                <div class="team-detail-photo"><img src="<?php echo esc_url( s_p_four_img_url() ); ?>" alt="">
                </div>
                </div><!--- .team-detail-left--->

                <div class="team-detail-right">
                  <div class="team-detail-bio">
                  <div class="team-detail-header">
                    <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_four_name', 'Title two' ) ?></h2>
                    <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_four_title', 'Title two' ) ?></p>
                    <div class="social">
                      <?php if( get_theme_mod( 'fb_p_four_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'fb_p_four_link', 'https://www.facebook.com' ) ?>"><i class="fa fa-facebook"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'tw_p_four_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'tw_main_p_four_link', 'https://www.twitter.com' ) ?>"><i class="fa fa-twitter"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ln_p_four_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'ln_main_p_four_link', 'https://www.linkedin.com' ) ?>"><i class="fa fa-linkedin"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'yt_p_four_display', 'show' ) == 'show' ) : ?>
		                  <a  href="<?php echo get_theme_mod( 'yt_main_p_four_link', 'https://www.youtube.com' ) ?>"><i class="fa fa-youtube"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ig_p_four_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'ig_main_p_four_link', 'https://www.instagram.com' ) ?>"><i class="fa fa-instagram"></i></a>
                      <?php endif ?>
                      <?php if( get_theme_mod( 'pin_p_four_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'pin_p_four_link', 'https://www.pinterest.com' ) ?>"><i class="fa fa-fa fa-pinterest"></i></a>
                      <?php endif ?> 
                    </div>
                  </div>
                <div id="PthreeI" class="team-detail-bio-content">
                  <p class="<?php esc_html_e( get_theme_mod( 'tm_inner_font' ) ); ?>"><?php echo get_theme_mod( 'person_four_d', 'Title two' ) ?></p>
                </div>
              </div><!--- .team-detail-bio--->
                </div><!--- .team-detail-right--->

            </div><!---.team-detail-inner---->
        </div><!---.team-detail---->
      </div>
    </div>
  </div>
  <?php endif ?>
  <?php if( get_theme_mod( 'person_five_display', 'show' ) == 'show' ) : ?> 
  <div class="Tile js-tile">
    <div class="Tile-content">
    <a data-scroll href="#skills">
      <div id="Pfive" class="person">
      <?php
          function s_p_five_img_url() {
            if ( get_theme_mod( 's_p_five_img' ) > 0 ) {
                return wp_get_attachment_url( get_theme_mod( 's_p_five_img' ) );
            } else {
                return get_template_directory_uri() . '/images/person5.jpg';
            }
          }
          ?>
          <img class="person-img" src="<?php echo esc_url( s_p_five_img_url() ); ?>">
        <div class="person-details">  
            <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_five_name', 'Title two' ) ?></h2>
            <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_five_title', 'Title two' ) ?></p>
        </div><!---.person-details--->
      </div><!--- .person--->
      </a>
    </div>
    <div class="Tile-flyout">
      <div class="Tile-content">
        <div class="team-detail">
            <div class="team-detail-inner">
                <div class="team-detail-left" style=background-image:url(<?php echo esc_url( s_p_five_img_url() ); ?>)>
                <div class="team-detail-photo"><img src="<?php echo esc_url( s_p_five_img_url() ); ?>" alt="">
                </div>
                </div><!--- .team-detail-left--->

                <div class="team-detail-right">
                  <div class="team-detail-bio">
                  <div class="team-detail-header">
                    <h2 class="person-title <?php esc_html_e( get_theme_mod( 'tm_name_font' ) ); ?>"><?php echo get_theme_mod( 'person_five_name', 'Title two' ) ?></h2>
                    <p class="person-desc <?php esc_html_e( get_theme_mod( 'tm_title_font' ) ); ?>"><?php echo get_theme_mod( 'person_five_title', 'Title two' ) ?></p>
                    <div class="social">
                      <?php if( get_theme_mod( 'fb_p_five_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'fb_p_five_link', 'https://www.facebook.com' ) ?>"><i class="fa fa-facebook"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'tw_p_five_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'tw_main_p_five_link', 'https://www.twitter.com' ) ?>"><i class="fa fa-twitter"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ln_p_five_display', 'show' ) == 'show' ) : ?>
		                  <a href="<?php echo get_theme_mod( 'ln_main_p_five_link', 'https://www.linkedin.com' ) ?>"><i class="fa fa-linkedin"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'yt_p_five_display', 'show' ) == 'show' ) : ?>
		                  <a  href="<?php echo get_theme_mod( 'yt_main_p_five_link', 'https://www.youtube.com' ) ?>"><i class="fa fa-youtube"></i></a>
		                  <?php endif ?> 
		                  <?php if( get_theme_mod( 'ig_p_five_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'ig_main_p_five_link', 'https://www.instagram.com' ) ?>"><i class="fa fa-instagram"></i></a>
                      <?php endif ?> 
                      <?php if( get_theme_mod( 'pin_p_five_display', 'show' ) == 'show' ) : ?>
                      <a href="<?php echo get_theme_mod( 'pin_p_five_link', 'https://www.pinterest.com' ) ?>"><i class="fa fa-fa fa-pinterest"></i></a>
                      <?php endif ?> 
                    </div>
                  </div>
                <div id="PfiveI" class="team-detail-bio-content">
                  <p class="<?php esc_html_e( get_theme_mod( 'tm_inner_font' ) ); ?>"><?php echo get_theme_mod( 'person_five_d', 'Title two' ) ?></p>
                </div>
              </div><!--- .team-detail-bio--->
                </div><!--- .team-detail-right--->

            </div><!---.team-detail-inner---->
        </div><!---.team-detail---->
      </div>
    </div>
  </div>
  <?php endif ?>
</div><!---.Tiles---->

</section>
<?php endif ?>   
<!-- Works section -->
<?php if( get_theme_mod( 'cd_section_three_display', 'show' ) == 'show' ) : ?>    
<section class="revealer works MBgC" id="works">
    <h1 class="<?php esc_html_e( get_theme_mod( 'section_three_title_font' ) ); ?>"><?php echo get_theme_mod( 'section_three_title', 'Title two' ) ?></h1>
    <div id="gallery" class="gallery <?php esc_html_e( get_theme_mod( 'cap_g_font' ) ); ?>">
  <div id="gone" class="img-w">
  <?php
      function g_p_one_img_url() {
        if ( get_theme_mod( 'g_p_one_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_one_img' ) );
        } else {
            return get_template_directory_uri() . '/images/gallary1.jpg';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_one_img_url() ); ?>">
      <?php if( get_theme_mod( 'g_p_one_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_one_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div id="gtwo" class="img-w">
    <?php
      function g_p_two_img_url() {
        if ( get_theme_mod( 'g_p_two_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_two_img' ) );
        } else {
            return get_template_directory_uri() . '/images/gallary2.jpg';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_two_img_url() ); ?>">
      <?php if( get_theme_mod( 'g_p_two_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_two_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div  id="gthree" class="img-w">
    <?php
      function g_p_three_img_url() {
        if ( get_theme_mod( 'g_p_three_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_three_img' ) );
        } else {
            return get_template_directory_uri() . '/images/gallary3.jpg';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_three_img_url() ); ?>">
    
      <?php if( get_theme_mod( 'g_p_three_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_three_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div  id="gfour" class="img-w">
    <?php
      function g_p_four_img_url() {
        if ( get_theme_mod( 'g_p_four_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_four_img' ) );
        } else {
            return get_template_directory_uri() . '/images/gallary4.jpg';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_four_img_url() ); ?>">
      <?php if( get_theme_mod( 'g_p_four_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_four_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div  id="gfive" class="img-w">
    <?php
      function g_p_five_img_url() {
        if ( get_theme_mod( 'g_p_five_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_five_img' ) );
        } else {
            return get_template_directory_uri() . '/images/gallary5.jpg';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_five_img_url() ); ?>">
    
      <?php if( get_theme_mod( 'g_p_five_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_five_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div id="gsix" class="img-w">
    <?php
      function g_p_six_img_url() {
        if ( get_theme_mod( 'g_p_six_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_six_img' ) );
        } else {
            return get_template_directory_uri() . '/images/gallary6.jpg';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_six_img_url() ); ?>">

      <?php if( get_theme_mod( 'g_p_six_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_six_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div id="gseven"  class="img-w">
    <?php
      function g_p_seven_img_url() {
        if ( get_theme_mod( 'g_p_seven_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_seven_img' ) );
        } else {
            return get_template_directory_uri() . '/images/gallary7.jpg';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_seven_img_url() ); ?>">

      <?php if( get_theme_mod( 'g_p_seven_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_seven_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div id="geight" class="img-w">
    <?php
      function g_p_eight_img_url() {
        if ( get_theme_mod( 'g_p_eight_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_eight_img' ) );
        } else {
            return get_template_directory_uri() . '/images/defualt1.png';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_eight_img_url() ); ?>">

      <?php if( get_theme_mod( 'g_p_eight_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_eight_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    <div id="gnine" class="img-w">
    <?php
      function g_p_nine_img_url() {
        if ( get_theme_mod( 'g_p_nine_img' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'g_p_nine_img' ) );
        } else {
            return get_template_directory_uri() . '/images/defualt1.png';
        }
      }
      ?>
        <img src="<?php echo esc_url( g_p_nine_img_url() ); ?>">
      <?php if( get_theme_mod( 'g_p_nine_cap_display', 'show' ) == 'show' ) : ?><h2><?php echo get_theme_mod( 'g_p_nine_cap', 'Title two' ) ?></h2><?php endif ?>
    </div>
    </div>


</section>
<?php endif ?>
<!-- Design section -->
<?php if( get_theme_mod( 'cd_Sc_s_four', 'show' ) == 'show' ) : ?>      
<section class="design revealer MBgC" id="design">
    <h1 class="<?php esc_html_e( get_theme_mod( 'section_four_title_font' ) ); ?>"><?php echo get_theme_mod( 'section_four_title', 'Title two' ) ?></h1>
    <div id="swipe" class="flex-accordion">
    
    <?php
      function skill_img_one_url() {
        if ( get_theme_mod( 'skill_img_one' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'skill_img_one' ) );
        } else {
            return get_template_directory_uri() . '/images/severs1.jpg';
        }
      }
      ?>
          <?php
      function skill_img_two_url() {
        if ( get_theme_mod( 'skill_img_two' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'skill_img_two' ) );
        } else {
            return get_template_directory_uri() . '/images/severs2.jpg';
        }
      }
      ?>
          <?php
      function skill_img_three_url() {
        if ( get_theme_mod( 'skill_img_three' ) > 0 ) {
            return wp_get_attachment_url( get_theme_mod( 'skill_img_three' ) );
        } else {
            return get_template_directory_uri() . '/images/severs3.jpg';
        }
      }
      ?>

                                    <ul>
                                        <li id="page1" class="at-accordion__panel slide " style="background-image:url('<?php echo esc_url( skill_img_one_url() ); ?>')">
                                            <div class="panel-inner">
                                                <!-- <a href="case.html"> -->
                                                <div class="title">
                                                    <!-- <div class="title__inner"> -->
                                                    <h3 class="title__text <?php esc_html_e( get_theme_mod( 'section_four_tab_font' ) ); ?>"><?php echo get_theme_mod( 's_one_title', 'Series one' ) ?></h3>
                                                    <!-- </div> -->

                                                </div>
                                                <div class="button bg-sun">
                                                    <h2 class="<?php esc_html_e( get_theme_mod( 'four_inner_title_font' ) ); ?>"><?php echo get_theme_mod( 'I_one_title', 'Title two' ) ?></h2>
                                                    <p class="<?php esc_html_e( get_theme_mod( 'four_inner_d_font' ) ); ?>"><?php echo get_theme_mod( 'I_one_d', 'Title two' ) ?></p>
                                                </div>
                                                <!-- </a> -->
                                            </div>
                                        </li>
                                        <li id="page2" class="at-accordion__panel slide" style="background-image:url('<?php echo esc_url( skill_img_two_url() ); ?>')">
                                            <div class="panel-inner">
                                                <!-- <a href="case.html"> -->
                                                <div class="title">
                                                    <!-- <div class="title__inner"> -->
                                                    <h3 class="title__text <?php esc_html_e( get_theme_mod( 'section_four_tab_font' ) ); ?>"><?php echo get_theme_mod( 's_two_title', 'Servies two' ) ?></h3>
                                                    <!-- </div> -->

                                                </div>
                                                <div class="button bg-sun">
                                                    <h2 class="<?php esc_html_e( get_theme_mod( 'four_inner_title_font' ) ); ?>"><?php echo get_theme_mod( 'I_two_title') ?></h2>
                                                    <p class="<?php esc_html_e( get_theme_mod( 'four_inner_d_font' ) ); ?>"><?php echo get_theme_mod( 'I_two_d') ?></p>
                                                </div>
                                                <!-- </a> -->
                                            </div>
                                        </li>
                                        <li id="page3" class="at-accordion__panel slide" style="background-image:url('<?php echo esc_url( skill_img_three_url() ); ?>')">
                                            <div class="panel-inner">
                                                <!-- <a href="case.html"> -->
                                                <div class="title">
                                                    <!-- <div class="title__inner"> -->
                                                    <h3 class="title__text <?php esc_html_e( get_theme_mod( 'section_four_tab_font' ) ); ?>"><?php echo get_theme_mod( 's_three_title', 'Servies three') ?></h3>
                                                </div>
                                                <div class="button bg-sun">
                                                    <h2 class="<?php esc_html_e( get_theme_mod( 'four_inner_title_font' ) ); ?>"><?php echo get_theme_mod( 'I_three_title' ) ?></h2>
                                                    <p class="<?php esc_html_e( get_theme_mod( 'four_inner_d_font' ) ); ?>"><?php echo get_theme_mod( 'I_three_d' ) ?></p>
                                                </div>
                                                <!-- </div> -->
                                                <!-- </a> -->
                                            </div>
                                        </li>

                                    </ul>
                                </div>
</section>
<?php endif ?>  
<!-- Contact section -->
    
<section class="contact revealer MBgC" id="contact">
    <h1 class="contact-title <?php esc_html_e( get_theme_mod( 'contact_heading_font' ) ); ?>"><?php echo get_theme_mod( 'contact_heading', 'Contact' ) ?></h1>
<div class="contact-container" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('main_contact_bg'));?>);">
	
<div class="ContactForm">
<form id="pamContactForm" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">    
 
    <h2><?php echo get_theme_mod( 'contact_title', 'Contact us' ) ?></h2>
	<div class="form-group single">
		<input type="text" class="form-control " tabindex="0"  placeholder="" id="name" name="name">
        <label for="name" class="label-name"><span class="content-name">Name</span></label>
		<small class="text-danger form-control-msg">Your Name is Required</small>
	</div>

	<div class="form-group single">
        <input type="email" class="form-control " placeholder="" id="email" name="email">
        <label for="email" class="label-name"><span class="content-name">Email</span></label>
		<small class="text-danger form-control-msg">Your Email is Required</small>
	</div>

	<div class="form-group msg">
		<textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
		<small class="text-danger form-control-msg">A Message is Required</small>
	</div>

	<button type="stubmit" class="btn btn-default">Submit</button>
	<small class="text-info form-control-msg js-form-submission">Submission in process, please wait..</small>
	<small class="text-success form-control-msg js-form-success">Message Successfully submitted, thank you!</small>
	<small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form, please try again!</small>
</form> 
<?php if( get_theme_mod( 'cd_d_phone', 'show' ) == 'show' ) : ?>
   <h3 class="<?php esc_html_e( get_theme_mod( 'contact_inner_font' ) ); ?>"><?php echo get_theme_mod( 'phone_title', 'Call Us' ) ?></h3>
    <h4 class="<?php esc_html_e( get_theme_mod( 'contact_inner_font' ) ); ?>"><?php echo get_theme_mod( 'phone_number', 'Contact us' ) ?></h4>
  <?php endif ?>   
    </div> 

    <?php if( get_theme_mod( 'contact_map', 'show' ) == 'show' ) : ?> 
    <div class="gM">
   
      <?php echo get_theme_mod( 'code_map') ?>
    
    </div>
    <?php endif ?>  
</div>
</section>
</div><!-- .wrapper -->



<?php get_footer(); ?>