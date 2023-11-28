<?php

require_once('inc/app.php');

$db_server = "localhost:3307";
$db_user = "root";
$db_user_pass = "";
$db_name = "dalilakdb";

$categoryId = $_GET['categoryId'];

if (isset($categoryId)) {
    $conn = db_connect($db_server, $db_user, $db_user_pass, $db_name);

    $places = db_select($conn, 'places', '*', 'places.CategoreId=' . $categoryId); ?>
    <section class="my-5">
        <div class="container edit-container">
            <div class="section-head">
                <h1 class="text-center my-5">منتزهات</h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 row-cols-lg-4 edit-row">
                <?php
                foreach ($places as $place) { ?>

                    <div class="col">
                        <div class="card edit-card">
                        <img src="./assets/img/<?php echo $place['ImgUrl'] ?>" alt="Loadding">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $place['Name'] ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $place['Description'] ?>
                                </p>
                                <p class="card-text"><small class="text-body-secondary">أخر تحديث قبل 3 أسابيع</small></p>
                                <a href="showDetails?placeId=<?php echo $place['Id'] ?>" class="btn btn-outline-info">عرض التفاصيل</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
         </div>
    </section>
<?php } ?>