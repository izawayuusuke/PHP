<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  function strong($text) {
    return("<em>$text</em><br>\n");
  }

  print(strong("この文字は強調されます"));

  function num($a) {
    $a = ($a + 2) * $a;
    return $a;
  }

  $b = 5;
  print("\$bの初期値は".$b."です<br>\n");
  $c = num($b);
  print("関数に渡された\$bの値は".$b."です<br>\n");
  print("関数の実行結果は".$c."です");
  ?>
</body>
</html>
