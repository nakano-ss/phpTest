<?php
//1. $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、もし違ったら「あなたの名前ではありません」と表示するように実装してください。
&name = nakano;
if($name = nakano){
    echo "私は　中野　です"；}
    else{echo"中野ではありません}

//2. for文を使って、1から10000までの合計の値を表示してください。
for($i = 0; $i <= 10000; $;++)
    {$total += $i;}
echo $total;

//3. $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("apple", "orange", "peach", "cherry", "grape");
foreach($fruits as $fruits){
    echo"要素は” . $fruits;
    echo "\n";}

//4.　【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = 1; $i <= 100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i
  }
}


?>
