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

        
        ::placeholder {
            color: rgba(0, 0, 0, .30) !important;
            /* opacity: 1; */
            /* Firefox */
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
                    <h1 class="h2">نوی داخلي شرکت اضافه کول</h1>
                </div>
                <div class="my-4 w-100" width="900" height="380">
                    <div class="col-md-7 col-lg-12 col-md-12">

                        <form method="POST" enctype="multipart/form-data" action="./companies/add_company.php">
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
                                    <input type="text" class="form-control" name="name" placeholder="نوم" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="license" style="text-align: right;" placeholder="  د جواز نمبر " required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="tax" placeholder="مالیاتي تصفیه" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="address" style="text-align: right;" placeholder=" رسمي آدرس" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" name="email" style="text-align: right;" placeholder="ایمیل آدرس" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="number" placeholder="د تلیفون نمبر" required='required'>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="quantity" placeholder=" د نفتي توکو مقدار په ټن سره" required='required'>
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="foreign_country" placeholder="منبع هېواد" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label for="time" class="form-label">د جواز د اعتبار تاریخ</label>
                                    <input type="date" class="form-control" name="license_expire_date" placeholder="د جواز د اعتبار تاریخ" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label for="time" class="form-label">د تورید موده</label>
                                    <input type="text" class="form-control" name="time" name='time' placeholder="" required='required'>
                                </div>
                                <div class="col-sm-4">
                                    <label for="stamp" class="form-label">نمونه مهر شرکت</label>
                                    <input type="file" class="form-control" name="stamp" name='stamp' placeholder="" required='required'>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-7 pt-5 row">
                                    <div class="col-sm-6 col-lg-6 pt-3">
                                        <span>
                                            د نفتي توکو نوعیت انتخاب کړئ:
                                        </span>
                                    </div>
                                    <div class="form-check  form-switch col-lg-3 col-sm-6" style="margin-right: -50px">
                                        <input type="checkbox" name="oil" value="oil" class="form-check-input" id="same-address">
                                        <label class="form-check-label" for="same-address"> : تېل</label>
                                        <br>
                                        <input type="checkbox" name="gas" value="gas" class="form-check-input" id="same-address">
                                        <label class="form-check-label" for="same-address"> : ګاز</label>
                                        <br>
                                        <input type="checkbox" name="condensate" value="condensate" class="form-check-input" id="same-address">
                                        <label class="form-check-label" for="same-address"> : کاندنسات</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="extra_info" class="form-label"> د نفتي موادو تاسیسات او ظرفیت په مرکز او ولایاتو کې</label>
                                <textarea type="text" class="form-control" name="extra_info" required='required'></textarea>
                            </div>
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
                        <input type="text" class="form-control" name="ceo_name" placeholder="نوم" required='required'>
                    </div>
                    <div class="col-sm-4 ">
                        <input type="text" class="form-control" name="ceo_fname" placeholder="د پلار نوم" required='required'>
                    </div>
                    <div class="col-sm-4 ">
                        <input type="text" class="form-control" name="ceo_lname" placeholder="تخلص" required='required'>
                    </div>

                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="ceo_email" style="text-align: right;" placeholder="ایمیل آدرس" required='required'>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="ceo_phone" style="text-align: right;" placeholder="تلیفون نمبر" required='required'>
                    </div>
                    <div class="col-sm-6">
                        <label for="ceo_sign" class="form-label">امضاء</label>
                        <input type="file" class="form-control" id="ceo_sign" name="ceo_sign" placeholder="د رئیس امضا" required='required'>
                    </div>
                    <div class="col-sm-6">
                        <label for="ceo_tazkira" class="form-label">تذکره</label>
                        <input type="file" class="form-control" id="ceo_tazkira" name="ceo_tazkira" placeholder="تذکره" required='required'>
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
                        <input type="text" class="form-control" name="dep_name" placeholder="نوم" required='required'>
                    </div>
                    <div class="col-sm-4 ">
                        <input type="text" class="form-control" name="dep_fname" placeholder="د پلار نوم" required='required'>
                    </div>
                    <div class="col-sm-4 ">
                        <input type="text" class="form-control" name="def_lname" placeholder="تخلص" required='required'>
                    </div>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="dep_email" style="text-align: right;" placeholder="د ایمیل آدرس" required='required'>
                    </div>

                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="dep_phone" style="text-align: right;" placeholder="د تلیفون نمبر" required='required'>
                    </div>
                    <div class="col-sm-6">
                        <label for="dep_sign" class="form-label">امضاء</label>
                        <input type="file" class="form-control" id="dep_sign" name="dep_sign" placeholder="امضاء" required='required'>
                    </div>
                    <div class="col-sm-6">
                        <label for='dep_tazkira' class="form-label">تذکره</label>
                        <input type="file" class="form-control" id="dep_tazkira" name="dep_tazkira" placeholder="تذکره" required='required'>
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