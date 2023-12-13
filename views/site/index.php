<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Renta Tu Pelicula!';
?>
<div class="site-index">

<div class="jumbotron alert alert-secondary mt-5 mb-5 p-3">
    <div class="row">
        <div class="col-lg-5">
            <h1 class="display-4">Renta Tu Película Favorita!</h1>
            <p class="lead">Quieres ver una pelicula pero ya no esta en el cine? Tranquil@!.
                Aqui esta tu solucion, RENTA TU PELI FAVORITA a precio de gallina muerta.
                Solo registrate y disfruta de todos los beneficios!
                No esperes mas!!!
            </p>
        </div>
        <div class="col-lg-3">

        </div>
        <div class="col-lg-4 ml-3">
            <?= Html::img('@web/img/img_info.jpg', ['alt' => 'Descripción de la imagen', 'class' => 'img-fluid rounded']) ?>
        </div>
    </div>
</div>


    <div class="body-content">
        <div class="row position-relative">
            <div class="col-lg-4 p-3 mb-3 alert alert-secondary text-center">
                <h3>Renta Ahora</h1>
            </div>
            <div class="col-lg-4 mb-3 position-absolute top-50 start-50 translate-middle">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busca tu Pelicula" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
        <div class="row position-relative">
            <div class="col-lg-4 mb-3">
                <h2>Peliculas Mas Populares</h2>
                <?php
                    foreach ($listaPelicula as $item) {
                        echo "<ul>".$item->PEL_NOMBRE."</ul>";
                    }
                ?>
            </div>

            <div class="col-lg-4 ml-3">
                <h2>Socios Mas Activos!</h2>
                <?php
                    foreach ($listaSocio as $item) {
                        echo "<ul>".$item->SOC_NOMBRE."</ul>";
                    }
                ?>
            </div>

            <div class="col-lg-4 ml-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127657.29103068827!2d-78.66948652386489!3d-0.9321220888090503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4639e7c398d3f%3A0xc4999bdc40abfc48!2sUniversidad%20De%20Las%20Fuerzas%20Armadas%20ESPE%20Extensi%C3%B3n%20Belisario%20Quevedo!5e0!3m2!1ses-419!2sec!4v1702431086959!5m2!1ses-419!2sec" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</div>
