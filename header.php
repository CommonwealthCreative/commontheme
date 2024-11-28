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

/* Indexes */ if ( is_home() ) { echo 'data-wf-page="66daff0553e4462bf4ae160d"'; } 
            if ( is_page_template( 'work.php') ) { echo 'data-wf-page="66dd4a19079776ced5a5c9d1"'; } 
            if ( is_page_template( 'about.php') ) { echo 'data-wf-page="66dd5a138058bad06fe7abce"'; } 
            if ( is_page_template( 'methods.php') ) { echo 'data-wf-page="66dd5e8f5feb03b8ce8c3585"'; }


/* Six Template */      if ( is_page_template( 'featured-mba.php') || is_page_template( 'featured-dbhds.php' ) || is_page_template( 'featured-mba.php' ) || is_page_template( 'featured-therapy.php' ) || is_page_template( 'featured-novafr.php' ) || is_page_template( 'featured-six.php' ) ) {
        echo 'data-wf-page="66ddfcaca528a79d9b376410"';
    }
/* single Template */   if ( is_page_template( 'featured-single.php') || is_page_template( 'featured-george.php' ) ) { echo 'data-wf-page="66de4de42db2e90f9841a785"'; } 
      
                  else { echo 'data-wf-page="66dd717a5aebb355cb7e0df5"';}
      
      ?>  

data-wf-site="66daff0553e4462bf4ae1607" >


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<style>@media (min-width:992px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b7c"] {opacity:0.5;-webkit-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);color:rgb(255,255,255);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b81"] {opacity:0.5;-webkit-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b7a"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b84"] {opacity:0.5;-webkit-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);color:rgb(255,255,255);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b89"] {opacity:0.5;-webkit-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b82"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b8c"] {opacity:0.5;-webkit-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);color:rgb(255,255,255);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b91"] {opacity:0.5;-webkit-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b8a"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b94"] {opacity:0.5;-webkit-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);color:rgb(255,255,255);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b99"] {opacity:0.5;-webkit-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b92"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b9c"] {opacity:0.5;-webkit-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);color:rgb(255,255,255);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6ba1"] {opacity:0.5;-webkit-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6b9a"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6ba4"] {opacity:0.5;-webkit-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);color:rgb(255,255,255);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6ba9"] {opacity:0.5;-webkit-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -20px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);}html.w-mod-js:not(.w-mod-ix) [data-w-id="bd63e6e7-ac08-4992-1a60-6bda7e6c6ba2"] {-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;}}</style>
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
    <div data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c23" class="menubg">
      <div class="menu-left _1300">
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c25" href="<?php echo home_url(); ?>" class="brand herologo w-nav-brand"></a>
        <div class="w-layout-hflex navflex">
          <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c27" href="https://thecommonwealthcreative.com/#pricing" class="showreel w-inline-block">
            <div class="fontaw rocket"></div>
            <p class="showreel-title project">Start Here</p>
          </a>
          <div data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c2c" data-is-ix2-target="1" class="menu" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5eaa9208297df21101de4911/5eaa9208297df28508de494b_lf30_editor_XLPk4g.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="4" data-duration="0"></div>
        </div>
      </div>
    </div>
    <div class="overlay">
      <div id="w-node-_3ca514ae-0c9e-bd3f-9611-c95457eb3c2e-57eb3c22" class="menu-links">
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c3b" href="/" class="heading navoverlayheading">Home</a>
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c3d" href="/strategies-methods/" class="heading navoverlayheading">Services</a>
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c41" href="/#pricing" class="heading navoverlayheading">Pricing</a>
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c3f" href="/" class="heading navoverlayheading">Our Work</a>
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c41" href="/shop" class="heading navoverlayheading">Shop</a>
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c41" href="https://thecommonwealthcreative.com/about" class="heading navoverlayheading">About</a>
        <a data-w-id="3ca514ae-0c9e-bd3f-9611-c95457eb3c43" href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="actionlink textwhite w-inline-block" style="margin-top:20px; margin-bottom:20px;">
          <div class="actionpulse backgroundgreen"></div>
          <div class="fontawesolid rocket"></div>
          <p>Book An Introduction</p>
        </a>
        <div class="iconlinks menusocials">
          <div class="fontawebrands">
            <a href="https://www.linkedin.com/company/hi-commonwealth" target="_blank" class="iconlinks textwhite"></a>
          </div>
          <div class="fontawebrands">
            <a href="https://twitter.com/hi_commonwealth" target="_blank" class="iconlinks textwhite"></a>
          </div>
          <div class="fontawebrands">
            <a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="iconlinks textwhite"></a>
          </div>
          <div class="fontawebrands">
            <a href="https://github.com/CommonwealthCreative" target="_blank" class="iconlinks textwhite"></a>
          </div>
        </div>
      </div>
      <div class="socials">
        <div class="quickdash"></div>
        <a href="https://www.linkedin.com/company/the-commonwealth-creative/" target="_blank" class="social-links">Linkedin</a>
        <a href="https://twitter.com/hi_commonwealth" target="_blank" class="social-links">X (Twitter)</a>
        <a href="https://www.instagram.com/hi_commonwealth/" target="_blank" class="social-links">Instagram</a>
      </div>
      <div class="menu-bg"></div>
    </div>
  </div>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>
  


