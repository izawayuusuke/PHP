<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP入門</title>
</head>
<body>
  <?php
  $today = getdate();
  print("$today[year]年$today[mon]月$today[mday]日<br>\n");
  print("今年1月1日から$today[yday]日目です<br>\n");
  print("$today[weekday]/$today[month]/$today[mday]/$today[year]");
  ?>
</body>
</html>
