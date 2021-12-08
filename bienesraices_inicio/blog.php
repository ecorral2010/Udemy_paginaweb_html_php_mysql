<?php 
include 'includes/templates/header.php';?>


        
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" typo="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escritorio el: <span>20/10/2021</span> por:<span>Admin</span></p>
                    </a>
                    <p>
                        Consejos para construir una terraza en ele techo de tu casa con los mejores
                        materiales y ahorrando dinero
                    </p>
                </div>

            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" typo="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto Entrada Blog">
                    </picture>
                </div>
    
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escritorio el: <span>20/10/2021</span> por:<span>Admin</span></p>
                    </a>
                    <p>
                        Maximiza el espacion en tu hogar con esta guia, aprende a combinar muebles y 
                        colores para darle vida a tu espacio
                    </p>
                </div>
                
            </article>
        

        

       
    </main><!--cierre de blog div-->
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derecho reservados 2021 &copy;</p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>