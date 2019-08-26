<?php
class eventDisplay
{

public function eventDisplayDate()
{
  $path = $_SERVER['DOCUMENT_ROOT']."/events";
  $files = scandir($path,1);
  $finalFile=$path.'/'.$files[0];
  $fileXML=simplexml_load_file("$finalFile") or die("Failure to open");
  $newDate = explode('-',$fileXML->eventdate);
  return $newDate[2].'/'.$newDate[0].'/'.$newDate[1];
 }

 public function eventTitle()
 {
  $path = $_SERVER['DOCUMENT_ROOT']."/events";
  $files = scandir($path,1);
  $finalFile=$path.'/'.$files[0];
  $fileXML=simplexml_load_file("$finalFile") or die("Failure to open"); 
  return $fileXML->eventname;
 }

  public function eventDateTime()
 {
  $path = $_SERVER['DOCUMENT_ROOT']."/events";
  $files = scandir($path,1);
  $finalFile=$path.'/'.$files[0];
  $fileXML=simplexml_load_file("$finalFile") or die("Failure to open"); 
  return $fileXML->eventdate . " &nbsp;&nbsp;&nbsp;". $fileXML->eventtime;
 }

   public function eventBDesc()
 {
  $path = $_SERVER['DOCUMENT_ROOT']."/events";
  $files = scandir($path,1);
  $finalFile=$path.'/'.$files[0];
  $fileXML=simplexml_load_file("$finalFile") or die("Failure to open"); 
  return $fileXML->eventbdesc;
 }

    public function eventPathImage()
 {
  $path = $_SERVER['DOCUMENT_ROOT']."/events";
  $files = scandir($path,1);
  $finalFile=$path.'/'.$files[0];
  $fileXML=simplexml_load_file("$finalFile") or die("Failure to open"); 
  return "/images/".$fileXML->eventimgfolder."/".$fileXML->eventimg;
 }

 public function eventDisplayDetails()
{
  $path = $_SERVER['DOCUMENT_ROOT']."/events";
  $files = glob("$path/front-*");
  foreach($files as $file)
   $finalFile1=basename($file);
 
  $finalFile=$path.'/'.$finalFile1;
  $fileXML=simplexml_load_file("$finalFile") or die("Hare Krishna !!! Failure to open");
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


