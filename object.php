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

    class Shopping {
      // メンバー変数の設定
      var $item = "コンピュータ";
      var $price = 99800;

      // メソッドの定義
      function getTotal() {
        $tax = $this -> price * 0.05;
        return $this -> price + $tax;
      }
    }

    $newShopping = new Shopping();
    $item = $newShopping -> item;
    print("${item}の会計は".$newShopping -> getTotal()."円になります<br>\n");
  ?>
</body>
</html>
