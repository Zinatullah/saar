<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

if (isset($_POST['edit'])) {
    $id = $_POST['edits'];
    $query = "SELECT * FROM contracts WHERE id = $id";
    $result = mysqli_query($con, $query);
    $pre_data = mysqli_fetch_row($result);
}


$query = "SELECT * FROM `companies_foreing` ";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_all($result);

$query1 = "SELECT * FROM `companies` ";
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
    <title>قرارداد ثبتول</title>
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
                    <h1 class="h2">قرارداد تغیرول </h1>
                </div>
                <div class="my-4 w-100" width="900" height="380" >
                    <div class="col-md-7 col-lg-12 col-md-12">
                        <form action="./contracts/contract_edit.php" enctype="multipart/form-data" method="POST">
                            <div class="row g-3 my-5">
                                <h4 class="text-center">
                                    <span class="badge p-3 rounded-pill text-bg-success"> د شرکت د قرارداد په هکله معلومات په دغه فورم کې ولیکئ
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
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">داخلي شرکت :</label>
                                    <select name="company" class="form-select form-select-lg" aria-label="Disabled select example" required>
                                        <option selected value="<?php echo $pre_data[1] ?>"><?php echo $pre_data[1] ?></option>
                                        <?php foreach ($data1 as $comapny) { ?>
                                            <option value="<?php echo $comapny[1] ?>"><?php echo $comapny[1] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">بهرنۍ شرکت :</label>
                                    <select name="company_foreign" class="form-select form-select-lg" aria-label="Disabled select example" required>
                                        <option selected value="<?php echo $pre_data[2] ?>" ><?php echo $pre_data[2] ?></option>
                                        <?php foreach ($data as $comapny) { ?>
                                            <option value="<?php echo $comapny[1] ?>"><?php echo $comapny[1] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">منبع هېواد :</label>
                                    <input type="hidden" value="<?PHP echo $pre_data[0] ?>" name="id">
                                    <input type="text" class="form-control" placeholder="منبع هېواد" value="<?PHP echo $pre_data[3] ?>" name="source_country" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د نفتي توکو نوعیت او انالېز :</label>
                                    <input type="text" class="form-control" placeholder="د نفتي توکو نوعیت او آنالیز" value="<?PHP echo $pre_data[4] ?>" name="analyz" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د نفتي توکو مقدار :</label>
                                    <input type="text" class="form-control" placeholder="د نفتي توکو مقدار" value="<?PHP echo $pre_data[5] ?>" name="quantity" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د بارګیري ځاي :</label>
                                    <input type="text" class="form-control" placeholder="د بارګیرۍ ځای" value="<?PHP echo $pre_data[6] ?>" name="place" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د انتقال لاره :</label>
                                    <input type="text" class="form-control" placeholder="د انتقال لاره" value="<?PHP echo $pre_data[7] ?>" name="path" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د ترانسپورت نوعیت :</label>
                                    <input type="text" class="form-control" placeholder="د ترانسپورت نوعیت" value="<?PHP echo $pre_data[8] ?>" name="transport" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">بندر :</label>
                                    <select name="loading" class="form-select" aria-label="Disabled select example">
                                        <option selected><?php echo $pre_data[9] ?></option>
                                        <option value="تورغندی">تورغندی</option>
                                        <option value="آقینه">آقینه</option>
                                        <option value="حیرتان">حیرتان</option>
                                        <option value="واخان">واخان</option>
                                        <option value="تورخم">تورخم</option>
                                        <option value="خوست">خوست</option>
                                        <option value="بارامچه">بارامچه</option>
                                        <option value="زرنج">زرنج</option>
                                        <option value="بندر شیرخان">شیرخان بندر</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د قرارداد موده :</label>
                                    <input type="text" name="contract_valid_date" class="form-control" id="lastName" placeholder="د قرارداد موده" value="<?PHP echo $pre_data[10] ?>" required="">
                                </div>


                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د في ټن قېمت :</label>
                                    <input type="text" name="price_per_ton" class="form-control" id="lastName" placeholder="د في ټن قېمت" value="<?PHP echo $pre_data[11] ?>" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د قرارداد دپیل نېټه :</label>
                                    <input type="date" name="contract_start_date" class="form-control" id="lastName" placeholder="د قرارداد دپیل نېټه" value="<?PHP echo $pre_data[12] ?>" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د بار ګیری مهال وېش :</label>
                                    <input type="date" name="loading_date" class="form-control" id="lastName" placeholder="" value="<?PHP echo $pre_data[13] ?>" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د قرارداد کافي :</label>
                                    <!-- <input type="file" name="contract_scan_copy" class="form-control" id="lastName" placeholder="" value="<?PHP echo $pre_data[14] ?>" required=""> -->
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" style="width: 150px"><?php echo $pre_data[15] ?></label>
                                        <input type="file" class="form-control" name='contract_scan_copy' value="<?php echo $pre_data[15] ?>" id="inputGroupFile01">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <textarea class="form-control" name="extra_info" placeholder="<?php echo $pre_data[14] ?>" aria-label="With textarea"></textarea>
                                    </div>
                                </div>

                            </div>
                            <hr class="">

                            <div class="col-sm-9 offset-2">
                                <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">ثبتول</button>
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