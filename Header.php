<?php ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Phillip Clark - Web Developer / Graphic Designer</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Link main.css -->
        <link href="css/main.css" rel="stylesheet"/>
    </head>
    <body>



        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark darkRepeatBackground">
            <div class="container px-lg-5" >
                <a class="navbar-brand" href="index.html">Phillip Clark's Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a <?php if ($_SERVER['SCRIPT_NAME'] == "phllpclrk.com/index.php") { ?> 
         class="nav-link active" 
    <?php   } else {  ?>
         class="nav-link"
    <?php } ?>   aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a <?php if ($_SERVER['SCRIPT_NAME'] == "Resume.php") { ?> 
         class="nav-link active" 
    <?php   } else {  ?>
         class="nav-link"
    <?php } ?> href="Resume.php">Resume</a></li>
                        <li class="nav-item"><a <?php if ($_SERVER['SCRIPT_NAME'] == "Contact.php") { ?> 
         class="nav-link active" 
    <?php   } else {  ?>
         class="nav-link"
    <?php } ?> href="Contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar-->