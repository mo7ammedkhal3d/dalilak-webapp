<?php

require_once('inc/app.php');


$pageName = myAppRequestRoute();

if($pageName=='/'){
    $pageName = 'home';
}

if(str_contains($pageName,'?')){
    $pageName =explode('?',$pageName)[0]; 
}

$filePath = 'pages/' . $pageName . '.php';

if (file_exists($filePath)){
    require_once('layout/header.php');
    require_once($filePath);
    require_once('layout/footer.php');
} else {
    require_once('layout/header.php');
    require_once('pages/notfound.php');
    require_once('layout/footer.php');
}


// $_SESSION['fields'] = array();
unset($_SESSION['fields']);
unset($_SESSION['errors']);
