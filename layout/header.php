<?php

require_once('inc/app.php');

$db_server = "localhost:3307";
$db_user = "root";
$db_user_pass = "";
$db_name = "dalilakdb";

$conn = db_connect($db_server, $db_user, $db_user_pass, $db_name);

$categories = db_select($conn, 'category', );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دليلك</title>

    <!-- Links -->
    
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/fendors/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/fendors/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/main.css">

</head>

<body>
    <!--#region HEADER -->
    <header>
        <!--#region navbar -->
        <nav class="navbar navbar-expand-lg edit-nav px-4 py-3" aria-label="Offcanvas navbar large">
            <div class="container-fluid">
                <a class="navbar-brand edit-navbar-brand" href="/Dalilak/">دليلك</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
                    aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title edit-title" id="offcanvasNavbar2Label">دليلك</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav gap-3 justify-content-start flex-grow-1 me-4 pe-5 edit-navigation">
                            <li><a class="nav-link active" aria-current="page" href="/Dalilak/">الرئيسية</a></li>
                            <?php
                            foreach ($categories as $category) { ?>
                                <li><a class="nav-link" aria-current="page"
                                        href='<?php echo $category['EngName'] ?>?categoryId=<?php echo $category['Id'] ?>'>
                                        <?php echo $category['Name'] ?>
                                    </a></li>
                            <?php } ?>
                            <li><a class="nav-link" aria-current="page" href="showDetails">عن المكلا</a></li>
                            <li><a class="nav-link" aria-current="page" href="#">عن دليلك</a></li>
                            <li><a class="nav-link" aria-current="page" href="#">تواصل معنا</a></li>
                        </ul>
                        <div class="searsh-area">
                            <i class="fa-solid fa-magnifying-glass searsh-icon"></i>
                            <input placeholder="ابحث" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--#endregion navbar -->

        <!--#region Hero -->
        <div id="hero-slider" class="carousel slide mb-6 hero-slider" data-bs-ride="carousel">
            <div class="carousel-indicators gap-3">
                <button type="button" class="edit-data-bs-target active" data-bs-target="#hero-slider"
                    data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" class="edit-data-bs-target" data-bs-target="#hero-slider" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" class="edit-data-bs-target" data-bs-target="#hero-slider" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" class="edit-data-bs-target" data-bs-target="#hero-slider" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img img-fluid edit-lannding-img" src="./assets/img/jmalmuk.jpg"
                        alt="Loadding">
                    <div class="carousel-caption dental-practice first-dental-practice">
                        <h1>أستكشف معا دليلك</h1>
                        <p>جمال مدينةالمكلا وروعتها</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img img-fluid edit-lannding-img" src="./assets/img/hussangwazi.jpg"
                        alt="Loadding">
                    <div class="carousel-caption dental-practice">
                        <p>معالم آثرية</p>
                        <h1>حصن الغويزي</h1>
                        <h1>أحد معالم المكلا الأثرية</h1>
                        <div class="container row ">
                            <button type="button">المزيد</button>
                            <button type="button">عرض الموقع</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img img-fluid edit-lannding-img" src="./assets/img/sefhmeed.jpg"
                        alt="Loadding">
                    <div class="carousel-caption dental-practice">
                        <p>منتزهات</p>
                        <h1>سيف حميد</h1>
                        <h1>أجمل الأماكن مع أطلالة بحر رائعة</h1>
                        <div class="container row ">
                            <button type="button">المزيد</button>
                            <button type="button">عرض الموقع</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img img-fluid edit-lannding-img" src="./assets/img/mena.jpg"
                        alt="Loadding">
                    <div class="carousel-caption dental-practice">
                        <p>منتزهات</p>
                        <h1>ميناء المكلا القديم</h1>
                        <h1>يعتبر ميناء المكلا القديم من أشهر .... </h1>
                        <div class="container row ">
                            <button type="button">المزيد</button>
                            <button type="button">عرض الموقع</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slider" data-bs-slide="prev">
                <span class="fa-solid fa-chevron-left previous-slide-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-slider" data-bs-slide="next">
                <span class="fa-solid fa-chevron-right next-slide-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--#endregion Hero -->
    </header>
    <!--#endregion HEADER -->

    <!--#region MAIN -->
    <main>