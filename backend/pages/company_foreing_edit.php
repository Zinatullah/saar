<?php

header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

if (isset($_POST['edit'])) {

    $id = $_POST['edits'];
    $query = "SELECT * FROM companies_foreing WHERE id = $id";
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_row($result);
}


?>

<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <script src="./../assets/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.118.2">
    <title>بهرنۍ شرکت ثبتول</title>
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
                    <h1 class="h2">د بهرني شرکت تغیرول</h1>
                </div>
                <div class="my-4 w-100" width="900" height="380">
                    <div class="col-md-7 col-lg-12 col-md-12">

                        <form method="POST" enctype="multipart/form-data" action="./companies/company_foreing_edit.php">
                            <div class="row g-3 my-5">
                                <h4 class="text-center">
                                    <span class="badge p-3 rounded-pill text-bg-success"> د بهرني شرکت په هکله نوي معلومات په دقیقه توګه په دغه فورم کې ولیکئ
                                    </span>
                                </h4>
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <span style="position: relative; top:12px " class="p-2 badge text-bg-success">د شرکت اړوند معلومات</span>
                                    </div>
                                    <div class="col-sm-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for='' class="form-label">د شرکت نوم</label>
                                    <input type="hidden" name='id' value='<?php echo $data[0] ?>' />
                                    <input type="text" class="form-control" name="name" placeholder="د قراردادي شرکت نوم" value="<?php echo $data[1] ?>" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label for='' class="form-label">آدرس</label>
                                    <input type="text" class="form-control" name="address" placeholder="آدرس" value="<?php echo $data[6] ?>" required="">
                                </div>

                                <div class="col-sm-6">
                                    <label for='' class="form-label">د تلیفون نمبر</label>
                                    <input type="number" class="form-control" style="text-align: right;" name="phone" placeholder="د تلیفون نمبر" value="<?php echo $data[7] ?>" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label for='' class="form-label">ایمیل آدرس</label>
                                    <input type="email" class="form-control" style="text-align: right;" name="email" placeholder="ایمیل آدرس" value="<?php echo $data[8] ?>" required="">
                                </div>

                                <div class="col-sm-6">
                                    <label for='' class="form-label">د هېواد نوم</label>
                                    <input type="text" class="form-control" style="text-align: right;" name="country" placeholder="د هېواد نوم" value="<?php echo $data[11] ?>" required="">
                                </div>

                                <div class="col-sm-2">
                                    <label for='' class="form-label">د جواز نمبر</label>
                                    <input type="number" class="form-control" style="text-align: right;" name="license" placeholder="د جواز نمبر" value="<?php echo $data[9] ?>" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for='license_copy' class="form-label">د جواز د کافي</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01" style="width: 150px"><?php echo $data[12] ?></label>
                                        <input type="file" class="form-control" name='license_copy' value='<?php echo $data[10] ?>' id="inputGroupFile01">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for='license_date' class="form-label">د جواز د اعتبار موده</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01" style="width: 150px"><?php echo $data[10] ?></label>
                                        <input type="date" class="form-control" name='license_date' value='<?php echo $data[10] ?>' id="inputGroupFile01">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for='' class="form-label">د مالک نوم</label>
                                    <input type="text" class="form-control" name="ceo" placeholder="د مالک نوم" value="<?php echo $data[2] ?>" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label for='' class="form-label">د مالک نمبر</label>
                                    <input type="text" class="form-control" name="ceo_phone" placeholder="د مالک نمبر" value="<?php echo $data[3] ?>" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label for='' class="form-label">د معاون نوم</label>
                                    <input type="text" class="form-control" name="dep" placeholder="د معاون نوم" value="<?php echo $data[4] ?>" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label for='' class="form-label">د معاون نمبر</label>
                                    <input type="text" class="form-control" name="dep_phone" placeholder="د معاون نمبر" value="<?php echo $data[5] ?>" required="">
                                </div>

                                <hr class="">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6 ">
                                    <button class="w-100 btn btn-primary btn-lg" name='submit' type="submit">ثبتول</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </main>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>
</body>

</html>