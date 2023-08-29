<?php if (!defined('RUN_APP')) {
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Page Not Found</title>
    <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">
    <style>
        * {
            font-family: "Arvo", serif;
        }

        .page_404 img {
            width: 100%;
        }

        .four_zero_four_bg {
            background-image: url(<?=SITE_URL?>/assets/img/404.gif);
            height: 400px;
            background-position: center;
        }

        .four_zero_four_bg h1 {
            font-size: 80px;
        }

        .four_zero_four_bg h3 {
            font-size: 80px;
        }

        .link_404 {
            color: #fff !important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
        }



    </style>
</head>
<body>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">

                    <div class="four_zero_four_bg">
                        <h1 class="text-center ">404</h1>
                    </div>

                    <div>
                        <h3 class="h2">
                            Look like you're lost
                        </h3>

                        <p>the page you are looking for not available!</p>

                        <a href="<?=SITE_URL?>" class="link_404">Go to Home</a>
                    </div>

            </div>
        </div>
    </div>
</main>
</body>
</html>