<?php require ($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
require($_SERVER['DOCUMENT_ROOT'].'/template/arrays.php'); ?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light back image">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Хотите украшения?</h1>
        <p class="lead font-weight-normal">Переходим сразу к делу</p>
        <a class="btn btn-outline-secondary" href="#catalog">Каталог</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<div class="container d-flex flex-wrap" id="catalog"   style="margin-top:90px; padding-top:120px;">
<?php
foreach($array as $item):
?>
    <div class="mb-4 card" style="width: 30%; margin: 1%;">
        <div class="card-body">
            <img src="images/<?= $item['img']; ?>.jpeg" alt="" style="width: 100%; padding-bottom: 10px;">
            <a class="btn btn-primary" href="/include/<?= $item['url']; ?>"  role="button"><?= $item['title']; ?></a>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>