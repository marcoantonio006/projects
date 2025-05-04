<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, repellat eos, quasi ullam totam distinctio, quae voluptatem fugiat delectus aspernatur dolores enim. </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amlet consectetur adipisicing elit. Quis, repellat eos, quasi ullam totam distinctio, quae voluptatem fugiat delectus aspernatur dolores enim. </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, repellat eos, quasi ullam totam distinctio, quae voluptatem fugiat delectus aspernatur dolores enim. </p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Ventas</h2>

        <?php 
            $limite = 3;
            include 'includes/templates/anuncios.php';
        ?>

        <div class="ver-todas alinear-derecha">
            <a href="/anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="imagen/webp">
                        <source srcset="build/img/blog1.jpg" type="imagen/jpg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="imagen blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por <span>Administrador</span></p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime qui possimus sunt voluptates 
                        </p>
                    </a>
                </div>
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="imagen/webp">
                        <source srcset="build/img/blog2.jpg" type="imagen/jpg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="imagen blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada">
                        <h4>Guia para decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>02/11/2021</span> por <span>Administrador</span></p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime qui possimus sunt vol que pereza
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vel temporibus dolores tempore ullam sed accusantium tempora commodi nemo nesciunt.
                </blockquote>
                <p>- Marco Polo</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?> 