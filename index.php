<?php
require 'includes/NewClass.inc.php';
?>
<html>
<head>

</head>
<body>
<?php
 $obj = new NewClass;
 unset($obj);
 $obj->setNewProperty('ditme properti');
 var_dump($obj->getProperty());
?>
</body>
</html>
