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
<style>
      .nav, .footer {display: none;}
    .pageheading.contactheading {
      padding-top:0px;
    }
    </style>
<div class="pageheading contactheading">
    <canvas class="header" id="interactiveCanvas"></canvas>
    <div class="_1300">
        <div id="w-node-_805516f7-eefe-b38b-2b33-f128c2241711-808c94bc" class="w-layout-layout commonstack wf-layout-layout">
            <div id="w-node-_805516f7-eefe-b38b-2b33-f128c2241712-808c94bc" class="w-layout-cell contactcontent">
                <div class="contactlogo">
                    <a href="/" aria-current="page" class="brand w-nav-brand w--current"></a>
                </div>
                
                <h1 data-w-id="77aceff7-4b2e-8820-37ba-35a1959ad1cb" style="opacity:0">
                    <span class="textmedium">Are You Being Held Back by a </span>
                    <span data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">Lack of Talent?</span>
                </h1>
                
                <p class="mid">
                    We can change that. Tell us about yourself and what you envision next. At Commonwealth Creative, we are the catalyst for your marketing and engineering team needs—delivering measurable ROI with precision and purpose.
                </p>
            </div> <!-- Closing for first .w-layout-cell -->

            <div id="w-node-_805516f7-eefe-b38b-2b33-f128c2241713-808c94bc" class="w-layout-cell">
                <div data-w-id="a0d93a92-35a3-fa6e-b799-83efe4950612" style="opacity:0" class="wrapper commoncell">
                    <div class="actionlink">
                        <div class="actionpulse backgroundgreen"></div>
                        <div class="fontawesolid"></div>
                        <p class="iconlinktext textwhite">Let's connect.</p>
                    </div>

                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content(); // Display the page content
                    endwhile;
                    ?>
                </div>
            </div> <!-- Closing for second .w-layout-cell -->
        </div> <!-- Closing for .w-layout-layout -->
    </div> <!-- Closing for first ._1300 -->

    <!-- Second section with contact details and footer info -->
    <div class="_1300 simplefooter">
    <div class="w-layout-hflex flex-block">
    <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove textwhite">
            <div class="text-block">Made with</div>
            <div class="fontawesolid greenheart"></div>
            <div>in the Commonwealth of Virginia.</div>
            </div>
        </div>
        <ul role="list" class="commonlist">
            <li class="techlist">
                <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="textwhite">
                    <span class="fontawesolid phone"></span> Schedule An Introduction
                </a>
            </li>
            <li class="techlist">
                <a href="tel:+18044241348" class="textwhite">
                    <span class="fontawesolid phone"></span> 804-424-1348
                </a>
            </li>
            <li class="techlist">
                <a href="mailto:hi@thecommonwealthcreative.com" class="textwhite">
                    <span class="fontaw"></span> hi@commonwealthcreative.com
                </a>
            </li>
        </ul>
    </div> <!-- Closing for second ._1300 -->

</div> <!-- Closing for .pageheading -->

<?php
/*get_sidebar();*/
get_footer();
