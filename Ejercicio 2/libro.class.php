<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css" />
    
    <title>inventario</title>
</head>
<?php
    class libro {
        private static $idlibro=0;
        private  $autor;
        private  $titulo_libro;
        private  $numero_edicion;
        private  $lugar_publicacion;
        private  $editorial;
        private  $year_edicion;
        private  $numeropaginas;
        private  $notas;
        private  $isbn;
        function __construct(){
            self::$idlibro++;
            $this->autor="";
            $this->titulo_libro="";
            $this->numero_edicion="";
            $this->lugar_publicacion="";
            $this->editorial="";
            $this->year_edicion="";
            $this->numeropaginas="";
            $this->notas="";
            $this->isbn="";
        }
        function inventario($autor,$titulo_libro,$numero_edicion,$lugar_publicacion,$editorial,$year_edicion,$numeropaginas,$notas,$isbn){
            
            
            
            $this->autor=$autor;
            $this->titulo_libro=$titulo_libro;
            $this->numero_edicion=$numero_edicion;
            $this->lugar_publicacion=$lugar_publicacion;
            $this->editorial=$editorial;
            $this->year_edicion=$year_edicion;
            $this->numeropaginas=$numeropaginas;
            $this->notas=$notas;
            $this->isbn=$isbn;
            $this->imprimirlibro();
        }
      
        function imprimirlibro(){
            echo"<div id='main-container'>";
            $tabla = "<table class='content-table'><tr>";
            $tabla .= "<td>Id Libro: </td>";
            $tabla .= "<td>" . self::$idlibro . "</td></tr>";
            $tabla .= "<tr><td>Autores: </td>\n";
            $tabla .= "<td>" . $this->autor. "</td></tr>";
            $tabla .= "<tr><td>Titulo del libro: </td>";
            $tabla .= "<td> " . $this->titulo_libro . "</td></tr>";
            $tabla .= "<tr><td>Numero de edición: </td>";
            $tabla .= "<td> <sup>" . $this->numero_edicion. "</sup> </td></tr>";
            $tabla .= "<tr ><td >Lugar de la publicación: </td>";
            $tabla .= "<td> " . $this->lugar_publicacion . "</td></tr>";
            $tabla .= "<tr ><td >Editorial: </td>";
            $tabla .= "<td> " . $this->editorial . "</td></tr>";
            $tabla .= "<tr><td>Año de la publicación: </td>";
            $tabla .= "<td> (" . $this->year_edicion . ")</td></tr>";
            $tabla .= "<tr><td>Numero de paginas: </td>";
            $tabla .= "<td> " . $this->numeropaginas . "</td></tr>";
            $tabla .= "<tr><td>Notas: </td>";
            $tabla .= "<td> " . $this->notas . "</td></tr>";
            $tabla .= "<tr><td>ISBN: </td>";
            $tabla .= "<td> " . $this->isbn. "</td></tr>";
            $tabla .= "</table>";
            echo $tabla;
            echo "</div>";
            }





            
        }
    ?>
<body>
    


<p>
<a type="button" class="btn btn-primary" id="btn btn-primary" href="libros.php">Ingresar otro libro</a>
</body>
</html>