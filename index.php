<?php
require 'includes/Person.inc.php';
?>
<html>
<head>

</head>
<body>
<?php
 $person = new Person('hieu','blue','19');
$person->setName('bi');
var_dump($person->getName());
?>
</body>
</html>
