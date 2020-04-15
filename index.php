<?php
require 'includes/Person.inc.php';
?>
<html>
<head>

</head>
<body>
<?php
//Person::setDrinkingAge('15');
//echo Person::$drinkingAge;
$person = new Person;
echo $person->getAge();
?>
</body>
</html>
