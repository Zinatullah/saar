<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");


$id = $_GET['id'];

$pre_query = "SELECT *  FROM daily_form WHERE id = $id";
$pre_result = mysqli_query($con, $pre_query);
$pre_data = mysqli_fetch_row($pre_result);

$today = date("Y-m-d 0:00:01");
$today_end = date("Y-m-d 23:59:59");

$query = "SELECT * FROM companies_foreing where block = 0 and suspend = 0 ";

$result = mysqli_query($con, $query);
$data = mysqli_fetch_all($result);

$query1 = "SELECT * FROM companies where block = 0 and suspend = 0 ";

$result1 = mysqli_query($con, $query1);
$data1 = mysqli_fetch_all($result1);

$query2 = "SELECT min(rate) as rate FROM rate_custom where timestamp >= '$today'";
$result2 = mysqli_query($con, $query2);
$data2 = mysqli_fetch_assoc($result2);


$query3 = "SELECT min(rate) as rate FROM rate_dolar where timestamp >= '$today'";
$result3 = mysqli_query($con, $query3);
$data3 = mysqli_fetch_assoc($result3);
$data33 = mysqli_fetch_all($result3);
// print_r($result3['num_rows']);s

$query4 = "SELECT min(rate) as rate FROM rate_oil where timestamp >= '$today' ";
$result4 = mysqli_query($con, $query4);
$data4 = mysqli_fetch_assoc($result4);

$query5 = "SELECT min(rate) as rate FROM rate_gas where timestamp >= '$today'";
$result5 = mysqli_query($con, $query5);
$data5 = mysqli_fetch_assoc($result5);
// print_r($result3);

$query6 = "SELECT min(rate) as rate FROM rate_15_days where timestamp >= '$today'";
$result6 = mysqli_query($con, $query6);
$data6 = mysqli_fetch_assoc($result6);

// echo time();

?>


<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <script src="./../assets/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.118.2">
    <title>څار</title>
    <link href="./../assets/bootstrap.rtl.min.css" rel="stylesheet">
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
    <script src="./../assets/jquery.min.js"></script>
    <link rel="icon" href="../../images/favicon.png">
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

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-gray">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">ورځنۍ فورمه</h1>
                </div>
                <div class="my-4 w-100 text-bg-secondary" width="900" height="380">
                    <div class="col-md-7 col-lg-12 col-md-12 p-3">
                        <div class="row g-3 my-3">
                            <h4 class="text-center">
                                <span class="badge p-3 rounded-pill text-bg-dark">د نظارت لپاره ورځنۍ فورمه
                                </span>
                            </h4>

                            <div class="col-sm-12">
                                <div class="col-sm-4 text-center">
                                    <span style="position: relative; top:12px; font-size: 18px " class="p-2 badge text-center text-bg-warning">یوازې داخلي شرکت او قرارداد انتخاب کړئ نورې برخې په اوتومات ډول ډکیږي</span>
                                </div>
                                <div class="col-sm-12">
                                    <hr style="border: 2px solid white;">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <input disabled type="text" name="country" class="form-control form-control-lg" id="country" value="<?php echo $pre_data['1'] ?>" required>

                            </div>

                            <div class="col-sm-6">
                                <input disabled type="text" name="country" class="form-control form-control-lg" id="country" value="<?php echo $pre_data['2'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">منبع هېواد</label>
                                <input disabled type="text" name="country" class="form-control" id="country" value="<?php echo $pre_data['3'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د جنس نوعیت</label>
                                <input disabled type="text" name="type" class="form-control" id="type" value="<?php echo $pre_data['4'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">مارکه</label>
                                <input disabled type="text" name="mark" class="form-control" id="mark" value="<?php echo $pre_data['5'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د جنس مقدار</label>
                                <input disabled type="text" name="quantity" class="form-control" id="quantity" value="<?php echo $pre_data['6'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د شرکت خرید في ټن</label>
                                <input disabled type="text" name="price" class="form-control" id="price" value="<?php echo $pre_data['7'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د ګمرک قېمت</label>
                                <input disabled type="text" name="custom_price" class="form-control" value="<?php echo $pre_data['8'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د ډالر ورځنۍ نرخ</label>
                                <input disabled type="text" name="dolar_price" class="form-control" value="<?php echo $pre_data['9'] ?>" required>
                            </div>
                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د تېلو نړیوال نرخ</label>
                                <input disabled type="text" name="dolar_price" class="form-control" value="<?php echo $pre_data['10'] ?>" required>
                            </div>
                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د ګاز نړیوال نرخ</label>
                                <input disabled type="text" name="dolar_price" class="form-control" value="<?php echo $pre_data['11'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <label for='dep_tazkira' class="form-label">د امارتي شرکت ۱۵ ورځنۍ قېمت</label>
                                <input disabled type="text" name="fifteen_days" class="form-control" value="<?php echo $pre_data['12'] ?>" required>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <span style="position: relative; top:12px; font-size: 18px;" class="p-2 badge text-bg-danger">دغه برخه تاسو په خپله ډکه کړئ</span>
                                </div>
                                <div class="col-sm-12" style="color: white">
                                    <hr class="" style="color: white; font-weight:500; border: 2px solid white;">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="bandar_price" class="form-control" placeholder="بندري قیمت" value="<?php echo $pre_data['13'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="custom" class="form-control" placeholder="ګمرکي محصول" value="<?php echo $pre_data['14'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="transit" class="form-control" placeholder="ترانزیت" value="<?php echo $pre_data['15'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="tax" class="form-control" placeholder="مالیات" value="<?php echo $pre_data['16'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="fees" class="form-control" placeholder="فیسونه" value="<?php echo $pre_data['17'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="transport_price" class="form-control" placeholder="<?php echo $pre_data['18'] ?>" value="<?php echo $pre_data['18'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="service_fees" class="form-control" placeholder="<?php echo $pre_data['19'] ?>" value="<?php echo $pre_data['19'] ?>" required>
                            </div>

                            <div class="col-sm-4">
                                <input disabled type="number" style="text-align: right;" name="material_price" class="form-control" placeholder="د جنس په اساس" value="<?php echo $pre_data['20'] ?>" required>
                            </div>
                            <div class="col-sm-6">
                                <input disabled type="number" style="text-align: right;" name="afs_price" class="form-control" placeholder="په افغانۍ" value="<?php echo $pre_data['21'] ?>" required>
                            </div>
                            <div class="col-sm-6">
                                <input disabled type="number" style="text-align: right;" name="dol_price" class="form-control" placeholder="په ډالر" value="<?php echo $pre_data['22'] ?>" required>
                            </div>
                        </div>
                        <hr class="">

                        <div class="row g-3 my-5">
                            <div class="col-sm-3 col-md-3"></div>
                            <div class="col-sm-3 col-md-3">
                                <a href="./daily_form_edit.php?id=<?php echo $pre_data[0] ?>">
                                    <button style="width: 100%" type="submit" class="btn btn-info btn-lg">تغیرول</button>
                                </a>
                            </div>
                            <div class="col-sm-3 col-md-3">
                                <form action="./forms/remove.php" method="POST">
                                    <input type="hidden" name="remove" value="<?php echo $pre_data[0] ?>">
                                    <button style="width: 100%" name="delete" type="submit" class="btn btn-danger btn-lg">لمنځه وړل</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>
    <script src="./forms/countries.js"></script>

</body>

</html>