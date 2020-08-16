<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  $a = 10;
  if($a > 5) {
    print("変数\$aは、5よりも大きい<br>\n");
  }

  $b = 3;
  if($b > 5) {
    print("変数\$bは、5よりも大きい<br>\n");
  } elseif($b == 3) {
    print("変数\$bは、3に等しい<br>\n");
  } else {
    print("変数\$bは、5よりも小さい<br>\n");
  }

  $age = 20;
  switch($age) {
    case "15":
      print("勉強に励んでください");
      break;
    case "20":
      print("若くて羨ましいです");
      break;
    case 30:
      print("これから人生の本番です");
      break;
    default:
      print("人生は悩み多きものです");
  }
  ?>
</body>
</html>
