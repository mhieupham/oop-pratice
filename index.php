<?php
require 'includes/Person.inc.php';
?>
<html>
<head>

</head>
<body>
<?php
 $person1 = new Person;
 $person1->setName('hieu','blue','19');
 var_dump($person1);
 $person2 = new Person;
 $person2->setName('bi','blade','15');
?>
</body>
</html>
