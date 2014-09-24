<?php
include 'test_1.php';
function addFunction($num1, $num2)
{
  $sum = $num1 + $num2;
  echo "Sum of the two numbers is : $sum";
}
addFunction(10, 20);

function passFunction($num1, $num2)
{
  $sum = $num1 + $num2;
  return $sum;
}
$return_value = passFunction(5, 20);
echo "Returned value from the function : $return_value";

if (strpos($return_value, "-") === false){
  echo "false";
}

if (strpos($return_value, "-") === false){
  echo "false";
}

function xFunction($x1, $x2)
{
  $xtotal = $x1+ $x2;
  $b = "not in use";
  echo "Sum of the two numbers is :" $xtotal;
}
xFunction(10);
if (strpos($return_value, "-") === false){
  echo "false";
}

if (strpos($return_value, "-") === false){
  echo "false";
}

if (strpos($return_value, "-") === false){
  echo "false";
}
?>
