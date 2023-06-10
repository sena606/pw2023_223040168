<?php
require '../function.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM product
            WHERE
          title LIKE '%$keyword%' OR
          detail LIKE '%$keyword%' 
        ";
$repeat = query($query);

?>
<div class="row ms-auto me-auto">
    <?php if ($repeat) : ?>
    <?php foreach ($repeat as $br) : ?>
    <div class="col-lg-4">
        <div class="card my-2 mb-4" style="max-width: 18rem;">
            <img src=" assets/img/<?= $br['photo']; ?>" class="card-img-top" alt="baju" height="200px" />
            <div class="card-body">
                <h5 class="card-title"><?= $br['title']; ?></h5>
                <p class="card-text">
                    <?= substr_replace($br['detail'], "<a href='#'>... Read more</a>", 50); ?>
                </p>
                <a href="see_news.php?id=<?= $br['id']; ?>" class="btn btn-secondary">See More</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else : ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-danger text-center" role="alert">
                Not Found
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>