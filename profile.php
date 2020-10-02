
<?php

// On démarre la session AVANT d'écrire du code HTML
include 'getwhatever.php';

?>
<!DOCTYPE html>
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/cropped-favicon-192x192.png" />
    <title>Vkidspace</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
 <script type="text/javascript">
            var pageURL = window.location.href;
  var allNumbers = pageURL.replace(/[^0-9]/g, ' ').trim().split(/\s+/);
  document.cookie="profile_uid="+allNumbers;

</script>
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/select2.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/main1.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/shop.css' type='text/css' media='all' />
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <link rel='stylesheet' href='tuner/style.css' type='text/css' media='all' />
    <link rel="icon" href="img/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="img/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage" content="img/cropped-favicon-270x270.png">
</head>

<body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page wide wave-style">
    
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <div class="page">
        <!-- top panel -->
        <div class='site_top_panel wave slider'>
            <!-- canvas -->
            <div class='top_half_sin_wrapper'>
                <canvas class='top_half_sin' data-bg-color='#ffffff' data-line-color='#ffffff'></canvas>
            </div>
            <!-- / canvas -->
            <!-- top panekl main container -->
            <div class='container'>
                <div class='row_text_search'>
                    <div id='top_panel_text'><a href="tel:1-800-123-45678"><i class="fa fa-phone-square"></i> 009-715-691-74949 </a>;
                        <a href="mailto:mail@mail.com"> <i class="fa fa-envelope-o"></i>nadhim_skander@yahoo.fr</a>
                    </div>
                    <form method="get" class="search-form" action="#">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="text" class="search-field vova" value="" name="s" title="Search for:" />
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                        <input type='hidden' name='lang' value='en' />
                    </form>
                </div>
                <div id='top_panel_links'>
                    <div class='search_icon'></div>
                    <div id='top_social_links_wrapper'>
                        <div class='share-toggle-button'><i class='share-icon fa fa-share-alt'></i></div>
                        <div class='cws_social_links'><a href='http://twitter.com/' class='cws_social_link' title='Twitter'><i class='share-icon fa fa-twitter'></i></a><a href='http://facebook.com/' class='cws_social_link' title='Facebook'><i class='share-icon fa fa-facebook'></i></a><a href='http://dribbble.com/' class='cws_social_link' title='Dribbble'><i class='share-icon fa fa-dribbble'></i></a><a href='https://plus.google.com/' class='cws_social_link' title='Google'><i class='share-icon fa fa-google-plus'></i></a></div>
                    </div>
                    <div class='mini-cart'> <a class="woo_icon" href="features-shop-cart.html" title="View your shopping cart"><i class='woo_mini-count fa fa-shopping-cart'><span>2</span></i></a>
                        <div class="woo_mini_cart">
                            <!-- start product list -->
                            <ul class="cart_list product_list_widget">
                                <li>
                                    <a href="#" class="remove" title="Remove this item">×</a>
                                    <a href="shop-single-product.html">
                                        <img width="180" height="180" src="pic/shop/58x58-bag.jpg" class="attachment-shop_thumbnail" alt="poster_2_up">Bag&nbsp; </a>
                                  
                                </li>
                                <li>
                                    <a href="#" class="remove" title="Remove this item">×</a>
                                    <a href="shop-single-product.html">
                                        <img width="180" height="180" src="pic/shop/58x58-basket.jpg" class="attachment-shop_thumbnail" alt="T_7_front">Basket&nbsp; </a>
                              
                                </li>
                            </ul>
                            <!-- end product list -->
                     
                       
                        </div>
                    </div>
                    <div class="lang_bar">
                        <div>
                            <ul>
                                <li>
                       
                                    </a>
                                    <ul>
                                        <li class="icl-fr">
                                    
                                        </li>
                                        <li class="icl-de">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site_top_panel_toggle"></div>
            </div>
            <!-- / top panel main container -->
        </div>
        <!-- / top panel -->
        <!-- header container -->
        <div class='header_cont'>
            <div class='header_mask'>
                <div class='header_pattern'></div>
                <div class='header_img'></div>
            </div>
             <header class='site_header logo-in-menu' data-menu-after="3">
                    <div class="header_box">
                        <div class="container">
                            <!-- logo -->
                            <div class="header_logo_part with_border" role="banner">
                                <a class="logo" href="index.html"><img src='img/logo1-304vqrnv7ccxz47xp4tw5m.png' data-at2x='img/logo1-304vqrnv7ccxz47xp4tw5m.png' alt /></a>
                            </div>
                            <!-- / logo -->
                            <!-- menu -->
                            <div class="header_nav_part">
                                <nav class="main-nav-container a-center">
                                    <div class="mobile_menu_header">
                                        <i class="mobile_menu_switcher"><span></span><span></span><span></span></i>
                                    </div>
                                    <ul id="menu-main-menu" class="main-menu menu-bees">
                                        <!-- menu item -->
                                        <li class="menu-item  menu-item-has-children bees-start">
                                            <a href="pet.php">
                                                <div class="bees bees-start"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Pets
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                            <span class='button_open'></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>
                                                </li>
                                   
                                            </ul>
                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                        <li class="menu-item menu-item-has-children"><a href="features-shop.php">Books<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a>
                                            <span class='button_open'></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item back"><a href="#"><em>←</em>&nbsp;BACK</a>
                                                </li>
                                                
                                                
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                         
                                        <!-- / menu item -->
                                        <!-- menu item -->
                             
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                       
                                            <span class='button_open'></span>
                                            
                                        <!-- / menu item -->
                                        <!-- menu item -->
                                         <li class="menu-item right ">
                                            <a href="store.php">
                                                <div class="bees bees-end"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Toys
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="menu-item right bees-end">
                                            <a href="contact-us.html">
                                                <div class="bees bees-end"><span></span>
                                                    <div class="line-one"></div>
                                                    <div class="line-two"></div>
                                                </div>Contact
                                                <div class="canvas_wrapper">
                                                    <canvas class="menu_dashed"></canvas>
                                                </div>
                                            </a>
                                        </li>
                                       

                                        <!-- / menu item -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- / menu -->
                        </div>
                    </div>
                </header>
            <!-- #masthead -->
        </div>
        <!-- / header container -->
        <!-- breadcrumbs -->
       
        <!-- / breadcrumbs -->
        <!-- main container -->
        <div id="main" class="site-main">
            <div class="page_content single_sidebar">
                <!-- pattern container / -->
                <div class="left-pattern pattern pattern-2"></div>
                <div class='container'>
                    <!-- sidebar -->
                    <aside class='sb_right'>
                        <!-- widget search -->
                        
                        <!-- / widget gallery -->
                    </aside>
                    <!-- / sidebar -->
                    <!-- main content -->
                    <main>
                        <?php  foreach(getanyuser($_GET['id']) as $v) {?>
                        <div class="grid_row">
                            <section class="cws_ourteam single">
                                <div class="cws_wrapper">
                                    <div class="cws_ourteam_items grid">
                                        <article class="item clearfix">
                                            <div  class='media_part' >
                                                <div class='pic'><img src='<?php
 
  echo $v['image'];?>' data-at2x='<?php
 
  echo $v['image'];?>' alt width="300px" height="300px" />
                                                </div>

                                            </div>
                                      
 </article>
                                    </div>
                                </div>
                            </section>
                        </div>
<div  class="ce clearfix">

                                               <div class="cws_progress_bar">
                                        <div class="pb_title"> <h3>Name:</h3>  </div> <h3><?php
 
  echo $v['nom'];
?></h3>
                                               <div class="cws_progress_bar">
                                        <div class="pb_title"> <h3>Family Name:</h3>  </div> <h3><?php
 
  echo $v['prenom'];
?></h3>                                       <div class="cws_progress_bar">
                                        <div class="pb_title"> <h3>phone:</h3>  </div> <h3><?php
 
  echo $v['phone'];
?></h3>   
<div class="pb_title">      
    <h3> pets :</h3>
</div>
<?php } ?>
                             <br>


 <ul class="products">
<?php  foreach(getapet() as $v) {?>
      <li id="<?php echo $v['pet_id'] ?>" class="first post-70 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
                                        <div class="sale-wrapper">
                                        </div>
                                        <div class='media_part'>
                                            <div class='pic'>
                                                <img src='<?php echo $v['pic']; ?>' data-at2x='<?php echo $v['pic']; ?>' alt>
                                                <div class='links_popup animate'>
                                                    <div class='link_cont'>
                                                        <div class='link'>
                                                            <a class='fancy' href='<?php echo $v['pic']; ?>'><i class='fa fa-camera'></i></a>
                                                            <div class='link-item-bounce'></div>
                                                        </div>
                                                        <div class='link'>
                                                            <a href='shop-single-product.html'><i class='fa fa-share'></i></a>
                                                            <div class='link-item-bounce'></div>
                                                        </div>
                                                    </div>
                                                    <div class='link-toggle-button'>
                                                        <i class='fa fa-plus link-toggle-icon'></i>
                                                    </div>
                                                </div>
                                                <div class='hover-effect'></div>
                                            </div>

                             
                                        </div>

                                        <h3><?php echo $v['titre']; ?></h3>
                                   
                                        </span>
                                        <div class="prop-description">
                                            <p><?php echo $v['description']; ?></p>
                                        </div>
                                        <div class="gridlist-buttonwrap">

                                            </div>


                                        <hr />
                                    </li>
                                     <?php } ?>
                                 </ul>
                                 <div class="pb_title">
                                 <h3>books :</h3>
                             </div>
                             <br>
                             


 <ul class="products">
<?php  foreach(getabook() as $v) {?>
      <li id="<?php echo $v['book_id'] ?>" class="first post-70 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
                                        <div class="sale-wrapper">
                                        </div>
                                        <div class='media_part'>
                                            <div class='pic'>
                                                <img src='<?php echo $v['pic']; ?>' data-at2x='<?php echo $v['pic']; ?>' alt>
                                                <div class='links_popup animate'>
                                                    <div class='link_cont'>
                                                        <div class='link'>
                                                            <a class='fancy' href='<?php echo $v['pic']; ?>'><i class='fa fa-camera'></i></a>
                                                            <div class='link-item-bounce'></div>
                                                        </div>
                                                        <div class='link'>
                                                            <a href='shop-single-product.html'><i class='fa fa-share'></i></a>
                                                            <div class='link-item-bounce'></div>
                                                        </div>
                                                    </div>
                                                    <div class='link-toggle-button'>
                                                        <i class='fa fa-plus link-toggle-icon'></i>
                                                    </div>
                                                </div>
                                                <div class='hover-effect'></div>
                                            </div>

                             
                                        </div>

                                        <h3><?php echo $v['titre']; ?></h3>
                                   
                                        </span>
                                        <div class="prop-description">
                                            <p><?php echo $v['description']; ?></p>
                                        </div>
                                        <div class="gridlist-buttonwrap">

                                            <form action="" method="post">
</form></div>


                                        <hr />
                                    </li>
                                     <?php } ?>
                                 </ul>
                                 <div class="pb_title">
                                 <h3>toys :</h3>
                             </div>
                                                          <br>


 <ul class="products">
<?php  foreach(getatoy() as $v) {?>
      <li id="<?php echo $v['toy_id'] ?>" class="first post-70 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
                                        <div class="sale-wrapper">
                                        </div>
                                        <div class='media_part'>
                                            <div class='pic'>
                                                <img src='<?php echo $v['pic']; ?>' data-at2x='<?php echo $v['pic']; ?>' alt>
                                                <div class='links_popup animate'>
                                                    <div class='link_cont'>
                                                        <div class='link'>
                                                            <a class='fancy' href='<?php echo $v['pic']; ?>'><i class='fa fa-camera'></i></a>
                                                            <div class='link-item-bounce'></div>
                                                        </div>
                                                        <div class='link'>
                                                            <a href='shop-single-product.html'><i class='fa fa-share'></i></a>
                                                            <div class='link-item-bounce'></div>
                                                        </div>
                                                    </div>
                                                    <div class='link-toggle-button'>
                                                        <i class='fa fa-plus link-toggle-icon'></i>
                                                    </div>
                                                </div>
                                                <div class='hover-effect'></div>
                                            </div>

                             
                                        </div>

                                        <h3><?php echo $v['titre']; ?></h3>
                                   
                                        </span>
                                        <div class="prop-description">
                                            <p><?php echo $v['description']; ?></p>
                                      
                                        </div>
                                        <div class="gridlist-buttonwrap">

                            </div>


                                        <hr />
                                    </li>
                                     <?php } ?>
                                 </ul>
    <!-- #page -->
         </div>
        
     

 



    
          






                                           </div>
                                       
                    </main>
                    <!--  / main content -->
                </div>
                <!-- pattern container / -->
                <div class="right-pattern pattern pattern-2"></div>
                <!-- footer image container / -->
                <div class="footer_image"></div>
            </div>

            <!-- svg filter -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="0" style='display:none;'>
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <!-- / svg filter -->
        </div>
        <!-- #main -->
        <!-- footer -->
        <div class='footer_wrapper_copyright'>
            <!-- canvas -->
            <div class='half_sin_wrapper'>
                <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
            </div>
            <!-- / canvas -->
            <footer class='page_footer'>
              
            </footer>
            <!-- copyright -->
            <div class='copyrights_area'>
                <!-- canvas -->
                <div class='half_sin_wrapper'>
                    <canvas class='footer_half_sin' data-bg-color='14,64,77' data-line-color='14,64,77'></canvas>
                </div>
                <!-- / canvas -->
                <div class='container'>
                    <div class='copyrights_container'>
                        <div class='copyrights'><a target="_blank" href="">developed by</a></div>
                        <div class='copyrights_panel'>
                            <div class='copyrights_panel_wrapper'>
                                <div class="lang_bar">
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class='cws_social_links'><a href='http://twitter.com/' class='cws_social_link' title='Twitter'><i class='share-icon fa fa-twitter'></i></a><a href='http://facebook.com/' class='cws_social_link' title='Facebook'><i class='share-icon fa fa-facebook'></i></a><a href='http://dribbble.com/' class='cws_social_link' title='Dribbble'><i class='share-icon fa fa-dribbble'></i></a><a href='https://plus.google.com/' class='cws_social_link' title='Google'><i class='share-icon fa fa-google-plus'></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / copyright -->
        </div>
    </div>
    
    <div class='scroll_top animated'></div>
    <div id="lang_sel_footer">
        
    </div>
    <script type='text/javascript' src='tuner/tuner/js/colorpicker.js'></script>
    <script type='text/javascript' src='tuner/tuner/js/scripts.js'></script>
    <script type='text/javascript' src='js/retina_1.3.0.js'></script>
    <script type='text/javascript' src='js/modernizr.js'></script>
    <script type='text/javascript' src='js/owl.carousel.js'></script>
    <script type='text/javascript' src='js/TweenMax.min.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='js/select2.min.js'></script>
    <script type='text/javascript' src='js/wow.min.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    <script type='text/javascript' src="js/jquery.form.min.js"></script>
    <script type='text/javascript' src='js/scripts.js'></script>

 
</body>

</html>