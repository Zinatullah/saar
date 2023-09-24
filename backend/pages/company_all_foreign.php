<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

$query = "SELECT * FROM `companies_foreing` where suspend = 0 and block = 0 ";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_all($result);
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
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">ټول بهرني شرکتونه</h1>
                </div>
                <div class="my-4 w-100" width="900" height="380">
                    <section class="intro" dir='rtl'>
                        <div class="mask d-flex align-items-center h-100">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <thead>
                                                        <tr style="border: 1px solid lightgray">
                                                            <th style="border: 1px solid lightgray" scope="col">آیډي</th>
                                                            <th style="border: 1px solid lightgray" scope="col">د شرکت نوم</th>
                                                            <th style="border: 1px solid lightgray" scope="col">د مالک نوم</th>
                                                            <th style="border: 1px solid lightgray" scope="col">د معاون نوم</th>
                                                            <th style="border: 1px solid lightgray" scope="col">هېواد</th>
                                                            <th style="border: 1px solid lightgray" scope="col">جواز نمبر</th>
                                                            <th style="border: 1px solid lightgray" scope="col">تلیفون نمبر</th>
                                                            <th style="border: 1px solid lightgray" scope="col">نور معلومات</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data as $value) { ?>
                                                            <tr style="border-bottom: 1px solid lightgray">
                                                                <td style="border-right: 1px solid lightgray"><?php echo $value[0] ?></td>
                                                                <td style="border: 1px solid lightgray"><?php echo $value[1] ?></td>
                                                                <td style="border: 1px solid lightgray"><?php echo $value[2] ?></td>
                                                                <td style="border: 1px solid lightgray"><?php echo $value[4] ?></td>
                                                                <td style="border: 1px solid lightgray"><?php echo $value[5] ?></td>
                                                                <td style="border: 1px solid lightgray"><?php echo $value[11] ?></td>
                                                                <td style="border: 1px solid lightgray"><?php echo $value[7] ?></td>
                                                                <td scope="col-2" style="border: 1px solid lightgray">
                                                                    <a href="./company_foreign_details.php?id=<?php echo $value[0]?>">
                                                                        <button type="button" class="btn btn-success btn-sm px-3">جزئیات</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>

</body>

</html>