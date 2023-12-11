<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-left bg- mt-5 mb-5 alert alert-secondary">
        <div class="row">
            <div class="col-lg-4">
            <h1 class="display-4">Renta Tu Pelicula Favorita!</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing 
                elit. Harum quaerat illum hic, placeat nisi obcaecati dolore 
                consequuntur tenetur. Neque et amet, cumque distinctio placeat 
                a temporibus quibusdam quam totam libero.</p>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4 mb-3 alert alert-secondary">
                <h1>Renta Ahora</h1>
            </div>
            <div class="col-lg-4 mb-3">
                <input type="text" class="d-inline">
                <button class="d-inline">Search</button>
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Peliculas Mas Populares</h2>
                <?php
                    foreach ($listaPelicula as $item) {
                        echo "<ul>".$item->PEL_NOMBRE."</ul>";
                    }
                ?>
            </div>
            <div class="col-lg-4 mb-3">
                
            </div>
            <div class="col-lg-4">
                <h2>Socios Mas Activos!</h2>
                <?php
                    foreach ($listaPelicula as $item) {
                        echo "<ul>".$item->PEL_NOMBRE."</ul>";
                    }
                ?>
            </div>
        </div>

    </div>
</div>
