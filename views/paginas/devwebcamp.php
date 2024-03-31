<main class="devwebcamp">
    <h2 class="devwebcamo__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imangen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamop.jgp" alt="Imagen Devwebcamp">
            </picture>
        </div>
            <div class="devwebcamp__contenido">
                <p <?php aos_animacion(); ?> class="devwebcamp__texto">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi non magna ornare, scelerisque quam a, interdum metus. Proin ornare, lorem ut interdum rutrum, orci magna dictum orci, a elementum felis purus nec risus. Nam hendrerit pellentesque lobortis. Vivamus non vulputate velit. Ut leo enim, interdum quis elit viverra, tempus cursus lorem. In luctus id erat et tincidunt.</p>
                <p <?php aos_animacion(); ?> class="devwebcamp__texto">Nulla quis purus orci. Proin lacus neque, dictum sed fringilla non, interdum sit amet sem. Duis convallis ex id purus mollis elementum. Mauris sed semper nibh. Quisque sit amet lacus eget elit eleifend lobortis vestibulum ut nulla. Quisque dui nisl, malesuada vitae tincidunt at, commodo et libero. Nam vel tellus in massa viverra euismod. Maecenas turpis felis, posuere a pharetra nec, tempor porttitor metus. Proin suscipit lorem a quam blandit, non sagittis ex ullamcorper.</p>
            </div>
    </div>
</main>