<aside class="sidebar">
              <!-- BEGIN WIDGET-->
              <div class="widget js-widget widget--sidebar">
                <!-- BEGIN WIDGET HEADER-->
                <div class="widget__header">
                  <h3 class="widget__title js-widget-title">Every Sunday</h3>
                </div>
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <div class="event event--sidebar">
                    <div class="event__item">
                      <div class="event__preview"><span class="event__status">Coming Sunday</span><a href="event_details.php?goto=9999-sundayevent" class="event__preview-link"><img src="assets/media-demo/events/390x290/every-sunday-event.jpg" alt="" class="event__preview-img"></a></div>
                      <div class="event__details">
                        <h4 class="event__name"><a href="event_details.php?goto=9999-sundayevent">Hare Krishna Kirtan, Lecture and Dinner </a></h4>
                        <div class="event__info">
                          <time class="event__time">Date: <?php //echo $beginningOfWeek = date('Y-m-d', strtotime('last Sunday'));
echo $endOfWeek = date('Y-m-d', strtotime('+7 day', strtotime('last Sunday')) );
?> 6:30pm </time>
                          <address class="event__location">2419, W RAMSAY AVE, MILWAUKEE WI - 53221</address>
                        </div>
                        <div class="event__intro">
                          <p>Chanting the name of Krishna and singing his name followed by Aarti and Dinner...</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
              <!-- END WIDGET-->
              <!-- BEGIN WIDGET-->
              <div class="widget js-widget widget--sidebar">
                <!-- BEGIN WIDGET HEADER-->
                <div class="widget__header">
                  <h3 class="widget__title js-widget-title">Coming Event</h3>
                </div>
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                  <?php
                            include_once 'php/__eventdisplay.php';
                            $myEventDetails = new eventDisplay();
                            $myEvent_result=$myEventDetails->eventDisplayDetails();
                  ?>
                <div class="widget__content">
                  <div class="event event--sidebar">
                    <div class="event__item">
                      <div class="event__preview"><span class="event__status">upcoming</span><a href="event_details.php?goto=events" class="event__preview-link"><img src=<?php echo $myEvent_result[10]; ?> alt="Hare Krishna " class="event__preview-img"></a></div>
                      <div class="event__details">
                        <h4 class="event__name"><a href="event_detailsphp?goto=comingsoonevent"><?php echo $myEvent_result[9]; ?></a></h4>
                        <div class="event__info">
                          <time datetime="2016" class="event__time"><?php echo $myEvent_result[1]; ?></time>
                          <address class="event__location"><?php echo $myEvent_result[8]; ?></address>
                        </div>
                        <div class="event__intro">
                          <p><?php echo $myEvent_result[0]; ?>...</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
              <!-- END WIDGET-->
            </aside>