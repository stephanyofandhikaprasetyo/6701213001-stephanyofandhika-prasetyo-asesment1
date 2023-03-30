<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number1 = $_POST["number1"];
  $number2 = $_POST["number2"];
  $operator = $_POST["operator"];
  
  switch ($operator) {
    case "+":
      $result = $number1 + $number2;
      break;
    case "-":
      $result = $number1 - $number2;
      break;
    case "*":
      $result = $number1 * $number2;
      break;
    case "/":
      $result = $number1 / $number2;
      break;
    default:
      $result = "Invalid operator";
  }
}
?>


