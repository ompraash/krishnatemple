<!DOCTYPE html>
<html>
    <?php
    include_once 'php/__header.php';
  ?>
  <body class="sidebar-hide">
     <?php require_once 'php/__svginjection.php'?>
    <div class="box">
      <!-- BEGIN topbar-->
      <?php include_once 'php/__topbarmenu.php'; ?>
      <!-- END topbar-->
      <!-- BEGIN HEADER-->
      <?php
            include_once 'php/__belowmenuheader.php';   
      ?>
      <!-- END HEADER-->
      <!-- BEGIN BEFORE MAIN SECTION-->
      <!-- END BEFORE MAIN SECTION-->
      <!-- BEGIN MAIN SECTION-->
      <main class="main main--subpage main--about">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Contact us</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">Contact us</h1>
        </header>
        <!-- END MAIN HEAD-->
        <div class="container">
          <div class="main__wrap">
            <!-- BEGIN MAIN CONTENT-->
            <div class="main__content">
              <!-- BEGIN WIDGET-->
              <div class="widget js-widget widget--card widget--details">
                <!-- BEGIN WIDGET HEADER-->
                <div class="widget__header">
                  <h2 class="widget__title js-widget-title">Our Krishna Temple address location and contact details.</h2>
                </div>
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <div class="map map--contacts">
                    <div class="map__buttons">
                      <button type="button" class="map__change-map js-map-btn active">Contact Map</button>
                    </div>
                    <div class="map__wrap">
                      <div class="map__view js-map-contact"></div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
              <!-- END WIDGET-->
              <!-- BEGIN WIDGET-->
              <div class="widget js-widget widget--card">
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <section class="contacts">
                    <div class="contacts__form">
                      <h3>Write to Us</h3>
                      <!-- BEGIN FORM-->
                      <form id="harekrishnacontact"  action="#" class="form js-parsley form--contacts">
                        <div class="row">
                          <div class="form-group form-group--lg-4">
                            <label for="contacts-name" >Your Name *</label>
                            <input type="text" id="contacts-name" required="required" class="form-control"/>
                          </div>
                          <div class="form-group form-group--lg-4">
                            <label for="contacts-email" >Your E-mail *</label>
                            <input type="email" id="contacts-email" required="required" class="form-control"/>
                          </div>
                          <div class="form-group form-group--lg-4">
                            <label for="contacts-phone" >Your telephone</label>
                            <input type="text" id="contacts-phone" required="required" class="form-control"/>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group form-group--lg-12">
                            <label for="contacts-message" >Message</label>
                            <textarea id="contacts-message" required="required" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="form__buttons">
                          <button type="submit" class="btn--flat form__btn">Submit</button>
                        </div>
                      </form>
                      <!-- END FORM-->
                    </div>
                    <div class="contacts__info">
                      <h3>Our Address</h3>
                      <address class="address address--contacts">
                        <dl class="address__list">
                          <dt class="address__list-icon"><i class="fa fa-map-marker"></i></dt>
                          <dd class="address__list-body">
                        2419, W RAMSAY AVE, 
                        MILWAUKEE WI, USA 53221
                          </dd>
                          <dt class="address__list-icon"><i class="fa fa-phone"></i></dt>
                          <dd class="address__list-body"><a>+1 414-763-2785</a></dd>
                          <dt class="address__list-icon"><i class="fa fa-envelope-o"></i></dt>
                          <dd class="address__list-body"><a href="contact@krishnatemplemilwaukee.org">contact@krishnatemplemilwaukee.org</a></dd>
                        </dl>
                      </address>
                      <div class="social social--footer">
                        <h3>Our networks</h3>
                        <div class="social__list"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/102290820859577735662" class="social__item"><i class="fa fa-google-plus"></i></a><a href="https://www.youtube.com/user/MilwaukeeKrishnaTemp" class="social__item"><i class="fa fa-youtube"></i></a><a href="#" class="social__item"><i class="fa fa-vimeo-square"></i></a></div>
                      </div>
                    </div>
                  </section>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
              <!-- END WIDGET-->
            </div>
            <!-- END MAIN CONTENT-->
            <!-- BEGIN SIDEBAR-->
            <aside class="sidebar">
            </aside>
            <!-- END SIDEBAR-->
          </div>
        </div>
      </main>
      <!-- END MAIN SECTION-->
      <!-- BEGIN AFTER MAIN SECTION-->
      <!-- END AFTER MAIN SECTION-->
      <!-- BEGIN WIDGET-->
      <?php include_once('php/__newLetter.php'); ?>
      <!-- END WIDGET-->
      <!-- BEGIN FOOTER-->
     <?php include_once('php/__mainFooter.php'); ?>
      <!-- end of block .footer-->
      <!-- END FOOTER-->
    </div>
    <!-- BEGIN SCRIPTS and INCLUDES-->
  <?php include_once 'php/includeScripts.php' ?>
    <!-- END SCRIPTS and INCLUDES-->
  </body>
</html>