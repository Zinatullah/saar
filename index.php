<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <link rel="icon" href="./images/favicon.png">
    <title>څار</title>
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="assets/js/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
    </style>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary" dir="rtl">
    <div class="container text-center align-items-center" style="margin-top: 50px;">
        <div style="margin-bottom: 30px;">
            <img src="./images/logo.png" alt="AOGC logo" height="150" width="150">
        </div>
        <div class="row text-center">
            <main class="form-signin m-auto col-md-4 col-sm-4 col-lg-4 ">
                <form action="login.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">سیستم ته دننه کېدل</h1>
                    <div class="form-floating">
                        <input name="email" required type="email" class="form-control text-start" id="floatingInput" placeholder="ایمیل آدرس">
                        <label for="floatingInput">ایمیل آدرس</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input name="pwd" required type="password" class="form-control" id="floatingPassword" placeholder="پټ نوم">
                        <label for="floatingPassword">پټ نوم</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-2" type="submit">دننه کېدل</button>
                    <p class="mt-5 mb-3 text-body-secondary">AOGC &copy; 2023</p>
                </form>
            </main>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>