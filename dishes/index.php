<?php

require_once "../shared/connection.php";
require_once "../shared/header.php";
require_once "./dishes_request.php";
?>

<section>
    <div class="row">
        <?php foreach ($data as $item): ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card border-0 rounded-2">
                    <div class="cover item-a position-relative">
                        <h1 class="w-75"><?= $item['name'] ?></h1>
                        <span class="price">$<?= $item['price'] ?></span>
                        <div class="card-back">
                            <a href="#">Add to cart</a>
                            <a href="#">View detail</a>
                        </div>

                        <div class="position-absolute img-cat">
                            <div>
                                <img src="../shared/upload/<?= $item['category'] ?>.jpeg" alt="category">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once "../shared/footer.php" ?>