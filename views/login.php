<?php if (!defined('RUN_APP')) {
    exit;
} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="<?= SITE_URL ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
<main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-4 p-3 rounded shadow-lg bg-body">
                <h2 class="text-center">Login</h2>
                <hr>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</body>

</html>