<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <title>Federacion Andaluza de Baloncesto</title>
</head>

<body>
    <header>
        <div id="logo_cabecera">
            <img src="./imagen/Logo-FAB.png" width="250px">
        </div>
        <div id="navegador">
            <div id="nav_menu">
                <a href="index.php"><img src="./imagen/casa.png" width="25px">Inicio</a>
            </div>
            <div id="nav_menu">
                <a href="equipos.php"><img src="./imagen/usuario.png" width="25px">Equipos</a>
            </div>
            <div id="nav_menu">
                <a href="partidos.php"><img src="./imagen/calendario.png" width="25px">Partidos</a>
            </div>
            <div id="nav_menu">
                <a href="clasificacion.php"><img src="./imagen/clasificacion.png" width="25px">Clasificacion</a>
            </div>
            <div id=nav_menu>
                <a href="modificacion.php"><img src=".\imagen\actualizar.png" width="25px">Modificacion partidos</a>
            </div>
        </div>
    </header>

    <main>

    <div id=admin>
                        <a href="#"><img src=".\imagen\admin.png" width="25px">Admin</a>
                        <form id="cerrar_sesion" action="../index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>


    <div id=cabecera>
        <h2>INICIO</h2>
    </div>
    <div id=contenido>
        <div id=descripcion>
            <img src=".\imagen\andaluz.jpg" width=500px>
        </div>
        <div id=noticias>
            <div id=titulo_not>
                <h2>NOTICIAS</h2>
            </div>
            <div id=desc_not>
                <div div="img_item">
                    <img src=".\imagen\partido.jpg" class="imagen" width=300px>
                    <h2 class="tit_not">Convocatoria Selecciones</h2>
                    <a href="https://www.andaluzabaloncesto.org/granada/delegacion-noticia-4-34892/convocatoria-selecciones-provinciales-26112023" target="_blank"><p class="boton_item">Abrir noticia</p></a>
                </div>
                <div div="img_item">
                    <img src=".\imagen\encuentros.jpg" class="imagen" width=300px>
                    <h2 class="tit_not">Resultados Granadinos</h2>
                    <a href="https://www.andaluzabaloncesto.org/granada/delegacion-noticia-4-34961/resultados-de-los-equipos-granadinos-en-las-categorias-nacionales" target="_blank"><p class="boton_item">Abrir noticia</p></a>
                </div>
            </div>
        </div>
    </div>
        
</main>

    <footer>
        
            <div id=pie_pagina>
                <div id=datos>
                    <address>
                        <p>__________________________________________</p>
                        <p>Avenida de la Constitución 20</p>
                        <p>Edif la Pirámide Local 6C, 18012 Granada</p>
                        <p>958 21 54 93</p>
                        <p>javier.simon@baloncestoandalucia.org</p>
                        <p>__________________________________________</p>
                    </address>
                </div>
                <div id=instituto>
                    <p>FEDERACION GRANADINA DE BALONCESTO</p>
                    <img src=".\imagen\Logo-FAB_footer.png" width=190px>
                </div>
                <div id=redes>
                    <a href="https://www.instagram.com/andaluzabaloncesto/?hl=es" target="_blank"><img src=".\imagen\instagram.png" width="50px"></a>
                    <a href="https://www.facebook.com/andaluzabaloncesto" target="_blank"><img src=".\imagen\facebook.png" width="50px"></a>
                    <a href="https://www.youtube.com/@andaluzabaloncesto/featured" target="_blank"><img src=".\imagen\youtube.png" width="50px"></a>
                </div>
            </div>

    </footer>
</body>
</html>
