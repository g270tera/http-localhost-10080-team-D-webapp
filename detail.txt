<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
  <h1><u>服の削除</u></h1>
  <br><br>
  <hr>

  <h3>服の詳細</h3><br>
　<?php
   if(isset($_GET['img'])){
    $img = $_GET['img'];
   }
   $filename = 'Register.txt';
   $fp = fopen($filename, 'r');
   if($fp){
    while(!feof($fp)){
     $txt = fgets($fp);
     $sel = explode(",",$txt);
     if(preg_match('/'.$img.'/', $sel[6])){
echo '<img src="upload/'.$img.'"><br>';
      echo '<table><tr><td>';
      echo '種類1</td><td>'.$sel[1].'</td><td>';
      echo '&nbsp;</td><td>';
      echo '種類2</td><td>'.$sel[2].'</td></tr><tr><td>';
      echo '季節</td><td>'.$sel[3].'</td><td>';
      echo '&nbsp;</td><td>';
      echo '色'.$sel[4].'</td></tr><tr><td>';
      echo'</table>';
      if($sel[0] == 1)echo '★お気に入り<br><br>';
      }
 if($sel[5] != ''){
       echo '<u>memo</u><br>'.$sel[5];
      }
      break;
     }
    }
   }
   fclose($fp);
  ?>
　 <br>
<input type="button" value=" 削除 " onclick="location.href='del.php'" \>
<input type="button" value=" ホームへ戻る " onclick="location.href='home.php'"\>
 <br>
 <body>
</html>