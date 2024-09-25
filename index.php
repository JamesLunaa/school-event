<?php
include('control/login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/styles/loginStyle.css">
    <link rel="icon" type="image/png" href="view/icons/stctiLogo.png">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>

    <div class="container vh-100 d-flex align-items-center justify-content-center">

        <div class="card pb-4 border w-50 shadow-lg" style="max-width: 400px;">
            <div class="card-header p-3 mb-4 text-center text-white">
                <h4>Panaghiusa 2024</h4>
            </div>
            <form action="index.php" method="post" class="px-4 pb-2">
                <div class="mb-3 text-center">
                    <img src="view/icons/stctiLogo.png" alt="" width="130" height="100" class="rounded-circle mb-3">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold">I.D Number</label>
                    <input type="text" name="user" class="form-control" id="exampleInputEmail1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary w-75">Sign In</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>