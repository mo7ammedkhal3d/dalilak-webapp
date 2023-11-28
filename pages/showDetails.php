<?php

require_once('inc/app.php');

$db_server = "localhost:3307";
$db_user = "root";
$db_user_pass = "";
$db_name = "dalilakdb";

$placeId = $_GET['placeId'];

if (isset($placeId)) {
    $conn = db_connect($db_server, $db_user, $db_user_pass, $db_name);

    $sql = "SELECT * FROM places WHERE Id = $placeId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    $place = $result->fetch_assoc();

    // $place = db_select($conn, 'places', '*', 'places.Id=' . $placeId);
    $attachments = db_select($conn, 'attachments', '*', 'attachments.PlaceId=' . $placeId); ?>

    <section class="show-detalies my-5">
        <div class="container">
            <div class="row">
                <div class="head-title">
                    <h1 class="text-center my-5">
                        <?php echo $place['Name'] ?>
                    </h1>
                </div>
                <div class="show-img my-5">
                    <div id="show-detalies-slider" class="carousel slide mb-6 show-detalies-slider" data-bs-ride="carousel">
                        <div class="carousel-indicators gap-3">
                            <?php $counter = 0;
                            foreach ($attachments as $attachment) { ?>
                                <button type="button" class="edit-data-bs-target active" data-bs-target="#show-detalies-slider"
                                    data-bs-slide-to="<?php echo $counter ?>" aria-current="true"
                                    aria-label="Slide <?php echo $counter + 1 ?>"></button>
                                <?php $counter++;
                            } ?>
                        </div>
                        <div class="carousel-inner">
                            <?php $counter = 0;
                            foreach ($attachments as $attachment) { ?>
                                <div class="carousel-item <?php if ($counter === 0) {
                                    echo 'active';
                                } ?>">
                                    <img class="bd-placeholder-img img-fluid edit-lannding-img"
                                        src="./assets/img/<?php echo $attachment['ImgUrl'] ?>" alt="Loadding">
                                </div>
                                <?php $counter++;
                            } ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#show-detalies-slider"
                            data-bs-slide="prev">
                            <span class="fa-solid fa-chevron-left previous-slide-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#show-detalies-slider"
                            data-bs-slide="next">
                            <span class="fa-solid fa-chevron-right next-slide-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="description">
                    <p>
                        <?php echo $place['Description'] ?>
                    </p>
                </div>
                <div class="show">
                    <iframe
                    src="<?php echo$place['MapSrc'];?>"
                        width="600"
                        height="450"
                        style="border:0; height: 50vw; width: 80vw; margin: 2% auto;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
    </section>
<?php } 
$conn->close();
}?>