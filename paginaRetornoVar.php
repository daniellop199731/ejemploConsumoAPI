<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Retorno de todos los var</title>
</head>
<body>

    <h1>Retorno de todos los var</h1>
    <form method="post" action="paginaRetornoVar.php">
        <input type="submit" value="Recargar">         
    </form>
    <?php
        #$data = json_decode( file_get_contents('https://faktorisk-mercado.herokuapp.com/var'), true);
        #$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );
        #echo $data['cliente_id'];
    try {
        $url = "https://faktorisk-mercado.herokuapp.com/var";
        $json = file_get_contents($url);        
        $data = json_decode($json,true);
        $data["Riesgos"][0] =" ";
        $slat = $data["Riesgos"]; 
        $data["Riesgos"][strlen( $slat )-1] = " ";        
        $slat = $data["Riesgos"];          
    } catch (Exception $e) {
        echo "ERROR de conexion, recargue la pagina por favor.";
    }        
    ?>
    
    <div align="center" style="padding: 30px;">
    <table class="table table-dark">
        <tbody>
        <?php
        try {
            $cont = 1;
            foreach (explode (",", $slat) as &$objeto){   
                echo "<tr>";
                echo"<th scope='row'>".$cont."</th>";
                echo "<td>".$objeto."</td>";
                echo "</tr>";
                $cont = $cont + 1;
            }
        } catch (Exception $e) {

        }
        ?>
        </tbody>
    </table>
    </div>
    <form method="post" action="paginaPrincipal.php">
        <input type="submit" value="Principal">         
    </form>   
</body>
</html>