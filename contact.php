<?php
/**
 * Template Name: Contact
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
<div class="pageheading contactheading">
    <div class="_1300">
      <div id="w-node-_805516f7-eefe-b38b-2b33-f128c2241711-808c94bc" class="w-layout-layout commonstack wf-layout-layout">
        <div id="w-node-_805516f7-eefe-b38b-2b33-f128c2241712-808c94bc" class="w-layout-cell">
          <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove textwhite">
            <div class="w-layout-hflex flex-block">
              <div class="text-block">Made with</div>
              <div class="fontawesolid greenheart"></div>
              <div>in the Commonwealth of Virginia. </div>
            </div>
          </div>
          <h1 data-w-id="77aceff7-4b2e-8820-37ba-35a1959ad1cb" style="opacity:0" class="textmedium">How Can We Help?</h1>
          <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">Contact Us.</h1>
          <ul role="list" class="commonlist landscapehide">
            <li>
              <div data-w-id="4e082616-cc0b-a11d-5fd6-e1283a7e903c" class="icontext textwhite">
                <div class="fontaw"></div>
                <p class="iconlinktext tinytext">Get your <span class="underling">free </span> keyword analysis.</p>
              </div>
            </li>
            <li>
              <div data-w-id="4b79a95a-ac60-4710-8db5-bb9955892805" class="icontext textwhite">
                <div class="fontaw"></div>
                <p class="iconlinktext tinytext">Deliver  user experiences to foster  customer loyalty.</p>
              </div>
            </li>
            <li>
              <div data-w-id="5ea72d92-fc41-74f4-9b00-97e755947474" class="icontext textwhite">
                <div class="fontaw"></div>
                <p class="iconlinktext tinytext">Accelerate the cycle from concept to payoff.</p>
              </div>
            </li>
          </ul>
          <ul role="list" class="commonlist">
            <li class="techlist">
              <a href="tel:+18044241348" class="textwhite"><span class="fontawesolid phone"></span> Phone: 804-424-1348</a>
            </li>
            <li class="techlist">
              <a href="mailto:hi@thecommonwealthcreative.com" class="textwhite"><span class="fontaw"></span> Email: hi@commonwealthcreative.com</a>
            </li>
          </ul>
        </div>
        <div id="w-node-_805516f7-eefe-b38b-2b33-f128c2241713-808c94bc" class="w-layout-cell">
          <div data-w-id="a0d93a92-35a3-fa6e-b799-83efe4950612" style="opacity:0" class="wrapper commoncell">
            <div class="actionlink">
              <div class="actionpulse backgroundgreen"></div>
              <div class="fontawesolid"></div>
              <p class="iconlinktext textwhite"><span class="landscapehide">Get started here.</span> Let&#x27;s connect.</p>
            </div>
            <?php
	while ( have_posts() ) :
		the_post();

		// Display the content of the page
		the_content();

	endwhile; // End of the loop.
?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="backgroundblack">
    <div class="_1300">
      <div class="w-layout-hflex commonflex">
        <h2 data-w-id="843c093a-f6e0-76a5-6021-7decab460230" style="opacity:0">Our Standards</h2>
        <div data-w-id="843c093a-f6e0-76a5-6021-7decab460232" class="actionlink flexlink">
          <div class="fontaw"></div>
          <p class="iconlinktext">A commitment to excellence and consistency.</p>
        </div>
      </div>
      <p class="common66w">Whether you&#x27;re aiming to transform your website, build a new brand, or launch a digital product, we&#x27;re here to discover and celebrate what makes your company unique—and bring those qualities to life.</p>
      <div id="w-node-_843c093a-f6e0-76a5-6021-7decab460239-808c94bc" class="w-layout-layout commonstack wf-layout-layout">
        <div id="w-node-_843c093a-f6e0-76a5-6021-7decab46023a-808c94bc" class="w-layout-cell">
          <a data-w-id="843c093a-f6e0-76a5-6021-7decab46023b" style="opacity:0" href="/about" class="commoncell textmedium w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images//service.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Dedicated Experts</h4>
            <p>We act as an extension of your business, using our expertise to ensure maximum growth.</p>
          </a>
        </div>
        <div id="w-node-_843c093a-f6e0-76a5-6021-7decab460241-808c94bc" class="w-layout-cell">
          <a data-w-id="843c093a-f6e0-76a5-6021-7decab460242" style="opacity:0" href="/about" class="commoncell textmedium w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images//availability.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Limited Memberships</h4>
            <p>We prioritize quality to ensure our clients receive our full attention and the best possible results.</p>
          </a>
        </div>
        <div id="w-node-_843c093a-f6e0-76a5-6021-7decab460248-808c94bc" class="w-layout-cell">
          <a data-w-id="843c093a-f6e0-76a5-6021-7decab460249" style="opacity:0" href="/about" class="commoncell textmedium w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images//lightning.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Quick Completion</h4>
            <p>Most requests are completed within an average of 2-3 days.</p>
          </a>
        </div>
        <div id="w-node-_843c093a-f6e0-76a5-6021-7decab46024f-808c94bc" class="w-layout-cell">
          <a data-w-id="843c093a-f6e0-76a5-6021-7decab460250" style="opacity:0" href="/about" class="commoncell textmedium w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images//pricing.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">No Surprise Costs</h4>
            <p>No surprises, no contracts—just a simple, fixed monthly membership. Cancel or pause anytime.</p>
          </a>
        </div>
        <div id="w-node-_843c093a-f6e0-76a5-6021-7decab460256-808c94bc" class="w-layout-cell">
          <a data-w-id="843c093a-f6e0-76a5-6021-7decab460257" style="opacity:0" href="/about" class="commoncell textmedium w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images//graph.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Performance &amp; Returns</h4>
            <p>All of our projects are focused on delivering measurable KPIs and maximizing ROI.</p>
          </a>
        </div>
        <div id="w-node-_843c093a-f6e0-76a5-6021-7decab46025d-808c94bc" class="w-layout-cell">
          <a data-w-id="843c093a-f6e0-76a5-6021-7decab46025e" style="opacity:0" href="/about" class="commoncell textmedium w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images//award.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Top Performers</h4>
            <p>We are award-winning designers and enterprise-level IT professionals.</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('reviews'); ?>
<?php
/*get_sidebar();*/
get_footer();
