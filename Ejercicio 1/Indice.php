<?php
 $numero[0][0]=25;
 $numero[1][0]=15;
 $numero[2][0]=10;
 $numero[0][1]=10;
 $numero[1][1]=5;
 $numero[2][1]=2;
 $numero[0][2]=8;
 $numero[1][2]=4;
 $numero[2][2]=1;
 $numero[0][3]=12;
 $numero[1][3]=8;
 $numero[2][3]=4;
 $numero[0][4]=30;
 $numero[1][4]=15;
 $numero[2][4]=10;
 
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
    // Ingles
    echo "<header class='navbar navbar-light bg-light'>";
    echo" <h2>Welcome, Bienvenido, 欢迎, Bienvenue</h2>";
    echo "<table class='table table-bordered' class='center'>";
    echo "<table style:>";
    echo "<thead>";
    echo " <tr class='bg-primary' class='text-center'>";
    echo "<td class='bg-secundary'>Idioma:</td>";
    echo "<td>Inglés</td>";
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$numero[0][0].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$numero[1][0].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$numero[2][0].'</td>';
    echo '</tr>';
    echo '<hr>';
    // Frances
    echo '<table>';
    echo "<thead>";
    echo " <tr class='bg-primary' class='text-center'>";
    echo '<td>Idioma:</td>';
    echo '<td>Francés</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$numero[0][1].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$numero[1][1].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$numero[2][1].'</td>';
    echo '</tr>';
    echo '<hr>';

    //Aleman
    echo '<table>';
    echo "<thead>";
    echo " <tr class='bg-primary' class='text-center'>";
    echo '<td>Idioma:</td>';
    echo '<td>Alemán</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$numero[0][2].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$numero[1][2].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$numero[2][2].'</td>';
    echo '</tr>';
    echo '<hr>';

    //Ruso
    echo '<table>';
    echo "<thead>";
    echo " <tr class='bg-primary' class='text-center'>";
    echo '<td>Idioma:</td>';
    echo '<td>Ruso</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$numero[0][3].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$numero[1][3].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$numero[2][3].'</td>';
    echo '</tr>';
    echo '<hr>';

    //Chino Mandarin
    echo '<table>';
    echo "<thead>";
    echo " <tr class='bg-primary' class='text-center'>";
    echo '<td>Idioma:</td>';
    echo '<td>Chino Mandarin</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$numero[0][4].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$numero[1][4].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$numero[2][4].'</td>';
    echo '</tr>';
    echo '<hr>';
    ?>
</body>
</html>