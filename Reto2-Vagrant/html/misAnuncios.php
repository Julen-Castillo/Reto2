<?php
?>
    <script src="../javascript/jquery-3.4.1.min.js"></script>
    <script src="../javascript/index.js"></script>
    <script src="../javascript/login.js"></script>
    <script src="../javascript/filtros.js"></script>

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/filtros.css">
<?php


require_once "header.php";
require_once "../Php-actions/BD/conexionBD.php";
require_once "../Php-actions/BD/anuncio.php";
require_once "../Php-actions/BD/empresa.php";
$dbh = connect();


?>
    <!-- Div gris que aparece al darle click en un anuncio -->
    <div class="cortinaGris"></div>
    <?php /*require_once "../Php-actions/Filtro/principal.php";*/ ?>
    <div class="contenedor">
        <!-- Cargamos todos los anuncios que hay en la base de datos -->
        <?php
        $anunciosEmpresa = selectAnunciosEmpresa($dbh);
        foreach ($anunciosEmpresa as $row) {
            echo "<div class='Anuncio'>
                        <div class='contenedorinformacion'>
                            <h2 class='tituloAnuncio'>" . $row["titulo"] . "</h2>
                            <div class='oculto'>
                              <div class='descripcion'>"  . "<p> Descripcion: </p>" . $row["descripcion"] . "</div>
                              <div class='nomCategoria'>" . "<p> Categoria: </p>" . $row["nomCategoria"] . "</div>
                              <div class='nomEmpresa'>" . "<p> Empresa: </p>" . $row["nomEmpresa"] . "</div>
                                <div class='email'>" . "<p> Email: </p>" . $row["email"] . "</div>
                              <div class='telefono'>" . "<p> Telefono: </p>" . $row["telefono"] . "</div>
                              <div class='nomSubcategoria'>" . "<p> Subcategoria </p>" . $row["nomSubcategoria"] . "</div>
                            </div>
                        </div>
                        <div class='imgAnuncio'><img src='../imagenes/" . $row["imagen"] . "'></div>
                        
                        <form action='../Php-actions/BorrarAnuncio/borrar.php' method='post'>
                            <input type='radio' name='idAnuncio' value='" . $row["idAnuncio"] . "' hidden checked>  
                            <input type='submit' name='bBorrar' value='Eliminar Anuncio'>
                        </form>
                        
                    </div>";
        }


        ?>
    </div>

<?php
require_once "footer.php";
?>