<?php
function sum($max){
	$result = $max*2;
	return $result;
}
echo sum(8);
?>

<?php
function f($a,$b){
	return $a+$b;
}
echo f(2,4); ?>

<?php
function a($arr){
	$result= 1 ;
	foreach ($arr as $bee) {
		// code...
		$result*=$bee;
	}
	return $result;
}
$a = array(1,3,5,7,9);
echo a($a); ?>

<?php

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 	foreach($arr as $a){
 //どうしたらいいかわからない・・・・
			if ($max_number<$a) {
		// code...
				$max_number=$a;
	}
 }
 return $max_number;
}
echo max_array( array(1,3,5,9));
?>
