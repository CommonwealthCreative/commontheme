<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>

<style>
    .nav, .footer {display: none;}
    .homehero {padding-top:0px;}
    ._100vh._1300 {align-items: inherit; text-align: center;}
    a.button {max-width: 300px; margin: 0px auto;}
    </style>
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

      <img class="_404image" loading="lazy" src="/wp-content/themes/commontheme2025/images/404.svg" alt="" class="">
      <h1 data-w-id="eb093dbe-6c76-e2d3-a34c-9b3adf675681" style="opacity:0">It Looks Like You Are Lost.</h1>
      <p class="mid">The page you are looking for does not exist.</p>
      <a href="/" class="button backgroundwhite w-button">Take Me Back Home</a>

    </div>
</div>
<?php
get_footer();
