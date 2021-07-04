<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8"/>
<script type="text/javascript">
}
</script>
</head>
<body>
<font size="6"><b>&emsp;&emsp;服の削除&emsp;&emsp;</b></font><div align="right"\
>
<input type="button" value=" ホームへ戻る " onclick="location.href='home.php'">\
</div><br>
<hr>
検索結果<br>

<?php
$file = fopen("Register.txt", "r");
$sel = explode(",", $txt);
$img= $sel[6];
if(empty($img)){
echo '服は登録されていません';
}
else{
  while(!feof($file)){
  echo'<a href="detail.php?img='.$img.'"><img src="upload/'.$img.'"></a>';
 }
 }
fclose($file);
?>

</body>
</html>

