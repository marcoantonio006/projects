<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">

            <div class="imagen-nosotros">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img  loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae labore vitae omnis aspernatur vero molestiae libero natus provident, facilis quas autem nostrum nisi eius odit dolores sint eaque esse quis. Quaerat earum corporis assumenda ut! Saep.
                </p>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis quaerat alias fuga odio autem, dolor commodi obcaecati amet nostrum, in, rerum.
                </p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, repellat eos, quasi ullam totam distinctio, quae voluptatem fugiat delectus aspernatur dolores enim. </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, repellat eos, quasi ullam totam distinctio, quae voluptatem fugiat delectus aspernatur dolores enim. </p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?> 