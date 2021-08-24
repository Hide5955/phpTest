<?php
//課題１
function double($n){
   $n = $n * 2;
   return $n;
}
echo double(3) . "\n";
//課題2
function add($a, $b){
    $c = $a + $b;
    return $c;
} 
echo add(5, 6) . "\n";
//課題3
$array = array(1,3,5,7,9);
function allmultiplication($array){
 $result = 0;   
 $l = count($array);
 for($m = 0; $m < $l; $m++){
     if($m == 0){
         $result += $array[$m];
     }else{
         $result *= $array[$m];
     }
 }
 return $result;
}

echo allmultiplication(array(1,3,5,7,9)) . "\n";
//課題4
function max_array($arr) {
    // とりあえず配列の最初の要素を1番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a) {
    //どうしたらいいかわからない・・・・
       if($max_number < $a){
           $max_number = $a;
       }
    }
    
    return $max_number;
    }

    echo max_array(array(6,8,4,7,0,3,2)) . "\n";
//課題5
//1
$text = '<html>
<head>
    <meta charset="UTF-8"/>
    <title>tech boost</title>
</head> 
<body>
    <h1>Hello world!!!</h1>
    <p> はじめてのwebサイトへようこそ</P>
</body>
</html>';

strip_tags($text);
echo $text . "\n";
//2
$fruits = ["apple", "melon"];
array_push($fruits, "banana", "orange");
foreach($fruits as $fruit){
    echo $fruit . "\n";
}
echo "\n";
//3
$array_1 = ["a" , "b"];
$array_2 = ["c" , "d"];
$alphabet = array_merge($array_1, $array_2);
foreach($alphabet as $letter){
    echo $letter . "\n";
} 
echo "\n";
//4
$time = mktime(0,0,0,8,24,2021);
echo $time;
echo "\n";
//5
$today = date("Ymd"); 
echo $today;
echo "\n";
?>