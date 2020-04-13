<?php
require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
require($_SERVER['DOCUMENT_ROOT'].'/template/arrayOfNeclaces.php');?>
    <div class="container d-flex flex-wrap" id="catalog"   style="margin-top:10px; padding-top:10px;">
        <?php
        foreach($neclaces as $item):
            ?>
            <div class="mb-4  card" style="width: 30%; margin: 1%;">
                <div class="card-body">
                    <img src="../images/neclaces/<?= $item['img']; ?>.jpeg" alt="Ожерелья" style="width: 100%; padding-bottom: 10px;">
                    <h6><?= $item['title']; ?></h6>
                    <p><?= $item['description']; ?></p>
                    <p><?= $item['price']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>