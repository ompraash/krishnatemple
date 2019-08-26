<section data-modifier="columns" class="event event--columns js-event">
    <?php
                    $images = array();
                    $path = $_SERVER['DOCUMENT_ROOT']."/events";
                    $files = scandir($path,1);
                    arsort($files);
                    $newest = array_slice($files, 0, 4);
                    if (count($newest) >= 1) {
                    $relatedi = 0;
                    while ($relatedi <= 2){
                        $finalFile=$path."/".$newest[$relatedi];
                        $fileXML=simplexml_load_file("$finalFile") or die("Hare Krishna ... Something went wrong");
    ?>
              <div class="event__item js-event-item">
                <div class="flipper flipper--event-columns">
                  <div class="flipper__container">
                    <div class="flipper__front"><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]); ?>" class="event__preview"><img src="<?php echo "/images/".$fileXML->eventimgfolder."/".$fileXML->eventimg; ?>" width="390" height="290" alt="Hare Krishna Event" class="event__preview-img"></a>
                      <div class="event__details">
                        <h3 class="event__name"><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]);?>"> <?php
echo $fileXML->eventname; ?>...</a></h3>
                        <time datetime="2016" class="event__time"><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]);?>"> <?php
echo $fileXML->eventtime; ?></a></time>
                      </div>
                    </div>
                    <div class="flipper__back">
                      <div class="event__back">
                        <div class="event__form js-form"></div>
                        <div class="event__map js-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
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
                </div><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]);?>" class="btn--border-brand event__register">Read More</a>
              </div>
       <?php
                $relatedi++;
                }
                    }
     ?>
</section>
