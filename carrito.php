<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("inclusion/head.php"); ?>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
    <?php include("inclusion/topbar.php"); ?>
    <?php include("inclusion/menu.php"); ?>
    <?php include("inclusion/slider_home.php"); ?>
        <!-- Header -->
    <!-- inicio zona de pago -->

        <!-- SHOP CHECKOUT -->
        <section id="shop-checkout">
            <div class="container">

                <div class="row">
                    <div class="col-8">
                        <!-- Step 1 - Shipping details -->
                        <div class="card">
                            <div class="card-body p-4">
                                <form id="form-checkout" class="form-validate">
                                    <span class="text-muted text-sm font-italic">Paso 1 de 3</span>
                                    <h4 class="mb-4">Detalles de compra</h4>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                                    <label for="name">Nombre:</label>
                                                    <input type="text" class="form-control" name="name" value="Jesus Antonio">">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="surname">Apellido</label>
                                                    <input type="text" class="form-control" name="surname" value="Vallarta Peréz">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                                    <label for="gender">Fecha de Nacimiento:</label>
                                                    <input class="form-control" type="date" name="dateofbirth">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="address2">Nacionalidad:</label>
                                                    <input type="text" class="form-control" name="Nacionalidad" value="Mexicano">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                                    <label for="address2">Número de Pasaporte:</label>
                                                    <input type="text" class="form-control" name="Ingresa Número de Pasaporte" value="No. de Pasaporte">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="telephone">Teléfono #1</label>
                                                    <input class="form-control" type="tel" name="Teléfono" value="55-6227-0000">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="telephone">Teléfono #2</label>
                                                    <input class="form-control" type="tel" name="Teléfono 2" value="55-62270-1111">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="inputAddress" class="form-label">Dirección</label>
                                                    <input type="text" class="form-control" id="inputAddress" value="Mieses 650">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                                    <label for="inputCity" class="form-label">Colonia</label>
                                                    <input type="text" class="form-control" id="inputCity" value="Centro">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="inputZip" class="form-label">Código Postal</label>
                                                    <input type="text" class="form-control" id="inputZip" value="06052">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="inputCity" class="form-label">Estado</label>
                                                    <input type="text" class="form-control" id="inputEstado" value="Distrito federal">
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="inputZip" class="form-label">Ciudad</label>
                                                    <input type="text" class="form-control" id="inputCiudas" value="Valle del Sur">
                                        </div>
                                        <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Viaja por</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Aire</option>
                                                           <option>Tierra</option>
                                                           <option>Mar</option>
                                                       </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                    <label for="exampleFormControlSelect1">Cantidad de Trámites</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>1</option>
                                                           <option>2</option>
                                                           <option>3</option>
                                                           <option>4</option>
                                                           <option>5</option>
                                                       </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Velocidad Trámite</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Trámite Normal</option>
                                                           <option>Trámite Urgente</option>

                                                       </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Tipo de trámite</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Visa Nueva</option>
                                                           <option>Renovar Visa</option>
                                                       </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Velocidad Trámite</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                           <option>Trámite Normal</option>
                                                           <option>Trámite Urgente</option>

                                                       </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                       <label for="exampleFormControlSelect1">Tipo de Visa</label>
                                                       <select class="form-select" id="exampleFormControlSelect1">
                                                            <option>Turismo (B1/B2)</option>
                                                            <option>Negocios (B1/B2)</option>
                                                            <option>Estudiante (F y M)</option>
                                                            <option>Prensa y Medios (I)</option>
                                                            <option>Intercambio acàdemico (J)</option>
                                                            <option>Negocios (B1/B2)</option>
                                                            <option>Profesiones Religiosas (R1)</option>
                                                            <option>Tripulaciòn Comercial o Tripulantes de vuelo (C1/D)</option>
                                                            <option>Empleo basado en petición (H, L, O, P) </option>
                                                            <option>Empleada (os) Domésticas (os) (B1)</option>
                                                            <option>Comerciantes (E-1)</option>
                                                            <option>Inversionistas (E-2)</option>
                                                            <option>Miembros de Organizaciones Internacionales (G)</option>
                                                            <option>Diplomáticos y Empleados Federales Gobierno Mexicano (A)</option>
                                                            <option>NAFTA (TN)</option>
                                                            <option>Otro tipo</option>

                                                       </select>
                                        </div>
                                        

                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- end: Step 1 - Shipping details -->



                        <!-- Step 3 - Payment method -->
                        <div class="card">
                            <div class="card-body p-4">
                                <span class="text-muted text-sm font-italic">Paso 3 de 3</span>
                                <h4 class="mb-4">Método de Pago</h4>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check image-checkbox p-2 border rounded">
                                            <input id="option-1" type="radio" class="form-check-input" name="payment_method">
                                            <label class="form-check-label d-block text-center p-3" for="option-1">
                                                <img src="images/logos/mastercard-logo.png" alt="#" height="44">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-check image-checkbox p-2 border rounded">
                                            <input id="option-3" type="radio" class="form-check-input" name="payment_method">
                                            <label class="form-check-label d-block text-center p-3" for="option-3">
                                                <i class="fas fa-university"></i>
                                                <span class="d-block font-weight-bold">Transferencia Bancaria</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- end: Step 3 - Payment method -->

 
                    </div>

                    <div class="col-md-4">
                        <!-- Order Summary -->
                        <div class="card">
                            <div class="card-body p-4">
                                <!-- Title -->
                                <h2 class="h4 mb-0">Desglose</h2>
                                <!-- end: Title -->

                                <!-- Total Pice-->
                                <div class="media align-items-center mb-2">
                                    <div class="mr-3">
                                        <h4 class="h6 text-muted font-weight-normal mb-0">Cantidad de Servicios (1)</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span>$339.98</span>
                                    </div>
                                </div>
                                <div class="media align-items-center mb-2">
                                    <div class="mr-3">
                                        <h4 class="h6 text-muted font-weight-normal mb-0">Shipping</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span>$0</span>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <h4 class="h6 text-muted font-weight-normal mb-0">Costo de Gestión</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span>$236.78</span>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <h4 class="h4">Total</h4>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-dark h4">$576.76</span>
                                    </div>
                                </div>
                                <!-- end: Total -->

                                <button type="submit" class="btn btn-primary btn-block mt-4">Pagar</button>
                            </div>
                        </div>
                        <!--  Order Summary -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SHOP CHECKOUT -->
    <!-- fin zona de pago -->

        

        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
    <!-- Partical Js files  -->
    <script src="plugins/particles/particles.js" type="text/javascript"></script>
    <script src="plugins/particles/particles-dots.js" type="text/javascript"></script>
    <!-- end: Partical Js files  -->



    <script src="plugins/particles/particles-stars.js" type="text/javascript"></script>
    <!--Particles bubbles-->
    <script src="plugins/particles/particles-bubble.js" type="text/javascript"></script>
    <!--Particles snow-->
    <script src="plugins/particles/particles-snow.js" type="text/javascript"></script>
    <?php include("inclusion/script_validaciones.php"); ?>

</body>

</html>