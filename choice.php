<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
  <h2>
    Favourite Web Programming Language
  </h2>
<?php
    $choice = $_POST["choice"];
    $name = $_POST["name"];
    $id = $_POST["id"];
    
    echo "Hello, $name!<br>";
    echo "Your ID is $id<br>";

    switch ($choice) {
        case "html":
          echo "Your Favourite Web Programming Language is HTML";
          break;

        case "css":
          echo "Your Favourite Web Programming Language is CSS";
          break;

        case "js":
          echo "Your Favourite Web Programming Language is Javascript";
          break;
      }
?>
</body>
</html>