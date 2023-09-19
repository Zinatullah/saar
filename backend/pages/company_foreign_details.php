<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

$id = $_GET['id'];
$query = "SELECT * FROM `companies_foreing` where id = $id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_row($result);

?>

<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <script src="./../assets/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>څار</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard-rtl/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="./../assets/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="../../images/favicon.png">
    <meta name="theme-color" content="#712cf9">
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

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
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

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
    <link href="./../assets/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./../assets/dashboard.rtl.css" rel="stylesheet">
</head>

<body style="font-family: calibri !important;">
    <?php include_once('./../components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="يغلق"></button>
                    </div>
                    <?php include_once('./../components/sidebard.php') ?>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="text-align: center;">
                    <h1 class="h2">ځانګړی شرکت</h1>
                </div>
                <div class="my-4 w-100" width="900" height="380">
                    <main class="container">
                        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm" style="background-color: purple;">
                            <div class="lh-1">
                                <h1 class="h3 mb-0 text-white mb-4 pt-2 lh-1" style="text-align: center">شرکت : <?php echo $data[1] ?></h1>
                                <div class="row g-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h3> <span style="position: relative; top:20px " class="p-2 badge text-bg-success">د شرکت اړوند معلومات</span></h3>
                                        </div>
                                        <div class="col-sm-12">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <span class="form-control">آیډي : <?php echo $data[0] ?></span>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <span class="form-control">د تلیفون نمبر : <?php echo $data[7] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">ايمیل آدرس : <?php echo $data[8] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <span class="form-control">د جواز د اعتبار موده : <?php echo $data[10] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <span class="form-control">جواز نمبر : <?php echo $data[9] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">د جواز کافي : <?php echo $data[12] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">هېواد : <?php echo $data[11] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">رسمي آدرس : <?php echo $data[6] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">د شرکت د مالک نوم : <?php echo $data[2] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">د شرکت د مالک نمبر : <?php echo $data[3] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">د شرکت د معاون نوم : <?php echo $data[4] ?></span>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <span class="form-control">د شرکت د معاون نوم : <?php echo $data[5] ?></span>
                                    </div>
                                </div>

                                <div class="row g-3 my-5">
                                    <div class="col-sm-1 col-md-1"></div>
                                    <div class="col-sm-5 col-md-5">
                                        <form action="./company_foreing_edit.php" method="POST">
                                            <input type="hidden" name="edits" value="<?php echo $data[0] ?>">
                                            <button style="width: 100%" name="edit" type="submit" class="btn btn-primary btn-lg">تغیرول</button>
                                        </form>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <form action="./companies/remove_foreign_company.php.php" method="POST">
                                            <input type="hidden" name="remove" value="<?php echo $data[0] ?>">
                                            <button style="width: 100%" name="delete" type="submit" class="btn btn-warning btn-lg">لمنځه وړل</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </main>
                </div>
            </main>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>

</body>

</html>