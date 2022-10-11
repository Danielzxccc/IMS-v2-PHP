<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login.css">
    <script defer src="./js/login.js"></script>
    <?php  require_once '../_global-imports.php';?>
    <title>Login</title>
</head>

<body class="bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">
        <div class="logo mb-5">
            <div class="img"><img src="../assets/logo1.png" width="140"></div>
        </div>
        <h3 class="mb-5">LOGIN</h3>
        <div class="login-form">
            <form id="_login">
                <div class="username mb-2">
                    <label for="username" class="form-label">username</label>
                    <input type="text" name="username" id="username" class="form-control bg-dark text-white" />
                </div>
                <div class="password mb-4">
                    <label for="username" class="form-label">password</label>
                    <input type="password" name="password" id="password" class="form-control bg-dark text-white" />
                </div>
                <div class="btn-login">
                    <button class="btn text-black" style="background-color:#2690c6;">ENTER</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>