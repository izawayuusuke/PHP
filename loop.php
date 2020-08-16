<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  // while構文
  $a = 0;
  $lectur = array("HTML", "XHTML", "XML", "JavaScript", "PHP");
  while($a < 4) {
    print($lectur[$a]). "&#160;\n";
    $a++;
  }

  // for構文 + break
  for($a = 0; $a < 4; $a++) {
    print($lectur[$a]. "&#160;\n");
    if($a == 3) {
      print("ループを抜けます<br>\n");
      break;
    }
  }

  // do...while構文
  $a = 0;
  do {
    print($lectur[$a]. "&#160;<br>\n");
    $a++;
  } while($a < 4);

  // foreach構文
  $a = array("Apple" => "りんご", "Orange" => "みかん", "Grape" => "ぶどう");
  foreach($a as $key => $value) {
    print("${key}は、${value}<br>\n");
  }
  ?>
</body>
</html>
