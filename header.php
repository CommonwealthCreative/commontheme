<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>


<html <?php language_attributes(); ?> 

<?php 

/* Indexes */ if ( is_home() || is_404() || is_product() || is_page_template( 'contact.php') ) { echo 'data-wf-page="67640e6a4a1ce4ad68fc0789"'; } 
              if ( is_search() ) { echo 'data-wf-page="67741e41160207547be4c674"'; } 
            if ( is_page_template( 'work.php') ) { echo 'data-wf-page="67733d5c803012bd95e7dbe5"'; } 
            if ( is_page_template('thecodex.php') || is_author() ) { echo 'data-wf-page="67741e41160207547be4c674"'; }
            if ( is_page_template( 'about.php') ) { echo 'data-wf-page="6770e47f5dcd8dff66468b02"'; } 
            if ( is_page_template( 'services.php') ) { echo 'data-wf-page="67733d5c803012bd95e7dbe5"'; }
            if ( is_page_template('shop.php') || is_page_template('commerce.php') || is_post_type_archive('product') || is_tax('product_cat') || is_tax('product_tag') || is_archive() ) { 
              echo 'data-wf-page="67747a8808dbbfb13aaa4b1b"'; 
          }
            if ( is_page_template( 'single-portfolio-template.php') ) { echo 'data-wf-page="6771c4922ad8d02fcd04847c"'; }


/* Six Template */      if ( is_page_template( 'featured-mba.php') || is_page_template( 'featured-dbhds.php' ) || is_page_template( 'featured-mba.php' ) || is_page_template( 'featured-therapy.php' ) || is_page_template( 'featured-novafr.php' ) || is_page_template( 'featured-six.php' ) ) {
        echo 'data-wf-page="66ddfcaca528a79d9b376410"';
    }
/* single Template */   if ( is_page_template( 'featured-single.php') || is_page_template( 'featured-george.php' ) ) { echo 'data-wf-page="66de4de42db2e90f9841a785"'; } 
      
                  else { echo 'data-wf-page="6770cff8008bf2a5623babf1"';}
      
      ?>  

data-wf-site="67640e6a4a1ce4ad68fc077b" >


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Paytone One:regular"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="https://thecommonwealthcreative.com/" rel="canonical"><!--  Google tag (gtag.js)  -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-LB8XS1ZM8J"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-LB8XS1ZM8J');
</script>
  <!--  Cal element-click embed code begins  -->
  <script type="text/javascript">
  (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init",  {origin:"https://cal.com"});
  Cal("ui", {"styles":{"branding":{"brandColor":"#000000"}},"hideEventTypeDetails":false,"layout":"month_view"});
  </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="nav">
    <div data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdca" class="menubg">
      <div class="menu-left">
        <a href="/" aria-current="page" class="brand w-nav-brand w--current"></a>
        <div class="w-layout-hflex navflex">
        <a data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdce" 
   href="<?php echo is_product() ? esc_url(wc_get_checkout_url() . '?add-to-cart=' . get_the_ID()) : '/contact'; ?>" 
   class="icontext w-inline-block">
    <div class="fontaw rocket"></div>
    <p class="iconlinktext textwhite">
        <?php echo is_product() ? 'Buy Now' : 'Start Here'; ?>
    </p>
</a>

          
          <div data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdd3" data-is-ix2-target="1" class="menu" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5eaa9208297df21101de4911/5eaa9208297df28508de494b_lf30_editor_XLPk4g.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="4" data-duration="0"></div>
        </div>
      </div>
    </div>
    <div class="menuoverlay">
      <div id="w-node-_71de8595-15d3-a0ee-aa62-ad8501dcfdd5-01dcfdc9" class="menucontainer">
        <a href="/about-commonwealth-creative" data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdd6" class="paytone slidelink">About.</a>
        <a data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdd8" href="/strategies-methods/" class="paytone slidelink">Services.</a>
        <a data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdda" href="/work" class="paytone slidelink">Our Work.</a>
        <a data-w-id="0aab7bf9-f048-7c2a-dbd8-dcf767e86630" href="/the-codex" class="paytone slidelink">Codex.</a>
        <a data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfddc" href="/shop" class="paytone slidelink">Shop.</a>
        <a data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdde" href="/contact" class="paytone slidelink">Contact.</a>
        <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank"" target="_blank" class="actionlink w-inline-block">
          <div class="actionpulse backgroundgreen"></div>
          <div class="fontawesolid rocket"></div>
          <p class="iconlinktext">Schedule An Introduction</p>
        </a>
        <div class="iconlinks">
          <div>
            <a href="https://www.linkedin.com/company/hi-commonwealth" target="_blank" class="fontawebrands"></a>
          </div>
          <div>
            <a href="https://twitter.com/hi_commonwealth" target="_blank" class="fontawebrands"></a>
          </div>
          <div>
            <a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="fontawebrands"></a>
          </div>
          <div>
            <a href="https://github.com/CommonwealthCreative" target="_blank" class="fontawebrands"></a>
          </div>
        </div>
      </div>
      <div class="socials">
        <div class="quickdash"></div>
        <a href="https://www.linkedin.com/company/the-commonwealth-creative/" target="_blank" class="social-links">Linkedin</a>
        <a href="https://twitter.com/hi_commonwealth" target="_blank" class="social-links">X (Twitter)</a>
        <a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="social-links">Instagram</a>
        <a href="https://github.com/CommonwealthCreative" target="_blank" class="social-links">GitHub</a>
      </div>
      <div class="menu-bg">
        <div id="work" data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfdfc" class="w-layout-hflex carouselcontainertext textwhite">
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
        <div data-w-id="71de8595-15d3-a0ee-aa62-ad8501dcfe0b" data-is-ix2-target="1" class="lottie-animation" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/6518f97551279edd72aff36b/6518f97551279edd72aff37a_animation_ln5kc7yh.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="5" data-duration="0"></div>
      </div>
    </div>
  </div>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>
  


