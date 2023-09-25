<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

$query = "SELECT * FROM companies_foreing where block = 0 and suspend = 0 ";

$result = mysqli_query($con, $query);
$data = mysqli_fetch_all($result);

$query1 = "SELECT * FROM companies where block = 0 and suspend = 0 ";

$result1 = mysqli_query($con, $query1);
$data1 = mysqli_fetch_all($result1);

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
                <div class="my-4 w-100 text-bg-secondary" width="900" height="380" >
                    <div class="col-md-7 col-lg-12 col-md-12 p-3">
                        <form action="./forms/gas_daily_form.php" method="post" enctype="multipart/form-data">
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
                                        <hr>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <select name="interior_country" id="getQuoteBtn" class="form-select form-select-lg" aria-label="Disabled select example">
                                        <option selected>داخلي شرکت انتخاب کړئ</option>
                                        <?php foreach ($data1 as $comapny) { ?>
                                            <option value="<?php echo $comapny[1] ?>"><?php echo $comapny[1] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <select name='contract' id='dataContainer' class="form-select form-select-lg" aria-label="Disabled select example">
                                        <option id='' selected> قرارداد انتخاب کړئ</option>
                                        <option value="" id=""></option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="country" class="form-control" id="country" placeholder="منبع هېواد" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="type" class="form-control" id="type" placeholder="د جنس نوعیت" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="mark" class="form-control" id="mark" placeholder="مارکه" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="د جنس مقدار" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="price" class="form-control" id="price" placeholder="د شرکت خرید (في ټن)" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="custom_price" class="form-control" placeholder="د ګمرک قیمت" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="dolar_price" class="form-control" placeholder="د ډالر ورځنۍ نرخ" value="" required="">
                                </div>

                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <span style="position: relative; top:12px; font-size: 18px " class="p-2 badge text-bg-danger">دغه برخه تاسو په خپله ډکه کړئ</span>
                                    </div>
                                    <div class="col-sm-12" style="color: white">
                                        <hr class="" style="color: white; font-weight:500"> 
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="bandar_price" class="form-control" placeholder="بندري قیمت" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="custom" class="form-control" placeholder="ګمرکي محصول" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="transit" class="form-control" placeholder="ترانزیت" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="tax" class="form-control" placeholder="مالیات" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="fees" class="form-control" placeholder="فیسونه" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="transport_price" class="form-control" placeholder="ترانسپورتي مصارف" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="fifteen_days" class="form-control" placeholder="د امارتي شرکت ۱۵ ورځنی قيمت" value="" required="">
                                </div>




                                <div class="col-sm-4">
                                    <input type="text" name="service_fees" class="form-control" placeholder="(۰.۶) د حق الخدمت فیصدي" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" name="material_price" class="form-control" placeholder="د جنس په اساس" value="" required="">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="afs_price" class="form-control" placeholder="په افغانۍ" value="" required="">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="dol_price" class="form-control" placeholder="په ډالر" value="" required="">
                                </div>
                                <!-- <div class="col-sm-12">
                                    <input type="date" class="form-control" placeholder="تاريخ" value="" required="">
                                </div> -->
                            </div>
                            <hr class="">

                            <div class="col-sm-9 offset-2">
                                <button class="w-100 btn btn-dark btn-lg" name="submit" type="submit">ثبتول</button>
                            </div>
                        </form>
                    </div>

                </div>
            </main>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>
    <script src="./forms/countries.js"></script>

</body>

</html>