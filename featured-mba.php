<?php
/**
 * Template Name:Featured MBUMBA Template
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
?><div class="featured-content">
<div data-w-id="1b86668c-e88c-9062-1a5f-b2b8ae333225" style="opacity:0" class="featuredcard common-card backgroundlite"><img loading="lazy" src="/wp-content/themes/commontheme/images/commonwealth-creative-mary-baldwin-mba-logo.png" alt="Mary Baldwin University Seal" class="logoimg">
<?php the_title( ' <h1 class="mid paytone">', '</h1>' ); ?>
  <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-page-header', get_post_type() );


		endwhile; // End of the loop.
		?>
  <h2 class="tinytext">Strategies &amp; Methods</h2>
      <ul role="list" class="workspagelist">
        <li>Competitive Analysis</li>
        <li>Brand Positioning</li>
        <li>User Interface Design</li>
        <li>Digital Display Advertising</li>
        <li>Social Media Design</li>
        <li>Environment and Interior Design</li>
        <li>Website Development</li>
        <li>Search Engine Optimization (SEO)</li>
        <li>Agile Development</li>
        <li>Website Accessibility</li>

      </ul>
      <h2 class="tinytext">Technologies</h2>
      <ul role="list" class="workspagelist">
        <li class="serviceslist">WordPress Multisite</li>
        <li class="serviceslist">MySQL</li>
        <li class="serviceslist">Pressidum</li>
        <li class="serviceslist">SalesForce</li>
        <li class="serviceslist">Google Adwords</li>
        <li class="serviceslist">HTML/CSS</li>
        <li class="serviceslist">PHP</li>
        <li class="serviceslist">JavaScript</li>
      </ul>
  <div class="scrolldown landscapehide">
    <div data-w-id="ff786d4d-cb23-f4d2-4ab8-3ba3aaaa54b8" data-animation-type="lottie" data-src="/wp-content/themes/commontheme/documents/down-arrow.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-duration="3"></div>
  </div>
</div>
</div>
<div data-w-id="f4d6b0ec-b0b4-cfb1-4c21-735b3bfd3575" class="horizontal-scroll-section featured">
<div class="horizontal-scroll-wrapper">
  <div class="horizontal-scroll-content">
    <!-- 1 --><a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' data-w-id="990f7fe4-5691-b0c5-4e94-fe5c84af84b2" class="section featured first w-inline-block"><img class="featureimg" src="/wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-1_1.webp" alt="" style="opacity:0" sizes="(max-width: 479px) 100vw, (max-width: 767px) 62.6875px, (max-width: 991px) 29vw, 65vw" data-w-id="990f7fe4-5691-b0c5-4e94-fe5c84af84b3" loading="lazy" srcset="/wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-1_1work-commonwealth-creative-mary-baldwin-mba-1.webp 500w, /wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-1_1work-commonwealth-creative-mary-baldwin-mba-1.webp 800w, /wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-1_1work-commonwealth-creative-mary-baldwin-mba-1.webp 1080w, /wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-1_1.webp 1440w"></a><!-- 1 -->
    <!-- 2 --><a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' data-w-id="06fd89dd-186f-6c0f-7b03-158ede881feb" class="section featured w-inline-block"><img class="featureimg" src="/wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-2_1.webp" alt="" style="opacity:0" sizes="(max-width: 479px) 79vw, (max-width: 767px) 87vw, (max-width: 991px) 90vw, 65vw" data-w-id="06fd89dd-186f-6c0f-7b03-158ede881fec" loading="lazy"></a><!-- 2 -->
    <!-- 3 --><a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' data-w-id="f97acba5-7ae4-1471-9c74-d6c82064a7d7" class="section featured w-inline-block"><img class="featureimg" src="/wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-3_1.webp" alt="" style="opacity:0" sizes="(max-width: 479px) 79vw, (max-width: 767px) 87vw, (max-width: 991px) 90vw, 65vw" data-w-id="f97acba5-7ae4-1471-9c74-d6c82064a7d8" loading="lazy"></a><!-- 3 -->
    <!-- 4 --><a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' data-w-id="bc7a3d93-7e69-ea0d-52f3-03a55138b989" class="section featured w-inline-block"><img class="featureimg" src="/wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-4_1.webp" alt="" style="opacity:0" sizes="(max-width: 479px) 79vw, (max-width: 767px) 87vw, (max-width: 991px) 90vw, 65vw" data-w-id="bc7a3d93-7e69-ea0d-52f3-03a55138b98a" loading="lazy"></a><!-- 4 -->
    <!-- 5 --><a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' data-w-id="e6f4876e-cf7c-b96f-6b87-c269130a7ac0" class="section featured w-inline-block"><img class="featureimg" src="/wp-content/themes/commontheme/images/work-commonwealth-creative-mary-baldwin-mba-5_1.webp" alt="" style="opacity:0" sizes="(max-width: 479px) 79vw, (max-width: 767px) 87vw, (max-width: 991px) 90vw, 65vw" data-w-id="e6f4876e-cf7c-b96f-6b87-c269130a7ac1" loading="lazy"></a><!-- 5 -->
    <a data-w-id="8b0a7fa0-c337-7ab5-85d0-e4f6a3988c36" href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="section _6 w-inline-block">
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
        <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae258-9b376410" class="w-layout-layout process-stack wf-layout-layout">
          <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae259-9b376410" data-w-id="c88d491f-20e5-da55-7220-2b20b7cae259" style="opacity:0" class="w-layout-cell openingcell">
            <a href="https://thecommonwealthcreative.com/strategies-methods" class="flexblockmiddle w-inline-block">
              <div class="fontawesolid openingicon"></div>
              <h4 class="tinytext">Strategic Direction Through Design</h4>
              <p>Our guidance and creative discovery process is tailored for you.</p>
            </a>
          </div>
          <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae261-9b376410" data-w-id="c88d491f-20e5-da55-7220-2b20b7cae261" style="opacity:0" class="w-layout-cell openingcell">
            <a href="https://thecommonwealthcreative.com/strategies-methods/#design" class="flexblockmiddle w-inline-block">
              <div class="fontawesolid openingicon"></div>
              <h4 class="tinytext">Elite Branding  &amp; Storytelling</h4>
              <p>We create powerful brands that break through the market clutter.</p>
            </a>
          </div>
          <div id="w-node-c88d491f-20e5-da55-7220-2b20b7cae269-9b376410" data-w-id="c88d491f-20e5-da55-7220-2b20b7cae269" style="opacity:0" class="w-layout-cell openingcell">
            <a href="https://thecommonwealthcreative.com/strategies-methods/#dev" class="flexblockmiddle w-inline-block">
              <h4 class="tinytext">User-Focused Development</h4>
              <div class="fontawesolid openingicon"></div>
              <p>Our code is always created around users and designed to convert.</p>
            </a>
          </div>
        </div>
        <a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="button w-button">Schedule An Introduction</a>
        <div class="imgbackground"><img sizes="(max-width: 767px) 100vw, (max-width: 991px) 83vw, 87vw" srcset="/wp-content/themes/commontheme/images/commonwealth-creative-meeting-p-500.png 500w, /wp-content/themes/commontheme/images/commonwealth-creative-meeting-p-800.png 800w, /wp-content/themes/commontheme/images/commonwealth-creative-meeting.png 913w" alt="" src="/wp-content/themes/commontheme/images/commonwealth-creative-meeting.png" loading="lazy"></div>
      </div>
    </div>
  </div>
</div>
</section>
<?php

get_footer();