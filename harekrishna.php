<!DOCTYPE html>
<html>
  <?php
    include_once 'php/__header.php';
  ?>
  <body class="sidebar-hide">
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
      <main class="main main--subpage main--errors">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">404 Page</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">Krishna Temple Milwaukee</h1>
        </header>
        <!-- END MAIN HEAD-->
        <div class="container">
          <div class="main__wrap">
            <!-- BEGIN MAIN CONTENT-->
            <div class="main__content">
              <!-- BEGIN WIDGET-->
              <div class="widget js-widget widget--card">
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <div class="errors-page">
                    <h3 class="errors-page__title">Hare Krishna ... Hari Bol !!!</h3>
                    <div class="errors-page__wrap">
                      <div class="errors-page__type">4<span>0</span>4</div>
                      <div class="errors-page__label">Error</div>
                    </div>
                    <div class="errors-page__description">The page you were looking for appears to have been moved, <br> deleted or does not exist.</div>
                    <nav class="errors-page__nav"><a href="/">Homepage</a><a href="about.php">About Us</a><a href="contacts.php">Contact Us</a></nav>
                    <div class="errors-page__social">
                      <div class="social social--center">
                        <div class="social__list"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="https://www.youtube.com/user/MilwaukeeKrishnaTemp" class="social__item"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com/102290820859577735662" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                      </div>
                    </div>
                  </div>
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
      <div class="widget js-widget widget--subscribe">
        <!-- END WIDGET HEADER-->
        <!-- BEGIN WIDGET CONTENT-->
        <div class="widget__content">
          <!-- BEGIN SUBSCRIBE-->
          <div class="subscribe">
            <h4 class="subscribe__title">Our Newsletter</h4>
            <div class="subscribe__form">
              <form action="#" class="form form--subscribe js-form-subscribe">
                <div class="form-group">
                  <label class="control-label">Your E-mail</label>
                  <input type="email" required class="form-control">
                </div>
                <button type="submit" class="form__submit">Send</button>
              </form>
            </div>
          </div>
          <!-- END SUBSCRIBE-->
        </div>
        <!-- END WIDGET CONTENT-->
      </div>
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