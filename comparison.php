<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  $x = 15;
  echo "<p>変数\$xの代入された値は15です。</p>\n";

  if($x == 15) echo "\$xの値は15に等しい<br>\n";
  if($x > 10) echo "\$xの値は10より大きい<br>\n";
  if($x < 20) echo "\$xの値は20より小さい<br>\n";
  if($x >= 10) echo "\$xの値は10以上である<br>\n";
  if($x <= 20) echo "\$xの値は20以下である<br>\n";
  if($x != 10) echo "\$xの値は10に等しくない<br>\n";
  if($x <> 10) echo "\$xの値は10に等しくない<br>\n";
  ?>
</body>
</html>
