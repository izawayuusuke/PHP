<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  $fruit = array("Apple" => "りんご", "Orange" => "みかん",
      "Grape" => "ぶどう");
    while(list($key, $val) = each($fruit)) {
      print("インデックスの${key}は、${val}です。<br>\n");
    }
  ?>
</body>
</html>
