<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquina d'escriure</title>
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION["historial"])) {
            $_SESSION["historial"] = "";
        } elseif (isset($_GET["lletra"])) {
            $_SESSION["historial"].=$_GET['lletra'];
        }
        echo "<p>".$_SESSION['historial']."</p>";

        foreach (range("A","Z") as $letra) {
			echo "<a href='./ex43pagina1.php?lletra=$letra'> <button>".$letra."</button></a>";
        }
    ?>
</body>
</html>