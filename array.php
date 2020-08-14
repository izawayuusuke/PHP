<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  // 最も簡単な配列方法
  $banban[] = "HTML";
  $banban[] = "XHTML";
  $banban[] = "XML";
  print($banban[0]);

  // array関数
  $banban2 = array("HTML", "XHTML", "XML", "XSLT", "RSS");
  print($banban2[1]);

  // explode関数
  $banban3 = explode(",", "HTML,XHTML,XML,XSLT,RSS");
  print($banban3[2])
  ?>
</body>
</html>
