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
              
              <!-- END WIDGET-->
              <!-- BEGIN WIDGET-->
              <div class="widget js-widget widget--listing">
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <div data-modifier="list" data-view="event" class="event event--list js-switch-view js-event">
                    <div class="listing listing--list">
    <?php
            require_once 'php/__eventlist.php';
            $images = array();
            $path = $_SERVER['DOCUMENT_ROOT']."/events";
            $files = scandir($path,1);
            arsort($files);
            $newest = array_slice($files, 0, 8);

            if (count($newest) >= 1) 
              {
                $relatedi = 0;
                while ($relatedi < count($newest))
                  {
                    if ($newest[$relatedi] == "." )
                    {
                       $relatedi++;
                    } elseif ($newest[$relatedi] == "..")
                    {
                        $relatedi++;
                    }
                    else{
                        $finalFile=$path."/".$newest[$relatedi];
                        $fileXML=simplexml_load_file("$finalFile") or die("Hare Krishna ... Something went wrong");
     ?>
                      <div class="listing__item">
                        <div class="event__item js-event-item">
                          <div class="event__preview"><span class="event__status"><?php echo $fileXML->eventcategory; ?></span><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]);?>" class="event__preview-link"><img src="<?php echo "/images/".$fileXML->eventimgfolder."/".$fileXML->eventimg; ?>" alt="Hare Krishna" class="event__preview-img"></a>
                            <div class="event__links"><a class="event__link-item js-event-location">
                                <svg class="event__link-svg">
                                  <use xlink:href="#icon-location"></use>
                                </svg></a>
                              <div class="event__link-item event__link-item--share">
                                <svg class="event__link-svg">
                                  <use xlink:href="#icon-share"></use>
                                </svg>
                                <div class="social social--share"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a><a href="#" class="social__item"><i class="fa fa-odnoklassniki"></i></a></div>
                              </div><a class="event__link-item">
                                <svg class="event__link-svg">
                                  <use xlink:href="#icon-phone"></use>
                                </svg></a><a class="event__link-item js-event-mail">
                                <svg class="event__link-svg">
                                  <use xlink:href="#icon-mail"></use>
                                </svg></a>
                            </div>
                          </div>
                          <div class="event__details">
                            <h3 class="event__name"><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]);?>"> <?php
echo $fileXML->eventname; ?>...</a></h3>
                            <h5 class="event__organaizer">Organizer -<strong><?php echo $fileXML->eventorganizer; ?></strong></h5>
                            <div class="event__info"><span class="event__time">
                                <svg class="event__info-svg">
                                  <use xlink:href="#icon-time"></use>
                                </svg><?php $newDate = explode('-',$fileXML->eventdate); echo $newDate[2].'-'.$newDate[0].'-'.$newDate[1]; ?>&nbsp;&nbsp;&nbsp;<?php echo $fileXML->eventtime;?></span>
                              <h6 class="event__location">
                                <svg class="event__info-svg">
                                  <use xlink:href="#icon-location"></use>
                                </svg><?php echo $fileXML->eventaddress; ?>
                              </h6>
                            </div>
                            <div class="clearfix"></div>
                            <div class="event__price"><?php echo $fileXML->eventtype; ?></div><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]);?>" class="btn--link event__more">Read more</a>
                          </div>
                          <div class="clearfix"></div>
                          <div class="event__form js-form"></div>
                          <div class="event__map js-map"></div>
                        </div>
                      </div>
    <?php
                        $relatedi++;
                     }
                  } 
              }
    ?>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
              <!-- END WIDGET-->
              <!-- BEGIN PAGINATION-->
 <!--             <nav class="pagination"><a class="pagination__btn">
                  <svg class="pagination__btn-svg">
                    <use xlink:href="#icon-arrow-left"></use>
                  </svg><span class="pagination__btn-span"> Previous event</span></a>
                <ul class="pagination__pages">
                  <li><a href="#">1</a></li>
                  <li class="active"><span>2</span></li>
                  <li><a href="#">3</a></li>
                  <li><span>...</span></li>
                  <li><a href="#">15</a></li>
                </ul><a class="pagination__btn"><span class="pagination__btn-span">Next event</span>
                  <svg class="pagination__btn-svg">
                    <use xlink:href="#icon-arrow-right"></use>
                  </svg></a>
              </nav>
     -->         <!-- END PAGINATION-->
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