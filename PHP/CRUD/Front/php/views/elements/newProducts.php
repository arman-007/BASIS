<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/ARMAN/BASIS/PHP/CRUD/config.php");

use Ecom\Products;

$_product = new Products();

$products = $_product->getActiveBestSellersProducts();
// var_dump($products);
?>
<!-- markup for New Products -->
<section class="new-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2>New <span>Products</span></h2>
            </div>
            <div class="col-sm-5">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item text-center role=" presentation">
                        <button class="nav-link active" id="pills-chairs-tab" data-bs-toggle="pill" data-bs-target="#pills-chairs" type="button" role="tab" aria-controls="pills-chairs" aria-selected="true">CHAIRS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-racks-tab" data-bs-toggle="pill" data-bs-target="#pills-racks" type="button" role="tab" aria-controls="pills-racks" aria-selected="false">RACKS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tables-tab" data-bs-toggle="pill" data-bs-target="#pills-tables" type="button" role="tab" aria-controls="pills-tables" aria-selected="false">TABLES</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sofas-tab" data-bs-toggle="pill" data-bs-target="#pills-sofas" type="button" role="tab" aria-controls="pills-sofas" aria-selected="false">SOFAS</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-chairs" role="tabpanel" aria-labelledby="pills-chairs-tab" tabindex="0">
                <div class="row">
                    <?php
                        foreach($products as $product):
                    ?>
                    <div class="col">
                        <div>
                            <img class="img-fluid" src="<?= $webroot;?>uploads/<?= $product['picture']?>" alt="Best selling products">
                            <div class="product-info text-center">
                                <div class="item-title">
                                    <a title="Natural Log Dining Table With 6 Chairs" href="#">
                                    <?= $product['title']?>
                                    </a>
                                </div>
                                <div class="ratings">
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                </div>
                                <div class="regular-price">
                                    <span class="price"> &dollar; 100</span>
                                </div>
                                <button type="button" class="btn btn-light">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-racks" role="tabpanel" aria-labelledby="pills-racks-tab" tabindex="0">
                <div class="row">
                    <?php
                        foreach($products as $product):
                    ?>
                    <div class="col">
                        <div>
                            <img class="img-fluid" src="<?= $webroot;?>uploads/<?= $product['picture']?>" alt="Best selling products">
                            <div class="product-info text-center">
                                <div class="item-title">
                                    <a title="Natural Log Dining Table With 6 Chairs" href="#">
                                    <?= $product['title']?>
                                    </a>
                                </div>
                                <div class="ratings">
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                </div>
                                <div class="regular-price">
                                    <span class="price"> &dollar; 100</span>
                                </div>
                                <button type="button" class="btn btn-light">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-tables" role="tabpanel" aria-labelledby="pills-tables-tab" tabindex="0">
                <div class="row">
                    <?php
                        foreach($products as $product):
                    ?>
                    <div class="col">
                        <div>
                            <img class="img-fluid" src="<?= $webroot;?>uploads/<?= $product['picture']?>" alt="Best selling products">
                            <div class="product-info text-center">
                                <div class="item-title">
                                    <a title="Natural Log Dining Table With 6 Chairs" href="#">
                                        <?= $product['title']?>
                                    </a>
                                </div>
                                <div class="ratings">
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                </div>
                                <div class="regular-price">
                                    <span class="price"> &dollar; 100</span>
                                </div>
                                <button type="button" class="btn btn-light">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-sofas" role="tabpanel" aria-labelledby="pills-sofas-tab" tabindex="0">
                <div class="row">
                    <div class="col">
                        <div>
                            <img class="img-fluid" src="image/product1-700x850.jpg" alt="Best selling products">
                            <div class="product-info text-center">
                                <div class="item-title">
                                    <a title="Natural Log Dining Table With 6 Chairs" href="#">
                                        Natural Log Dining Table ...
                                    </a>
                                </div>
                                <div class="ratings">
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                </div>
                                <div class="regular-price">
                                    <span class="price"> &dollar; 100</span>
                                </div>
                                <button type="button" class="btn btn-light">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img class="img-fluid" src="image/product1-700x850.jpg" alt="Best selling products">
                            <div class="product-info text-center">
                                <div class="item-title">
                                    <a title="Natural Log Dining Table With 6 Chairs" href="#">
                                        Natural Log Dining Table ...
                                    </a>
                                </div>
                                <div class="ratings">
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                </div>
                                <div class="regular-price">
                                    <span class="price"> &dollar; 100</span>
                                </div>
                                <button type="button" class="btn btn-light">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img class="img-fluid" src="image/product1-700x850.jpg" alt="Best selling products">
                            <div class="product-info text-center">
                                <div class="item-title">
                                    <a title="Natural Log Dining Table With 6 Chairs" href="#">
                                        Natural Log Dining Table ...
                                    </a>
                                </div>
                                <div class="ratings">
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                </div>
                                <div class="regular-price">
                                    <span class="price"> &dollar; 100</span>
                                </div>
                                <button type="button" class="btn btn-light">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img class="img-fluid" src="image/product1-700x850.jpg" alt="Best selling products">
                            <div class="product-info text-center">
                                <div class="item-title">
                                    <a title="Natural Log Dining Table With 6 Chairs" href="#">
                                        Natural Log Dining Table ...
                                    </a>
                                </div>
                                <div class="ratings">
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                    <i class="fa-regular fa-star fa-2xs"></i>
                                </div>
                                <div class="regular-price">
                                    <span class="price"> &dollar; 100</span>
                                </div>
                                <button type="button" class="btn btn-light">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>