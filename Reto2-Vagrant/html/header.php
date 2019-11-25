

<html>
<head>
    <link rel="stylesheet" href="../CSS/header.css">
    <link  rel="stylesheet" href="../CSS/global.css">
    <script src="../javascript/index.js"></script>
</head>
<body>
<nav role="navigation" class="nav">
    <div class="logo-menu">
        <img src="../multimedia/ThunderCode.png" class="logoM">
    </div>
    <ul class="nav-items">
        <li class="nav-item">
            <a href="index.php" class="nav-link"><span>Inicio</span></a>
        </li>
        <li class="nav-item dropdown" >
            <a href="#" class="nav-link"><span>Mis anuncios</span></a>
            <nav class="submenu">
                <ul class="submenu-items">
                    <li class="submenu-item"><a href="#" class="submenu-link" onclick="cambiaraMisAnuncios()">Ver Anuncios</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link" onclick="cambiaraAnuncio()">Publicar Anuncios</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Borrar Anuncios</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link">Editar Anuncios</a></li>
                </ul>
            </nav>
        </li>

        <li class="nav-item dropdown">
            <a href="#" class="nav-link"><span>Perfil</span></a>
            <nav class="submenu">
                <ul class="submenu-items">
                    <li class="submenu-item"><a href="#" class="submenu-link" onclick="cambiaraMiPerfil()">Mi Perfil</a></li>
                    <li class="submenu-item"><a href="#" class="submenu-link" onclick="cambiaraEmpresa()">Añadir Empresa</a></li>

                </ul>
            </nav>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" id="gear"><span><img src="../multimedia/gear.png"></span></a>
            <nav class="submenu">
                <ul class="submenu-items">
                    <li class="submenu-item"><a href="#" class="submenu-link" onclick="cambiaraAboutUs()">About us</a></li>

                    <li class="submenu-item"><hr class="submenu-seperator" /></li>
                    <li class="submenu-item"><a href="#" onclick="cambiarVentana()" class="submenu-link">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </li>
    </ul>
</nav>


<script src="../javascript/header.js"></script>
