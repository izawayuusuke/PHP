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

  $esq = "このような文字列はバックスラッシュによって、エスケープする必要がある。<br>\n'\"\\\t\n\$\r<br>";
  print($esq);

  $beginner = "初心者のための";
  $webpage = "ホームページ作り";
  print("${beginner}${webpage}<br>");

  $base = "初心者のためのホームページ作り";
  $scriptphp = "PHP入門<br>\n";
  $word = str_replace($webpage, $scriptphp, $base);
  print($word);
  ?>
</body>
</html>
