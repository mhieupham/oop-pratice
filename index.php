<?php
require 'includes/FirstClass.inc.php';
?>
<html>
<head>

</head>
<body>
<?php
//$class = new SecondClass();
SecondClass::setStaticProper('1234');
$a = SecondClass::getStaticProperty();
echo $a;
?>
</body>
</html>
