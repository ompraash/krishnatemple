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
      <main class="main main--subpage main--community">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Our community</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">Our community</h1>
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
                  <h2 class="widget__title js-widget-title">Meet our Hare Krishna Temple management team.</h2>
                </div>
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <section class="member member--list">
                    <div class="member__intro">
                      <p>Use your talents and skills to help build the kingdom of God. Find peace and joy as you embrace and excel in your work at the Church. Our employees have a unique commitment and devotion to the work.</p>
                    </div>
                    <h3>Temple board members and Preist (Pujari)</h3>
                    <div class="member__list">
                                    <div class="member__item">
                                      <figure class="member__preview"><img src="assets/media-demo/members/278x296/1.jpg" alt="" class="member__img">
                                        <figcaption class="member__caption"><span class="member__name">Sagarsen Haldar</span><span class="member__post">Board Member</span><a href="community-member.php?krishnatemplemilwaukee=1" class="btn--border-white member__more">More info</a></figcaption>
                                      </figure>
                                    </div>
                                    <div class="member__item">
                                      <figure class="member__preview"><img src="assets/media-demo/members/278x296/2.jpg" alt="" class="member__img">
                                        <figcaption class="member__caption"><span class="member__name">Bidyut Mondal</span><span class="member__post">Board Member</span><a href="community-member.php?krishnatemplemilwaukee=2" class="btn--border-white member__more">More info</a></figcaption>
                                      </figure>
                                    </div>
                                    <div class="member__item">
                                      <figure class="member__preview"><img src="assets/media-demo/members/278x296/3.jpg" alt="" class="member__img">
                                        <figcaption class="member__caption"><span class="member__name">Rajesh K Paswan</span><span class="member__post">Priest and Committee Member</span><a href="community-member.php?krishnatemplemilwaukee=3" class="btn--border-white member__more">More info</a></figcaption>
                                      </figure>
                                    </div>
                                    <div class="member__item">
                                      <figure class="member__preview"><img src="assets/media-demo/members/278x296/4.jpg" alt="" class="member__img">
                                        <figcaption class="member__caption"><span class="member__name">Pabitra Halder</span><span class="member__post">Committee Member</span><a href="community-member.php?krishnatemplemilwaukee=4" class="btn--border-white member__more">More info</a></figcaption>
                                      </figure>
                                    </div>
                    </div>
                    <hr>
                    <div class="widget__footer">
                      <h3>Would you like to engage in our Team or other aspects of the Hare Krishna Temple of Milwaukee?</h3><a class="btn--flat" href="contacts.php">Let’s do it</a>
                    </div>
                  </section>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
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