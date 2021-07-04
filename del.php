
<?php
   $filename = 'Register.txt';
   $del_img = $_POST['del_img'];
   $line = 0;
   $num = 0;

   $fp = fopen($filename, 'r');
   while(!feof($fp)){
    $txt = fgets($fp);
    $sel = explode(",",$txt);
    if(preg_match('/'.$del_key.'/', $sel[6])){
     $line = $num;
     break;
    }
    $num++;
   }
   fclose($fp);
   
   $file = file($filename);
   unset($file($line));
   file_put_countents('Register.txt', $file);

   unlink('upload/'.$del_img.);
 ?>

   