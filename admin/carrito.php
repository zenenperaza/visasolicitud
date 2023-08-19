<!DOCTYPE html>
<html lang="en">

<head>
<base href="../">
    <?php include("../inclusion/head.php"); ?>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <?php include("../inclusion/topbar.php"); ?>
            <!-- Header -->
        <?php include("../inclusion/menu.php"); ?>

            <!-- end: Header -->
    <!-- inicio slider -->
        <?php //include("../inclusion/slider.php"); ?>
    <!-- CONTENIDO -->
            <!-- Page title -->
            <section id="page-title">
                <div class="container">
                    <div class="page-title">
                        <h1>Checkout</h1>
                        <span>Checkout details</span>
                    </div>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Shop</a>
                            </li>
                            <li class="active"><a href="#">Checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- end: Page title -->
            <!-- SHOP CHECKOUT -->
            <section id="shop-checkout">
                <div class="container">

                    <div class="row">
                        <div class="col-8">
                           

                       

                            <!-- Step 3 - Payment method -->
                            <div class="card">
                                <div class="card-body p-4">
                           
                                    <h4 class="mb-4">Payment method</h4>

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
                                                <input id="option-2" type="radio" class="form-check-input" name="payment_method">
                                                <label class="form-check-label d-block text-center p-3" for="option-2">
                                                    <img src="images/logos/paypal.png" alt="#" height="44">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check image-checkbox p-2 border rounded">
                                                <input id="option-3" type="radio" class="form-check-input" name="payment_method">
                                                <label class="form-check-label d-block text-center p-3" for="option-3">
                                                    <i class="fas fa-university"></i>
                                                    <span class="d-block font-weight-bold">Bank Transfer</span>
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
                                    <h2 class="h4 mb-0">Order summary</h2>
                                    <!-- end: Title -->

                                    <!-- Total Pice-->
                                    <div class="media align-items-center mb-2">
                                        <div class="mr-3">
                                            <h4 class="h6 text-muted font-weight-normal mb-0">Item subtotal (2)</h4>
                                        </div>
                                        <div class="media-body text-right">
                                            <span>$39.98</span>
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
                                            <h4 class="h6 text-muted font-weight-normal mb-0">Tax (8%)</h4>
                                        </div>
                                        <div class="media-body text-right">
                                            <span>$6.78</span>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="media align-items-center">
                                        <div class="mr-3">
                                            <h4 class="h4">Total</h4>
                                        </div>
                                        <div class="media-body text-right">
                                            <span class="text-dark h4">$46.76</span>
                                        </div>
                                    </div>
                                    <!-- end: Total -->

                                    <button type="submit" class="btn btn-primary btn-block mt-4">Place order</button>
                                </div>
                            </div>
                            <!--  Order Summary -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: SHOP CHECKOUT -->
 

<!-- FIN CONTENIDO -->
</div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>



</body>

</html>