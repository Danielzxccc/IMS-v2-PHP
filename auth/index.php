<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="./js/login.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>