<?php
//課題１
function double($n) {
    $result = 0;
    $result = 2 * $n;
    
    return $result;
}
echo double(100);
echo "\n";
//課題２
function f($a,$b) {
    $result = 0;
    $result = $a + $b;
    
    return $result; 
}
echo f(1,2);
echo "\n";
//課題３
function product($arr) {
    $result = 1;
    foreach ($arr as $value) {
        $result *=  $value;
    }
    return $result;
}
echo product (array(1,3,5,7,9));
echo "\n";
//課題４
function max_array($arr) {
    $max_nunber = $arr[0];
    foreach($arr as $a) {
        if($max_nunber < $a){
            $max_nunber = $a;
        }
}
return $max_nunber;
}
$list = [1,2,6,4,5];
echo max_array($list);
echo "\n";
//課題５
//storip_tags
$str = "<h1>タグを取り除く<h1>"."<p>取り除かないことも出来る<p>";
echo strip_tags( $str,"<p>") . "\n";
//array_push
$nunber  = ["1","2","3"];
print_r($nunber);
array_push($nunber,"4","5");
print_r($nunber);
echo "\n";
//array_merge
$array1 = [1,2,3];
$array2 = [40,50,60];
$array3 = [700,800,900];
$array = array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";
//連想配列も結合可能
//time,mktime
echo "現在のタイムスタンプ ".time();
echo "\n";
$timestamp = mktime(0,0,0,2,22,2020);
echo "指定したタイムスタンプ　".$timestamp;
echo "\n";
//date
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d/w H:i:s" ) ."\n";
//w(曜日は数字０日曜〜６土曜で出力されるので)
$w =date("w");
$week_name = array("日","月","火","水","木","金","土");
echo date("Y/m/d") . "($week_name[$w])\n";
