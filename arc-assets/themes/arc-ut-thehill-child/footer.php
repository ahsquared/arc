<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage UT-TheHill
 * @since Twenty Thirteen 1.0
 */
?>

    <?php if ( is_active_sidebar( 'sidebar-3' ) ||  is_active_sidebar( 'sidebar-4' ) ||  is_active_sidebar( 'sidebar-5' )  ) : ?>
      <div id="linkdrawer" <?php utthehill_footer_sidebar_class(); ?>>
        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
          <div id="first" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
          </div><!-- #first .widget-area -->
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
          <div id="second" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-4' ); ?>
          </div><!-- #second .widget-area -->
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
          <div id="third" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-5' ); ?>
          </div><!-- #third .widget-area -->
        <?php endif; ?>
      </div><!-- #linkdrawer -->
    <?php endif; ?>





	</div><!-- #primary -->
</div><!-- .main-content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <?php if ( is_active_sidebar( 'sidebar-6' ) ||  is_active_sidebar( 'sidebar-7' ) ||  is_active_sidebar( 'sidebar-8' ) ||  is_active_sidebar( 'sidebar-9' ) ) : ?>
      <section id="expandedfooter" <?php utthehill_expandedfooter_sidebar_class(); ?>>
        <div class="container">
          <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
            <div id="one" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-6' ); ?>
            </div>
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
            <div id="two" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-7' ); ?>
            </div>
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
            <div id="third" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-8' ); ?>
            </div>
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
            <div id="four" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-9' ); ?>
            </div>
          <?php endif; ?>
        </div>
      </section><!-- #Expandedfooter -->
    <?php endif; ?>

   <div id="siteinfo">

		<?php
      $title          = get_bloginfo('name');
      $address        = get_option( 'ut-site-info-address');
      $generalInfo    = get_option( 'ut-site-info-general-info');
      $lat            = get_option( 'ut-site-info-gmap-lat');
      $long           = get_option( 'ut-site-info-gmap-lng');
      $parentunit     = get_option( 'ut-site-info-parentunit');
      $parentunitlink = get_option( 'ut-site-info-parentunitlink');

      ?>

				  <div id="meta-contact"><p><?php
  					if($lat && $lat != "" && $long && $long != "") {
  						echo "<a class='view_map' target='_blank' href='http://maps.google.com/?q=".$lat.",".$long."' >";
  					}
  					if($address && $address != "") {
  						echo $address." ";
  					}
  					if($lat && $lat != "" && $long && $long != "") {
  						echo "</a>";
  					}
      			echo "<br>";
            if($generalInfo && $generalInfo != "") {
              echo $generalInfo."<br>";
            }

					$pCount  = get_option('phone-count');
          $eCount  = get_option('email-count');
					$iter = 1;
					while($iter <= $pCount): ?>
					    <?php $label = get_option('ut-site-info-phonelabel-'.$iter);
						  if($label): ?>
						 	<?php echo get_option( 'ut-site-info-phonelabel-'.$iter ); ?>:&nbsp;<?php echo get_option('ut-site-info-phone-'.$iter);
                if($iter != $pCount): ?> <span class="bg-scr">&bull;</span><span class="sm-scr"></span><?php endif ?>
            <?php endif ?>
            <?php $iter++; ?>
          <?php endwhile ?>
          <span class="emailList">
            <?php

              $iter = 1;
              while($iter <= $eCount): ?>
              <?php  $label = get_option( 'ut-site-info-emaillabel-'.$iter);

              if($iter == 1 && $label != "") {
                echo "<span class='bg-scr dividingBullet'>&bull;</span>";
              }

              if($label): ?>
                  <?php echo get_option( 'ut-site-info-emaillabel-'.$iter ); ?>:&nbsp;<a href="mailto:<?php echo get_option('ut-site-info-email-'.$iter); ?>" ><?php echo get_option('ut-site-info-email-'.$iter);
                  if($iter != $eCount): ?></a> <span class="bg-scr">&bull;</span><span class="sm-scr"></span><?php endif ?>
              <?php endif ?>
              <?php $iter++; ?>
            <?php endwhile
          ?></span></p></div>

   </div><!-- #siteinfo -->

 <div id="campus-footer">
   <div id="utk">
     <div id="bobi">
        <h2><a href="http://www.utk.edu" class="logo icon-bobi-main"><?php printf( 'The University of Tennessee', 'utthehill' ); ?></a></h2>
      </div>
      <div id="address">
          <p><strong>The University of Tennessee, Knoxville</strong><br>Knoxville, Tennessee 37996<br> 865-974-1000</p>
      </div>
    </div>

    <div id="toolkit">


                    <form id="utk_seek" name="utk_seek" method="post" accept-charset="iso-8859-1" action="http://www.utk.edu/masthead/query.php">
  					        <div class="form-group">
  					          <input tabindex="1" type="text" class="form-control" placeholder="Search" role="search" aria-label="Site Search">
                      <input type="hidden" name="qtype" value="site_utk">  <!-- To turn this into a site-specific search, change the value of this element to: "site_utk:YOURURL.utk.edu" -->
 					        </div>        <button type="submit" class="btn btn-orange">Go</button>

  					      </form>          <br>
      <nav  role="navigation">
          <ul>
            <li><a href="http://www.utk.edu/events/">Events</a></li>
            <li><a href="http://www.utk.edu/maps/">Map</a></li>
          </ul>
          <ul>
            <li><a href="http://www.utk.edu/alpha/">A-Z </a></li>
            <li><a href="http://directory.utk.edu">Directory</a></li>
          </ul>
          <ul>
            <li><a href="http://www.utk.edu/admissions/">Apply</a></li>
            <?php

            $options = get_option('utresponsive_theme_options');
            if (($options['giving_radioinput']) == 'default')

            // If we have the default giving bar
            { echo '
            <li>
              <a href="http://giveto.utk.edu">Give</a>
            </li>
            ';}


            // NO GIVING BAR
            else if (($options['giving_radioinput']) == 'off')
            { echo '';}

            // If CUSTOMIZED
            else if (($options['giving_radioinput']) == 'on')
            { echo '
            <li>
            <a href="'.$options['sometextlink'].'">Give to '.$options['sometext'].'. </a>
            </li>
            ';}
            else
            { echo '
            <li>
            <a href="http://giveto.utk.edu">Give to UT</a>
            </li>
            ';}
            ?>
          </ul>
      </nav>
    </div>
</div>
</footer><!-- #colophon -->

</div><!-- #main -->

  <div id="system-indicia">
    <p>The flagship campus of <a href="http://tennessee.edu">the University of Tennessee System</a> and partner in <a href="http://www.tntransferpathway.org/">the Tennessee Transfer Pathway</a>.</p>
  </div>

</div><!-- #page -->



	<?php wp_footer(); ?>

		</body>
</html>