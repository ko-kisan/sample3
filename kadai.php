<?php
$name="ko-ki";
if ($name="ko-ki"){
	echo "私はあなたの名前です";
}else {
	echo "あなたの名前ではありません";
} ?>

<?php
$total=0;
for ($i=0; $i<= 10000 ; $i++) {
	$total+=$i;
}
echo $total;?>

<?php
$fruits= array("梨" , "みかん","ブルーベリー","洋梨","マスカット");
foreach ($fruits as $fruit) {
	// code...
	echo $fruit;
	echo "\n";
} ?>

<?php
/* for文の始めの値を定義する*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
		echo "\n";
  }
} ?>
