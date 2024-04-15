<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Carta</title>
</head>
<body>
    <h2></h2>
    <?php 
    if(file_exists('./XML/carta.xml')){
        $carta=simplexml_load_file('./XML/carta.xml');
        // var_dump($films);
    }else{
        exit('Error abriendo carta.xml');
    }

    ?>
   <header class="header">
    <div class="tituloyfoto">
        
        <h1>Carta Ivansito's restaurant </h1>
        </div>
   </header>
        </form>
    </nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Primeros Platos</h2>
            <?php
            foreach($carta->platos as $fila) {
                if ($fila['tipo'] == "1rplato") {
                    echo "<div class='primerosplatos'>";
                    echo "<h3>".$fila->title."</h3>" . "<br>"; 
                    echo $fila->description . "<br>"."<br>";
                    echo "Ingredientes: ".$fila->ingredientes . "<br>";
                    echo $fila->precio . "<br>" . "<br>";
                    echo "<img src='$fila->imagen' alt=''>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <div class="col">
            <h2>Segundos Platos</h2>
            <?php
            foreach($carta->platos as $fila) {
                if ($fila['tipo'] == "2rplato") {
                    echo "<div class='segundosplatos'>";
                    echo "<h3>".$fila->title."</h3>" . "<br>"; 
                    echo $fila->description . "<br>"."<br>";
                    echo "Ingredientes: ".$fila->ingredientes . "<br>";
                    echo $fila->precio . "<br>" . "<br>";
                    echo "<img src='$fila->imagen' alt=''>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <div class="col">
            <h2>Postres</h2>
            <?php
            foreach($carta->platos as $fila) {
                if ($fila['tipo'] == "postre") {
                    echo "<div class='postre'>";
                    echo "<h3>".$fila->title."</h3>" . "<br>";  
                    echo $fila->description . "<br>"."<br>";
                    echo "Ingredientes: ".$fila->ingredientes . "<br>";
                    echo $fila->precio . "<br>" . "<br>";
                    echo "<img src='$fila->imagen' alt=''>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>
</div>
<footer>
<h2 class="bebidatitulo">Bebidas</h2>
<div class="bebidas">

            <?php
            foreach($carta->platos as $fila) {
                if ($fila['tipo'] == "bebidas") {
                    echo "<div class='bebida'>";
                    echo $fila->title.": ".$fila->precio;  
                    echo "<img src='$fila->imagen' alt=''>";
                    echo "</div>";
                }
            }
            ?>
</div>
</footer>
<footer>
    <hr>
    <div class="contactos">
        <a href="mailto:449925@fje.edu" id="correo">Contactar por correo</a>
        <a> || </a>
        <a href="https://www.instagram.com/iv4n_08/" id="instagram">instagram</a>
        <a> || </a>
        <a id="telefono">(+34) 644 33 38 63</a>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


