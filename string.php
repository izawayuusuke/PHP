<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  $str = "<p>初心者のためのPHP入門<br>\n文字列の項目</p>";
  print($str);

  $esq = "このような文字列はバックスラッシュによって、エスケープする必要がある。<br>\n'\"\\\t\n\$\r";
  print($esq);
  ?>
</body>
</html>
