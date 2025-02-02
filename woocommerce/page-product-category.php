<?php
/**
 * Template Name: Product Category Archive
 * Description: Custom archive template for `/product-category/`
 */


 get_header();
 ?>
 <div class="pageheading productcatheading">
     <div class="_1300">
       <h1 data-w-id="77aceff7-4b2e-8820-37ba-35a1959ad1cb" style="opacity:0" class="textmedium">Curated Products</h1>
       <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">&amp; Services</h1>
       <?php
 $term = get_queried_object(); // Get the current product category
 $category_name = !empty($term->name) ? esc_html($term->name) : 'Products'; // Fallback if not in a category
 $category_link = get_term_link($term); // Get category link
 
 // Get parent categories if they exist
 $breadcrumbs = [];
 if (!is_wp_error($category_link)) {
     while ($term->parent) {
         $term = get_term($term->parent, 'product_cat');
         if (!is_wp_error($term) && !empty($term->name)) {
             array_unshift($breadcrumbs, '<a class="textwhite" href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a> &raquo; ');
         }
     }
 }
 ?>
       <div class="">
         <div class="w-layout-hflex commonflex">
           <h2 data-w-id="dcb88678-8a06-52f7-2cc3-9a062b8729fb" style="opacity:0">Displaying</h2>
           <div class="actionlink flexlink textwhite">
             <div class="actionpulse backgroundgreen"></div>
             <div class="fontawesolid"><strong></strong></div>
             <p class="iconlinktext">
     <a class="textwhite" href="/shop">All Products</a> &raquo;
     <?php echo implode('', $breadcrumbs); // Display parent categories ?>
     <span class="underline" style="font-weight: 300;"><?php echo $category_name; ?></span></p>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="_1300">
 
     <section class="shop-loop">
     <div id="w-node-fb6660a8-ffab-7e68-20fb-b933532f9b36-3aaa4b1b" class="w-layout-hflex commonflex">
             <h2 data-w-id="fb6660a8-ffab-7e68-20fb-b933532f9b37" style="opacity:0">Collection</h2>
             <div class="actionlink flexlink">
                 <div class="actionpulse backgroundgreen"></div>
                 <div class="fontawesolid textdark"></div>
                 <p class="iconlinktext">Curated products<span class="landscapehide">, services &amp; resources</span>.</p>
             </div>
         </div>
         <p class="common66w">Our collection showcases services and essential items chosen for their quality, impact, and alignment with our values.</p>
       <?php
       get_header( 'shop' );
       /*do_action( 'woocommerce_shop_loop_header' );*/
 
       if ( woocommerce_product_loop() ) {
       
           /**
            * Hook: woocommerce_before_shop_loop.
            *
            * @hooked woocommerce_output_all_notices - 10
            * @hooked woocommerce_result_count - 20
            * @hooked woocommerce_catalog_ordering - 30
            */
           do_action( 'woocommerce_before_shop_loop' );
       
           woocommerce_product_loop_start();
       
           if ( wc_get_loop_prop( 'total' ) ) {
               while ( have_posts() ) {
                   the_post();
       
                   /**
                    * Hook: woocommerce_shop_loop.
                    */
                   do_action( 'woocommerce_shop_loop' );
       
                   wc_get_template_part( 'content', 'product' );
               }
           }
       
           woocommerce_product_loop_end();
       
           /**
            * Hook: woocommerce_after_shop_loop.
            *
            * @hooked woocommerce_pagination - 10
            */
           do_action( 'woocommerce_after_shop_loop' );
       } else {
           /**
            * Hook: woocommerce_no_products_found.
            *
            * @hooked wc_no_products_found - 10
            */
           do_action( 'woocommerce_no_products_found' );
       }
       
       /**
        * Hook: woocommerce_after_main_content.
        *
        * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
        */
       do_action( 'woocommerce_after_main_content' );
       
 ?>
     </section>
   </div>
   <section class="shop">
     <div class="_1300">
       <div class="w-layout-hflex commonflex">
         <h2 data-w-id="26b5640d-1289-afc7-030d-775be1be243b" style="opacity:0">Sprints</h2>
         <div class="actionlink flexlink">
           <div class="actionpulse backgroundgreen"></div>
           <div class="fontawesolid textdark"></div>
           <p class="iconlinktext"><span>Completed in 10 days. </span><span class="landscapehide">Booking new clients for 2025.</span></p>
         </div>
       </div>
       <p class="common66w"><span>Created for professionals who need both</span> speed &amp; precision.</p>
       <div id="w-node-_983a3154-8642-c8a5-eff6-636e39c8bd81-3aaa4b1b" class="w-layout-layout commonstack clear wf-layout-layout">
         <div id="w-node-_983a3154-8642-c8a5-eff6-636e39c8bd82-3aaa4b1b" class="w-layout-cell">
           <div data-w-id="983a3154-8642-c8a5-eff6-636e39c8bd83" style="opacity:0" class="common-card sprints _1">
             <h2 data-w-id="71774690-6d0e-38c7-37bb-db50df23a8b8" style="opacity:0" class="common66w">Our strategic approach to positioning your brand for success.</h2>
             <div class="mid paytone">$999 <span class="tinytext clear">*</span></div>
             <div class="tinytext gilroy">*Military &amp; Non-Profit Discounts.</div>
             <p class="common66w sprint">For when you&#x27;re ready to move from concept to reality. Elevate your business with our 1K branding package by creating a visual foundation positioned for long-term success.</p>
             <div class="ctabottom">
               <a data-w-id="983a3154-8642-c8a5-eff6-636e39c8bdc2" href="https://buy.stripe.com/7sIfZK20V1IQ33WaEQ" class="icontext textwhite w-inline-block">
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform-style:preserve-3d" class="fontaw rocket"></div>
                 <p class="iconlinktext">1K Brand Launch</p>
               </a>
             </div>
           </div>
         </div>
         <div id="w-node-_983a3154-8642-c8a5-eff6-636e39c8bdc9-3aaa4b1b" class="w-layout-cell">
           <div data-w-id="b622f1fa-dc66-39da-40bb-d9c442c3494b" style="opacity:0" class="common-card sprints _2">
             <h2 class="common66w">A streamlined path to bring you online.</h2>
             <div class="mid paytone">$999<span class="tinytext clear"> *</span></div>
             <div class="tinytext gilroy">*Military &amp; Non-Profit Discounts.</div>
             <p class="common66w sprint">Launch a website with our 1K WordPress package. Enjoy a sleek, user-friendly design, seamless navigation, and customized features, all with dedicated support to ensure your site shines in the digital landscape.</p>
             <div class="ctabottom">
               <a data-w-id="b622f1fa-dc66-39da-40bb-d9c442c34951" href="https://buy.stripe.com/7sIfZK20V1IQ33WaEQ" class="icontext textwhite w-inline-block">
                 <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform-style:preserve-3d" class="fontaw rocket"></div>
                 <p class="iconlinktext">1K WordPress Site </p>
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 <?php
 /*get_sidebar();*/
 get_footer();
 