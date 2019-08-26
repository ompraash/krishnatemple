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
              <li class="breadcrumbs__item"><a href="" class="breadcrumbs__link">Donate</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">Donate</h1>
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
                    <h2 class="widget__title js-widget-title">Participate in God's Service</h2>
                  </div>
                  <!-- END WIDGET HEADER-->
                  <!-- BEGIN WIDGET CONTENT-->
                  <div class="widget__content">
                      <blockquote>To give something to Krishna is an extremely elevated activity – whether you give some of your time to hear and chant, some of your energy, some of your money or ultimately some of your love. If we give something to Krishna we do not lose anything. In whatever way you give something to him, he will reciprocate in manifold ways. A devotee offers everything to Krishna – his words, his actions and his thoughts. This is, of course, an elevated platform, but Krishna declares in the Bhagavad-Gita that if you cannot do this, then give at least a part of the fruits of your activities and you will gain an uplift to a spiritual platform.</blockquote>
                    <h5 align="justify">The Temple is a vital part of our community - it enriches our lives culturally, religiously and imparts religious values in our children. We urge every community member to take responsibility and take OWNERSHIP in the growth and beautification of our Temple. We respectfully urge every devotee to donate generously to Hare Krishna Temple Milwaukee WI. Donations to the Temple are tax deductible.</h5>
                      </br>
                      <h3>Donations can be made online or drop box.</h3>
                      <img src="images/harekrishna-bank.jpeg" class="img-thumbnail" alt="HareKrishna Bank Details" width="304" height="236">
                            <h3>Click the Donate Button Below</h3></br>
                          
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="3QVM8X39Z3M4L">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
                        </br>  
                    <p align="justify">All donations made to Hare Krishna Temple of Milwaukee, WI are tax deductible. To continue serving the community, we kindly request your generous donations. Any size of donation is welcome and will be highly appreciated. We assure that all donated funds will be utilized strictly for the temple and community work. Please remember that donation made to Hare Krishna Mission Temple Milwaukee is tax deductible. Once the donation is received we will avail you necessary (official) documents for the deduction of taxes of your obligation.</p   >
                    <p align="justify">Also, when you receive confirmation from the temple for your donation, please check the address label and inform the temple if there are any typos.</p>
                    <p align="justify">Donation amounts are designed to suit all levels of giving. Contributing to our temple leave a permanent legacy for the future generations.</p>
                    <p align="justify">Please visit the Temple website for up-to-date information about temple activities, volunteer opportunities, and to make your financial commitment.</p>
                    <p align="justify">Please provide generous support for the Hare Krishna Mission Inc. Milwaukee, WI.</p>
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