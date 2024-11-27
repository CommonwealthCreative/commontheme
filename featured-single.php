<?php
/**
 * Template Name: Featured Single Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>
<div class="featured-content">
    <div data-w-id="1b86668c-e88c-9062-1a5f-b2b8ae333225" style="opacity:0" class="featuredcard common-card backgroundlite">
      <div data-w-id="88963ae0-6a90-5d29-606a-13669ad426f2" class="indicator">
        <div class="fontawesolid textlight"></div>
        <div class="paytone">Available January 2025</div>
        <div class="indicatorpulse backgroundgreen"></div>
      </div>
<?php the_title( ' <h1 class="mid paytone">', '</h1>' ); ?>
  <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-page-header', get_post_type() );


		endwhile; // End of the loop.
		?>
      <h2 class="tinytext">Strategies &amp; Methods</h2>
      <ul role="list" class="workspagelist">
        <li>Design</li>
        <li>Web Development</li>
        <li>Brand Audit</li>
        <li>Brand Architecture</li>
        <li>Brand Positioning</li>
        <li>Creative Strategy</li>
        <li>Technology Audit </li>
        <li>Information Architecture</li>
        <li>
          <a href="https://thecommonwealthcreative.com/how-do-the-7-principles-of-design-shape-creative-discovery/" target="_blank" class="textlite">Direction By Design</a>
        </li>
      </ul>
      <h2 class="tinytext">Technologies</h2>
      <ul role="list" class="workspagelist">
        <li class="serviceslist">Web Development</li>
        <li class="serviceslist">Customer Support</li>
        <li class="serviceslist">Training/Education</li>
      </ul>
      <div class="scrolldown landscapehide">
        <div data-w-id="56b7e8d5-882a-b166-b423-20ba9de3e481" data-animation-type="lottie" data-src="/wp-content/themes/commontheme/documents/down-arrow.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-duration="3"></div>
      </div>
    </div>
  </div>
  <div data-w-id="f4d6b0ec-b0b4-cfb1-4c21-735b3bfd3575" class="horizontal-scroll-section featured single">
    <div class="horizontal-scroll-wrapper">
      <div class="horizontal-scroll-content single">
        <a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' data-w-id="990f7fe4-5691-b0c5-4e94-fe5c84af84b2" class="section featured first w-inline-block"><img class="featureimg" src="/wp-content/themes/commontheme/images/the-george-wythe-edition-thumbnail_1.webp" alt="" style="opacity:0" sizes="(max-width: 479px) 100vw, (max-width: 767px) 62.6875px, (max-width: 991px) 29vw, 69vw" data-w-id="990f7fe4-5691-b0c5-4e94-fe5c84af84b3" loading="lazy" srcset="/wp-content/themes/commontheme/images/the-george-wythe-edition-thumbnail_1the-george-wythe-edition-thumbnail.webp 500w, /wp-content/themes/commontheme/images/the-george-wythe-edition-thumbnail_1the-george-wythe-edition-thumbnail.webp 800w, /wp-content/themes/commontheme/images/the-george-wythe-edition-thumbnail_1.webp 1024w"></a>
        <a data-w-id="8b0a7fa0-c337-7ab5-85d0-e4f6a3988c36" href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="section _6 single w-inline-block">
          <div class="container">
            <div data-w-id="8b0a7fa0-c337-7ab5-85d0-e4f6a3988c38" class="heading-wrapper">
              <h2 class="heading">Book An Intro.</h2>
              <div data-w-id="97b1d8e8-f6f1-e56c-0eae-a3f9c0c8b2a2" class="actionlink textwhite">
                <div class="actionpulse backgroundgreen"></div>
                <div class="fontawesolid textwhite"></div>
                <p>Schedule Today <span class="landscapehide">@ Commonwealth Creative</span></p>
              </div>
            </div><img data-w-id="8b0a7fa0-c337-7ab5-85d0-e4f6a3988c3d" loading="lazy" alt="Commonwealth Creative Logo Circle Dropout" src="/wp-content/themes/commontheme/images/commonwealth-creative-color-logo-darkblue-dropout.png" class="logoimg">
          </div>
        </a>
      </div>
      <div id="work" data-w-id="8b0a7fa0-c337-7ab5-85d0-e4f6a3988c3e" class="w-layout-hflex carouselcontainerfeatured">
        <div class="featuredtextcarousel">
          <div class="textfeatured">
            <div>Featured</div>
          </div>
          <div class="textfeatured">
            <div>Work</div>
          </div>
        </div>
        <div class="featuredtextcarousel">
          <div class="textfeatured">
            <div>Featured</div>
          </div>
          <div class="textfeatured">
            <div>Work</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="profilecta">
    <div class="_1300">
      <div class="backgroundopening-card">
        <div class="common-card openingcard">
          <div data-w-id="c88d491f-20e5-da55-7220-2b20b7cae24f" class="middlehead meetingimg">
            <h2 data-w-id="c88d491f-20e5-da55-7220-2b20b7cae250" style="opacity:0" class="jumbo"><span class="textwhite paytone">The</span> Creative Shift<br></h2>
            <p class="mid">Creating meaningful connections and enhancing user experience lie at the heart of our work. We are revolutionizing how companies leverage design and technology to foster collaborative, thoughtful relationships with both clients and their customers.<br></p>
            <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae258-9841a785" class="w-layout-layout process-stack wf-layout-layout">
              <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae259-9841a785" data-w-id="c88d491f-20e5-da55-7220-2b20b7cae259" style="opacity:0" class="w-layout-cell openingcell">
                <a href="https://thecommonwealthcreative.com/strategies-methods" class="flexblockmiddle w-inline-block">
                  <div class="fontawesolid openingicon"></div>
                  <h4 class="tinytext">Focused Direction By Design</h4>
                  <p>Our guidance and creative discovery process is tailored for you.</p>
                </a>
              </div>
              <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae261-9841a785" data-w-id="c88d491f-20e5-da55-7220-2b20b7cae261" style="opacity:0" class="w-layout-cell openingcell">
                <a href="https://thecommonwealthcreative.com/strategies-methods/#design" class="flexblockmiddle w-inline-block">
                  <div class="fontawesolid openingicon"></div>
                  <h4 class="tinytext">Signature Marketing  &amp; Branding</h4>
                  <p>We create powerful brands that break through the market clutter.</p>
                </a>
              </div>
              <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae269-9841a785" data-w-id="c88d491f-20e5-da55-7220-2b20b7cae269" style="opacity:0" class="w-layout-cell openingcell">
                <a href="https://thecommonwealthcreative.com/strategies-methods/#dev" class="flexblockmiddle w-inline-block">
                  <h4 class="tinytext">User-Focused Web Development</h4>
                  <div class="fontawesolid openingicon"></div>
                  <p>Our code is always created around users and designed to convert.</p>
                </a>
              </div>
            </div>
            <a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="button w-button">Schedule An Introduction</a>
            <div class="imgbackground"><img sizes="(max-width: 767px) 100vw, (max-width: 991px) 83vw, 88vw" srcset="/wp-content/themes/commontheme/images/commonwealth-creative-meeting-p-500.png 500w, /wp-content/themes/commontheme/images/commonwealth-creative-meeting-p-800.png 800w, /wp-content/themes/commontheme/images/commonwealth-creative-meeting.png 913w" alt="" src="/wp-content/themes/commontheme/images/commonwealth-creative-meeting.png" loading="lazy"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php

get_footer();