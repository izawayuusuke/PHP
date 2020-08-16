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

  // for構文
  for($a = 0; $a < 4; $a++) {
    print($lectur[$a]. "&#160;\n");
  }

  //do...while構文
  $a = 0;
  do {
    print($lectur[$a]. "&#160;\n");
    $a++;
  } while($a < 4);
  ?>
</body>
</html>
