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
      <main class="main main--subpage main--about">
        <!-- BEGIN BREADCRUMBS-->
        <nav class="breadcrumbs">
          <div class="container">
            <ul>
              <li class="breadcrumbs__item"><a href="index.php" class="breadcrumbs__link">Home</a></li>
              <li class="breadcrumbs__item"><a href="new-to-temple.php" class="breadcrumbs__link">New To Temple</a></li>
            </ul>
          </div>
        </nav>
        <!-- END BREADCRUMBS-->
        <!-- BEGIN MAIN HEAD-->
        <header class="main__head">
          <h1 class="main__title">New To Krishna Temple</h1>
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
                  <h2 class="widget__title js-widget-title">New To Hare Krishna Milwaukee Temple.</h2>
                </div>
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <div class="post post--details">
                    <header class="post__header">
                      <p>Radha Krishna Temple will be a place where you can drink the nectar of love for God, celebrate festivals with the community, practice meditation and yoga, enrich your children with rich Vedic culture, or simply relax and enjoy the spiritual environment with your family.
Help manifest this beautiful dwelling of Radha Krishna! Receive the blessings of God by participating in this noble mission!.</p>
                      <p><strong>Please visit the Temple daily at the following times for Arati Darshan of their Lordships Sri Sri Radha Govinda Deva. We have special programs every Sunday starting at 6:30 pm with Arati of their lordships, Spiritual discourses, Bhajans, and a free prasadam feast.</strong></p>
                    </header>
                    <div class="post__preview"><img src="assets/media-demo/post/about.jpg" alt="HareKrishna Temple" class="post__preview-img"></div>
                    <div class="post__description">
                      <p>"Samarpan" : Samarpan means surrender. As devotees of Radha-Krishna, our goal is to completely surrender our mind and intellect in the service of God with love and dedication.</p>
                      <blockquote>When the mind is turned towards Love and Peace harmony exists between all creatures. Nature and Man should live in harmony with Love. Where there is Love, there can be no destruction. When Love increases in human beings, destructive tendencies will end. Evil and destructive tendencies manifest in the form of destructive actions whilst Love manifests in the form of Peace. Love all, serve all.</blockquote>
                      
                      <p>Learnings:</p>
                      <ul>
                        <li>Hare Krishnas teach that we are living in an evil age, the age of Kali, but can attain salvation and a "return to Godhead" by means of permanent Krishna-consciousness. Krishna-consciousness can be accomplished through ethical living and the "Hare Krishna" chant.</li>
                        <li>Hare Krishna, Hare Krishna, Krishna Krishna, Hare Hare, Hare Rama, Hare Rama, Rama Rama, Hare Hare This mantra expresses devotion to the gods Hare, Krishna and Rama and is believed to bring about a higher state of consciousness when it is chanted, sung, or meditated upon. It is thought to be the most effective means of self-purification. Hare Krishnas are expected to chant the mantra for 16 rounds of a rosary of 108 beads (i.e. 1,728 times) every day.</li>
                        
                      </ul><img src="assets/media-demo/post/about-1.jpg" style="float: right; margin: 10px 0 10px 20px;" alt="HareKrishna Temple">
                      <p>Learn from the Bhagavad-gita about dealing with our world’s challenges and our day to day life issues. Feel free to bring your Bhagavad Gita book, if you have one . We discuss the Gita all levels-spiritual, philosophical, and intellectual putting it in context to today's world..</p>
                      <p>We are currently studying ‘Values of Life’ according to Bhagavad Gita.</p>
                      <h5>"When disappointment stares in the face and all alone I see not one ray of light, I go back to the Bhagavad Gita. I find a verse here and a verse there, and I immediately begin to smile in the midst of overwhelming tragedies – and my life has been full of external tragedies – and if they have left no visible, no indelible scar on me, I owe it all to the teaching of the Bhagavad Gita." -MAHATAMA GANDHI</h5>
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