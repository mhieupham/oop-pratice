<?php
declare(strict_types=1);
require 'includes/autoload.inc.php';
?>
<html>
<head>

</head>
<body>
<?php
 $obj = new Person();
 try{
     $obj->setName(123);
     echo $obj->getName();
 }catch (TypeError $exception){
     echo $exception->getMessage();
 }

?>
</body>
</html>
