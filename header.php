<?php
include_once "includes/functions.inc.php";
?>
<!doctype html>
<html lang="he" dir="rtl">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
    <!-- links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Assistant|Heebo" rel="stylesheet">    <link rel="stylesheet" href="style/style.css">
    <title>תום פפר עבודות גינון</title>
  </head>
  <body class="text-right">
      
    <header>
      <!-- jumbotron START -->
        <div class="jumbotron jumbotron-fluid my-0 p-0 d-flex justify-content-center align-items-center">
            <h1 class="text-center m-0">תום פפר<div class="w-100 d-lg-none"></div> עבודות גינון</h1>
            <a id="down-arrow" href="#scroll-target"><i class="fas fa-angle-double-down fa-4x"></i></a>
        </div>
        <!-- jumbotron END -->
    </header>

        <nav class="navbar navbar-expand-md">
            <!-- burger toggler START -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <i class="fas fa-bars"></i>
        </button>
        <a id="responsive-contact" class="btn gold d-md-none ml-2">
            צור קשר
        </a>
        <a href="<?php echo $homeUrl ;?>" class="d-md-none ml-2">
            <i class="fas fa-home"></i>
        </a>
        <!-- burger toggler END -->
        <!-- nav links START -->
        <div id="collapse_target" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-md-block"><a href="<?php echo $homeUrl;?>" class="nav-link ml-5">בית</a></li>
                <li class="nav-item"><a href="#" class="nav-link ml-5">אודות</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link ml-5">שירותים</a></li>
                <li class="nav-item d-none d-md-block"><a href="#" class="nav-link btn gold">צור קשר</a></li>
            </ul>
        </div>
        <div id="scroll-target"></div>
        <!-- nav links END -->
    </nav>
    