<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Terraza en el techo de tu casa</h1>

        <picture>
            <source srcset="build/img/blog1.webp" type="imagen/webp">
            <source srcset="build/img/blog1.jpg" type="imagen/jpg">
            <img loading="lazy" src="build/img/blog1.jpg" alt="imagen blog">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Administrador</span></p>

        <div class="resumen-propiedad">

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus eius quis delectus mollitia aspernatur est eveniet a quos molestiae officia, quasi aut. Ex sunt nesciunt nemo itaque? Exercitationem, et laboriosam.
            </p>

            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas saepe neque sunt mollitia culpa nobis quis, officiis corporis consequatur sapiente commodi cupiditate, labore aspernatur soluta magni facere aliquid quos animi repudiandae temporibus minima consectetur. Itaque similique omnis adipisci sunt temporibus!
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?> 