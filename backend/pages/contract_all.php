<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
}


$query = "SELECT * FROM `contracts` ";
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
                        <!-- <h5 class="offcanvas-title" id="sidebarMenuLabel">د افغانستان نفت او ګاز شرکت</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="يغلق"></button>
                    </div>
                    <?php include_once('./../components/sidebard.php') ?>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"> ټول قراردادونه</h1>
                </div>
                <div class="my-4 w-100" width="900" height="380">
                    <h3 class="text-center">
                        ټول ثبت شوي قراردادونه
                    </h3>
                    <div class="table-responsive small">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">داخلي شرکت</th>
                                    <th scope="col">بهرنۍ شرکت</th>
                                    <th scope="col">منبع هېواد</th>
                                    <th scope="col">د قرارداد موده</th>
                                    <!-- <th scope="col">تاریخ</th> -->
                                    <!-- <th scope="col">وخت</th> -->
                                    <th scope="col" style="text-align: left;">نور معلومات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $element) { ?>
                                    <tr>
                                        <td><?php echo $element[1] ?></td>
                                        <td><?php echo $element[2] ?></td>
                                        <td><?php echo $element[3] ?></td>
                                        <td><?php echo $element[10] ?></td>
                                        <!-- <?php $date = explode(' ', $element[18]); ?> -->
                                        <!-- <td><?php echo $date[0] ?></td> -->
                                        <!-- <?php $date = explode('.', $date[1]); ?> -->
                                        <!-- <td><?php echo $date[0] ?></td> -->
                                        <td style="text-align: left;">
                                            <form action="./contracts/contract_remove.php" method="POST" style="display: inline;">
                                                <input type="hidden" name="remove" value="<?php echo $element[0] ?>">
                                                <button name="delete" type="submit" class="btn btn-sm " title="له منځه وړل">
                                                    <svg fill="blue" width="20px" height="20px" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M0.425 0.2a0.025 0.025 0 0 1 0.025 0.025v0.25a0.075 0.075 0 0 1 -0.075 0.075H0.225a0.075 0.075 0 0 1 -0.075 -0.075V0.225a0.025 0.025 0 0 1 0.025 -0.025h0.25Zm-0.025 0.05H0.2v0.225a0.025 0.025 0 0 0 0.025 0.025h0.15a0.025 0.025 0 0 0 0.025 -0.025v-0.225ZM0.225 0.075a0.025 0.025 0 0 1 0.025 -0.025h0.1a0.025 0.025 0 0 1 0.025 0.025v0.025h0.1a0.025 0.025 0 0 1 0 0.05H0.125a0.025 0.025 0 1 1 0 -0.05h0.1V0.075Z" />
                                                    </svg>
                                                </button>
                                            </form>
                                            <span>
                                                <a href="./contract_details.php?id=<?php echo $element[0] ?>" title="نور معلومات">
                                                    <!-- <button type="button" class="btn btn-success btn-sm"> -->
                                                    <svg width="20" height="20" viewBox="0 0 1.2 1.2" version="1" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#2196F3" cx="24" cy="24" r="21" d="M1.125 0.6A0.525 0.525 0 0 1 0.6 1.125A0.525 0.525 0 0 1 0.075 0.6A0.525 0.525 0 0 1 1.125 0.6z" />
                                                        <path fill="#fff" d="M0.55 0.55h0.1v0.275h-0.1z" />
                                                        <path fill="#fff" cx="24" cy="16.5" r="2.5" d="M0.663 0.413A0.063 0.063 0 0 1 0.6 0.475A0.063 0.063 0 0 1 0.537 0.413A0.063 0.063 0 0 1 0.663 0.413z" />
                                                    </svg>
                                                    <!-- </button> -->
                                                </a>
                                            </span>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>

</body>

</html>