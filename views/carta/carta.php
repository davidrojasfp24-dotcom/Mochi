<link rel="stylesheet" href="view/carta/carta.css">

<h1 class="page-title">Nuestra Carta</h1>

<div class="container-fluid bg-black px-0">
    <div class="container py-5">
        <h1 class="page-title">Nuestra Carta</h1>
        <div class="row g-4">
            <!-- Producto de ejemplo 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="mochi-card">
                    <div class="mochi-img-container">
                        <img src="view/home/img/mochi-te-verde.jpg" alt="Mochi de Té Verde">
                    </div>

                    <div class="mochi-body">
                        <h5 class="mochi-title">Mochi de Té Verde</h5>
                        <p class="mochi-description">
                            Suave masa de arroz glutinoso rellena de crema helada de té verde matcha tradicional.
                        </p>

                        <a href="index.php?controller=producto&action=ver_detalle&id=1" class="mochi-link">Ver más...</a>
                        
                        <div class="mochi-footer">
                            <span class="mochi-price">2,50€</span>
                            <button class="btn-comprar" 
                                onclick="agregarAlCarrito(1, 'Mochi de Té Verde', 2.50, 'mochi-te-verde.jpg')">
                                COMPRAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Producto de ejemplo 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="mochi-card">
                    <div class="mochi-img-container">
                        <img src="view/home/img/mochi-chocolate.jpg" alt="Mochi de Chocolate">
                    </div>

                    <div class="mochi-body">
                        <h5 class="mochi-title">Mochi de Chocolate</h5>
                        <p class="mochi-description">
                            Delicioso mochi con un intenso corazón de chocolate belga y textura cremosa.
                        </p>

                        <a href="index.php?controller=producto&action=ver_detalle&id=2" class="mochi-link">Ver más...</a>
                        
                        <div class="mochi-footer">
                            <span class="mochi-price">2,75€</span>
                            <button class="btn-comprar" 
                                onclick="agregarAlCarrito(2, 'Mochi de Chocolate', 2.75, 'mochi-chocolate.jpg')">
                                COMPRAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="view/carta/carta.js"></script>