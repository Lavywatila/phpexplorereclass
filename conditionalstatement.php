<?php
//if statement

$num=54;
if($num>7){
    echo"The answer is true";

}
echo"<br>";
//if...else statement

$num1=65;
$num2=17;

if($num1<=$num2 && $num2=65){
    echo"The answer is true";
}else{
    echo "The answer is false";
}
echo"<br>";

////if ... elseif else statement
//
//$masaa=date("H");
//if($masaa<"30") {
//    echo "Ni Asubuhi";
//
//}elseif ($masaa<"21") {
//    echo "Ni Jioni";
//
//}else{
//    echo "Ni Usiku";
//}

$grade=70;

if($grade<=39) {
    echo "You have failed";
}elseif ($grade>=40 and $grade<=59) {
    echo "That is a pass";
}elseif($grade>=60 && $grade<=80) {
    echo "That is a Credit";
    echo "<br>";
}elseif($grade>=81 && $grade<=100){
    echo "Congratulation";
    echo"<br>";
    echo "That is a Distinction";
}else
 echo"it is out of range";







