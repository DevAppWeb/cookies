<?php
  setcookie( "nombre", "", time()- 60, "/","", 0);
  setcookie( "edad", "", time()- 60, "/","", 0);
?>
<html>
<head>
<title>Deleting Cookies with PHP</title>
</head>
<body>
<?php echo "Cookies borradas" ?>
</body>
</html>
