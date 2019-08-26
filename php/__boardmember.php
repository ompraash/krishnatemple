<?php
if (isset($_GET['krishnatemplemilwaukee']))
{
    switch(trim($_GET["krishnatemplemilwaukee"]))
    {
        case 1:
              $filetoOpen='board-1.xml';
              include_once 'php/__eventdisplay_detail.php';
              $myOtherEventDetails= new boardMemberDetails();
              $myEvent_result=$myOtherEventDetails->boardMemberDetail($filetoOpen);
              break;
        case 2:
              $filetoOpen='board-2.xml';
              include_once 'php/__eventdisplay_detail.php';
              $myOtherEventDetails= new boardMemberDetails();
              $myEvent_result=$myOtherEventDetails->boardMemberDetail($filetoOpen);
              break;
        case 3:
              $filetoOpen='board-3.xml';
              include_once 'php/__eventdisplay_detail.php';
              $myOtherEventDetails= new boardMemberDetails();
              $myEvent_result=$myOtherEventDetails->boardMemberDetail($filetoOpen);
              break;
        case 4:
              $filetoOpen='board-4.xml';
              include_once 'php/__eventdisplay_detail.php';
              $myOtherEventDetails= new boardMemberDetails();
              $myEvent_result=$myOtherEventDetails->boardMemberDetail($filetoOpen);
              break;
        default:
              header("Location: harekrishna.php");
              break;
    }

?>
              <div class="widget js-widget widget--card">
                <!-- BEGIN WIDGET HEADER-->
                <div class="widget__header">
                  <h2 class="widget__title js-widget-title"><?php echo $myEvent_result[0]; ?></h2>
                </div>
                <!-- END WIDGET HEADER-->
                <!-- BEGIN WIDGET CONTENT-->
                <div class="widget__content">
                  <section class="member member--details">
                    <div class="member__row">
                      <figure class="member__photo"><img src="assets/media-demo/members/405x445/member-1.jpg" alt="" class="member__img"></figure>
                      <div class="member__info">
                        <dl class="dl-table">
                          <dt>Title</dt>
                          <dd><?php echo $myEvent_result[1]; ?></dd>
                          <dt>Department</dt>
                          <dd><?php echo $myEvent_result[2]; ?></dd>
                          <dt>Telephone</dt>
                          <dd><a><?php echo $myEvent_result[3]; ?></a></dd>
                          <dt>Email</dt>
                          <dd><a><?php echo $myEvent_result[4]; ?></a></dd>
                        </dl>
                        <div class="member__social">
                          <div class="social social--left">
                            <div class="social__list"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                          </div>
                        </div>
                        <dl class="dl-list">
                          <dt>Languages spoken:</dt>
                          <dd><?php echo $myEvent_result[6]; ?></dd>
                          <dt>Favorite passage:</dt>
                          <dd><?php echo $myEvent_result[7]; ?></dd>
                        </dl>
                      </div>
                    </div>
                    <div class="member__descr">
                      <p><?php echo $myEvent_result[9]; ?></p>
                      <p><?php echo $myEvent_result[10]; ?></p>
                    </div>
                    <div class="member__comment">
                      <!-- BEGIN FORM-->
                      <form action="#" class="form js-parsley form--member">
                        <div class="row">
                          <div class="form-group form-group--lg-4">
                            <label for="member-name" class="control-label">Your Name *</label>
                            <input type="text" id="member-name" required="required" class="form-control"/>
                          </div>
                          <div class="form-group form-group--lg-4">
                            <label for="member-email" class="control-label">Your E-mail *</label>
                            <input type="email" id="member-email" required="required" class="form-control"/>
                          </div>
                          <div class="form-group form-group--lg-4">
                            <label for="member-phone" class="control-label">Your telephone</label>
                            <input type="text" id="member-phone" required="required" class="form-control"/>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group form-group--lg-12">
                            <label for="member-message" class="control-label">Message</label>
                            <textarea id="member-message" required="required" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="form__buttons">
                          <button type="submit" class="btn--flat form__btn">Submit</button>
                        </div>
                      </form>
                      <!-- END FORM-->
                    </div>
                  </section>
                </div>
                <!-- END WIDGET CONTENT-->
              </div>
<?php
   } else {
         header("Location: harekrishna.php");
    }
?>
