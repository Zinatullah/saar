<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
}



$query1 = "SELECT * FROM `rate_dolar` order by id desc LIMIT 7 ";
$query2 = "SELECT * FROM `rate_oil` order by id desc LIMIT 7 ";
$query3 = "SELECT * FROM `rate_gas` order by id desc LIMIT 7 ";
$query4 = "SELECT * FROM `rate_condensate` order by id desc LIMIT 7 ";
$query5 = "SELECT * FROM `rate_custom` order by id desc LIMIT 7 ";
$query6 = "SELECT * FROM `rate_15_days` order by id desc LIMIT 7 ";

$result = mysqli_query($con, $query1);
$data1 = mysqli_fetch_all($result);

$result2 = mysqli_query($con, $query2);
$data2 = mysqli_fetch_all($result2);

$result3 = mysqli_query($con, $query3);
$data3 = mysqli_fetch_all($result3);

$result4 = mysqli_query($con, $query4);
$data4 = mysqli_fetch_all($result4);

$result5 = mysqli_query($con, $query5);
$data5 = mysqli_fetch_all($result5);

$result6 = mysqli_query($con, $query6);
$data6 = mysqli_fetch_all($result6);

$con->close();

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
                        <!-- <h5 class="offcanvas-title" id="sidebarMenuLabel">د افغانستان نفت او ګاز شرکت</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="يغلق"></button>
                    </div>
                    <?php include_once('./../components/sidebard.php') ?>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">ورځنۍ نرخونه</h1>
                </div>
                <div class="py-3 w-100" width="900" height="380" style="background: #1f0a48">
                    <h3 class="text-center text-light">
                        ورځني نرخونه باید هره ورځ ثبت کړل شي
                    </h3>
                    <hr style="border: 2px solid white">
                    <div class="px-3 row">
                        <div class="g-0">
                            <div class="row">
                                <main class="col-2 col-md-4 col-sm-6 col-lg-2 form-signin ">
                                    <div>
                                        <h6 class="text-center my-2">
                                            <span class="text-light text-center">د ډالر نرخ</span>
                                        </h6>
                                        <form action="./daily_rates/dolar.php" method="POST" class="card p-1">
                                            <div class="input-group">
                                                <input type="number" name="dolar_rate" class="form-control" placeholder="-------" required>
                                                <button type="submit" class="btn btn-secondary">ثبتول</button>
                                            </div>
                                        </form>
                                        <ul class="list-group mt-1">

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span style="padding-right: 10px;">
                                                    <strong>
                                                        تاریخ
                                                    </strong>
                                                </span>
                                                <strong>نرخ</strong>
                                            </li>
                                            <?php foreach ($data1 as $element) { ?>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <?php

                                                    $date = $element[2];
                                                    $date = explode(' ', $date);

                                                    $dateString = $date[0];
                                                    $dateFormatted = date("n/j/y", strtotime($dateString));


                                                    ?>

                                                    <span style="position: absolute; top: 2; right: 0; cursor: pointer;">
                                                        <a href="./daily_rates/remove_dolar.php?id=<?php echo $element[0] ?>">
                                                            <svg fill="red" width="20px" height="20px" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M0.425 0.2a0.025 0.025 0 0 1 0.025 0.025v0.25a0.075 0.075 0 0 1 -0.075 0.075H0.225a0.075 0.075 0 0 1 -0.075 -0.075V0.225a0.025 0.025 0 0 1 0.025 -0.025h0.25Zm-0.025 0.05H0.2v0.225a0.025 0.025 0 0 0 0.025 0.025h0.15a0.025 0.025 0 0 0 0.025 -0.025v-0.225ZM0.225 0.075a0.025 0.025 0 0 1 0.025 -0.025h0.1a0.025 0.025 0 0 1 0.025 0.025v0.025h0.1a0.025 0.025 0 0 1 0 0.05H0.125a0.025 0.025 0 1 1 0 -0.05h0.1V0.075Z" />
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span style="padding-right: 10px;"><?php echo $dateFormatted ?></span>
                                                    <strong><?php echo $element[1] . '$' ?></strong>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </main>
                                <main class="col-2 col-md-4 col-sm-6 col-lg-2 form-signin">
                                    <div>
                                        <h6 class=" text-center my-2">
                                            <span class="text-light text-center">د تېلو نړیوال نرخ</span>
                                        </h6>
                                        <form action="./daily_rates/oil.php" method="POST" class="card p-1">
                                            <div class="input-group">
                                                <input type="number" name="oil_rate" class="form-control" placeholder="-------" required>
                                                <button type="submit" class="btn btn-secondary">ثبتول</button>
                                            </div>
                                        </form>
                                        <ul class="list-group mt-1">

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span style="padding-right: 10px;">
                                                    <strong>
                                                        تاریخ
                                                    </strong>
                                                </span>
                                                <strong>نرخ</strong>
                                            </li>
                                            <?php foreach ($data2 as $element) { ?>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <?php

                                                    $date = $element[2];
                                                    $date = explode(' ', $date);

                                                    $dateString = $date[0];
                                                    $dateFormatted = date("n/j/y", strtotime($dateString));


                                                    ?>

                                                    <span style="position: absolute; top: 2; right: 0; cursor: pointer;">
                                                        <a href="./daily_rates/remove_oil.php?id=<?php echo $element[0] ?>">
                                                            <svg fill="red" width="20px" height="20px" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M0.425 0.2a0.025 0.025 0 0 1 0.025 0.025v0.25a0.075 0.075 0 0 1 -0.075 0.075H0.225a0.075 0.075 0 0 1 -0.075 -0.075V0.225a0.025 0.025 0 0 1 0.025 -0.025h0.25Zm-0.025 0.05H0.2v0.225a0.025 0.025 0 0 0 0.025 0.025h0.15a0.025 0.025 0 0 0 0.025 -0.025v-0.225ZM0.225 0.075a0.025 0.025 0 0 1 0.025 -0.025h0.1a0.025 0.025 0 0 1 0.025 0.025v0.025h0.1a0.025 0.025 0 0 1 0 0.05H0.125a0.025 0.025 0 1 1 0 -0.05h0.1V0.075Z" />
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span style="padding-right: 10px;"><?php echo $dateFormatted ?></span>
                                                    <strong><?php echo $element[1] . '$' ?></strong>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </main>
                                <main class="form-signin col-md-4 col-sm-6 col-lg-2">
                                    <div>
                                        <h6 class=" text-center my-2">
                                            <span class="text-light text-center">د ګاز نړیوال نرخ</span>
                                        </h6>
                                        <form action="./daily_rates/gas.php" method="POST" class="card p-1">
                                            <div class="input-group">
                                                <input type="number" name="gas_rate" class="form-control" placeholder="-------" required>
                                                <button type="submit" class="btn btn-secondary">ثبتول</button>
                                            </div>
                                        </form>
                                        <ul class="list-group mt-1">
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span style="padding-right: 10px;">
                                                    <strong>
                                                        تاریخ
                                                    </strong>
                                                </span>
                                                <strong>نرخ</strong>
                                            </li>
                                            <?php foreach ($data3 as $element) { ?>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <?php
                                                    $date = $element[2];
                                                    $date = explode(' ', $date);
                                                    $dateString = $date[0];
                                                    $dateFormatted = date("n/j/y", strtotime($dateString));
                                                    ?>
                                                    <span style="position: absolute; top: 2; right: 0; cursor: pointer;">
                                                        <a href="./daily_rates/remove_gas.php?id=<?php echo $element[0] ?>">
                                                            <svg fill="red" width="20px" height="20px" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M0.425 0.2a0.025 0.025 0 0 1 0.025 0.025v0.25a0.075 0.075 0 0 1 -0.075 0.075H0.225a0.075 0.075 0 0 1 -0.075 -0.075V0.225a0.025 0.025 0 0 1 0.025 -0.025h0.25Zm-0.025 0.05H0.2v0.225a0.025 0.025 0 0 0 0.025 0.025h0.15a0.025 0.025 0 0 0 0.025 -0.025v-0.225ZM0.225 0.075a0.025 0.025 0 0 1 0.025 -0.025h0.1a0.025 0.025 0 0 1 0.025 0.025v0.025h0.1a0.025 0.025 0 0 1 0 0.05H0.125a0.025 0.025 0 1 1 0 -0.05h0.1V0.075Z" />
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span style="padding-right: 10px;"><?php echo $dateFormatted ?></span>
                                                    <strong><?php echo $element[1] . '$' ?></strong>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </main>
                                <main class="form-signin col-sm-6 col-lg-2 col-md-4">
                                    <div>
                                        <h6 class=" text-center my-2">
                                            <span class="text-light text-center">د کاندنسات نړیوال نرخ</span>
                                        </h6>
                                        <form action="./daily_rates/condensate.php" method="POST" class="card p-1">
                                            <div class="input-group">
                                                <input type="number" name="condensate_rate" class="form-control" placeholder="-------" required>
                                                <button type="submit" class="btn btn-secondary">ثبتول</button>
                                            </div>
                                        </form>
                                        <ul class="list-group mt-1">

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span style="padding-right: 10px;">
                                                    <strong>
                                                        تاریخ
                                                    </strong>
                                                </span>
                                                <strong>نرخ</strong>
                                            </li>
                                            <?php foreach ($data4 as $element) { ?>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <?php
                                                    $date = $element[2];
                                                    $date = explode(' ', $date);

                                                    $dateString = $date[0];
                                                    $dateFormatted = date("n/j/y", strtotime($dateString));


                                                    ?>
                                                    <span style="position: absolute; top: 2; right: 0; cursor: pointer;">
                                                        <a href="./daily_rates/remove_condensate.php?id=<?php echo $element[0] ?>">
                                                            <svg fill="red" width="20px" height="20px" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M0.425 0.2a0.025 0.025 0 0 1 0.025 0.025v0.25a0.075 0.075 0 0 1 -0.075 0.075H0.225a0.075 0.075 0 0 1 -0.075 -0.075V0.225a0.025 0.025 0 0 1 0.025 -0.025h0.25Zm-0.025 0.05H0.2v0.225a0.025 0.025 0 0 0 0.025 0.025h0.15a0.025 0.025 0 0 0 0.025 -0.025v-0.225ZM0.225 0.075a0.025 0.025 0 0 1 0.025 -0.025h0.1a0.025 0.025 0 0 1 0.025 0.025v0.025h0.1a0.025 0.025 0 0 1 0 0.05H0.125a0.025 0.025 0 1 1 0 -0.05h0.1V0.075Z" />
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span style="padding-right: 10px;"><?php echo $dateFormatted ?></span>
                                                    <strong><?php echo $element[1] . '$' ?></strong>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </main>
                                <main class="form-signin col-sm-6 col-lg-2 col-md-4">
                                    <div>
                                        <h6 class=" text-center my-2">
                                            <span class="text-light text-center">د ګمرک قیمت</span>
                                        </h6>
                                        <form action="./daily_rates/custom.php" method="POST" class="card p-1">
                                            <div class="input-group">
                                                <input type="number" name="custom_rate" class="form-control" placeholder="-------" required>
                                                <button type="submit" class="btn btn-secondary">ثبتول</button>
                                            </div>
                                        </form>
                                        <ul class="list-group mt-1">

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span style="padding-right: 10px;">
                                                    <strong>
                                                        تاریخ
                                                    </strong>
                                                </span>
                                                <strong>نرخ</strong>
                                            </li>
                                            <?php foreach ($data5 as $element) { ?>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <?php

                                                    $date = $element[2];
                                                    $date = explode(' ', $date);

                                                    $dateString = $date[0];
                                                    $dateFormatted = date("n/j/y", strtotime($dateString));


                                                    ?>
                                                    <span style="position: absolute; top: 2; right: 0; cursor: pointer;">
                                                        <a href="./daily_rates/remove_custom.php?id=<?php echo $element[0] ?>">
                                                            <svg fill="red" width="20px" height="20px" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M0.425 0.2a0.025 0.025 0 0 1 0.025 0.025v0.25a0.075 0.075 0 0 1 -0.075 0.075H0.225a0.075 0.075 0 0 1 -0.075 -0.075V0.225a0.025 0.025 0 0 1 0.025 -0.025h0.25Zm-0.025 0.05H0.2v0.225a0.025 0.025 0 0 0 0.025 0.025h0.15a0.025 0.025 0 0 0 0.025 -0.025v-0.225ZM0.225 0.075a0.025 0.025 0 0 1 0.025 -0.025h0.1a0.025 0.025 0 0 1 0.025 0.025v0.025h0.1a0.025 0.025 0 0 1 0 0.05H0.125a0.025 0.025 0 1 1 0 -0.05h0.1V0.075Z" />
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span style="padding-right: 10px;"><?php echo $dateFormatted ?></span>
                                                    <strong><?php echo $element[1] . '$' ?></strong>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </main>
                                <main class="form-signin col-sm-6 col-lg-2 col-md-4">
                                    <div>
                                        <h6 class=" text-center my-2">
                                            <span class="text-light text-center">۱۵ ورځنی قیمت</span>
                                        </h6>
                                        <form action="./daily_rates/service.php" method="POST" class="card p-1">
                                            <div class="input-group">
                                                <input type="number" name="service_rate" class="form-control" placeholder="-------" required>
                                                <button type="submit" class="btn btn-secondary">ثبتول</button>
                                            </div>
                                        </form>
                                        <ul class="list-group mt-1">

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span style="padding-right: 10px;">
                                                    <strong>
                                                        تاریخ
                                                    </strong>
                                                </span>
                                                <strong>نرخ</strong>
                                            </li>
                                            <?php foreach ($data6 as $element) { ?>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <?php
                                                    $date = $element[2];
                                                    $date = explode(' ', $date);
                                                    $dateString = $date[0];
                                                    $dateFormatted = date("n/j/y", strtotime($dateString));
                                                    ?>
                                                    <span style="position: absolute; top: 2; right: 0; cursor: pointer;">
                                                        <a href="./daily_rates/remove_service.php?id=<?php echo $element[0] ?>">
                                                            <svg fill="red" width="20px" height="20px" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M0.425 0.2a0.025 0.025 0 0 1 0.025 0.025v0.25a0.075 0.075 0 0 1 -0.075 0.075H0.225a0.075 0.075 0 0 1 -0.075 -0.075V0.225a0.025 0.025 0 0 1 0.025 -0.025h0.25Zm-0.025 0.05H0.2v0.225a0.025 0.025 0 0 0 0.025 0.025h0.15a0.025 0.025 0 0 0 0.025 -0.025v-0.225ZM0.225 0.075a0.025 0.025 0 0 1 0.025 -0.025h0.1a0.025 0.025 0 0 1 0.025 0.025v0.025h0.1a0.025 0.025 0 0 1 0 0.05H0.125a0.025 0.025 0 1 1 0 -0.05h0.1V0.075Z" />
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span style="padding-right: 10px;"><?php echo $dateFormatted ?></span>
                                                    <strong><?php echo $element[1] . '$' ?></strong>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>

</body>

</html>