<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

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
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="imagen/webp">
                    <source srcset="build/img/blog3.jpg" type="imagen/jpg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="imagen blog">
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
                    <source srcset="build/img/blog4.webp" type="imagen/webp">
                    <source srcset="build/img/blog4.jpg" type="imagen/jpg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="imagen blog">
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

    </main>

<?php
    incluirTemplate('footer');
?> 