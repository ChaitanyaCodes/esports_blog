<?php
include("libs/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7a78fbc91d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <title>E-Sports Blog</title>
</head>

<body>
    <div class="site-wrapper">
        <!-- Start of Header -->
        <header>
            <!-- Start of NavBar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="/index.php"><img src="./siteImg/logo.png" width="30" height="24" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <?php if (!(isset($_GET['activ']))) { ?>
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            <?php } else { ?>
                                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                            <?php } ?>

                            <!-- <a class="nav-link" href="index.php#blogs?activ=blogs">Blogs</a> -->

                            <?php if ((isset($_GET['activ']) && $_GET['activ'] == 'create')) { ?>
                                <a class="nav-link active" href="create_post.php?activ=create">Create Blog</a>
                            <?php } else { ?>
                                <a class="nav-link" href="create_post.php?activ=create">Create Blog</a>
                            <?php } ?>

                            <a class="nav-link" href="index.php#contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- add carousel here -->
            <!-- End of NavBar -->
        </header>