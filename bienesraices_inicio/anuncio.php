<?php 
include 'includes/templates/header.php';?>

    <main class="contenedor seccion contenido-centrado">
        <h2>Casa en venta frente al bosque</h2>
       <picture>
           <source srcset="build/img/destacada.webp" type="image/webp">
           <source srcset="build/img/destacada.jpg" type="image/jpeg">
           <img loading="lazy"  src="build/img/destacada.jpg" alt="imagen de la propiedad"> 
       </picture>

       <div class="resumen-propiedad">
           <p class="precio">$3,000,000</p>
           <ul class="iconos-caracteristicas">
            <li>
                <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                <p>4</p>
            </li>
        </ul>

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
            software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
        </p>

       </div>
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