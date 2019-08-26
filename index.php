<!DOCTYPE html>
<html>
<?php
include_once 'php/__header.php';
include_once 'php/__eventdisplay.php';
?>
  <body class="scroll-animation">

     <?php require_once 'php/__svginjection.php'?>

    <div class="box">
      <!-- BEGIN topbar-->
      <!-- END topbar-->
        <?php
            include 'php/__topbarmenu.php';
        ?>
      <!-- BEGIN HEADER-->
         <?php
            include 'php/__belowmenuheader.php';
         ?>
      <!-- END HEADER-->
      <!-- BEGIN BEFORE MAIN SECTION-->
      <!-- END BEFORE MAIN SECTION-->
      <!-- BEGIN MAIN SECTION-->
      <main class="main">
        <!-- BEGIN WIDGET-->
         <?php include 'php/__homeBannerImages.php'?>
        <!-- END WIDGET-->
        <!-- BEGIN WIDGET-->
        <div class="widget js-widget widget--landing">
          <!-- BEGIN WIDGET HEADER-->
          <div class="widget__header">
            <h2 class="widget__title js-widget-title">Next Upcoming event</h2>
          </div>
          <!-- END WIDGET HEADER-->
          <!-- BEGIN WIDGET CONTENT-->
          <div class="widget__content">
            <!-- BEGIN NEXTEVENT COUNTPANEL-->
            <section class="nextevent nextevent--countpanel">
              <!-- BEGIN COUNTDOWN COUNTIMER-->
                <div data-end-date="<?php $myEvent = new eventDisplay(); echo $myEvent->eventDisplayDate(); ?>" class="countdown countdown--panel js-counttimer"></div>
              <!-- END COUNTDOWN COUNTIMER-->
              <div class="nextevent__item">
                <figure class="nextevent__preview"><a href="event_details.php?goto=events"><img src="<?php echo $myEvent->eventPathImage(); ?>" alt="Upcoming Event at HareKrishna Temple"></a></figure>
                <div class="nextevent__details">
                  <h3 class="nextevent__name"><a href="event_details.php?goto=events"><?php echo $myEvent->eventTitle(); ?></a></h3>
                  <time datetime="2016" class="nextevent__date"><?php echo $myEvent->eventDateTime(); ?></time>
                  <div class="nextevent__intro">
                    <p><?php echo $myEvent->eventBDesc(); ?></p>
                  </div><a href="event_details.php?goto=events" class="btn--border-brand nextevent__more">More Details</a>
                </div>
              </div>
            </section>
            <!-- END NEXTEVENT COUNTPANEL-->
          </div>
          <!-- END WIDGET CONTENT-->
        </div>
        <!-- END WIDGET-->
        <!-- BEGIN WIDGET-->
        <div class="widget js-widget widget--landing widget--panel-bg">
          <!-- END WIDGET HEADER-->
          <!-- BEGIN WIDGET CONTENT-->
          <div class="widget__content">
            <!-- BEGIN ABOUT COLUMNS-->
            <section class="about about--columns">
              <div class="about__item about__item--0"><a class="about__preview about__preview--0">
                  <figure class="about__figure about__figure--0"><img src="assets/media-demo/post/390x290/post-4.jpg" alt="Hare Krishna .. Hari Bol !!!" class="about__preview-img"></figure></a>
                <div class="about__details about__details--0">
                  <h3 class="about__name"><a href="new-to-temple.php">I’m new here</a></h3>
                  <div class="about__intro">
                    <p>First time visitor? .... Find out how, where and when we worship. We hope to see you soon!! It reminds us of the faith to which God calls us.</p>
                  </div><a href="new-to-temple.php" class="btn--link about__more">Read more</a>
                </div>
              </div>
              <div class="about__item about__item--1"><a class="about__preview about__preview--1">
                  <figure class="about__figure about__figure--1"><img src="assets/media-demo/post/390x290/post-5.jpg" alt="Hare Krishna .. Hari Bol !!!" class="about__preview-img"></figure></a>
                <div class="about__details about__details--1">
                  <h3 class="about__name"><a href="about.php">About our Temple</a></h3>
                  <div class="about__intro">
                    <p>Our house is a house of prayer for all people!  We are excited to meet you and have you participate with our Temple family. Our hearts and our doors are open to welcome you in!</p>
                  </div><a href="about.php" class="btn--link about__more">Read more</a>
                </div>
              </div>
              <div class="about__item about__item--2"><a class="about__preview about__preview--2">
                  <figure class="about__figure about__figure--2"><img src="assets/media-demo/post/390x290/post-6.jpg" alt="Hare Krishna .. Hari Bol !!!" class="about__preview-img"></figure></a>
                <div class="about__details about__details--2">
                  <h3 class="about__name"><a href="community.php">Temple members</a></h3>
                  <div class="about__intro">
                    <p>We are fond of saying, "The Temple is your temple." It means that people make up our community, and those people matter more than anything</p>
                  </div><a href="community.php" class="btn--link about__more">Read more</a>
                </div>
              </div>
            </section>
            <!-- END ABOUT COLUMNS-->
          </div>
          <!-- END WIDGET CONTENT-->
        </div>
        <!-- END WIDGET-->
        <!-- BEGIN WIDGET-->
        <div class="widget js-widget widget--landing">
          <!-- BEGIN WIDGET HEADER-->
          <div class="widget__header">
            <h2 class="widget__title js-widget-title">Upcoming Events</h2>
          </div>
          <!-- END WIDGET HEADER-->
          <!-- BEGIN WIDGET CONTENT-->
          <div class="widget__content">
            <!-- BEGIN EVENT COLUMNS-->
            <?php include_once('php/__upcomingEvent.php'); ?>
            <!-- END EVENT COLUMNS-->
          </div>
          <!-- END WIDGET CONTENT-->
        </div>
        <!-- END WIDGET-->
        <!-- BEGIN WIDGET-->
        <div class="widget js-widget widget--landing widget--gallery">
          <!-- BEGIN WIDGET HEADER-->
          <div class="widget__header">
            <h2 class="widget__title js-widget-title">Our Gallery</h2>
          </div>
          <!-- END WIDGET HEADER-->
          <!-- BEGIN WIDGET CONTENT-->
            <?php include_once('php/__krishnaTempleGallery.php'); ?>
          <!-- END WIDGET CONTENT-->
        </div>
        <!-- END WIDGET-->
        <!-- BEGIN WIDGET-->
        <div class="widget js-widget widget--landing">
          <!-- BEGIN WIDGET HEADER-->
          <div class="widget__header">
            <h2 class="widget__title js-widget-title">Learn About Krishna</h2>
          </div>
          <!-- END WIDGET HEADER-->
          <!-- BEGIN WIDGET CONTENT-->
          <div class="widget__content">
            <!-- BEGIN POST STANDART-->
            <?php include_once('php/__learnAboutKrishna.php'); ?>
            <!-- END POST STANDART-->
          </div>
          <!-- END WIDGET CONTENT-->
        </div>
        <!-- END WIDGET-->
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
      <?php include_once 'php/includeScripts.php'?>
    <!-- END SCRIPTS and INCLUDES-->
  </body>
</html>
