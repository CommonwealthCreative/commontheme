<?php
/**
 * Template Name: Product Landing Page Post
 * Template Post Type: post
 *
 * Description: use this for portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

 get_header();
 ?>
 	<?php
defined( 'ABSPATH' ) || exit;

global $product;

// Get product details
$product_id = get_the_ID();
$product_title = get_the_title();
$product_price = $product->get_price_html();
$product_content = apply_filters('the_content', get_the_content());
$product_image = get_the_post_thumbnail($product_id, 'large');
$product_url = get_permalink();
$product_author = get_the_author();
$product_author_id = get_the_author_meta('ID');
$product_author_url = get_author_posts_url($product_author_id);
$product_author_avatar = get_avatar($product_author_id, 32);

// Get product categories
$product_categories = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));
$show_questions_section = in_array('Design', $product_categories) || in_array('Code', $product_categories) || in_array('Membership', $product_categories) || in_array('Sprints', $product_categories);
?>
 
<main id="primary">
    
   <div class="homehero">
     <div id="work" data-w-id="36831da3-f245-dbb7-f4c3-40aa6b672c83" class="w-layout-hflex carouselcontainertext">
       <div class="featuredtextcarousel">
         <div class="becauseiconfeatured">
           <div>COMMONWEALTH</div>
         </div>
         <div class="becauseiconfeatured">
           <div>CREATIVE</div>
         </div>
       </div>
       <div class="featuredtextcarousel">
         <div class="becauseiconfeatured">
           <div>COMMONWEALTH</div>
         </div>
         <div class="becauseiconfeatured">
           <div>CREATIVE</div>
         </div>
       </div>
     </div>
     <canvas class="header" id="interactiveCanvas"></canvas>
     <div class="_100vh _1300">
     <div data-w-id="eb093dbe-6c76-e2d3-a34c-9b3adf675679" style="opacity:0;" class="withlove textwhite">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
     <?php
            $page_title = get_the_title();
            $title_length = strlen($page_title);
            $split_position = floor($title_length / 2);
            $first_half = substr($page_title, 0, $split_position);
            $first_half = substr($first_half, 0, strrpos($first_half, ' ')); 
            $second_half = trim(substr($page_title, strlen($first_half)));
            ?>
            <h1 data-w-id="eb093dbe-6c76-e2d3-a34c-9b3adf675681" style="opacity:0" class="textmedium">
                <?php echo esc_html($first_half); ?>
            </h1>
            <h1 data-w-id="eb093dbe-6c76-e2d3-a34c-9b3adf675683" style="opacity:0">
                <?php echo esc_html($second_half); ?>
            </h1>
            <div class="w-layout-hflex commonflex">
         <h2 data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a30" style="opacity:0" class="tinytext"><span class="mid"><?php echo $product_price; ?> </h2>
         <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="actionlink flexlink w-inline-block">
           <div class="fontawesolid"><strong></strong></div>
           <p class="iconlinktext textwhite underline">Have Questions?</span></p>
         </a>
       </div>
       <?php echo apply_filters('the_content', $product->get_description()); ?>
       <a href="<?php echo esc_url( wc_get_cart_url() ); ?>?add-to-cart=<?php echo esc_attr( $product_id ); ?>" class="button backgroundwhite w-button">Buy Now</a>

     </div>
     <div class="w-layout-blockcontainer _1300 w-container">
     <div class="w-layout-hflex commonflex">
        <h2 data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a30" style="opacity:0">Our Standards</h2>
        <div class="actionlink flexlink w-inline-block">
          <div class="fontawesolid"><strong></strong></div>
          <p class="iconlinktext textwhite">A commitment to excellence and consistency.</p>
</div>
      </div>
       <p class="common66w">Finding the right partner is often time consuming and frustrating. We simplify everything—no costly contracts, confusing pricing, or unclear communication.</p>
       <div id="w-node-_01df0757-405d-0fdc-f0bf-361cf8993a3b-68fc0789" class="w-layout-layout commonstack wf-layout-layout">
         <div id="w-node-_01df0757-405d-0fdc-f0bf-361cf8993a3c-68fc0789" class="w-layout-cell">
           <a data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a3d" style="opacity:0" href="/strategies-methods/" class="commoncell textmedium w-inline-block"><img loading="lazy" src="/wp-content/themes/commontheme2025/images/service.svg" alt="" class="commoncellimage">
             <h3 class="tinytext">Dedicated Experts</h3>
             <p>We act as an extension of your business, using our expertise to ensure maximum growth.</p>
           </a>
         </div>
         <div id="w-node-_01df0757-405d-0fdc-f0bf-361cf8993a43-68fc0789" class="w-layout-cell">
           <a data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a44" style="opacity:0" href="/strategies-methods/" class="commoncell textmedium w-inline-block"><img loading="lazy" src="/wp-content/themes/commontheme2025/images/availability.svg" alt="" class="commoncellimage">
             <h3 class="tinytext">Limited Memberships</h3>
             <p>We prioritize quality to ensure our clients receive our full attention and the best possible results.</p>
           </a>
         </div>
         <div id="w-node-_01df0757-405d-0fdc-f0bf-361cf8993a4a-68fc0789" class="w-layout-cell">
           <a data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a4b" style="opacity:0" href="/strategies-methods/" class="commoncell textmedium w-inline-block"><img loading="lazy" src="/wp-content/themes/commontheme2025/images/lightning.svg" alt="" class="commoncellimage">
             <h3 class="tinytext">Quick Completion</h3>
             <p>Most requests are completed within an average of 2-3 days.</p>
           </a>
         </div>
         <div id="w-node-_01df0757-405d-0fdc-f0bf-361cf8993a51-68fc0789" class="w-layout-cell">
           <a data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a52" style="opacity:0" href="/strategies-methods/" class="commoncell textmedium w-inline-block"><img loading="lazy" src="/wp-content/themes/commontheme2025/images/pricing.svg" alt="" class="commoncellimage">
             <h3 class="tinytext">No Surprise Costs</h3>
             <p>No surprises, no contracts—just simple, fixed pricing. Cancel or pause anytime.</p>
           </a>
         </div>
         <div id="w-node-_01df0757-405d-0fdc-f0bf-361cf8993a58-68fc0789" class="w-layout-cell">
           <a data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a59" style="opacity:0" href="/strategies-methods/" class="commoncell textmedium w-inline-block"><img loading="lazy" src="/wp-content/themes/commontheme2025/images/graph.svg" alt="" class="commoncellimage">
             <h3 class="tinytext">Performance &amp; Returns</h3>
             <p>All of our projects are focused on delivering measurable KPIs and maximizing ROI.</p>
           </a>
         </div>
         <div id="w-node-_01df0757-405d-0fdc-f0bf-361cf8993a5f-68fc0789" class="w-layout-cell">
           <a data-w-id="01df0757-405d-0fdc-f0bf-361cf8993a60" style="opacity:0" href="/strategies-methods/" class="commoncell textmedium w-inline-block"><img loading="lazy" src="/wp-content/themes/commontheme2025/images/award.svg" alt="" class="commoncellimage">
             <h3 class="tinytext">Top-Tier Talent</h3>
             <p>We are award-winning designers and enterprise-level IT professionals.</p>
           </a>
         </div>
       </div>
     </div>
     <?php get_template_part('technologies'); ?>
     </div>
   </div>
   
   <section class="featuredwork">
   <div class="commonworkrow" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($product_id, 'full')); ?>'); background-size: cover; background-position: center;">

       <div  class="text-holder w-inline-block">
         <div class="workcontent textwhite _1300">
           <div class="tinytext"><?php echo $product_title;?><span class="crumbspace"> // </span><?php echo $product_price; ?></div>
           <p class="mid"><?php echo wp_strip_all_tags($product->get_short_description()); ?></p>

         </div>
</div>
     </div>
     <a data-w-id="29223a35-dca6-515f-03b1-71d0a0870080" href="<?php echo esc_url( wc_get_cart_url() ); ?>?add-to-cart=<?php echo esc_attr( $product_id ); ?>" class="sectionlink backgroundblack w-inline-block">
       <div class="w-layout-blockcontainer _1300 w-container">
         <div class="tinytext">Add to Checkout: <?php echo $product_title;?></div>
         <div class="w-layout-hflex commonflexwide">
           <h2 data-w-id="690192b9-994c-689f-b642-2ac09e318ae8" style="opacity:0">Let&#x27;s start creating <span class="paytone underline">now.</span></h2><img src="/wp-content/themes/commontheme2025/images/commonarrow.svg" loading="lazy" alt="" class="movearrow">
         </div>
       </div>
     </a>
   </section>
   <section class="creativeshift">
     <div data-w-id="c9a1c391-a2ab-2dd8-356a-ac3554ff21aa" class="commonmiddle creativeshift">
       <h2 class="headingone"><span class="paytone">The</span> Creative Shift<br></h2>
       <p class="mid">Creating meaningful connections and enhancing user experience lie at the heart of our work. We are revolutionizing how companies leverage design and technology to foster collaborative, thoughtful relationships with both clients and their customers.<br></p>
       <div id="w-node-c9a1c391-a2ab-2dd8-356a-ac3554ff21b3-68fc0789" class="w-layout-layout commonstack wf-layout-layout">
         <div id="w-node-c9a1c391-a2ab-2dd8-356a-ac3554ff21b4-68fc0789" data-w-id="c9a1c391-a2ab-2dd8-356a-ac3554ff21b4" style="opacity:0" class="w-layout-cell">
           <a data-w-id="c9a1c391-a2ab-2dd8-356a-ac3554ff21b5" href="/strategies-methods/" class="flexblockmiddle w-inline-block">
           <img loading="lazy" src="/wp-content/themes/commontheme2025/images/direction.svg" alt="" class="commoncellimage">
             <h3 class="tinytext underline">Direction By Design</h3>
             <p>Our guidance and creative discovery process is tailored for you.</p>
           </a>
         </div>
         <div id="w-node-c9a1c391-a2ab-2dd8-356a-ac3554ff21bc-68fc0789" data-w-id="c9a1c391-a2ab-2dd8-356a-ac3554ff21bc" style="opacity:0" class="w-layout-cell">
           <a data-w-id="c9a1c391-a2ab-2dd8-356a-ac3554ff21bd" href="/strategies-methods/" class="flexblockmiddle w-inline-block">
           <img loading="lazy" src="/wp-content/themes/commontheme2025/images/brand.svg" alt="" class="commoncellimage">
             <h3 class="tinytext underline">Signature Branding</h3>
             <p>We create powerful brands that break through the market clutter.</p>
           </a>
         </div>
         <div id="w-node-c9a1c391-a2ab-2dd8-356a-ac3554ff21c4-68fc0789" data-w-id="c9a1c391-a2ab-2dd8-356a-ac3554ff21c4" style="opacity:0" class="w-layout-cell">
           <a data-w-id="c9a1c391-a2ab-2dd8-356a-ac3554ff21c5" href="/strategies-methods/" class="flexblockmiddle w-inline-block">
                      <img loading="lazy" src="/wp-content/themes/commontheme2025/images/code.svg" alt="" class="commoncellimage">
             <h3 class="tinytext underline">User-Focused Development</h3>
             <p>Our code is always created around users and designed to convert.</p>
           </a>
         </div>
       </div>
       <div class="imgbackground"><img sizes="(max-width: 913px) 100vw, 913px" srcset="/wp-content/themes/commontheme2025/images/commonwealth-creative-meeting-p-500.png 500w, /wp-content/themes/commontheme2025/images/commonwealth-creative-meeting-p-800.png 800w, /wp-content/themes/commontheme2025/images/commonwealth-creative-meeting.png 913w" alt="" src="/wp-content/themes/commontheme2025/images/commonwealth-creative-meeting.png" loading="lazy"></div>
       <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="button w-button">Schedule Your Introduction</a>
     </div>
   </section>
   <section id="faqs" class="faqs backgroundlightgray">
       <div class="_1300">
       <!-- <div class="w-layout-hflex commonflex">
         <h2 data-w-id="f987a939-0324-c665-973b-53bb6841d97d" style="opacity:0">Questions?</h2>
               <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank"  target="_blank" class="actionlink flexlink w-inline-block">
           <div class="actionpulse backgroundgreen"></div>
           <div class="fontawesolid"><strong></strong></div>
           <p class="iconlinktext underline">Ask us anything.</p>
         </a>
       </div> -->
       <div id="w-node-b1ebfdeb-4f17-657e-c2af-fae703d3ebcf-68fc0789" class="w-layout-layout commonstack clear wf-layout-layout">
         <div id="w-node-b1ebfdeb-4f17-657e-c2af-fae703d3ebd0-68fc0789" class="w-layout-cell">
           <div class="faq-container">
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ebd2" style="height:80PX;-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0" class="faq-p w-dropdown">
             <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">What is a signature studio?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">Our services are crafted much like a commissioned painting—authentic, personalized, and created exclusively for you. Just as an artist tailors every brushstroke to bring a vision to life, we create solutions specificly aligned with your goals and KPIs.</p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ebdc" style="height:80PX;-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0" class="faq-p w-dropdown">
             <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">What type of requests can I make?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">We provide comprehensive creative and technology solutions, including branding, design, website and app development, and enterprise technology services. Our expertise spans strategy, UX/UI design, front-end and back-end development, and digital transformation. <a href="/strategies-methods">See our full list of services</a>.</p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ebe6" style="-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0;height:80PX" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">Do you support enterprise requirements?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">Absolutely. We have extensive experience delivering complex, high-impact solutions for higher education, healthcare, government, and non-profits. Our team is well-versed in handling large-scale projects with strict compliance, security, and scalability requirements. Robust eCommerce functionality, customer service solutions, and API integrations are standard considerations in our work, reflecting our expertise in building seamless, high-performing digital experiences.</p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ebf0" style="-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0;height:80PX" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">What is the delivery process like?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">Success isn’t subjective—it’s defined from day one. Our <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank">Direction by Design</a> process establishes Key Performance Indicators (KPIs) and Return on Investment (ROI) goals at the outset of every project. We track these metrics to ensure our solutions drive real, measurable impact for your organization. During working hours, we'll tackle your requests asynchronously in our shared project platform, updating you every 48–72 hours with progress, details, or visuals. Need us? Reach out anytime on Slack, or <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank">schedule a call</a>.</p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ebfa" style="-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0;height:80PX" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">What if I need revisions?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">We’re committed to your complete satisfaction, so we offer unlimited revisions. Simply provide your feedback, and we’ll make the adjustments needed to meet your expectations.</p>
                 </div>
               </nav>
             </div>
           </div>
         </div>
         <div id="w-node-b1ebfdeb-4f17-657e-c2af-fae703d3ec04-68fc0789" class="w-layout-cell">
           <div class="faq-container">
           <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ec13" style="-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0;height:80PX" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">How fast will I receive my requests?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">For our membership clients, we aim to complete requests within 48 to 72 hours, ensuring swift turnaround without compromising quality. For larger or more complex tasks, we set clear expectations upfront, providing full transparency on timelines. Our expertise and experience enables us to work at a pace significantly faster than industry standards, typically leveraging an agile methodology to deliver results.</p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ec13" style="-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0;height:80PX" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">Will these solutions scale with my business?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">Of course. We believe in building evergreen, fully owned products that grow with your organization. Unlike subscriptions that lock you into ongoing service fees, our solutions are designed to be scalable, flexible, and future-proof—unless a specific SaaS or service model is requested. Furthermore, we align our benchmarks with enterprise and government CISO standards, ensuring that all our solutions meet or exceed industry security, compliance, and performance requirements.</a>
                   </p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ec1f" style="height:80PX;-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">How do you keep teams aligned?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">We ensure smooth collaboration through pre-planned project agendas that align stakeholders, milestone tracking in project management software for transparency, and regular stand-ups and check-ins to maintain progress. This structured approach keeps projects on track and teams accountable.</p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ec2c" style="height:80PX;-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">Where do I get started?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">Getting started is simple! <a href="/shop">Start a membership or make a purchase </a>, and you&#x27;ll immediately gain access to your dashboard where you can begin uploading requests. You’ll also receive an email invitation to your private Slack channel for direct communication with us. <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank"">You can also schedule a call and we&#x27;ll get you started.</a>
                   </p>
                 </div>
               </nav>
             </div>
             <div data-delay="0" data-hover="false" data-w-id="b1ebfdeb-4f17-657e-c2af-fae703d3ec3b" style="-webkit-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-moz-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);-ms-transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);transform:translate3d(100PX, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-2DEG) skew(0, 0);opacity:0;height:80PX" class="faq-p w-dropdown">
               <div class="faqaccordian w-dropdown-toggle">
                 <div class="toggle-text">Who will I be working with?</div>
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);color:rgb(91,222,184)" class="fontawesolid faq-icon"></div>
               </div>
               <nav class="faq-body w-dropdown-list">
                 <div class="faq-body-cont">
                   <p class="faq-answer">Commonwealth Creative is a flexible studio that assembles specialized teams based on each project's unique needs. For core services and most memberships, Founder <a href="https://mattsmall.thecommonwealthcreative.com/" target="_blank">Matthew Thomas Small</a> personally leads the process, ensuring strategic direction and quality execution. When specialized expertise is required—such as animated videos, drone photography, or large-scale development—we activate our trusted network of experts to deliver the best results.</p>
                 </div>
               </nav>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <?php get_template_part('reviews'); ?>
   
   <?php get_template_part('footercta'); ?>
   
 
     </main><!-- #main -->
 
 <?php
 /*get_sidebar();*/
 get_footer();