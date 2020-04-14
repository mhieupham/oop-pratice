<?php
require 'includes/NewClass.inc.php';
require 'includes/Person.inc.php';
?>
<html>
<head>

</head>
<body>
<?php
 $obj = new Pet;
 var_dump($obj->owner());
?>
</body>
</html>
