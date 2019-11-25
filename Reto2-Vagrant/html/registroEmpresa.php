<?php
require_once "header.php";
?>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/registro-empresa.css">
</head>
<body>
    <div class="contenedor">
    <div id="formuEmpresa" class="cFormulario">
      <form action="../Php-actions/RegistroEmpresa/comprobarRegistroEmpresa.php" method="get">
          <div class="tituloFormulario"> <h2>Registra tu empresa</h2></div>

        <div class="inputsFormulario">
         <input type="text" name="nombre" id="nombreEmpresa" placeholder="Nombre">
         <input type="text" name="email" id="emailEmpresa" placeholder="Email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$" required>
         <input type="text" name="telefono" id="tlfEmpresa" placeholder="Telefono" pattern="^[9|6]{1}([\d]{2}[-]*){3}[\d]{2}$" required>
         <input type="text" name="direccion" id="direccionEmpresa" placeholder="Direccion">
        </div>

        <div class="botonFormulario">
             <input type="submit" name="empresa" value="Registrar Empresa">
        </div>
      </form>
    </div>
</div>
<?php
require_once "footer.php";
?>
