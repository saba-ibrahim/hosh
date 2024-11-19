<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hosh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
     <div class="up-header">
        <div class="container">
       <div class="row">
       <div class="col-lg-3">
           <div class="logo">
               <img src="<?php echo get_template_directory_uri() ;?>/img/IMG-20191023-WA0009.jpg" alt="شعار الحوش الكبير" >
            
           </div>
           </div>
           
           <div class="col-lg-7">
               <div class="title">
                   <h1>الحوش الكبير</h1>
        
           </div>
           </div>
           <div class="col-lg-2">
               <div class="logo2">
            <img src="<?php echo get_template_directory_uri() ;?>/img/FB_IMG_1572423955570.jpg" alt="شعار الكلية " >

           
                   </div>
           </div>
            </div>
        </div>
    </div>
    
    
      <div class="up-header1">
        <div class="container">
       <div class="row">
       <div class="col-lg-8">
            <div class="navbar_in">
                       <?php
    wp_nav_menu( array(
        'theme_location' => 'menu-3',
        'menu_id'  => 'top-menu',
        'menu_class' => 'top-menu' ,
        'container' => false,
        'depth' => 2,
        'fallback_cb'=> false
    ) );
    ?>

                    </div>
           </div>
           
           <div class="col-lg-4">
               <div class="language">
                   <a href="#">English</a>
                
               
        </div>
           </div>
            </div>
          </div>
    </div>
    
      
    
    <header>
         <div class="nav_in">
                        <?php
    wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'  => 'main-menu',
        'menu_class' => 'nav-menu' ,
        'container' => false,
        'depth' => 2,
        'fallback_cb'=> false
    ) );
    ?>
                    </div>
    

            
    

    </header>

       