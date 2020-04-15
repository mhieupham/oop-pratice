<?php
require 'includes/autoload.inc.php';
use Person\Person;
?>
<html>
<head>

</head>
<body>
<?php
 $house1 = new House();
 $house1->themThongTin('ha noi','32','hieu');
 $person = new Person();
 echo $person->first;

?>
</body>
</html>
