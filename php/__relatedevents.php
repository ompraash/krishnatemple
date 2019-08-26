              <div class="widget js-widget widget--main">
                <!-- BEGIN WIDGET HEADER-->
                <div class="widget__header">
                  <h2 class="widget__title js-widget-title">Related events</h2>
                </div>
                <!-- END WIDGET HEADER-->
    <?php
                    $images = array();
                    $path = $_SERVER['DOCUMENT_ROOT']."/events";
                    $files = scandir($path,1);
                    arsort($files);
                    $newest = array_slice($files, 0, 4);
                    if (count($newest) >= 1) {
    ?>
              <div class="widget__content">
                  <div data-modifier="grid" class="event event--grid event--related js-event">
                    <div class="listing listing--grid">
    <?php
                 $relatedi = 0;
                 while ($relatedi <= 2){
                       $finalFile=$path."/".$newest[$relatedi];
                      $fileXML=simplexml_load_file("$finalFile") or die("Hare Krishna ... Something went wrong");
    ?>
                <!-- BEGIN WIDGET CONTENT-->
                      <div class="listing__item">
                        <div class="event__item js-event-item">
                          <div class="flipper flipper--event-grid">
                            <div class="flipper__container">
                              <div class="flipper__front">
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
                                      </svg><span style="font-size: 12px !important;"><?php $newDate = explode('-',$fileXML->eventdate); echo $newDate[2].'-'.$newDate[0].'-'.$newDate[1]; ?>&nbsp;&nbsp;&nbsp;<?php echo $fileXML->eventtime;?></span></span>
                                    <h6 class="event__location">
                                      <svg class="event__info-svg">
                                        <use xlink:href="#icon-location"></use>
                                      </svg><span style="font-size: 12px !important;"><?php echo $fileXML->eventaddress; ?> </span>
                                    </h6>
                                  </div>
                                </div>
                              </div>
                              <div class="flipper__back">
                                <button class="flipper__btn-unflip js-event-unflip"></button>
                                <div class="event__back">
                                  <div class="event__form js-form"></div>
                                  <div class="event__map js-map"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="event__actions">
                            <div class="event__price"><?php echo $fileXML->eventtype; ?></div><a href="event_details.php?goto=related&event=<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',$newest[$relatedi]);?>" class="btn--link event__more">Read more</a>
                          </div>
                        </div>
                      </div>

    <?php
                $relatedi++;
                } 
     ?>
                   </div>
                  </div>
                </div>
    <?php                                     
                    }
                    else
                    {
    ?>
                 <div class="widget__content">
                  <div data-modifier="grid" class="event event--grid event--related js-event">
                    <div class="listing listing--grid">
                      <div class="listing__item">
                        <div class="event__item js-event-item">
                          <div class="flipper flipper--event-grid">
                            <div class="flipper__container">
                              <div class="flipper__front">
                                <div class="event__preview"><span class="event__status">Event</span><a href="event_details.php?goto=events" class="event__preview-link"><img src="assets/media-demo/events/390x290/event-2.jpg" alt="" class="event__preview-img"></a>
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
                                  <h3 class="event__name"><a href="event_details.php?goto=events">Don’t miss out Temple Bhajan every Sunday, Kirtan followed by Dinner...</a></h3>
                                  <h5 class="event__organaizer">Organizer -<strong>Hare Krishna Mission</strong></h5>
                                  <div class="event__info"><span class="event__time">
                                      <svg class="event__info-svg">
                                        <use xlink:href="#icon-time"></use>
                                      </svg>Every Sunday, 6.30 pm </span>
                                    <h6 class="event__location">
                                      <svg class="event__info-svg">
                                        <use xlink:href="#icon-location"></use>
                                      </svg>2419, W RAMSAY AVE, MILWAUKEE WI-53221
                                    </h6>
                                  </div>
                                </div>
                              </div>
                              <div class="flipper__back">
                                <button class="flipper__btn-unflip js-event-unflip"></button>
                                <div class="event__back">
                                  <div class="event__form js-form"></div>
                                  <div class="event__map js-map"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="event__actions">
                            <div class="event__price">FREE</div><a href="event_details.php?goto=events" class="btn--link event__more">Read more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>   
    <?php               
                    }
    ?>            
                <!-- END WIDGET CONTENT-->
              </div>