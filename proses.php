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

<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<h2>Kalkulator Sederhana</h2>
	<form method="post">
		<label for="number1">Angka Pertama:</label>
    	<input type="number" id="number1" name="number1">
    	<br><br>
    
    	<label for="operator">Operator:</label>
    	<select id="operator" name="operator">
      		<option value="+">+</option>
      		<option value="-">-</option>
      		<option value="*">*</option>
      		<option value="/">/</option>
    	</select>
    	<br><br>
    
    	<label for="number2">Angka Kedua:</label>
    	<input type="number" id="number2" name="number2">
    	<br><br>
    
    	<input type="submit" value="Hitung">
  	</form>
  	
  	<?php if(isset($result)) { ?>
  		<p>Hasil: <?php echo $result; ?></p>
  	<?php } ?>
</body>
</html>
