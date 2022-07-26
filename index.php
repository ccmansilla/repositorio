<?php require 'admin/conexion.php';?>
<?php
    $conexion = new Conexion();
    $sql = 'SELECT c.nombre as categoria, s.nombre as seccion FROM categorias c LEFT JOIN secciones s ON c.id = s.categoria_id ORDER BY c.nombre ASC';
    $registros = $conexion->consultar($sql);
?>
<?php require 'header.php';?>
    <header class="cabecera p-2">
        <h1>Repositorio</h1>
    </header>
    <main class="d-flex flex-row">
        <div class="lado">
            <div class="navigation">
                <ul class="navigation__top__level">    
                    <?php
                        $top = '';
                        foreach ($registros as $registro) {
                            if($top != $registro['categoria']){
                                if($top != ''){
                                    echo '</ul></li>';
                                }
                                echo '<li><a href=\'\'>' . $registro['categoria'] . '</a><ul class=\'navigation__sub__level\'>';
                                echo '<li><a href=\'\'>' . $registro['seccion'] . '</a></li>';
                                $top = $registro['categoria'];
                            } else {
                                echo '<li><a href=\'\'>' . $registro['seccion'] . '</a></li>';
                            }
                        }
                    ?>
                </ul>    
            </div>
        </div>
        <div class="seccion">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 m-2">
                <div class="col">
                    <div class="card">
                    <img src="img/code.png" class="card-img-top" alt="Hollywood Sign on The Hill">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="img/code.png" class="card-img-top" alt="Palm Springs Road">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="img/code.png" class="card-img-top" alt="Los Angeles Skyscrapers">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="img/code.png" class="card-img-top" alt="Skyscrapers">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="img/code.png" class="card-img-top" alt="Skyscrapers">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="img/code.png" class="card-img-top" alt="Skyscrapers">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                        </p>
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </main>
<?php require 'footer.php';?>