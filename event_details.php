<?php

if (isset($_GET['goto']) && trim($_GET["goto"]) == 'events') 
{
    include_once 'php/__eventdisplay.php';
    $myEventDetails = new eventDisplay();
    $myEvent_result=$myEventDetails->eventDisplayDetails();
}
elseif (isset($_GET['goto']) && trim($_GET["goto"]) == 'related' && isset($_GET['event']) && trim(!empty($_GET['event']))) 
{
   include_once 'php/__eventdisplay_detail.php';
   $myOtherEventDetails= new eventDisplayDetailsOther();
   $myEvent_result=$myOtherEventDetails->eventDisplayDetailsOthers(trim($_GET['event']));
}elseif (isset($_GET['goto']) && trim($_GET["goto"]) == '9999-sundayevent') 
{
   include_once 'php/__eventdisplay_detail.php';
   $gosunday='Y';
   $myOtherEventDetails= new eventDisplayDetailsOther();
   $myEvent_result=$myOtherEventDetails->eventDisplayDetailsOthers(trim($_GET['goto']));

}else{
     header("Location: harekrishna.php");
}
?>
<!DOCTYPE html>
<html>
    <?php
    include_once 'php/__header.php';
  ?>
  <body>
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
      <main class="main main--subpage main--events">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Our events</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">Our events</h1>
        </header>
        <!-- END MAIN HEAD-->
        <div class="container">
          <div class="main__wrap">
            <!-- BEGIN MAIN CONTENT-->
            <div class="main__content">
              <!-- BEGIN WIDGET-->
              <div class="widget js-widget widget--card widget--details">
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <div class="event event--details">
                    <nav class="widget__categories"><a><?php echo $myEvent_result[6]; ?></a></nav>
                    <div class="widget__header">
                      <div class="widget__header-title">
                        <h2 class="widget__title"><?php echo $myEvent_result[0]; ?></h2>
                        <h5 class="event__organaizer">Organizer -<strong><?php echo $myEvent_result[7]; ?></strong></h5>
                      </div>
                      <div class="widget__header-column">
                        <h6 class="event__price"><?php echo $myEvent_result[3]; ?></h6><a class="btn--flat event__book">Open To All</a>
                      </div>
                    </div>
                    <div class="widget__preview"><span class="event__status"><?php echo $myEvent_result[6]; ?></span><a><img height="400" src="<?php echo $myEvent_result[10]; ?>" alt="HareKrishna Event" class="widget__preview-img"></a>
                      <div class="collapser js-collapser collapser--event-details">
                        <div class="collapser__header">
                          <h4 class="collapser__title js-collapser-title">Event details</h4>
                        </div>
                        <div class="collapser__content">
                          <div class="event__info"><span class="event__time">
                              <svg class="event__info-svg">
                                <use xlink:href="#icon-time"></use>
                              </svg><span>Date -</span><?php if ($gosunday=='Y') { echo  $endOfWeek = date('Y-m-d', strtotime('+7 day', strtotime('last Sunday')) ); } else { echo $myEvent_result[1];} ?>
                            <address class="event__location">
                              <svg class="event__info-svg">
                                <use xlink:href="#icon-location"></use>
                              </svg><?php echo $myEvent_result[8]; ?>
                            </address>
                            <h5 class="event__detail-phones">
                              <svg class="event__info-svg">
                                <use xlink:href="#icon-phone"></use>
                              </svg><a><?php echo $myEvent_result[4]; ?></a><a class="event__detail-mail">
                                <svg class="event__info-svg">
                                  <use xlink:href="#icon-mail"></use>
                                </svg><?php echo $myEvent_result[5]; ?></a>
                            </h5>
                          </div>
                          <div class="event__social">
                            <div class="social social--white">
                              <div class="social__list"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="https://plus.google.com/102290820859577735662" class="social__item"><i class="fa fa-google-plus"></i></a><a href="https://www.youtube.com/user/MilwaukeeKrishnaTemp" class="social__item"><i class="fa fa-youtube"></i></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="widget__description">
                      <p><?php echo $myEvent_result[12]; ?></p>
                      <p><?php echo $myEvent_result[13]; ?></p>
                      <p><?php echo $myEvent_result[14]; ?></p>
                      <p><?php echo $myEvent_result[15]; ?></p>
                    </div>
                    <div class="widget__map">
                      <div class="map map--event">
                        <div class="map__buttons">
                          <button type="button" class="map__change-map js-map-btn active">Property Map</button>
                        </div>
                        <div class="map__wrap">
                          <div class="map__view js-map-canvas"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
              <!-- END WIDGET-->
              <!-- BEGIN PAGINATION-->

              <!-- END PAGINATION-->
              <!-- BEGIN WIDGET-->
            <?php include_once('php/__relatedevents.php'); ?>
              <!-- END WIDGET-->
            </div>
            <!-- END MAIN CONTENT-->
            <!-- BEGIN SIDEBAR-->
            <?php include_once('php/__asiderightbar.php'); ?>
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