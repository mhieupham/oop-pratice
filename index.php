<?php
declare(strict_types=1);
include 'includes/autoload.inc.php';
?>
<html>
<head>

</head>
<body>
<?php

?>
<form method="get" action="includes/calc.inc.php">
    <p>My own calculator</p>
    <input type="number" name="num1" placeholder="First Number">
    <select name="oper">
        <option value="add">Add</option>
        <option value="sub">Subtraction</option>
        <option value="div">Division</option>
        <option value="mul">Multilication</option>
    </select>
    <input type="number" name="num2" placeholder="Second Number">
    <input type="submit" value="Send">
</form>
</body>
</html>
