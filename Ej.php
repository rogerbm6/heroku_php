<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
    <style>
      table, th, td {
        border:1px solid black;
      }
    </style>
  </head>
  <body>

    <h3>1</h3>
    <?php
    //Primer ejercicio
    $nombres=["Roger", "Andreas", "Felipe", "Fabiolo", "Masias"];
    echo "nombres=['Roger', 'Andreas', 'Felipe', 'Fabiolo', 'Masias'] <br>";

    // segundo
    echo "
    <br> <h3>2</h3> <br>
    Numero de elementos: ".count($nombres)."<br>
    <h3>3</h3> <br>";
    // Tercer
    var_dump(implode(",",$nombres));
    //Cuarto
    echo "
    <h3>4</h3> <br>
    <p>Ordenado alfabeticamente </p>
    ";
    asort($nombres);
    foreach ($nombres as $val) {
      echo $val."<br>";
    }
    //Quinto
    echo "
    <h3>5</h3> <br> ";
    $frutas = array("d"=>"limon", "a"=>"naranja", "b"=>"banano", "c"=>"manzana");
    var_dump($frutas);
    echo " <p>Con ksort  </p>";
    //ksort
    ksort($frutas);
    foreach ($frutas as $clave => $valor) {
      echo "clave = ".$clave." valor = ".$valor."<br>";
    }
    //sort
    echo " <p>Con sort  </p>";
    sort($frutas);
    foreach ($frutas as $clave => $valor) {
      echo "clave = ".$clave." valor = ".$valor."<br>";
    }
    echo "<br>Sort elimina las claves, ksort las mantiene ";

    //Sexto
    echo "<h3>6</h3> <br> <p>Normal :</p><br>";
    foreach ($nombres as $val) {
      echo $val."<br>";
    }
    echo "<p>con reverse</p><br>";
    $nombresReversados=array_reverse($nombres);
    foreach ($nombresReversados as $val) {
      echo $val."<br>";
    }

    //Septimo
    echo "<h3>7</h3> <br>";
    sort($nombres);
    foreach ($nombres as $val) {
      echo $val."<br>";
    }
    $miNombre = array_search("Roger", $nombres);
    echo "<br>La poscicion es ".$miNombre;

    //Octavo
    echo "<h3>8</h3> <br>";
    $alumnos= [array("id"=>1, "nombre" => "Roger Berrio Mira", "edad" => 18),
    array("id"=>2, "nombre" => "Diego Norrea Palo", "edad" => 54),
    array("id"=>3, "nombre" => "Fabiolo Alvarez Medina", "edad" => 25)];
    print_r($alumnos);
    //noveno

    echo "<br><h3>9</h3> <br>
    <h4>Manera 1</h4>
    <table>
      <tr>
        <th></th>
    ";
    foreach ($alumnos as $val) {
      echo "<th>".$val["nombre"]."</th>";
    }
    echo "</tr><tr>
    <th>ID</th>";
    foreach ($alumnos as $val) {
      echo "<th>".$val["id"]."</th>";
    }
    echo "</tr><tr>
    <th>edad</th>";
    foreach ($alumnos as $val) {
      echo "<th>".$val["edad"]."</th>";
    }
    echo "</tr></table><br><table>
    <br>
    <h4>Manera 2</h4>";

    foreach ($alumnos as $persona => $datos) {
      echo "<tr>";
              foreach ($datos as $personas => $info) {
                echo "<td>".$info."</td>"
                ;
              }
      echo "</tr>";
    }
    echo "</table>";
    //decimo
    echo "<br><h3>10</h3> <br>";
    $alumnosCol=array_column($alumnos, 'nombre');
    print_r($alumnosCol);

    //undecimo
    echo "<br><h3>11</h3> <br>";
    $numeros = array(1,2,3,4,5,6,7,8,9,10);
    echo "La suma del array es : ".array_sum($numeros);

     ?>
  </body>
</html>
