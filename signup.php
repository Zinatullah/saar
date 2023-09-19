<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <script src="./backend/assets/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>څار</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard-rtl/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="./backend/assets/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="icon" href="../backend/images/favicon.png">


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

    <link href="./backend/assets/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./backend/assets/dashboard.rtl.css" rel="stylesheet">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="calendar3" viewBox="0 0 16 16">
            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </symbol>
        <symbol id="cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
        <symbol id="door-closed" viewBox="0 0 16 16">
            <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z" />
            <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" />
        </symbol>
        <symbol id="file-earmark" viewBox="0 0 16 16">
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
        </symbol>
        <symbol id="file-earmark-text" viewBox="0 0 16 16">
            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
        </symbol>
        <symbol id="gear-wide-connected" viewBox="0 0 16 16">
            <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" />
        </symbol>
        <symbol id="graph-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
        </symbol>
        <symbol id="house-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
        </symbol>
        <symbol id="list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </symbol>
        <symbol id="people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
        </symbol>
        <symbol id="plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </symbol>
        <symbol id="puzzle" viewBox="0 0 16 16">
            <path d="M3.112 3.645A1.5 1.5 0 0 1 4.605 2H7a.5.5 0 0 1 .5.5v.382c0 .696-.497 1.182-.872 1.469a.459.459 0 0 0-.115.118.113.113 0 0 0-.012.025L6.5 4.5v.003l.003.01c.004.01.014.028.036.053a.86.86 0 0 0 .27.194C7.09 4.9 7.51 5 8 5c.492 0 .912-.1 1.19-.24a.86.86 0 0 0 .271-.194.213.213 0 0 0 .039-.063v-.009a.112.112 0 0 0-.012-.025.459.459 0 0 0-.115-.118c-.375-.287-.872-.773-.872-1.469V2.5A.5.5 0 0 1 9 2h2.395a1.5 1.5 0 0 1 1.493 1.645L12.645 6.5h.237c.195 0 .42-.147.675-.48.21-.274.528-.52.943-.52.568 0 .947.447 1.154.862C15.877 6.807 16 7.387 16 8s-.123 1.193-.346 1.638c-.207.415-.586.862-1.154.862-.415 0-.733-.246-.943-.52-.255-.333-.48-.48-.675-.48h-.237l.243 2.855A1.5 1.5 0 0 1 11.395 14H9a.5.5 0 0 1-.5-.5v-.382c0-.696.497-1.182.872-1.469a.459.459 0 0 0 .115-.118.113.113 0 0 0 .012-.025L9.5 11.5v-.003a.214.214 0 0 0-.039-.064.859.859 0 0 0-.27-.193C8.91 11.1 8.49 11 8 11c-.491 0-.912.1-1.19.24a.859.859 0 0 0-.271.194.214.214 0 0 0-.039.063v.003l.001.006a.113.113 0 0 0 .012.025c.016.027.05.068.115.118.375.287.872.773.872 1.469v.382a.5.5 0 0 1-.5.5H4.605a1.5 1.5 0 0 1-1.493-1.645L3.356 9.5h-.238c-.195 0-.42.147-.675.48-.21.274-.528.52-.943.52-.568 0-.947-.447-1.154-.862C.123 9.193 0 8.613 0 8s.123-1.193.346-1.638C.553 5.947.932 5.5 1.5 5.5c.415 0 .733.246.943.52.255.333.48.48.675.48h.238l-.244-2.855zM4.605 3a.5.5 0 0 0-.498.55l.001.007.29 3.4A.5.5 0 0 1 3.9 7.5h-.782c-.696 0-1.182-.497-1.469-.872a.459.459 0 0 0-.118-.115.112.112 0 0 0-.025-.012L1.5 6.5h-.003a.213.213 0 0 0-.064.039.86.86 0 0 0-.193.27C1.1 7.09 1 7.51 1 8c0 .491.1.912.24 1.19.07.14.14.225.194.271a.213.213 0 0 0 .063.039H1.5l.006-.001a.112.112 0 0 0 .025-.012.459.459 0 0 0 .118-.115c.287-.375.773-.872 1.469-.872H3.9a.5.5 0 0 1 .498.542l-.29 3.408a.5.5 0 0 0 .497.55h1.878c-.048-.166-.195-.352-.463-.557-.274-.21-.52-.528-.52-.943 0-.568.447-.947.862-1.154C6.807 10.123 7.387 10 8 10s1.193.123 1.638.346c.415.207.862.586.862 1.154 0 .415-.246.733-.52.943-.268.205-.415.39-.463.557h1.878a.5.5 0 0 0 .498-.55l-.001-.007-.29-3.4A.5.5 0 0 1 12.1 8.5h.782c.696 0 1.182.497 1.469.872.05.065.091.099.118.115.013.008.021.01.025.012a.02.02 0 0 0 .006.001h.003a.214.214 0 0 0 .064-.039.86.86 0 0 0 .193-.27c.14-.28.24-.7.24-1.191 0-.492-.1-.912-.24-1.19a.86.86 0 0 0-.194-.271.215.215 0 0 0-.063-.039H14.5l-.006.001a.113.113 0 0 0-.025.012.459.459 0 0 0-.118.115c-.287.375-.773.872-1.469.872H12.1a.5.5 0 0 1-.498-.543l.29-3.407a.5.5 0 0 0-.497-.55H9.517c.048.166.195.352.463.557.274.21.52.528.52.943 0 .568-.447.947-.862 1.154C9.193 5.877 8.613 6 8 6s-1.193-.123-1.638-.346C5.947 5.447 5.5 5.068 5.5 4.5c0-.415.246-.733.52-.943.268-.205.415-.39.463-.557H4.605z" />
        </symbol>
        <symbol id="search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </symbol>
    </svg>

    <?php include_once('./backend/components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <!-- <h5 class="offcanvas-title" id="sidebarMenuLabel">د افغانستان نفت او ګاز شرکت</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="يغلق"></button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <!-- Companies -->
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/backend.php">
                                    <svg class="bi">
                                        <use xlink:href="#house-fill" />
                                    </svg>
                                    کورپاڼه
                                </a>
                            </li>
                            <hr class="my-2">

                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-body-secondary text-uppercase">
                                <span> شرکتونه</span>
                                <a class="link-secondary" href="./backend.php" aria-label="إضافة تقرير جديد">
                                    <svg width="18px" height="18px" fill="#000000" width="800px" height="800px" viewBox="-2 0 16 16" id="company-16px" xmlns="http://www.w3.org/2000/svg">
                                        <path id="Path_133" data-name="Path 133" d="M323.5-192h-9a1.5,1.5,0,0,0-1.5,1.5V-176h12v-14.5A1.5,1.5,0,0,0,323.5-192ZM318-177v-3h2v3Zm6,0h-3v-3.5a.5.5,0,0,0-.5-.5h-3a.5.5,0,0,0-.5.5v3.5h-3v-13.5a.5.5,0,0,1,.5-.5h9a.5.5,0,0,1,.5.5Zm-8-12h2v2h-2Zm4,0h2v2h-2Zm-4,4h2v2h-2Zm4,0h2v2h-2Z" transform="translate(-313 192)" />
                                    </svg>
                                </a>
                            </h6>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/add_company.php">
                                    <svg width="13px" height="13px" viewBox="0 0 42.989 42.989" xmlns="http://www.w3.org/2000/svg">
                                        <path id="add" d="M631.793,354.3a3.1,3.1,0,0,1-2.491,2.491,133.9,133.9,0,0,1-35.627,0,3.1,3.1,0,0,1-2.491-2.491,133.9,133.9,0,0,1,0-35.627,3.1,3.1,0,0,1,2.491-2.491,133.9,133.9,0,0,1,35.627,0,3.1,3.1,0,0,1,2.491,2.491A133.9,133.9,0,0,1,631.793,354.3Zm-5.884-19.141c-3.97-.29-7.939-.43-11.909-.474-.031-4.206-.18-8.412-.487-12.619a1.311,1.311,0,0,0-2.622,0c-.307,4.2-.455,8.4-.487,12.606-4.2.032-8.4.18-12.606.487a1.312,1.312,0,0,0,0,2.622c4.206.307,8.412.456,12.619.487.044,3.97.184,7.939.474,11.909a1.311,1.311,0,0,0,2.622,0c.29-3.974.43-7.948.475-11.922,3.974-.044,7.948-.184,11.922-.474a1.312,1.312,0,0,0,0-2.622Z" transform="translate(-589.994 -314.994)" fill="#2d5be2" />
                                    </svg>
                                    نوی شرکت اضافه کول
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/add_foreign_company.php">
                                    <svg width="13px" height="13px" viewBox="0 0 42.989 42.989" xmlns="http://www.w3.org/2000/svg">
                                        <path id="add" d="M631.793,354.3a3.1,3.1,0,0,1-2.491,2.491,133.9,133.9,0,0,1-35.627,0,3.1,3.1,0,0,1-2.491-2.491,133.9,133.9,0,0,1,0-35.627,3.1,3.1,0,0,1,2.491-2.491,133.9,133.9,0,0,1,35.627,0,3.1,3.1,0,0,1,2.491,2.491A133.9,133.9,0,0,1,631.793,354.3Zm-5.884-19.141c-3.97-.29-7.939-.43-11.909-.474-.031-4.206-.18-8.412-.487-12.619a1.311,1.311,0,0,0-2.622,0c-.307,4.2-.455,8.4-.487,12.606-4.2.032-8.4.18-12.606.487a1.312,1.312,0,0,0,0,2.622c4.206.307,8.412.456,12.619.487.044,3.97.184,7.939.474,11.909a1.311,1.311,0,0,0,2.622,0c.29-3.974.43-7.948.475-11.922,3.974-.044,7.948-.184,11.922-.474a1.312,1.312,0,0,0,0-2.622Z" transform="translate(-589.994 -314.994)" fill="#2d5be2" />
                                    </svg>
                                    بهرنی شرکت اضافه کول
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/company_all.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z" />
                                        <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z" />
                                    </svg>
                                    ټول شرکتونه
                                </a>
                            </li>
                        </ul>

                        <!-- Contracts -->
                        <hr class="my-2">
                        <ul class="nav flex-column">
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-body-secondary text-uppercase">
                                <span>قراردادونه</span>
                                <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                                    <svg width="18px" height="18px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="m0 0h32v32h-32z" />
                                            <path d="m22.0092457 0 7.9907543 10.0183757v21.9816243h-28v-32zm-.9632457 2h-17.046v28h24v-19.282zm-4.046 9v5h5v2h-5v5h-2v-5h-5v-2h5v-5z" fill="#000000" fill-rule="nonzero" />
                                        </g>

                                    </svg>
                                </a>
                            </h6>


                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/contract.php">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>

                                    د قرارداد ثبتول
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/contract_all.php">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    ټول قراردادونه
                                </a>
                            </li>
                        </ul>

                        <!-- Gas and oil -->
                        <hr class="my-2">
                        <ul class="nav flex-column">
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-body-secondary text-uppercase">
                                <span> نفت او ګاز</span>
                                <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                                    <svg width='18px' height="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 201.539 201.539" style="enable-background:new 0 0 201.539 201.539;" xml:space="preserve">
                                        <path d="M168.287,24.851h-0.98V20.5c0-11.304-9.196-20.5-20.5-20.5h-31.667c-11.304,0-20.5,9.196-20.5,20.5v4.351H82.464
                        c-1.989,0-3.896,0.79-5.304,2.196L36.503,67.705c-1.406,1.407-2.196,3.314-2.196,5.304V190.52c0,6.076,4.943,11.02,11.02,11.02
                        h122.961c6.076,0,11.02-4.943,11.02-11.02V35.87C179.306,29.794,174.363,24.851,168.287,24.851z M109.639,20.5
                        c0-3.032,2.468-5.5,5.5-5.5h31.667c3.032,0,5.5,2.468,5.5,5.5v4.351h-42.667V20.5z M35.489,53.568c-1.989,0-3.897-0.79-5.304-2.197
                        l-5.756-5.757c-2.929-2.929-2.929-7.678,0-10.606l21.75-21.75c1.407-1.406,3.314-2.196,5.304-2.196c1.989,0,3.897,0.79,5.304,2.197
                        l5.756,5.757c2.929,2.929,2.929,7.678,0,10.606l-21.75,21.75C39.385,52.778,37.478,53.568,35.489,53.568z" />
                                    </svg>
                                </a>
                            </h6>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/gas_daily_form.php">
                                    <svg width="20px" height="20px" viewBox="0 0 1.71 1.71" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
                                        <path fill="#000000" fill-opacity="1" stroke-width="0.0045" stroke-linejoin="round" d="M0.962 0.427v0.281c0.041 -0.003 0.139 0.029 0.125 0.396 0.018 0.107 0.142 0.107 0.169 -0.036 0.027 -0.107 -0.045 -0.107 -0.08 -0.427 0 -0.036 0 -0.142 -0.142 -0.214v-0.036c0.142 0 0.249 0.178 0.249 0.214 0 0.036 -0.036 0.036 -0.036 0.036s0.009 0.214 0.045 0.249c0.036 0.036 0.027 0.143 0.027 0.214 0 0.071 -0.107 0.143 -0.142 0.143 -0.036 0 -0.142 0 -0.142 -0.107 0 -0.097 -0.015 -0.313 -0.071 -0.351v0.457c0.02 0 0.036 0.016 0.036 0.036v0.071H0.427V1.282c0 -0.02 0.016 -0.036 0.036 -0.036V0.427a0.071 0.071 0 0 1 0.071 -0.071h0.356A0.071 0.071 0 0 1 0.962 0.427ZM0.579 0.748h0.267c0.02 0 0.045 -0.025 0.045 -0.045V0.472c0 -0.02 -0.025 -0.045 -0.045 -0.045H0.579c-0.02 0 -0.045 0.025 -0.045 0.045v0.232c0 0.02 0.025 0.045 0.045 0.045Z" />
                                    </svg>
                                    ګاز ثبتول
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/oil_daily_form.php">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 489.9 489.9;" xml:space="preserve" width="18" height="18">
                                        <g>
                                            <g>
                                                <path d="M15.434 3.039V0.728A0.726 0.726 0 0 0 14.706 0H8.769a0.726 0.726 0 0 0 -0.728 0.728V2.796H5.208V1.495c0 -0.382 -0.345 -0.728 -0.728 -0.728s-0.728 0.305 -0.728 0.728v1.301H3.561a2.181 2.181 0 0 0 -2.183 2.183v10.839A2.181 2.181 0 0 0 3.561 18h10.876a2.183 2.183 0 0 0 2.183 -2.183V4.978a2.16 2.16 0 0 0 -1.187 -1.94zm-5.934 -1.543h4.483V2.796h-4.483V1.495zm5.629 14.326a0.688 0.688 0 0 1 -0.691 0.691H3.562a0.688 0.688 0 0 1 -0.691 -0.691V4.983a0.688 0.688 0 0 1 0.691 -0.691h10.876a0.688 0.688 0 0 1 0.691 0.691v10.839z" />
                                                <g>
                                                    <path d="M11.322 10.189a0.483 0.483 0 0 0 -0.482 0.482v2.403c0 0.265 0.217 0.482 0.482 0.482s0.482 -0.217 0.482 -0.482v-2.403a0.483 0.483 0 0 0 -0.482 -0.482z" />
                                                    <path d="M11.322 8.675a0.483 0.483 0 0 0 -0.482 0.482v0.202c0 0.265 0.217 0.482 0.482 0.482s0.482 -0.217 0.482 -0.482v-0.202a0.483 0.483 0 0 0 -0.482 -0.482z" />
                                                    <path d="M7.214 7.786c-1.591 0 -2.885 1.293 -2.885 2.885s1.293 2.885 2.885 2.885 2.885 -1.293 2.885 -2.885 -1.293 -2.885 -2.885 -2.885zm0 4.806c-1.062 0 -1.921 -0.863 -1.921 -1.921s0.863 -1.921 1.921 -1.921 1.921 0.863 1.921 1.921 -0.863 1.921 -1.921 1.921z" />
                                                    <path d="M13.192 7.786a0.483 0.483 0 0 0 -0.482 0.482v4.806c0 0.265 0.217 0.482 0.482 0.482s0.482 -0.217 0.482 -0.482V8.267a0.483 0.483 0 0 0 -0.482 -0.482z" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    تېل ثبتول
                                </a>
                            </li>


                        </ul>

                        <!-- Reports -->
                        <hr class="my-2">
                        <ul class="nav flex-column mb-auto">
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-body-secondary text-uppercase">
                                <span> راپورونه</span>
                                <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                                    <svg class="bi">
                                        <use xlink:href="#graph-up" />
                                    </svg>
                                </a>
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/report_day.php">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    ورځنی راپور
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/report_week.php">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    اونیز راپور
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/report_month.php">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    میاشتنی راپور
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/report_year.php">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark-text" />
                                    </svg>
                                    کلنی راپور
                                </a>
                            </li>
                        </ul>

                        <!-- Settings -->
                        <hr class="my-2">
                        <ul class="nav flex-column mb-auto">
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-body-secondary text-uppercase">
                                <span> تنظیمات</span>
                                <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                                    <svg class="bi">
                                        <use xlink:href="#gear-wide-connected" />
                                    </svg>
                                </a>
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./backend/pages/settings_country.php">
                                    <svg width="18px" height="18px" viewBox="0 0 0.54 0.54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.45 0.338c-0.026 0.015 -0.099 0.038 -0.18 0.002 -0.034 -0.019 -0.117 -0.047 -0.18 -0.002m0 0.155V0.067c0.063 -0.045 0.146 -0.016 0.18 0.002 0.081 0.036 0.154 0.013 0.18 -0.002v0.269" stroke="#000000" stroke-width="0.045" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    هېوادونه ثبتول
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg width='18px' height="18px" fill="#000000" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                                        <g>
                                            <path d="M21.9,37c0-2.7,0.9-5.8,2.3-8.2c1.7-3,3.6-4.2,5.1-6.4c2.5-3.7,3-9,1.4-13c-1.6-4.1-5.4-6.5-9.8-6.4
                        s-8,2.8-9.4,6.9c-1.6,4.5-0.9,9.9,2.7,13.3c1.5,1.4,2.9,3.6,2.1,5.7c-0.7,2-3.1,2.9-4.8,3.7c-3.9,1.7-8.6,4.1-9.4,8.7
                        C1.3,45.1,3.9,49,8,49h17c0.8,0,1.3-1,0.8-1.6C23.3,44.5,21.9,40.8,21.9,37z" />
                                            <path d="M37.9,25c-6.6,0-12,5.4-12,12s5.4,12,12,12s12-5.4,12-12S44.5,25,37.9,25z M44,38c0,0.6-0.5,1-1.1,1H40v3
                        c0,0.6-0.5,1-1.1,1h-2c-0.6,0-0.9-0.4-0.9-1v-3h-3.1c-0.6,0-0.9-0.4-0.9-1v-2c0-0.6,0.3-1,0.9-1H36v-3c0-0.6,0.3-1,0.9-1h2
                        c0.6,0,1.1,0.4,1.1,1v3h2.9c0.6,0,1.1,0.4,1.1,1V38z" />
                                        </g>
                                    </svg>
                                    کاروونکی اضافه کول
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <svg width='18px' height="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35.695px" height="35.695px" viewBox="0 0 35.695 35.695" style="enable-background:new 0 0 35.695 35.695;" xml:space="preserve">
                                        <g>
                                            <path d="M11.558,10.767c0-3.473,2.815-6.29,6.289-6.29c3.476,0,6.289,2.817,6.289,6.29c0,3.475-2.813,6.29-6.289,6.29
                        C14.373,17.057,11.558,14.243,11.558,10.767z M35.667,22.607l-0.879-5.27c-0.158-0.954-0.961-1.754-1.896-1.984
                        c-0.836,0.74-1.932,1.191-3.136,1.191c-1.203,0-2.3-0.452-3.135-1.191c-0.938,0.229-1.739,1.03-1.897,1.984l-0.021,0.124
                        c-0.522-0.503-1.17-0.881-1.868-1.052c-1.33,1.176-3.072,1.896-4.987,1.896s-3.657-0.72-4.987-1.896
                        c-0.698,0.171-1.346,0.549-1.868,1.052l-0.021-0.124c-0.158-0.954-0.962-1.754-1.897-1.984c-0.835,0.74-1.932,1.191-3.135,1.191
                        c-1.204,0-2.3-0.452-3.136-1.191c-0.936,0.229-1.738,1.03-1.896,1.984l-0.879,5.27c-0.189,1.131,0.596,2.057,1.741,2.057h7.222
                        l-0.548,3.283c-0.3,1.799,0.948,3.271,2.771,3.271H24.48c1.823,0,3.071-1.475,2.771-3.271l-0.548-3.283h7.222
                        C35.071,24.662,35.855,23.738,35.667,22.607z M29.755,15.762c2.184,0,3.954-1.77,3.954-3.954c0-2.183-1.771-3.954-3.954-3.954
                        s-3.953,1.771-3.953,3.954C25.802,13.992,27.574,15.762,29.755,15.762z M5.938,15.762c2.183,0,3.953-1.77,3.953-3.954
                        c0-2.183-1.771-3.954-3.953-3.954c-2.184,0-3.954,1.771-3.954,3.954C1.984,13.992,3.755,15.762,5.938,15.762z" />
                                        </g>
                                    </svg>
                                    ټول کاروونکی
                                </a>
                            </li>
                        </ul>
                        <hr class="my-2">

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="./../index.php">
                                    <svg class="bi">
                                        <use xlink:href="#door-closed" />
                                    </svg>
                                    له سیستم څخه وتل
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" class="text-center">د سیستم لپاره نوی کاروونکی ثبتول</h1>
                </div>
                <div class="my-4 w-100" width="900" height="380">
                    <div class="container text-center align-items-center">
                        <div style="margin-bottom: 20px;">
                            <img src="./images/logo.png" alt="AOGC logo" height="100" width="100">
                        </div>
                        <div class="text-center">
                            <main class="form-signin ">
                                <main class="form-signin m-auto col-md-8 col-sm-8 col-lg-8 ">
                                    <form action="register.php" method="post">
                                        <div class="d-flex justify-content-evenly mb-2">
                                            <div class="form-floating flex-grow-1">
                                                <input name="name" required type="text" class="form-control text-start" id="floatingInput1" placeholder="نوم">
                                                <label for="floatingInput1">نوم</label>
                                            </div>
                                            <div class="form-floating flex-grow-1" style="margin-right: 10px;">
                                                <input name="lastname" required type="text" class="form-control text-start" id="floatingInput2" placeholder="">
                                                <label for="floatingInput2">تخلص</label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-evenly mb-2">
                                            <div class="form-floating flex-grow-1">
                                                <input name="email" required type="email" class="form-control text-start" id="floatingInput3" placeholder="ایمیل آدرس">
                                                <label for="floatingInput3">ایمیل آدرس</label>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-evenly mb-2">
                                            <div class="form-floating flex-grow-1" style="margin-right: 10px;">
                                                <input name="pwd" required type="password" class="form-control text-start" id="floatingInput4" placeholder="پټ نوم">
                                                <label for="floatingInput4">پټ نوم</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">ثبتول</button>
                                    </form>
                                </main>
                            </main>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="./backend/assets/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"></script> -->
    <!-- <script src="./assets/dashboard.js"></script> -->
</body>

</html>