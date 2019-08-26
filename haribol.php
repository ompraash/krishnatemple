<!DOCTYPE html>
<html>
    <?php include_once 'php/__header.php'; ?>
  <body class="sidebar-hide">
     <?php require_once 'php/__svginjection.php'?>
    <!-- endinject -->
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
      <main class="main main--subpage main--causes">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">success</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">Hari Bol !!!</h1>
        </header>
        <!-- END MAIN HEAD-->
        <div class="container">
          <div class="main__wrap">
            <!-- BEGIN MAIN CONTENT-->
            <div class="main__content">
                <!-- BEGIN WIDGET-->
                <div class="widget js-widget widget--card widget--account">
                  <!-- BEGIN WIDGET HEADER-->
                  <div class="widget__header">
                    <h2 class="widget__title js-widget-title">Hare Krishna</h2>
                  </div>
                  <!-- END WIDGET HEADER-->
                  <!-- BEGIN WIDGET CONTENT-->
                  <div class="widget__content">
                      <blockquote>Thank You !!! </br> Hare Krishna Hare Krishna Krishna Krishna Hare Hare  </br> Hare Rama Hare Rama Rama Rama Hare Hare. </blockquote>
                    <h5 align="justify">Come visit the Temple, or watch us on youtube. Your donation will help us serve The Temple and Community.</h5>
                    <h5>Remember it is your Temple!</br></br>Hari Bol !!!</h5>
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