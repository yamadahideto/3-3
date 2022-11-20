<?php
  //②フォームからのデータを受け取ります
  $Name = $_POST["Name"];
  $Number = $_POST["number"];
  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $randNumber = $Number * mt_rand(1,6);

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  if ($randNumber <= 4) {
    $fortune = "大吉";
  }else if ($randNumber <= 9) {
    $fortune = "中吉";
  }else if ($randNumber <= 18) {
    $fortune = "小吉";
  }else if
  ($randNumber <= 27) {
    $fortune = "末吉";
  }else if($randNumber <= 32) {
    $fortune = "凶";
  }
  else {
    $fortune = "大凶";
  }
  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
date_default_timezone_set('Asia/Tokyo');
echo date("Y-m-d H:i:s");
echo "<br>";
echo "名前は{$Name}です。"."<br>" ;
echo "番号は{$randNumber}です" ."<br>";
echo "結果は{$fortune}です。"
?>