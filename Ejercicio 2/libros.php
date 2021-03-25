<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de libros</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="js/validaciones.js"></script>
</head>
<body>
<?php
session_start();

if(!isset($_SESSION['v1autor']) && !isset($_SESSION['v1titulo']) && !isset($_SESSION['v1numero']) && !isset($_SESSION['v1lugar']) && !isset($_SESSION['v1editorial']) && !isset($_SESSION['v1year']) && !isset($_SESSION['v1numeropaginas']) && !isset($_SESSION['v1notas']) && !isset($_SESSION['v1isbn'])){
    $_SESSION['v1autor']=array();
    $_SESSION['v1titulo']=array();
    $_SESSION['v1numero']=array();
    $_SESSION['v1lugar']=array();
    $_SESSION['v1editorial']=array();
    $_SESSION['v1year']=array();
    $_SESSION['v1numeropaginas']=array();
    $_SESSION['v1notas']=array();
    $_SESSION['v1isbn']=array();
}
else{
}

if (isset($_POST['enviar'])) {
    if (isset($_POST['enviar'])) {
        $autor = (isset($_POST['Autor'])) ? $_POST['Autor'] :"";
        $titulo_libro = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
        $numero_edicion=(isset($_POST['numeroed']))? $_POST['numeroed'] : "";
        $lugar_publicacion=(isset($_POST['lugar']))? $_POST['lugar']:"";
        $year_edicion=(isset($_POST['year'])) ? $_POST['year']:"";
        $numeropaginas=(isset($_POST['numero']))? $_POST['numero']:"";
        $notas=(isset($_POST['notas']))? $_POST['notas']:"";
        $isbn=(isset($_POST['isbn']))? $_POST['isbn']:"";
        $editorial=(isset($_POST['editorial']))? $_POST['editorial']:"";
        $comprobar=0;
        if (!empty($_SESSION['v1isbn'])) {
            foreach ($_SESSION['v1isbn'] as $comparar) {
                if (strcmp($comparar, $isbn)==0) {
                    $comprobar=1;
                    if (empty($palabra)) {
                        $palabra= "El codigo  ISBN ya existe";
                        echo $palabra;
                        echo "<p>";
                        echo "<a type='button' class='btn btn-primary' id='btn btn-primary' href='libros.php'>Ingresar otro libro</a>";
                    } else {
                    }
                }
            }
            if ($comprobar==0) {
                spl_autoload_register(function ($class_name) {
                    include_once("" . $class_name . ".class.php");
                });
                array_push($_SESSION['v1autor'], $autor);
                array_push($_SESSION['v1titulo'], $titulo_libro);
                array_push($_SESSION['v1numero'], $numero_edicion);
                array_push($_SESSION['v1year'], $year_edicion);
                array_push($_SESSION['v1lugar'], $lugar_publicacion);
                array_push($_SESSION['v1editorial'], $editorial);
                array_push($_SESSION['v1numeropaginas'], $numeropaginas);
                array_push($_SESSION['v1notas'], $notas);
                array_push($_SESSION['v1isbn'], $isbn);
            
                $v1autor=$_SESSION['v1autor'];
                $v1titulo=$_SESSION['v1titulo'];
                $v1numero=$_SESSION['v1numero'];
                $v1lugar=$_SESSION['v1lugar'];
                $v1editorial=$_SESSION['v1editorial'];
                $v1year=$_SESSION['v1year'];
                $v1numeropaginas=$_SESSION['v1numeropaginas'];
                $v1notas=$_SESSION['v1notas'];
                $v1isbn=$_SESSION['v1isbn'];
            
                for ($i=0; $i <count($v1autor) ; $i++) {
                    $libro1 = new libro();
                    
                    #$libro1->inventario($autor, $titulo_libro, $numero_edicion, $lugar_publicacion, $year_edicion, $numeropaginas, $notas, $isbn);
                    #$libro1->inventario($autor[$i], $titulo_libro[$i], $numero_edicion[$i], $lugar_publicacion[$i], $year_edicion[$i], $numeropaginas[$i], $notas[$i], $isbn[$i]);
                    # $libro1->inventario($vectorautor($i), $vectortitu($i), $vecotrnumero($i), $vectorlugar($i), $vectoryear($i), $vectornumeropaginas($i), $vectornotas($i), $vectorisbn($i));
                    $libro1->inventario($v1autor[$i], $v1titulo[$i], $v1numero[$i], $v1lugar[$i], $v1editorial[$i], $v1year[$i], $v1numeropaginas[$i], $v1notas[$i], $v1isbn[$i]);
                    echo "<hr>";
                }
            }
        } elseif (empty($_SESSION['v1isbn'])) {
            spl_autoload_register(function ($class_name) {
                include_once("" . $class_name . ".class.php");
            });
            array_push($_SESSION['v1autor'], $autor);
            array_push($_SESSION['v1titulo'], $titulo_libro);
            array_push($_SESSION['v1numero'], $numero_edicion);
            array_push($_SESSION['v1year'], $year_edicion);
            array_push($_SESSION['v1lugar'], $lugar_publicacion);
            array_push($_SESSION['v1editorial'], $editorial);
            array_push($_SESSION['v1numeropaginas'], $numeropaginas);
            array_push($_SESSION['v1notas'], $notas);
            array_push($_SESSION['v1isbn'], $isbn);
            
            $v1autor=$_SESSION['v1autor'];
            $v1titulo=$_SESSION['v1titulo'];
            $v1numero=$_SESSION['v1numero'];
            $v1lugar=$_SESSION['v1lugar'];
            $v1editorial=$_SESSION['v1editorial'];
            $v1year=$_SESSION['v1year'];
            $v1numeropaginas=$_SESSION['v1numeropaginas'];
            $v1notas=$_SESSION['v1notas'];
            $v1isbn=$_SESSION['v1isbn'];
            
            for ($i=0; $i <count($v1autor) ; $i++) {
                $libro1 = new libro();
                #$libro1->inventario($autor, $titulo_libro, $numero_edicion, $lugar_publicacion, $year_edicion, $numeropaginas, $notas, $isbn);
                #$libro1->inventario($autor[$i], $titulo_libro[$i], $numero_edicion[$i], $lugar_publicacion[$i], $year_edicion[$i], $numeropaginas[$i], $notas[$i], $isbn[$i]);
                # $libro1->inventario($vectorautor($i), $vectortitu($i), $vecotrnumero($i), $vectorlugar($i), $vectoryear($i), $vectornumeropaginas($i), $vectornotas($i), $vectorisbn($i));
                $libro1->inventario($v1autor[$i], $v1titulo[$i], $v1numero[$i], $v1lugar[$i], $v1editorial[$i], $v1year[$i], $v1numeropaginas[$i], $v1notas[$i], $v1isbn[$i]);
                echo "<hr>";
            }
        }
    }
}    
       else{

    


?>

    <section class="container">
        <nav class="navbar navbar-dark bg-primary text-white">
        <h1>Inventario de libros</h1>
        </nav>
        <article>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="form" method="POST" id="formulario" >
        <fieldset>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Autor o Autores: </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" id="Autor" rows="3" name="Autor" placeholder="Apellidos, Nombres" ></textarea>
        </div>
        <div class="form-group">
        <label for="Titulolibro">Titulo del libro</label>
        <input type="titulo" name="titulo" id="titulo" size="25" maxlength="30" class="inputField form-control" pattern='[^"]+' required  placeholder="Titulo sin comillas"/><br />
        </div>
        <div class="form-group">
        <label for="Numeroed">Numero de edición</label>
        <input type="number" name="numeroed" id="numeroed" size="10"maxlength="10" class="inputField form-control" placeholder="Numero de edición" required/><br />
        </div>
     
        <div class="form-group">
            <label for="lugar">Lugar de publicación: </label>
            <input type="text" name="lugar" id="lugar" size="20" maxlength="30"  class="inputField form-control" placeholder="Ciudad" required /><br />
        </div>
        <div class="form-group">
        <label for="Editorial">Editorial</label>
        <input type="text" name="editorial" id="editorial" size="30"maxlength="30" class="inputField form-control" placeholder="Editorial" required/><br />
        </div>
        <div class="form-group">
        <label for="year">Año de la edición: </label>
        <input type="number" name="year" id="year" size="4" maxlength="4" class="inputField form-control" placeholder="Año de publicacion por la editorial" required/><br />
        </div>
        <div class="form-group">
        <label for="numero">Número de paginas: </label>
        <input type="number" name="numero" id="numero" size="20" maxlength="20" class="inputField form-control" placeholder="Número de paginas" required/><br />
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Notas: </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notas" placeholder="Información complementaria" ></textarea>
        </div>
        <div class="form-group">
        <label for="isbn">ISBN: </label>
        <input type="text" name="isbn" id="isbn" size="20" maxlength="20" class="inputField form-control" placeholder="Ejemplo: 503-25-2515852-1" pattern="\d{3}-?\d{2}-?\d{7}-[0-9]" required /><br />
        </div>
        
        <input type="submit" name="enviar" class="btn btn-primary mb-2" value="Enviar" class="inputButton" />&nbsp;
        <input type="reset" name="limpiar" class="btn btn-primary mb-2" value="Restablecer" class="inputButton" />

        </fieldset>
        </form>
        
<?php
}
?>
</body>
</html>