<?php
include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/config.php");
            
use Ecom\Products;

$_product = new Products();

$products = $_product ->getActiveBestSellersProducts();
// var_dump($products);
?>
<!-- Markup for Best seller -->
<section class="best-sellers">
    <div class="container">
        <h2>Best<span> Sellers</span></h2>
        <div class="best-sellers-products">
            <?php
                foreach($products as $product):
            ?>
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
            <?php 
                endforeach;
            ?>
        </div>
    </div>
</section>