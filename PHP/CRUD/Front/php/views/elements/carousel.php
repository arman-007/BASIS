<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/config.php");
            
    use Ecom\Banners;
    
    $_banners = new Banners();
    
    $banners = $_banners ->getActiveBanners();
?>

<!-- Markup for Carousel -->
<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php 
        $_active = 'active';
        foreach($banners as $banner): 
        ?>
        <div class="carousel-item <?=$_active?>">
            <img src="<?= $webroot ?>uploads/<?= $banner['picture']?>" class="d-block w-100" alt="Carousel Image">
        </div>
        <?php 
        $_active = '';
        endforeach; 
        ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>