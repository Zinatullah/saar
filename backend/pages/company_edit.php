<?php

header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

if (isset($_POST['edit'])) {

    $id = $_POST['edits'];
    $query = "SELECT * FROM companies WHERE id = $id";
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
    <meta name="generator" content="Hugo 0.128.2">
    <title>نوی شرکت ثبتول</title>
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
            --bd-violet-rgb: 122.520718, 44.062154, 249.437846;

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
                    <h1 class="h2">نوی شرکت اضافه کول</h1>
                </div>
                <div class="my-4 px-3 w-100 text-bg-secondary" width="900" height="380">
                    <div class="col-md-7 col-lg-12 col-md-12">

                        <form method="POST" enctype="multipart/form-data" action="./companies/company_edit.php">
                            <div class="row g-3 my-5">
                                <h4 class="text-center">
                                    <span class="badge p-3 rounded-pill text-bg-success"> د شرکت اړوند معلومات په دغه فورم کې ولیکئ
                                    </span>
                                </h4>

                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <h4><span style="position: relative; top:12px " class="p-2 badge text-bg-success">د شرکت اړوند معلومات</span></h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <hr>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <label class="form-label">نوم</label>
                                    <input type="text" class="form-control" value="<?php echo $data[1] ?>" name="name" placeholder="نوم" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">د جواز نمبر</label>
                                    <input type="number" class="form-control" value="<?php echo $data[2] ?>" name="license" style="text-align: right;" placeholder="  د جواز نمبر " required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">د جواز د اعتبار تاریخ</label>
                                    <input type="date" class="form-control" value="<?php echo $data[3] ?>" name="license_expire_date" placeholder="د جواز د اعتبار تاریخ" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">مالیاتی تصفیه</label>
                                    <input type="text" class="form-control" value="<?php echo $data[4] ?>" name="tax" placeholder="مالیاتي تصفیه" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">رسمي آدرس</label>
                                    <input type="text" class="form-control" value="<?php echo $data[5] ?>" name="address" style="text-align: right;" placeholder=" رسمي آدرس" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">ایمیل آدرس</label>
                                    <input type="email" class="form-control" value="<?php echo $data[6] ?>" name="email" style="text-align: right;" placeholder="ایمیل آدرس" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">د تلیفون نمبر</label>
                                    <input type="text" class="form-control" value="<?php echo $data[7] ?>" name="number" placeholder="د تلیفون نمبر" required='required'>
                                </div>

                                <div class="col-sm-4">
                                    <label class="form-label">د نفتی توکو نوعیت</label>
                                    <input type="text" class="form-control" value="<?php echo $data[8] ?>" name="oil_type" placeholder="د نفتي توکو نوعیت" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">د نفتي توکو مقدار</label>
                                    <input type="text" class="form-control" value="<?php echo $data[9] ?>" name="quantity" placeholder="د نفتي توکو مقدار" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">منبع هېواد</label>
                                    <input type="text" class="form-control" value="<?php echo $data[10] ?>" name="foreign_country" placeholder="منبع هېواد" required='required'>
                                </div>

                                <div class="col-sm-4">
                                    <label class="form-label">د مهر نمونه</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" style="width: 150px"><?php echo $data[11] ?></label>
                                        <input type="file" class="form-control" name='stamp' value="<?php echo $data[11] ?>" id="inputGroupFile01">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <label class="form-label">د تورید موده</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" style="width: 150px"><?php echo $data[12] ?></label>
                                        <input type="date" class="form-control" name='time' value='<?php echo $data[12] ?>' id="inputGroupFile01">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label class="form-label"> د نفتي موادو تاسیسات او ظرفیت په مرکز او ولایاتو کې</label>
                                    <textarea type="text" class="form-control" value="<?php echo $data[13] ?>" name="extra_info" required='required'>
                                    </textarea>
                                </div>
                            </div>

                            <div class="row g-3 ">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <h4><span style="position: relative; top:12px; " class="p-2 badge text-bg-success"> د شرکت د رئیس شهرت</span></h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">نوم</label>
                                    <input type="text" class="form-control" value="<?php echo $data[14] ?>" name="ceo_name" placeholder="نوم" required='required'>
                                </div>
                                <div class="col-sm-4 ">
                                    <label class="form-label">د پلار نوم</label>
                                    <input type="text" class="form-control" value="<?php echo $data[15] ?>" name="ceo_fname" placeholder="د پلار نوم" required='required'>
                                </div>
                                <div class="col-sm-4 ">
                                    <label class="form-label">تخلص</label>
                                    <input type="text" class="form-control" value="<?php echo $data[16] ?>" name="ceo_lname" placeholder="تخلص" required='required'>
                                </div>

                                <div class="col-sm-8">
                                    <label class="form-label">ایمیل آدرس</label>
                                    <input type="email" class="form-control" value="<?php echo $data[20] ?>" name="ceo_email" style="text-align: right;" placeholder="ایمیل آدرس" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">د تلیفون نمبر</label>
                                    <input type="text" class="form-control" value="<?php echo $data[21] ?>" name="ceo_phone" style="text-align: right;" placeholder="تلیفون نمبر" required='required'>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">امضاء</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" style="width: 150px"><?php echo $data[24] ?></label>
                                        <input type="file" class="form-control" name='ceo_sign' value='<?php echo $data[24] ?>' id="inputGroupFile01">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">تذکره</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" style="width: 150px"><?php echo $data[26] ?></label>
                                        <input type="file" class="form-control" name='ceo_tazkira' value='<?php echo $data[26] ?>' id="inputGroupFile01">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 py-5">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <h4><span style="position: relative; top:12px; " class="p-2 badge text-bg-success"> د شرکت د معاون شهرت</span></h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">نوم</label>
                                    <input type="hidden" value="<?php echo $data[0] ?>" name='id'>
                                    <input type="text" class="form-control" value="<?php echo $data[17] ?>" name="dep_name" placeholder="نوم" required='required'>
                                </div>
                                <div class="col-sm-4 ">
                                    <label class="form-label">د پلار نوم</label>
                                    <input type="text" class="form-control" value="<?php echo $data[18] ?>" name="dep_fname" placeholder="د پلار نوم" required='required'>
                                </div>
                                <div class="col-sm-4 ">
                                    <label class="form-label">تخلص</label>
                                    <input type="text" class="form-control" value="<?php echo $data[19] ?>" name="def_lname" placeholder="تخلص" required='required'>
                                </div>
                                <div class="col-sm-8">
                                    <label class="form-label">د ایمیل آدرس</label>
                                    <input type="email" class="form-control" value="<?php echo $data[22] ?>" name="dep_email" style="text-align: right;" placeholder="د ایمیل آدرس" required='required'>
                                </div>

                                <div class="col-sm-4">
                                    <label class="form-label">د تلیفون نمبر</label>
                                    <input type="text" class="form-control" value="<?php echo $data[23] ?>" name="dep_phone" style="text-align: right;" placeholder="د تلیفون نمبر" required='required'>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">امضاء</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" style="width: 150px"><?php echo $data[25] ?></label>
                                        <input type="file" class="form-control" name='dep_sign' value='<?php echo $data[25] ?>' id="inputGroupFile01">
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <label class="form-label">تذکره</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" style="width: 150px"><?php echo $data[27] ?></label>
                                        <input type="file" class="form-control" name='dep_tazkira' value='<?php echo $data[27] ?>' id="inputGroupFile01">
                                    </div>
                                </div>
                            </div>


                            <hr class="my-4">
                            <div class="col-sm-9 offset-2">
                                <button class="w-100 btn btn-primary btn-lg" name='submit' type="submit">ثبتول</button>
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