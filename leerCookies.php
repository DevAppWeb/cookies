<html>
<head>
<title>Accessing Cookies with PHP</title>
</head>
<body>
<?php
  if( isset($_COOKIE["nombre"]))
  {
    echo "Bienvenido " . $_COOKIE["nombre"] . "<br />";
    echo "Su edad es " . $_COOKIE["edad"] . "<br />";
  }
  else
    echo "Lo siento ... no le reconozco" . "<br />";
?>
</body>
</html>