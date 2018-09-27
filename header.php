<?php
include_once "includes/functions.inc.php";
?>
<!doctype html>
<html lang="he" dir="rtl">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <a href="<?php echo $url ;?>" class="d-md-none ml-2">
            <i class="fas fa-home"></i>
        </a>
        <!-- burger toggler END -->
        <!-- nav links START -->
        <div id="collapse_target" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-md-block"><a href="<?php echo $url;?>" class="nav-link ml-5">בית</a></li>
                <li class="nav-item"><a href="#" class="nav-link ml-5">אודות</a></li>
                <li class="nav-item"><a href="#" class="nav-link ml-5">שירותים</a></li>
                <li class="nav-item d-none d-md-block"><a href="#" class="nav-link btn gold">צור קשר</a></li>
            </ul>
        </div>
        <!-- nav links END -->
    </nav>
    