<?php
    include "header.php"
?>
    <div id=sesion>
        <form id=inicio_ses action="inicio_sesion.php" method="post" enctype="multipart/form-data">
        
        <label for="dni">Usuario:</label><br>
        <input type="text" name="usuario" value="" required>
        <label for="dni">Contraseña:</label><br>
        <input type="password" name="contraseña" value="" required>
        <input type="submit" name="enviar" value="Iniciar sesión">
    
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
<?php
    include "footer.php"
?>