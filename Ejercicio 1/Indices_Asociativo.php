<?php
 $curso[0]=[
        'Idioma'=>'Inglés',
        'Basico'=>25,
        'Intermedio'=>15,
        'Avanzado'=>10
    ];
    $curso[1]=[
        'Idioma'=>'francés',
        'Basico'=>10,
        'Intermedio'=>5,
        'Avanzado'=>2
    ];
    $curso[2]=[
        'Idioma'=>'Alemán',
        'Basico'=>8,
        'Intermedio'=>4,
        'Avanzado'=>1
    ];
    $curso[3]=[
        'Idioma'=>'Ruso',
        'Basico'=>12,
        'Intermedio'=>8,
        'Avanzado'=>4
    ];

    $curso[4]=[
        'Idioma'=>'chino mandarín',
        'Basico'=>30,
        'Intermedio'=>15,
        'Avanzado'=>10
    ];

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
        for($h=0;$h<=4;$h++)
        {
            echo '<table>';
            echo " <tr class='bg-primary' class='text-center'>";
            echo '<td>Idioma:</td>';
            echo '<td>'.$curso[$h]['Idioma'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Basico:</td>';
            echo '<td>'.$curso[$h]['Basico'].'</td>';
            echo '</tr>';
            echo '<td>Intermedio:</td>';
            echo '<td>'.$curso[$h]['Intermedio'].'</td>';
            echo '</tr>';
            echo '<td>Avanzado:</td>';
            echo '<td>'.$curso[$h]['Avanzado'].'</td>';
            echo '</tr>';
            echo '</table>';
            echo "<hr/>";
        }
    ?>
</body>
</html>