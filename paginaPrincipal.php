<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Principal</title>
</head>
<body>
    <h1>Principal</h1>
    <div align="center" style="padding: 30px;">
    <?php
    /*$dia = date("d");
    if ($dia >= 10) {
        echo "<h1>sitio activo</h1>";
    } else {
        echo "<h1>sitio fuera de servicio</h1>";
    }*/
    ?>    

    <form method="post" action="paginaRetornoVar.php">
        <input type="submit" value="Obtener todos los valores">         
    </form>

    </div>
</body>
</html>