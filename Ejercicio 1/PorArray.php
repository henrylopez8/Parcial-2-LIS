<?php
    $idioma = array( 
        "Ingles" => array(
            "Idioma" => "Inglés",
            "Basico" => "25",
            "Intermedio" => "15",
            "Avanzado" => "10"
        ),
        "Frances" => array(
            "Idioma" => "Francés",
           "Basico" => "10",
           "Intermedio" => "5",
           "Avanzado" => "2"
        ),
        "Aleman" => array(
            "Idioma" => "Alemán",
           "Basico" => "8",
           "Intermedio" => "4",
           "Avanzado" => "1"
        ),
        "Ruso" => array(
            "Idioma" => "Ruso",
           "Basico" => "12",
           "Intermedio" => "8",
           "Avanzado" => "4"
        ),
        "Chino Mandarin" => array(
            "Idioma" => "Chino Mandarín",
           "Basico" => "30",
           "Intermedio" => "15",
           "Avanzado" => "10"
        )
    );
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Idiomas</title>";
    echo "<meta charset=\"utf-8\" />";
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
    echo'<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
    echo "</head>";
    echo "<body>";
    echo" <div class='container'>";
    echo "<header class='navbar navbar-light bg-light'>";
    echo "</header>";
    echo "<body>";
    echo "<header class='navbar navbar-light bg-light'>";
    echo" <h2>Welcome, Bienvenido, 欢迎, Bienvenue</h2>";
    echo "<table class='table table-bordered' class='center'>";
    echo "<table style:>";
    echo "<thead>";
   foreach($idioma as $valor)
   {
       echo '<table>';
       echo " <tr class='bg-primary' class='text-center'>";
       echo '<td>Idioma:</td>';
       echo "<td class='bg-secundary'>".$valor['Idioma'].'</td>';
       echo '</tr>';
       echo '<tr>';
       echo '<td>Basico:</td>';
       echo '<td>'.$valor['Basico'].'</td>';
       echo '</tr>';
       echo '<td>Intermedio:</td>';
       echo '<td>'.$valor['Intermedio'].'</td>';
       echo '</tr>';
       echo '<td>Avanzado:</td>';
       echo '<td>'.$valor['Avanzado'].'</td>';
       echo '</tr>';
       echo '</table>';
       echo "<hr/>";
   }
   ?>
</body>
</html>
