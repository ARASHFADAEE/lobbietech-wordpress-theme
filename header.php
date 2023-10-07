<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700' rel='stylesheet'>

  <!-- Css -->
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" /> -->

<?php wp_head()?>
</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <main class="main-wrapper">

    <!-- Navigation -->
    <header class="nav">
      <div class="nav__holder nav--sticky">
        <div class="container-fluid container-semi-fluid nav__container">
          <div class="flex-parent">

            <div class="nav__header">
              <!-- Logo -->
              <a href="<?php echo get_home_url()?>" class="logo-container flex-child">
                <img class="logo" src="<?php echo get_template_directory_uri()?>/img/logo.png" srcset="<?php echo get_template_directory_uri()?>/img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
              </a>

              <!-- Mobile toggle -->
              <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
              </button> 
            </div>                      

            <!-- Navbar -->
            <?php
wp_nav_menu(
    array(
        'theme_location'  => 'main-menu', // نام موقعیت منوی ناوبری در قالب شما
        'container'       => 'nav',
        'container_id'    => 'navbar-collapse',
        'container_class' => 'nav__wrap collapse navbar-collapse',
        'menu_class'      => 'nav__menu',
    )
);
?> <!-- end nav-wrap -->

            <div class="nav__btn-holder nav--align-right">
              <a href="#" class="btn nav__btn">
                <span class="nav__btn-text">Call us for Free</span>
                <span class="nav__btn-phone">63-995-3959</span>
              </a>
            </div>     
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
