<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form  method="POST">
    <label id="n" for="numero">Digite la cantidad de numeros a calcular:</label><br>
    <input type="number" name="num" placeholder="Digite los numeros" required><br><br>
    <input type="submit"  name="enviar" value="generar">
    


    <h1>RESULTADO</h1>
    <?php 
    $num=0;
    $num=$_POST['num'];

    $nums1=array();
    for ($i=0; $i<$num ; $i++) { 
        $nums1[$i]=rand(0,100);
        echo $nums1[$i].',';
    }

    num($nums1);
    function num($nums1){
        $mayor=0;
        foreach ($nums1 as $valor){
            if ($mayor < $valor){
                $mayor = $valor;
            }
            
        }
    echo "<br>"."El numero mayor es".$mayor."<br>";
    }
    function NumMe($nums1){
        $menor=min($nums1);
      return $menor;
    }
    echo "El numero menor del array es:".NumMe($nums1);
    echo'<br>';
     
    function prom($numeros){
        $sum=0;
        for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];
        }
        return $sum;
    }
    echo "El promedio es: ".prom($nums1)/$num;
    ?>
</form>
</body>
</html>