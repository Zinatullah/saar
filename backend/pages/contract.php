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
                    <h1 class="h2">نوی قرارداد ثبتول </h1>
                </div>
                <div class="my-4 w-100" width="900" height="380">
                    <div class="col-md-7 col-lg-12 col-md-12">
                        <form class="needs-validation" novalidate="">
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

                                <div class="col-sm-12">
                                    <select class="form-select form-select-lg" aria-label="Disabled select example">
                                        <option selected>شرکت انتخاب کړئ</option>
                                        <option value="1">لمړی</option>
                                        <option value="2">دوهم</option>
                                        <option value="3">دریم</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="منبع هېواد" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="د نفتي توکو نوعیت او آنالیز" value="" required="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="د نفتي توکو مقدار" value="" required="">
                                </div>



                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="د بارګیرۍ ځای" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="د انتقال لاره" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="د ترانسپورت نوعیت" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-select" aria-label="Disabled select example">
                                        <option selected>بندر انتخاب کړئ</option>
                                        <option value="1">تورغندی</option>
                                        <option value="2">آقینه</option>
                                        <option value="3">حیرتان</option>
                                        <option value="3">واخان</option>
                                        <option value="3">تورخم</option>
                                        <option value="3">خوست</option>
                                        <option value="3">بارامچه</option>
                                        <option value="3">زرنج</option>
                                        <option value="3">شیرخان بندر</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="د قرارداد موده" value="" required="">
                                </div>


                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="lastName" placeholder="د في ټن قېمت" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د قرارداد دپیل نېټه</label>
                                    <input type="date" class="form-control" id="lastName" placeholder="د قرارداد دپیل نېټه" value="" required="">
                                </div>

                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د بار ګیری مهال وېش</label>
                                    <input type="date" class="form-control" id="lastName" placeholder="" value="" required="">
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">د قرارداد کافي</label>
                                    <input type="file" class="form-control" id="lastName" placeholder="" value="" required="">
                                </div>

                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <textarea class="form-control" placeholder="د في ټن د انتقال، ترانزیت، ګمرکي محصول، مالیاتو او نورو فیسونو لګښتونه" aria-label="With textarea"></textarea>
                                    </div>
                                </div>

                            </div>
                            <hr class="">

                            <div class="col-sm-9 offset-2">
                                <button class="w-100 btn btn-primary btn-lg" type="submit">ثبتول</button>
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