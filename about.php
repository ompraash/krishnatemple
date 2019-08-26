<!DOCTYPE html>
<html>
  <?php
    include_once 'php/__header.php';
  ?>
  <body>

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
              <li class="breadcrumbs__item"><a href="about.php" class="breadcrumbs__link">About us</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">About us</h1>
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
                  <h2 class="widget__title js-widget-title">About Hare Krishna Temple.</h2>
                </div>
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <div class="post post--details">
                    <header class="post__header">
                      <p>The Hare Krishna mantra, also referred to reverentially as the Maha Mantra (<strong>"Great Mantra"</strong>), is a 16 word Vaishnava mantra which is mentioned in the Kali-Santarana Upanishad, and which from the 15th century rose to importance in the Bhakti movement following the teachings of Chaitanya Mahaprabhu.This Mantra is composed of three Sanskrit names of the Supreme Being; <strong>"Hare," "Krishna," and "Rama."</strong></p>
                      <p><strong>More than 68 years later the mission remains, though where and how we accomplish it has changed dramatically.</strong></p>
                    </header>
                    <div class="post__preview"><img src="assets/media-demo/post/about.jpg" alt="HareKrishna Temple" class="post__preview-img"></div>
                    <div class="post__description">
                      <p>In 1976, in order to provide greater support to refugees and their sponsors in the USA, CWS established refugee resettlement offices in various parts of the U.S.  They played a pivotal role in supporting the growing number of refugees from Southeast Asia who were resettled to the United States in the years after the Vietnam War.  While the number of offices ebbs and flows with refugee admissions, they continue to form the foundation for CWS work in resettling refugees in the US.</p>
                      <blockquote>It was also in the 1970s that CWS first began responding to U.S. disasters at the request of its member churches. By working together agencies can maximize their impact.</blockquote>
                      <p>CWS work in international emergency response and development through the 1970s and 1980s focused on working in partnership with other NGO’s and with local groups.  In some instances this led to the creation of new, independent organizations such as the Middle East Council of Churches, the Christian Commission for Development in Bangladesh or CEPAD in Nicaragua.  Working in partnership remains one of the hallmarks of CWS work.  These groups remain valued partners to CWS.</p>
                      <p>Our Values:</p>
                      <ul>
                        <li>Our partners are critical in helping us achieve our objectives.  These local agencies know best the needs of their communities and how we can help.</li>
                        <li>These local agencies know best the needs of their communities and how we can help.</li>
                        <li>Auxiliary aids and services are available upon request to individuals with disabilities.</li>
                      </ul><img src="assets/media-demo/post/about-1.jpg" style="float: right; margin: 10px 0 10px 20px;" alt="HareKrishna Temple">
                      <p>More recently, CWS was one of the founding members of a global partnership of faith-based humanitarian agencies, ACT Alliance, with members in 140 countries.  With 130 member organizations, ACT Alliance provides a dynamic environment for collaboration in responding to human needs around the world.  By working together agencies can maximize their impact.</p>
                      <p>CWS work in international emergency response and development through the 1970s and 1980s focused on working in partnership with other NGO’s and with local groups.  In some instances this led to the creation of new, independent organizations such as the Middle East Council of Churches, the Christian Commission for Development in Bangladesh or CEPAD in Nicaragua.  Working in partnership remains one of the hallmarks of CWS work.  These groups remain valued partners to CWS.</p>
                      <h5>For the word of God is living and active. <br> Sharper than any double-edged sword, it penetrates even to dividing soul and spirit, <br> joints and marrow; it judges the thoughts and attitudes.</h5>
                    </div>
                  </div>
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