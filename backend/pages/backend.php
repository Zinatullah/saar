<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
}


$dd = date('d');
$dd = $dd - 1;
$today_date_start = date('Y-m-d 00:00:01');
$today_date_end = date('Y-m-d 11:59:59');

$yesterday_start = date('Y-m-' . $dd . ' 00:00:01');
$yesterday_end = date('Y-m-' . $dd . ' 11:59:59');

// echo $yesterday_end;

// $general_query1 = "select type, sum(dol_price) from daily_form where timestamp between '$today_date_start' and '$today_date_end' group by type";
$general_query1 = "SELECT today_result.type, today_result.dol_price, yesterday_result.dol_price
FROM
  (select type, sum(dol_price) as dol_price from daily_form where timestamp between '$today_date_start' and '$today_date_end' group by type) as today_result
JOIN
  (select type, sum(dol_price) as dol_price from daily_form where timestamp between '$yesterday_start' and '$yesterday_end' group by type
) AS yesterday_result on yesterday_result.type = today_result.type";
// echo $general_query1;
// echo '<br>';
$general_result1 = mysqli_query($con, $general_query1);
$general_data1 = mysqli_fetch_all($general_result1);
// print_r($general_data1);

// $general_query2 = "select type, sum(dol_price) from daily_form where timestamp between '$yesterday_start' and '$yesterday_end' group by type";
// echo $general_query2;
// $general_result2 = mysqli_query($con, $general_query2);
// $general_data2 = mysqli_fetch_all($general_result2);

// print_r($general_data1);

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
    <script src="./graph/home.js"></script>

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
                    <h1 class="h2">کورپاڼه</h1>
                </div>
                <div class="my-4 w-100 text-white" width="900" height="380" style="border-radius: 20px;background: #1f0a48">
                    <div class="col-md-7 col-lg-12 col-md-12 p-3">

                        <main class="col-2 col-md-12 col-sm-12 col-lg-12 form-signin ">
                            <div>
                                <h4 class="text-center my-2 mb-4">
                                    <span class="text-light text-center">ورځنۍ تحلیل</span>
                                </h4>
                            </div>

                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>

                                        <th>د جنس نوم</th>
                                        <th>نن ورځ</th>
                                        <th>تېره ورځ</th>
                                        <th>تحلیل</th>
                                        <th>فیصدي</th>
                                        <th>نتیجه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($general_data1 as $element) { ?>
                                        <tr>
                                            <td><?php echo $element[0] ?></td>
                                            <td><?php echo $element[1] ?></td>
                                            <td><?php echo $element[2] ?></td>


                                            <?php

                                            $yesterday = $element[2];
                                            $today = $element[1];

                                            $analyz = $today - $yesterday;
                                            $result = ($today * 100) / $yesterday;
                                            $result = $result - 100;

                                            ?>
                                            <td style="text-align: right" dir="ltr"><?php echo round($analyz, 2) ?></td>
                                            <td style="text-align: right" dir="ltr"><?php echo round($result, 2) ?></td>
                                            <td>
                                                <strong style="margin-left: 10px">
                                                    <svg style="display: <?php echo $analyz < 0 ? 'block' : 'none' ?>;" height="1em" viewBox="0 0 320 512" fill="#ff0000">
                                                        <path d="M2 334.5c-3.8 8.8-2 19 4.6 26l136 144c4.5 4.8 10.8 7.5 17.4 7.5s12.9-2.7 17.4-7.5l136-144c6.6-7 8.4-17.2 4.6-26s-12.5-14.5-22-14.5l-72 0 0-288c0-17.7-14.3-32-32-32L128 0C110.3 0 96 14.3 96 32l0 288-72 0c-9.6 0-18.2 5.7-22 14.5z" />
                                                    </svg>

                                                    <svg style="display: <?php echo $analyz > 0 ? 'block' : 'none' ?>" height="1em" viewBox="0 0 320 512" fill="#0b33f9">
                                                        <path d="M318 177.5c3.8-8.8 2-19-4.6-26l-136-144C172.9 2.7 166.6 0 160 0s-12.9 2.7-17.4 7.5l-136 144c-6.6 7-8.4 17.2-4.6 26S14.4 192 24 192H96l0 288c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32l0-288h72c9.6 0 18.2-5.7 22-14.5z" />
                                                    </svg>

                                                    <svg style="display: <?php echo $analyz == 0 ? 'block' : 'none' ?>" height="1em" viewBox="0 0 448 512">
                                                        <path d="M48 128c-17.7 0-32 14.3-32 32s14.3 32 32 32H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H48zm0 192c-17.7 0-32 14.3-32 32s14.3 32 32 32H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H48z" />
                                                    </svg>


                                                </strong>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </main>
                    </div>
                </div>
                <!-- <div class="my-4 w-100 text-white" width="900" height="380" style="border-radius: 20px;">
                    <div class="col-md-7 col-lg-12 col-md-12 p-3">
                        <svg height="1em" viewBox="0 0 320 512" fill="#ff0000">
                            <path d="M2 334.5c-3.8 8.8-2 19 4.6 26l136 144c4.5 4.8 10.8 7.5 17.4 7.5s12.9-2.7 17.4-7.5l136-144c6.6-7 8.4-17.2 4.6-26s-12.5-14.5-22-14.5l-72 0 0-288c0-17.7-14.3-32-32-32L128 0C110.3 0 96 14.3 96 32l0 288-72 0c-9.6 0-18.2 5.7-22 14.5z" />
                        </svg>
                        <svg height="1em" viewBox="0 0 320 512" fill="#0b33f9">
                            <path d="M318 177.5c3.8-8.8 2-19-4.6-26l-136-144C172.9 2.7 166.6 0 160 0s-12.9 2.7-17.4 7.5l-136 144c-6.6 7-8.4 17.2-4.6 26S14.4 192 24 192H96l0 288c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32l0-288h72c9.6 0 18.2-5.7 22-14.5z" />
                        </svg>
                        <svg height="1em" viewBox="0 0 448 512">
                            <path d="M48 128c-17.7 0-32 14.3-32 32s14.3 32 32 32H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H48zm0 192c-17.7 0-32 14.3-32 32s14.3 32 32 32H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H48z" />
                        </svg>
                    </div>
                </div> -->
            </main>
        </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./../assets/bootstrap.bundle.min.js"></script>


    <script>
        // var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        // var yValues = [55, 49, 44, 24, 15];
        var xValues = [];
        var yValues = [];
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145",
            "#1eei32",
        ];

        (function() {
            $.ajax({
                url: "graph/home.php", // PHP file that retrieves the data
                type: "GET",
                dataType: "json",
                success: function(datas) {
                    datas.forEach((element) => {
                        xValues.push(element.name)
                        var cut = (datas.length)
                        yValues.push(cut)

                    });

                    console.log(yValues)
                    new Chart("myChart", {
                        type: "pie",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "ټول ثبت شوي شرکتونه"
                            }
                        }
                    });
                },


                error: function() {
                    console.log("Error occurred while retrieving data.");
                },
            });
        })();
    </script>

</body>

</html>