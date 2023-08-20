<!doctype html>
<html lang="en">

<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title> Products </title>
</head> -->
<?php
    include_once('../views/elements/head.php');
?>

<body>
    <!-- Markup for header -->
    <!-- <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p>Welcome, Visitor!</p>
                    </div>
                    <div class="col-sm-5 offset-sm-4">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fa-regular fa-user fa-xs"></i>
                                    <span>MY ACCOUNT</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-regular fa-heart fa-xs"></i>
                                    <span>MY WISHLIST</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-regular fa-circle-check fa-xs"></i>
                                    <span>CHECKOUT</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-regular fa-light fa-comments fa-xs"></i>
                                    <span>BLOG</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa-solid fa-lock fa-xs"></i>
                                    <span>LOGIN</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="middle-part">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-sm-2">
                        <p class="logo">
                            <a href="index.html" class="navbar-brand">
                                <img src="image/logo.png" alt="LOGO" class="img-fluid">
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-8 offset-sm-2">
                        <ul class="nav">
                            <li class="nav-item mt-2">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" href="#">DELIVERY INFORMATION</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" href="#">PRIVACY POLICY</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="search"
                                            aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon">
                                            <i class="fa-solid fa-magnifying-glass fa-xs"></i>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <button type="button" class="btn btn-danger">
                                        <img src="image/btn-cart.png" alt="CART-BUTTON" class="img-fluid">
                                        <span class="">0 CART / &dollar; 0.00</span>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="products.php">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">DINING & BAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BEDROOM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KITCHEN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME IMPROVEMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CUSTOM</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> -->
    <?php
        include_once('../views/elements/header.php');
        include_once('../views/elements/breadCrumb.php');
        include_once('../views/elements/pageContent.php');
        include_once('../views/elements/brandCarousel.php');
        include_once('../views/elements/footer.php');
        include_once('../views/elements/script.php');
    ?>

    <!-- markup for BREADCRUMB -->
    <!-- <div class="page-breadcrumb mt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
    </div> -->

    <!-- Markup for PAGE CONTENT -->
    <!-- <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="title">Categories</h2>
                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">Living room</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>HTML stands for HyperText Markup Language. HTML is the standard markup language
                                        for describing the
                                        structure of web pages. <a
                                            href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn
                                            more.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Dining & Bar</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and
                                        easier web
                                        development. It is a collection of CSS and HTML conventions. <a
                                            href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/"
                                            target="_blank">Learn
                                            more.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">Bedroom</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style
                                        properties for a given
                                        HTML element such as colors, backgrounds, fonts etc. <a
                                            href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn
                                            more.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">
                                    Kitchen</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and
                                        easier web
                                        development. It is a collection of CSS and HTML conventions. <a
                                            href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/"
                                            target="_blank">Learn
                                            more.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">Home Improvement</button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style
                                        properties for a given
                                        HTML element such as colors, backgrounds, fonts etc. <a
                                            href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn
                                            more.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">

                </div>
            </div>
        </div>
    </section> -->

    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
</body>

</html>