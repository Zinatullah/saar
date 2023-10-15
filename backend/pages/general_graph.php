<?php
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
}

if (isset($_POST['submit'])) {
    $ports = $_POST['port'];
    $type = $_POST['type'];
    $type1 = $_POST['type1'];
    $graph = $_POST['graph'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    // echo $start_date. ' ' . $end_date;
    $valueList = implode("', '", $ports);

    $query = "SELECT port, type, sum($type1) FROM daily_form WHERE port IN ('$valueList') and type = '$type' and timestamp between '$start_date' and '$end_date' group by port";
    // echo $query;
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_all($result);


    $data_ports = [];
    $data_values = [];

    foreach ($data as $element) {
        array_push($data_ports, $element[0]);
        array_push($data_values, $element[2]);
    }

    $json_data_ports = json_encode($data_ports);
    $json_data_values = json_encode($data_values);
}

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
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="d-flex navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <h1 class="h2"> عمومي راپور </h1>
                            </ul>
                            <!-- <span class="d-flex" role="search">
                                <a href="./graph_daily.php" class="">
                                    <span class="btn btn-primary">
                                        ګراف کتل
                                    </span>
                                </a>
                                <a href="./graph_daily_one.php" class="mx-1">
                                    <span class="btn btn-secondary">
                                        ګراف کتل
                                    </span>
                                </a>
                                <a href="./graph_daily_two.php" class="mx-1">
                                    <span class="btn btn-danger">
                                        ګراف کتل
                                    </span>
                                </a>
                                <a href="./graph_daily_three.php" class="mx-1">
                                    <span class="btn btn-primary">
                                        ګراف کتل
                                    </span>
                                </a>
                            </span> -->
                        </div>
                    </div>
                </nav>

                <div class="my-4 w-100" width="900" height="380">
                    <hr style="border: 2px solid black">
                    <div class="bd-example-snippet bd-code-snippet">
                        <div class="bd-example m-0 border-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">بندر</th>
                                        <th scope="col">مقدار</th>
                                        <th scope="col">
                                            <?php
                                            if ($type1 == 'afs_price') {
                                                echo 'په افغانی';
                                            } else if ($type1 == 'dol_price') {
                                                echo 'په ډالر';
                                            } else if ($type1 == 'service_fees') {
                                                echo 'خدمات';
                                            } else {
                                                echo 'مقدار';
                                            }

                                            ?>
                                        </th>
                                        <!-- <th scope="col"><?php echo $type1 ?></th> -->
                                        <th scope="col" class="text-center">تاریخ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $element) { ?>
                                        <tr>
                                            <td><?php echo $element[0] ?></td>
                                            <td><?php echo $element[1] ?></td>
                                            <td><?php echo $element[2] ?></td>
                                            <td class="text-center"><?php echo $start_date . ' _________ ' . $end_date ?></td>
                                            <!-- <td>ټن</td> -->
                                            <!-- <td class="text-center">
                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                                    </svg>
                                                </button>
                                            </td> -->
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class=" w-50" width="900" height="380" style="margin-right: 20%;">
                    <main>
                        <canvas id="myChart"></canvas>
                    </main>
            </main>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" dir="rtl">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" dir="" style="display: block; background: #1E3050; color: white;">
                    <span>
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">د ګراف جوړېدو لپاره لاندې فورم ډک کړئ</h1>
                    </span>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 20px; background: #1e3050">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512" fill="white" style="background: #1e3050;">
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
                <form action="./general_graph.php" method="POST">
                    <div class="modal-body">

                        <!-- PORT -->
                        <div>
                            <h4>
                                <span class="mt-3 badge w-25" style="background-color: #1E3050;">بندر </span>
                            </h4>
                            <hr class="my-2">
                            <div class="mb-3 form-check form-switch d-flex justify-content-around">
                                <?php foreach ($data1 as $element) { ?>
                                    <span>
                                        <input name="port[]" value="<?php echo $element[0] ?>" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1">
                                        <label class="form-check-label" for="flexSwitchCheckChecked1"><?php echo $element[0] ?></label>
                                    </span>
                                <?php } ?>
                                <span>
                                    <input class="form-check-input" type="hidden" role="switch" id="flexSwitchCheckChecked1">
                                    <label class="form-check-label" for="flexSwitchCheckChecked1"></label>
                                </span>
                            </div>
                        </div>

                        <!-- TYPE -->
                        <div>
                            <h4>
                                <span class="mt-3 badge w-25" style="background-color: #1E3050;">نوعیت</span>
                            </h4>
                            <hr class="my-3">
                            <div class="mb-3 form-check form-switch d-flex justify-content-around">
                                <span>
                                    <input name="type" value='پطرول' class="form-check-input" type="radio" role="switch" required id="flexSwitchCheckChecked11">
                                    <label class="form-check-label" for="flexSwitchCheckChecked11">پطرول</label>
                                </span>
                                <span>
                                    <input name="type" value='ډیزل' class="form-check-input" type="radio" role="switch" required id="flexSwitchCheckChecked12">
                                    <label class="form-check-label" for="flexSwitchCheckChecked12">ډیزل</label>
                                </span>
                                <span>
                                    <input name="type" value='ګاز' class="form-check-input" type="radio" role="switch" required id="flexSwitchCheckChecked13">
                                    <label class="form-check-label" for="flexSwitchCheckChecked13">ګاز</label>
                                </span>
                                <br>
                            </div>
                        </div>


                        <!--  -->
                        <div>
                            <h4>
                                <span class="mt-3 badge w-25" style="background-color: #1E3050;">نوعیت</span>
                            </h4>
                            <hr class="my-1">
                            <div class="mb-3 form-check form-switch d-flex justify-content-around">
                                <span>
                                    <input name="type1" value="quantity" class="form-check-input" type="radio" role="switch" required id="flexSwitchCheckChecked1111">
                                    <label class="form-check-label" for="flexSwitchCheckChecked1111">مقدار</label>
                                </span>
                                <span>
                                    <input name="type1" value="service_fees" class="form-check-input" type="radio" role="switch" required id="flexSwitchCheckChecked123">
                                    <label class="form-check-label" for="flexSwitchCheckChecked123">حق الخدمت</label>
                                </span>
                                <span>
                                    <input name="type1" value="afs_price" class="form-check-input" type="radio" role="switch" required id="flexSwitchCheckChecked133">
                                    <label class="form-check-label" for="flexSwitchCheckChecked133">په افغانۍ</label>
                                </span>
                                <span>
                                    <input name="type1" value='dol_price' class="form-check-input" type="radio" role="switch" required id="flexSwitchCheckChecked133">
                                    <label class="form-check-label" for="flexSwitchCheckChecked133">په ډالر</label>
                                </span>
                                <br>
                            </div>
                        </div>

                        <!-- GRAPH -->
                        <div>
                            <h4>
                                <span class="mt-3 badge w-25" style="background-color: #1E3050;">د ګراف ډول</span>
                            </h4>
                            <hr class="my-1">
                            <div class="mb-3 form-check form-switch d-flex justify-content-around">
                                <span>
                                    <input name="graph" value="graph_line" class="form-check-input" type="radio" role="switch" id="line_graph" required>
                                    <label class="form-check-label" for="line_graph">لاین ګراف</label>
                                </span>
                                <span>
                                    <input name="graph" value="graph_barchart" class="form-check-input" type="radio" role="switch" id="pie_chart" required>
                                    <label class="form-check-label" for="pie_chart">بار چارت</label>
                                </span>
                                <span>
                                    <input name="graph" value="graph_piechart" class="form-check-input" type="radio" role="switch" id="barchart" required>
                                    <label class="form-check-label" for="barchart">پای چارت</label>
                                </span>
                                <span>
                                    <input name="graph" value="graph_doughnut" class="form-check-input" type="radio" role="switch" id="Doughnut" required>
                                    <label class="form-check-label" for="Doughnut">ډوناټ</label>
                                </span>
                                <br>
                            </div>
                        </div>

                        <!-- Date -->
                        <div>
                            <h4>
                                <span class="mt-3 badge w-25" style="background-color: #1E3050;">تاریخ</span>
                            </h4>
                            <hr class="my-2">
                            <div class="mb-3 form-check form-switch d-flex justify-content-around">
                                <span>
                                    <div class="input-group" dir='ltr'>
                                        <input type="date" name="start_date" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" required>
                                        <span class="input-group-text"> : د شروع وخت</span>
                                    </div>
                                </span>
                                <span>
                                    <div class="input-group" dir='ltr'>
                                        <input type="date" name="end_date" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" required>
                                        <span class="input-group-text"> : د پای وخت</span>
                                    </div>
                                </span>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center d-flext justify-content-around" dir="ltr">
                        <button type="button" class="w-25 btn btn-secondary" data-bs-dismiss="modal">بندول</button>
                        <button type="submit" name='submit' class="w-25 btn btn-primary">لېږل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./../assets/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/chart.umd.js"></script>


    <script>
        // var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        // var yValues = [55, 49, 44, 24, 15];
        var xValues = <?php echo $json_data_ports; ?>;
        var yValues = <?php echo $json_data_values; ?>;
        console.log(xValues)
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145",
            "#1eei32",
        ];

        (function() {

            new Chart("myChart", {
                type: "<?php echo $graph ?>",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    title: {
                        display: false,
                        text: "ټول ثبت شوي شرکتونه"
                    },
                    legend: {
                        display: false
                    }
                }
            });

            // $.ajax({
            //     url: "graph/daily_graph.php", // PHP file that retrieves the data
            //     type: "GET",
            //     dataType: "json",
            //     success: function(datas) {
            //         datas.forEach((element) => {
            //             console.log(element)
            //             xValues.push(element.port)
            //             yValues.push(element.total)

            //         });

            //     },


            //     error: function() {
            //         console.log("Error occurred while retrieving data.");
            //     },
            // });
        })();
    </script>
</body>

</html>