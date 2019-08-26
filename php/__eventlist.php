<?php
class eventlistOther 
 {
    public function eventlistOthers($fileToOpen)
    {
          $path = $_SERVER['DOCUMENT_ROOT']."/events";
          //$files = scandir($path);
          $finalFile=$path.'/'.$fileToOpen.'.xml';
          $fileXML=simplexml_load_file("$finalFile") or die("Hare Krishna ... Something went Wrong... Error Code EOFO001");
          $newDate = explode('-',$fileXML->eventdate);
          $eventtag1=$fileXML->eventname;
          $eventtag2=$newDate[2].'/'.$newDate[0].'/'.$newDate[1];
          $eventtag3=$fileXML->eventtime;
          $eventtag4=$fileXML->eventtype;
          $eventtag5=$fileXML->eventphone;
          $eventtag6=$fileXML->eventemail;
          $eventtag7=$fileXML->eventcategory;
          $eventtag8=$fileXML->eventorganizer;
          $eventtag9=$fileXML->eventaddress;
          $eventtag10=$fileXML->eventbdesc;
          $eventtag11="/images/".$fileXML->eventimgfolder."/".$fileXML->eventimg;
          $eventtag12=$fileXML->eventimgfolder;
          $eventtag13=$fileXML->eventldesc->para1;
          $eventtag14=$fileXML->eventldesc->para2;
          $eventtag15=$fileXML->eventldesc->para3;
          $eventtag16=$fileXML->eventldesc->para4;
          return array($eventtag1,$eventtag2,$eventtag3,$eventtag4,$eventtag5,$eventtag6,$eventtag7,$eventtag8,$eventtag9,$eventtag10,$eventtag11,$eventtag12,$eventtag13,$eventtag14,$eventtag15,$eventtag16);
    }
 }
?>


