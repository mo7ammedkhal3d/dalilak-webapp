<?php

require_once('inc/app.php');

$db_server = "localhost:3307";
$db_user = "root";
$db_user_pass = "";
$db_name = "dalilakdb";

$conn = db_connect($db_server, $db_user, $db_user_pass, $db_name);

$categories = db_select($conn, 'category', );

foreach ($categories as $category) { 
    $sql = "SELECT places.Id,places.Name ,places.Description FROM places JOIN category ON places.CategoreId=category.Id  where CategoreId=" . $category['Id'];
    try {
        $result = db_execute_query($conn, $sql);
    } catch (Exception $e) {
        return array("status" => "error", "code" => 404, "message" => $e->getMessage());
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    if(count($rows)===0) continue;
    ?>
    <section>
        <div class="special-dishes">
            <p class="text-end">
                <?php echo $category['Name'] ?>
            </p>
            <h1><?php echo $category['Description'] ?></h1>
            <!-- <h1>تعتبر أحد أشهر الأماكن للبحث في حقائب الماضي السحيق</h1> -->
            <a href='<?php echo $category['EngName'] ?>?categoryId=<?php echo $category['Id'] ?>' class="btn btn-outline-info w-25 float-start fw-bold my-4">رؤية المزيد</a>
            <i onclick="nextSlide()" class="fa-solid fa-chevron-right right-link"></i>
            <i onclick="previousSlide()" class="fa-solid fa-chevron-left left-link"></i>
            <div class="meals-slider">
                <div class="inner row row-cols-1 row-cols-sm-2  row-cols-md-3 row-cols-lg-4">
                    <?php
                    $sql = "SELECT places.Id,places.Name ,places.Description,places.ImgUrl FROM places JOIN category ON places.CategoreId=category.Id  where CategoreId=" . $category['Id'];
                    try {
                        $result = db_execute_query($conn, $sql);
                    } catch (Exception $e) {
                        return array("status" => "error", "code" => 404, "message" => $e->getMessage());
                    }
                    $rows = [];
                    while ($row = mysqli_fetch_assoc($result)) {
                        $rows[] = $row;
                    }

                    foreach ($rows as $row) { ?>
                        <div class="col slide">
                            <div class="card edit-card">
                                <img src="./assets/img/<?php echo $row['ImgUrl'] ?>" alt="Loadding">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $row['Name'] ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $row['Description'] ?>
                                    </p>
                                    <p class="card-text"><small class="text-body-seconndary">أخر تحديث قبل 3 أسابيع</small></p>
                                    <a href="showDetails?placeId=<?php echo $row['Id'] ?>" class="btn btn-outline-info">عرض التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>