<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hkemail	= filter_var(trim($_POST["newsemail"]), FILTER_SANITIZE_EMAIL);
  //echo "fffdd".$hkemail;

   if ( !filter_var($hkemail, FILTER_VALIDATE_EMAIL)) 
   {
       // Set a 400 (bad request) response code and exit.
       echo "Hare Krishna! There was a problem with your submission.";
       exit;
   }

    $path = $_SERVER['DOCUMENT_ROOT']."/harekrishasubs";
    $files = scandir($path,1);
    $pfileName=$path.'/'.$files[0];
  //echo $pfileName;
    $MyFile=fopen($pfileName, "a") or die ("Failue");
    //$nline="\"".$hkemail."\""	.";\r\n";
    $nline=$hkemail.";";
  //echo $nline;

  //$handle = fopen($pfileName, "r");
  $contents = fread($MyFile, filesize($pfileName));
  $newslist = array();
  $mewslist = array_map("trim", explode(";",$contents));
 
  $current = $hkemail;
   //var_dump (in_array($current,$mewslist));
   if (in_array($current,$mewslist) ) {
     fclose($MyFile) or die("Failue on close");
     echo "You are already Subscribed !!!"; 
   } else {
     fwrite($MyFile, $nline) or die ("unable to write");
     fclose($MyFile) or die("Failue on close");
     echo "Thank You! Subscripton Successful.";
   }
  } 
else {
   // Not a POST request, set a 403 (forbidden) response code.
   echo "There was a problem with your submission, please try again.";
  }
?>