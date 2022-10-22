@extends('order_management.layout')
@section('title', 'Refund')
@section('content')


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Untitled</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <style>
            /* Left column */
            .leftcolumn {
                float: left;
                width: 75%;
            }

            /* Right column */
            .rightcolumn {
                float: left;
                width: 25%;
                padding-left: 20px;
            }

            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                display: none;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }

            .rating-container .form-control:hover,
            .rating-container .form-control:focus {
                background: #fff;
                border: 1px solid #ced4da;
            }

            .rating-container textarea:focus,
            .rating-container input:focus {
                color: #000;
            }
        </style>
    </head>

    <body>
        <center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <div class="row g-3">
                    <div class="col"><br>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li type="none">
                                            <center>{{ $error }}</center>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form method="post" action="/refund" style="width: 100%">
                            @csrf
                            <h2 class="text-left">Return & Refund Inquiry</h2>
                            <p class="text-left">Log a inquiry here.</p>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="username" placeholder="Username">
                            </div>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="orderno" placeholder="Order Number">
                            </div>
                            <div class="form-group"><input class="form-control" type="text" name="address"
                                    placeholder="Address" style="height: 80px; padding-bottom: 80px;">
                            </div>
                            <div class="form-group"><button class="btn btn-block" type="submit"
                                    style="background-color:#6EBD6C; color: white;">Log Inquiry</button>
                            </div>
                            <div class="form-group"><button class="btn btn-block" type="submit"
                                    style="background-color:#ff0000; color: white;">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="col" style="margin-top: 10px">
                        <br />
                        <svg class="animated" id="freepik_stories-refund" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" style="width: 500px; height: 500px">
                            <style>
                                svg#freepik_stories-refund:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-refund.animated #freepik--background-complete--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-refund.animated #freepik--Shadow--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-refund.animated #freepik--coins-3--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-refund.animated #freepik--coin-2--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-refund.animated #freepik--coin-1--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-refund.animated #freepik--Arrow--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-refund.animated #freepik--Character--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-refund.animated #freepik--Device--inject-107 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                @keyframes floating {
                                    0% {
                                        opacity: 1;
                                        transform: translateY(0px);
                                    }

                                    50% {
                                        transform: translateY(-10px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateY(0px);
                                    }
                                }
                            </style>
                            <g id="freepik--background-complete--inject-107" class="animable"
                                style="transform-origin: 250px 228.23px;">
                                <rect y="382.4" width="500" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 250px 382.525px;" id="elbbu8dzpxl4"
                                    class="animable"></rect>
                                <rect x="416.78" y="398.49" width="33.12" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 433.34px 398.615px;"
                                    id="el59a5yem2ize" class="animable"></rect>
                                <rect x="322.53" y="401.21" width="8.69" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 326.875px 401.335px;"
                                    id="elpgrs0scpupm" class="animable"></rect>
                                <rect x="396.59" y="389.21" width="19.19" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 406.185px 389.335px;"
                                    id="elo0hwb0g6tn" class="animable"></rect>
                                <rect x="52.46" y="390.89" width="43.19" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 74.055px 391.015px;"
                                    id="el35au0tjd9ob" class="animable"></rect>
                                <rect x="104.56" y="390.89" width="6.33" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 107.725px 391.015px;"
                                    id="el8f4ilc7ttc2" class="animable"></rect>
                                <rect x="131.47" y="395.11" width="93.68" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 178.31px 395.235px;"
                                    id="eljgalrrz7mel" class="animable"></rect>
                                <path
                                    d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 140.46px 196.4px;"
                                    id="elutavs5hbsjd" class="animable"></path>
                                <path
                                    d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 356.75px 196.4px;"
                                    id="ely5qrvneswa8" class="animable"></path>
                                <path
                                    d="M318.67,286.12H433a7.85,7.85,0,0,1-7.5,7.84c-12.28.55-31.18,2.49-37.18,9.29-11.17,12.67-10.09,57.19,3.3,67.5C395.8,374,408,380.4,408,380.4H343.62s11.43-6.55,15.4-9.65c13.31-10.4,13.7-54.88,2.47-67.5-5.76-6.47-23.47-8.56-35.36-9.22A7.91,7.91,0,0,1,318.67,286.12Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 375.835px 333.26px;"
                                    id="eluvaczni2o0m" class="animable"></path>
                                <path
                                    d="M418.83,294.37c-11.61.93-25.53,3.23-30.52,8.88a22.81,22.81,0,0,0-3.78,6.55h-19.2a22.61,22.61,0,0,0-3.84-6.55c-5-5.62-19-7.94-30.42-8.88Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 374.95px 302.085px;"
                                    id="elmevad5ykox" class="animable"></path>
                                <polygon points="367.37 286.18 368.92 268.41 346.38 268.41 344.83 286.18 367.37 286.18"
                                    style="fill: rgb(235, 235, 235); transform-origin: 356.875px 277.295px;"
                                    id="els4wg3hd6b9" class="animable"></polygon>
                                <polygon points="367.37 286.18 368.92 268.41 370.13 268.41 368.58 286.18 367.37 286.18"
                                    style="fill: rgb(224, 224, 224); transform-origin: 368.75px 277.295px;"
                                    id="elzt99h5ugdu" class="animable"></polygon>
                                <polygon points="365.23 284.37 366.46 270.22 348.52 270.22 347.29 284.37 365.23 284.37"
                                    style="fill: rgb(240, 240, 240); transform-origin: 356.875px 277.295px;"
                                    id="els98wjd87tzr" class="animable"></polygon>
                                <polygon points="363.85 283.2 364.88 271.39 349.9 271.39 348.87 283.2 363.85 283.2"
                                    style="fill: rgb(250, 250, 250); transform-origin: 356.875px 277.295px;"
                                    id="el8z423z83xpv" class="animable"></polygon>
                                <polygon points="374.68 286.12 397.31 286.12 394.8 257.42 372.16 257.42 374.68 286.12"
                                    style="fill: rgb(230, 230, 230); transform-origin: 384.735px 271.77px;"
                                    id="elfjajurb44hf" class="animable"></polygon>
                                <polygon points="374.68 286.12 373.59 286.12 371.08 257.42 372.16 257.42 374.68 286.12"
                                    style="fill: rgb(224, 224, 224); transform-origin: 372.88px 271.77px;"
                                    id="elgqazmy4a0m" class="animable"></polygon>
                                <polygon points="376.73 283.2 394.75 283.2 392.75 260.34 374.73 260.34 376.73 283.2"
                                    style="fill: rgb(240, 240, 240); transform-origin: 384.74px 271.77px;"
                                    id="elz5ada7higii" class="animable"></polygon>
                                <polygon points="378.05 281.31 393.1 281.31 391.43 262.22 376.38 262.22 378.05 281.31"
                                    style="fill: rgb(250, 250, 250); transform-origin: 384.74px 271.765px;"
                                    id="elbbq8ypaj895" class="animable"></polygon>
                                <path
                                    d="M385.65,270.81h0a2.6,2.6,0,0,1-3.7,0h0a2.6,2.6,0,0,1,0-3.7h0a2.62,2.62,0,0,1,3.7,0h0A2.62,2.62,0,0,1,385.65,270.81Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 383.796px 268.964px;"
                                    id="el4dfg276e7jo" class="animable"></path>
                                <path
                                    d="M384.54,274h0a1.91,1.91,0,0,1,2.71,0h0a1.91,1.91,0,0,1-1.35,3.27h0A1.92,1.92,0,0,1,384.54,274Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 385.902px 275.353px;"
                                    id="elr1aythxvaei" class="animable"></path>
                                <path d="M192.69,374.53h22l-11.59-94.41a8.41,8.41,0,0,0-8.12-7.23H98.81l14.11,101.64Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 156.75px 323.71px;"
                                    id="elmag77r6lb1n" class="animable"></path>
                                <path
                                    d="M122.76,374.53H100.71L89.12,280.12a6.26,6.26,0,0,1,6.35-7.23H103a8.42,8.42,0,0,1,8.13,7.23Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 105.902px 323.709px;"
                                    id="eln5bavh0luzo" class="animable"></path>
                                <path
                                    d="M130.88,374.41l-4-45.66a4.34,4.34,0,0,0-3.79-3.93l-1.64-.21a5.84,5.84,0,0,1-5.08-5.29l-.73-8.32a5.84,5.84,0,0,1,5.82-6.35H84.62A5.84,5.84,0,0,0,78.81,311l.72,8.32a5.85,5.85,0,0,0,5.08,5.29l1.64.21A4.34,4.34,0,0,1,90,328.75l4,45.66a6.45,6.45,0,0,0,6.42,5.89H137.3A6.45,6.45,0,0,1,130.88,374.41Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 108.044px 342.475px;"
                                    id="eliq5ue3irz" class="animable"></path>
                                <path
                                    d="M232.28,317.32a13.88,13.88,0,0,1,13.83-12.67H214a13.89,13.89,0,0,0-13.83,12.67L197,353.52h32.08Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 221.555px 329.085px;"
                                    id="elzl3wls8c9u" class="animable"></path>
                                <path
                                    d="M260.36,304.65H246.11a13.88,13.88,0,0,0-13.83,12.67l-3.16,36.2H152.71l-3.16-36.2a13.88,13.88,0,0,0-13.83-12.67H121.47a5.84,5.84,0,0,0-5.82,6.35l.73,8.32a5.84,5.84,0,0,0,5.08,5.29l1.64.21a4.34,4.34,0,0,1,3.79,3.93l4,45.66a6.45,6.45,0,0,0,6.42,5.89H244.53a6.45,6.45,0,0,0,6.42-5.89l4-45.66a4.34,4.34,0,0,1,3.79-3.93l1.64-.21a5.84,5.84,0,0,0,5.08-5.29l.73-8.32A5.84,5.84,0,0,0,260.36,304.65Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 190.92px 342.475px;"
                                    id="elawvuj6c77d" class="animable"></path>
                                <path
                                    d="M389.47,142.31s1.11-7.35-4.25-12.07-4.89-7.51-3.36-7.88,2.95,4.35,5.31,5.64c0,0,.07-6.71-2.32-9.19s-3.65-8.85-1.38-9,2.52,3.79,3,6.55,3,6.65,3,6.65.49-6,2-8.48-2.58-8.13-1-10.61,4.41,2.24,4.18,7.55-3.77,11-2.95,16.49c0,0,1.56-3.88,3-4.24s2.82-2.92,3.76-3.88,2.12,2.35,0,5.41-7.54,11.27-6.72,17.89Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 390.242px 123.19px;"
                                    id="eln9wz4zchqck" class="animable"></path>
                                <path
                                    d="M386.26,139l-1.75,11a5.6,5.6,0,0,0,5.53,6.49h1.87a5.61,5.61,0,0,0,5.54-6.49l-1.76-11Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 390.979px 147.745px;"
                                    id="elffyi0umjeb" class="animable"></path>
                                <rect x="288.7" y="152.4" width="124.12" height="6.38"
                                    style="fill: rgb(224, 224, 224); transform-origin: 350.76px 155.59px;"
                                    id="elio1um6wjldj" class="animable"></rect>
                                <rect x="294.41" y="128.89" width="5.47" height="23.51"
                                    style="fill: rgb(235, 235, 235); transform-origin: 297.145px 140.645px;"
                                    id="elp9lonul8s6" class="animable"></rect>
                                <rect x="320.85" y="128.89" width="5.47" height="23.51"
                                    style="fill: rgb(235, 235, 235); transform-origin: 323.585px 140.645px;"
                                    id="elekdryuybjdf" class="animable"></rect>
                                <g id="el09bjzph5zw1h">
                                    <rect x="352.91" y="128.6" width="5.47" height="23.51"
                                        style="fill: rgb(235, 235, 235); transform-origin: 355.645px 140.355px; transform: rotate(-9.78deg);"
                                        class="animable"></rect>
                                </g>
                                <rect x="301.19" y="131.99" width="5.47" height="20.41"
                                    style="fill: rgb(235, 235, 235); transform-origin: 303.925px 142.195px;"
                                    id="el67yr8ge51qc" class="animable"></rect>
                                <rect x="313.76" y="131.99" width="5.47" height="20.41"
                                    style="fill: rgb(235, 235, 235); transform-origin: 316.495px 142.195px;"
                                    id="el00u0gcupq4wm" class="animable"></rect>
                                <rect x="345.48" y="131.99" width="5.47" height="20.41"
                                    style="fill: rgb(235, 235, 235); transform-origin: 348.215px 142.195px;"
                                    id="elrgmziacnm7q" class="animable"></rect>
                                <g id="elxti7aw11jei">
                                    <rect x="330.32" y="131.64" width="5.47" height="20.41"
                                        style="fill: rgb(235, 235, 235); transform-origin: 333.055px 141.845px; transform: rotate(-12.53deg);"
                                        class="animable"></rect>
                                </g>
                                <rect x="308.65" y="127.73" width="2.73" height="24.67"
                                    style="fill: rgb(235, 235, 235); transform-origin: 310.015px 140.065px;"
                                    id="el60it48191h" class="animable"></rect>
                                <rect x="341.18" y="127.73" width="2.73" height="24.67"
                                    style="fill: rgb(235, 235, 235); transform-origin: 342.545px 140.065px;"
                                    id="elb25fwkbv07u" class="animable"></rect>
                                <g id="elb4j93urtukl">
                                    <rect x="288.7" y="200.01" width="124.12" height="6.38"
                                        style="fill: rgb(224, 224, 224); transform-origin: 350.76px 203.2px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el5kz4egbnv6u">
                                    <rect x="401.64" y="176.5" width="5.47" height="23.51"
                                        style="fill: rgb(235, 235, 235); transform-origin: 404.375px 188.255px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el1a62rgaej3q">
                                    <rect x="375.2" y="176.5" width="5.47" height="23.51"
                                        style="fill: rgb(235, 235, 235); transform-origin: 377.935px 188.255px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elkei3e5hec1h">
                                    <rect x="343.15" y="176.21" width="5.47" height="23.51"
                                        style="fill: rgb(235, 235, 235); transform-origin: 345.885px 187.965px; transform: rotate(-170.22deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elta75epd8oa">
                                    <rect x="394.87" y="179.6" width="5.47" height="20.41"
                                        style="fill: rgb(235, 235, 235); transform-origin: 397.605px 189.805px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el7okirhpl60c">
                                    <rect x="382.3" y="179.6" width="5.47" height="20.41"
                                        style="fill: rgb(235, 235, 235); transform-origin: 385.035px 189.805px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elogq81lvl6ln">
                                    <rect x="350.57" y="179.6" width="5.47" height="20.41"
                                        style="fill: rgb(235, 235, 235); transform-origin: 353.305px 189.805px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="els4i3gvv116l">
                                    <rect x="365.74" y="179.25" width="5.47" height="20.41"
                                        style="fill: rgb(235, 235, 235); transform-origin: 368.475px 189.455px; transform: rotate(-167.47deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elk2w6uwvmvzo">
                                    <rect x="390.14" y="175.34" width="2.73" height="24.67"
                                        style="fill: rgb(235, 235, 235); transform-origin: 391.505px 187.675px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elek6w9256lfm">
                                    <rect x="357.61" y="175.34" width="2.73" height="24.67"
                                        style="fill: rgb(235, 235, 235); transform-origin: 358.975px 187.675px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="el7iwzs1c0ii5">
                                    <rect x="300.61" y="181.4" width="26.64" height="18.39"
                                        style="fill: rgb(235, 235, 235); transform-origin: 313.93px 190.595px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <rect x="95.53" y="115.92" width="112.62" height="124.62"
                                    style="fill: rgb(233, 233, 233); transform-origin: 151.84px 178.23px;"
                                    id="elr06zlisotp" class="animable"></rect>
                                <rect x="100.49" y="120.86" width="103" height="115"
                                    style="fill: rgb(245, 245, 245); transform-origin: 151.99px 178.36px;"
                                    id="eldtn0xkjozar" class="animable"></rect>
                                <polygon points="129.6 120.86 100.49 229.88 100.49 170.86 113.81 120.86 129.6 120.86"
                                    style="fill: rgb(255, 255, 255); transform-origin: 115.045px 175.37px;"
                                    id="el719v4p61jku" class="animable"></polygon>
                                <polygon points="142.61 120.86 111.91 235.86 106.12 235.86 136.82 120.86 142.61 120.86"
                                    style="fill: rgb(255, 255, 255); transform-origin: 124.365px 178.36px;"
                                    id="elpw0ij740xcd" class="animable"></polygon>
                                <polygon points="203.49 152.22 203.49 211.25 196.97 235.86 181.18 235.86 203.49 152.22"
                                    style="fill: rgb(255, 255, 255); transform-origin: 192.335px 194.04px;"
                                    id="elkuk14susgk" class="animable"></polygon>
                                <rect x="149.84" y="115.92" width="4" height="124.62"
                                    style="fill: rgb(233, 233, 233); transform-origin: 151.84px 178.23px;"
                                    id="elfzblmz8i2zs" class="animable"></rect>
                                <rect x="97.49" y="141.21" width="108.5" height="4"
                                    style="fill: rgb(233, 233, 233); transform-origin: 151.74px 143.21px;"
                                    id="elxehox7hss6s" class="animable"></rect>
                                <path d="M99.22,247.64a2.52,2.52,0,1,1-2.51-2.51A2.51,2.51,0,0,1,99.22,247.64Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 96.7px 247.65px;"
                                    id="elze4xx8x8n2j" class="animable"></path>
                                <path d="M210.12,247.57a2.52,2.52,0,1,1-2.52-2.51A2.52,2.52,0,0,1,210.12,247.57Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 207.6px 247.58px;"
                                    id="elfe7ilkeag0p" class="animable"></path>
                            </g>
                            <g id="freepik--Shadow--inject-107" class="animable animator-active"
                                style="transform-origin: 250px 416.24px;">
                                <ellipse id="freepik--path--inject-107" cx="250" cy="416.24" rx="193.89"
                                    ry="11.32" style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;"
                                    class="animable"></ellipse>
                            </g>
                            <g id="freepik--coins-3--inject-107" class="animable"
                                style="transform-origin: 136.27px 375.925px;">
                                <rect x="124.79" y="405.57" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 155.385px 410.43px;"
                                    id="elgm6y66adxc7" class="animable"></rect>
                                <g id="el4cb0oj78cm6">
                                    <path
                                        d="M186,406.92v7a1.35,1.35,0,0,1-1.36,1.35H126.15a1.34,1.34,0,0,1-1.35-1.35v-7a1.34,1.34,0,0,1,1.35-1.35h58.48A1.35,1.35,0,0,1,186,406.92Z"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 155.4px 410.42px;"
                                        class="animable"></path>
                                </g>
                                <g id="elom7iconb9wg">
                                    <path
                                        d="M177.9,414.68h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,177.9,414.68Z"
                                        style="opacity: 0.2; transform-origin: 177.895px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="el5p3sj0ikaur">
                                    <path
                                        d="M170.91,414.68h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,170.91,414.68Z"
                                        style="opacity: 0.2; transform-origin: 170.905px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elvixemy1vi9">
                                    <path
                                        d="M163.16,414.68h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,163.16,414.68Z"
                                        style="opacity: 0.2; transform-origin: 163.165px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="el9wczm43h0ev">
                                    <path
                                        d="M183.63,414.68h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.49.49,0,0,1,183.63,414.68Z"
                                        style="opacity: 0.2; transform-origin: 183.635px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="el7x86ncdypfq">
                                    <path
                                        d="M132.88,406.18h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.5-.49v-7.52A.49.49,0,0,1,132.88,406.18Z"
                                        style="opacity: 0.2; transform-origin: 132.875px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="el3xhdhlblmfe">
                                    <path
                                        d="M139.86,406.18h0a.49.49,0,0,1,.5.49v7.52a.49.49,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,139.86,406.18Z"
                                        style="opacity: 0.2; transform-origin: 139.865px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elyot26lqe3om">
                                    <path
                                        d="M147.61,406.18h0a.5.5,0,0,1,.5.49v7.52a.5.5,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,147.61,406.18Z"
                                        style="opacity: 0.2; transform-origin: 147.615px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elo26ql2jr6ve">
                                    <path
                                        d="M127.14,406.18h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.5.5,0,0,1-.5-.49v-7.52A.5.5,0,0,1,127.14,406.18Z"
                                        style="opacity: 0.2; transform-origin: 127.135px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="el917fl48vy7">
                                    <path
                                        d="M155.39,414.68h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,155.39,414.68Z"
                                        style="opacity: 0.2; transform-origin: 155.385px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <rect x="126.55" y="395.71" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 157.145px 400.57px;"
                                    id="elnymxlb9gxy9" class="animable"></rect>
                                <g id="el4533x08vdtd">
                                    <rect x="126.56" y="395.71" width="61.18" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 157.15px 400.57px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eljh53xdfctbm">
                                    <path
                                        d="M179.66,404.82h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,179.66,404.82Z"
                                        style="opacity: 0.2; transform-origin: 179.655px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elketa3on7lu">
                                    <path
                                        d="M172.67,404.82h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,172.67,404.82Z"
                                        style="opacity: 0.2; transform-origin: 172.665px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elrr7p5i4n44a">
                                    <path
                                        d="M164.92,404.82h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,164.92,404.82Z"
                                        style="opacity: 0.2; transform-origin: 164.925px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elkf4vq0s1se">
                                    <path
                                        d="M185.39,404.82h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.49.49,0,0,1,185.39,404.82Z"
                                        style="opacity: 0.2; transform-origin: 185.395px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elh85dq545zh">
                                    <path
                                        d="M134.64,396.32h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.5-.49v-7.52A.49.49,0,0,1,134.64,396.32Z"
                                        style="opacity: 0.2; transform-origin: 134.635px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elvsjd0dx7s4c">
                                    <path
                                        d="M141.62,396.32h0a.49.49,0,0,1,.5.49v7.52a.49.49,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,141.62,396.32Z"
                                        style="opacity: 0.2; transform-origin: 141.625px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="els771sxovym8">
                                    <path
                                        d="M149.37,396.32h0a.5.5,0,0,1,.5.49v7.52a.5.5,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,149.37,396.32Z"
                                        style="opacity: 0.2; transform-origin: 149.375px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="ela77v1t1xpu">
                                    <path
                                        d="M128.9,396.32h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.5.5,0,0,1-.5-.49v-7.52A.5.5,0,0,1,128.9,396.32Z"
                                        style="opacity: 0.2; transform-origin: 128.895px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elst03vk9jd9q">
                                    <path
                                        d="M157.15,404.82h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,157.15,404.82Z"
                                        style="opacity: 0.2; transform-origin: 157.145px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <rect x="128.31" y="385.85" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 158.905px 390.71px;"
                                    id="elf6n88fdvqb6" class="animable"></rect>
                                <g id="el3wwjie5xhw4">
                                    <rect x="128.32" y="385.85" width="61.18" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 158.91px 390.71px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elq0ae5n3b63">
                                    <path
                                        d="M181.42,395h0a.51.51,0,0,1-.5-.5V387a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.5.5,0,0,1,181.42,395Z"
                                        style="opacity: 0.2; transform-origin: 181.415px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="eli31ho91phbc">
                                    <path
                                        d="M174.43,395h0a.51.51,0,0,1-.5-.5V387a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.5.5,0,0,1,174.43,395Z"
                                        style="opacity: 0.2; transform-origin: 174.425px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="ele5kcx2vx4gi">
                                    <path
                                        d="M166.68,395h0a.5.5,0,0,1-.49-.5V387a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.51.51,0,0,1,166.68,395Z"
                                        style="opacity: 0.2; transform-origin: 166.685px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="el8w08j7udeeb">
                                    <path
                                        d="M187.15,395h0a.5.5,0,0,1-.49-.5V387a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.5.5,0,0,1,187.15,395Z"
                                        style="opacity: 0.2; transform-origin: 187.155px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="elt1vpid2d7om">
                                    <path
                                        d="M136.4,386.46h0a.49.49,0,0,1,.49.49v7.52a.5.5,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V387A.49.49,0,0,1,136.4,386.46Z"
                                        style="opacity: 0.2; transform-origin: 136.394px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="eliqa5b37aupc">
                                    <path
                                        d="M143.38,386.46h0a.49.49,0,0,1,.5.49v7.52a.5.5,0,0,1-.5.5h0a.5.5,0,0,1-.49-.5V387A.49.49,0,0,1,143.38,386.46Z"
                                        style="opacity: 0.2; transform-origin: 143.384px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="eliunus4bzlof">
                                    <path
                                        d="M151.13,386.46h0a.5.5,0,0,1,.5.49v7.52a.51.51,0,0,1-.5.5h0a.5.5,0,0,1-.49-.5V387A.49.49,0,0,1,151.13,386.46Z"
                                        style="opacity: 0.2; transform-origin: 151.134px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="elrlij7cre2r">
                                    <path
                                        d="M130.66,386.46h0a.49.49,0,0,1,.49.49v7.52a.5.5,0,0,1-.49.5h0a.51.51,0,0,1-.5-.5V387A.5.5,0,0,1,130.66,386.46Z"
                                        style="opacity: 0.2; transform-origin: 130.654px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="el2b0eig4mdrh">
                                    <path
                                        d="M158.91,395h0a.5.5,0,0,1-.5-.5V387a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.5.5,0,0,1,158.91,395Z"
                                        style="opacity: 0.2; transform-origin: 158.905px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <rect x="121.07" y="375.99" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 151.665px 380.85px;"
                                    id="el296loituyjt" class="animable"></rect>
                                <g id="el6c8d8z6svl">
                                    <rect x="121.07" y="375.99" width="61.19" height="9.73" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 151.665px 380.855px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eljz7y1mlyc8">
                                    <path
                                        d="M174.17,385.11h0a.49.49,0,0,1-.49-.5V377.1a.49.49,0,0,1,.49-.5h0a.5.5,0,0,1,.5.5v7.51A.5.5,0,0,1,174.17,385.11Z"
                                        style="opacity: 0.2; transform-origin: 174.175px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elrhpjk88lbu">
                                    <path
                                        d="M167.18,385.11h0a.49.49,0,0,1-.49-.5V377.1a.49.49,0,0,1,.49-.5h0a.5.5,0,0,1,.5.5v7.51A.5.5,0,0,1,167.18,385.11Z"
                                        style="opacity: 0.2; transform-origin: 167.185px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elldszeuu22ua">
                                    <path
                                        d="M159.44,385.11h0a.5.5,0,0,1-.5-.5V377.1a.5.5,0,0,1,.5-.5h0a.49.49,0,0,1,.49.5v7.51A.49.49,0,0,1,159.44,385.11Z"
                                        style="opacity: 0.2; transform-origin: 159.435px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="el3qfl5m9s6fz">
                                    <path
                                        d="M179.91,385.11h0a.5.5,0,0,1-.5-.5V377.1a.5.5,0,0,1,.5-.5h0a.49.49,0,0,1,.49.5v7.51A.49.49,0,0,1,179.91,385.11Z"
                                        style="opacity: 0.2; transform-origin: 179.905px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elzofosn6fgrr">
                                    <path
                                        d="M129.15,376.6h0a.49.49,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V377.1A.5.5,0,0,1,129.15,376.6Z"
                                        style="opacity: 0.2; transform-origin: 129.145px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="el01d3rvzrjc65">
                                    <path
                                        d="M136.14,376.6h0a.49.49,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V377.1A.5.5,0,0,1,136.14,376.6Z"
                                        style="opacity: 0.2; transform-origin: 136.135px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elxiu4hdttwli">
                                    <path
                                        d="M143.89,376.6h0a.49.49,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V377.1A.5.5,0,0,1,143.89,376.6Z"
                                        style="opacity: 0.2; transform-origin: 143.885px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="el0090r31megvio">
                                    <path
                                        d="M123.41,376.6h0a.5.5,0,0,1,.5.5v7.51a.5.5,0,0,1-.5.5h0a.49.49,0,0,1-.49-.5V377.1A.49.49,0,0,1,123.41,376.6Z"
                                        style="opacity: 0.2; transform-origin: 123.415px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="eluyzq973os9">
                                    <path
                                        d="M151.66,385.11h0a.49.49,0,0,1-.49-.5V377.1a.49.49,0,0,1,.49-.5h0a.49.49,0,0,1,.49.5v7.51A.49.49,0,0,1,151.66,385.11Z"
                                        style="opacity: 0.2; transform-origin: 151.66px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <rect x="123.83" y="366.14" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 154.425px 371px;" id="elc17wr96qg7h"
                                    class="animable"></rect>
                                <g id="elzp7lx5i875k">
                                    <path
                                        d="M185,367.49v7a1.36,1.36,0,0,1-1.34,1.35h-58.5a1.35,1.35,0,0,1-1.34-1.35v-7a1.34,1.34,0,0,1,1.34-1.35h58.5A1.35,1.35,0,0,1,185,367.49Z"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 154.41px 370.99px;"
                                        class="animable"></path>
                                </g>
                                <g id="ely82tu2nzqk">
                                    <path
                                        d="M176.93,375.25h0a.49.49,0,0,1-.49-.5v-7.51a.5.5,0,0,1,.49-.5h0a.51.51,0,0,1,.5.5v7.51A.5.5,0,0,1,176.93,375.25Z"
                                        style="opacity: 0.2; transform-origin: 176.935px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elt4ud2pvezo">
                                    <path
                                        d="M169.94,375.25h0a.49.49,0,0,1-.49-.5v-7.51a.5.5,0,0,1,.49-.5h0a.5.5,0,0,1,.5.5v7.51A.5.5,0,0,1,169.94,375.25Z"
                                        style="opacity: 0.2; transform-origin: 169.945px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elbcpqbc62bc">
                                    <path
                                        d="M162.2,375.25h0a.5.5,0,0,1-.5-.5v-7.51a.5.5,0,0,1,.5-.5h0a.5.5,0,0,1,.49.5v7.51A.49.49,0,0,1,162.2,375.25Z"
                                        style="opacity: 0.2; transform-origin: 162.195px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elaevpxvvrc0g">
                                    <path
                                        d="M182.67,375.25h0a.5.5,0,0,1-.5-.5v-7.51a.51.51,0,0,1,.5-.5h0a.5.5,0,0,1,.49.5v7.51A.49.49,0,0,1,182.67,375.25Z"
                                        style="opacity: 0.2; transform-origin: 182.665px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="el6o28y4uw6d7">
                                    <path
                                        d="M131.91,366.74h0a.5.5,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5v-7.51A.51.51,0,0,1,131.91,366.74Z"
                                        style="opacity: 0.2; transform-origin: 131.905px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="el6xofttqfanu">
                                    <path
                                        d="M138.9,366.74h0a.5.5,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5v-7.51A.51.51,0,0,1,138.9,366.74Z"
                                        style="opacity: 0.2; transform-origin: 138.895px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elmreyignrf4g">
                                    <path
                                        d="M146.65,366.74h0a.5.5,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5v-7.51A.5.5,0,0,1,146.65,366.74Z"
                                        style="opacity: 0.2; transform-origin: 146.645px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="el4p4cqx8tfte">
                                    <path
                                        d="M126.17,366.74h0a.5.5,0,0,1,.5.5v7.51a.5.5,0,0,1-.5.5h0a.49.49,0,0,1-.49-.5v-7.51A.5.5,0,0,1,126.17,366.74Z"
                                        style="opacity: 0.2; transform-origin: 126.175px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="el593ujw4tfn9">
                                    <path
                                        d="M154.42,375.25h0a.49.49,0,0,1-.49-.5v-7.51a.5.5,0,0,1,.49-.5h0a.51.51,0,0,1,.5.5v7.51A.5.5,0,0,1,154.42,375.25Z"
                                        style="opacity: 0.2; transform-origin: 154.425px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="el4qp1jfsmrob">
                                    <path
                                        d="M123.83,374.51v-7a1.34,1.34,0,0,1,1.34-1.35h26l4.56,9.72H125.17A1.35,1.35,0,0,1,123.83,374.51Z"
                                        style="opacity: 0.2; transform-origin: 139.78px 371.02px;" class="animable">
                                    </path>
                                </g>
                                <g id="el9g4lfho5t28">
                                    <path
                                        d="M160.32,385.72h-37.9a1.35,1.35,0,0,1-1.35-1.35v-7a1.35,1.35,0,0,1,1.35-1.35h33.34Z"
                                        style="opacity: 0.2; transform-origin: 140.695px 380.87px;" class="animable">
                                    </path>
                                </g>
                                <g id="elt7fynrbm3pl">
                                    <path
                                        d="M129.67,385.85h30.71l4.55,9.72H129.67a1.34,1.34,0,0,1-1.35-1.35v-7A1.35,1.35,0,0,1,129.67,385.85Z"
                                        style="opacity: 0.2; transform-origin: 146.625px 390.71px;" class="animable">
                                    </path>
                                </g>
                                <g id="elhcyzbz0z518">
                                    <path
                                        d="M127.9,395.71H165l4.57,9.72H127.9a1.34,1.34,0,0,1-1.34-1.35v-7A1.34,1.34,0,0,1,127.9,395.71Z"
                                        style="opacity: 0.2; transform-origin: 148.065px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elt2ui3nw4dhj">
                                    <path
                                        d="M174.17,415.29h-48a1.34,1.34,0,0,1-1.35-1.35v-7a1.34,1.34,0,0,1,1.35-1.35h43.46Z"
                                        style="opacity: 0.2; transform-origin: 149.495px 410.44px;" class="animable">
                                    </path>
                                </g>
                                <rect x="84.77" y="405.57" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 115.365px 410.43px;"
                                    id="el509km7qo4o4" class="animable"></rect>
                                <g id="elpo1tdrqy6xp">
                                    <rect x="84.77" y="405.57" width="61.19" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 115.365px 410.43px;"
                                        class="animable"></rect>
                                </g>
                                <g id="el5y3hatopa5b">
                                    <path
                                        d="M137.87,414.68h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,137.87,414.68Z"
                                        style="opacity: 0.2; transform-origin: 137.875px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elllx3plthay">
                                    <path
                                        d="M130.88,414.68h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.49.49,0,0,1,130.88,414.68Z"
                                        style="opacity: 0.2; transform-origin: 130.885px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="ela8g8rs9av1">
                                    <path
                                        d="M123.14,414.68h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,123.14,414.68Z"
                                        style="opacity: 0.2; transform-origin: 123.135px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elxorssjcph47">
                                    <path
                                        d="M143.61,414.68h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,143.61,414.68Z"
                                        style="opacity: 0.2; transform-origin: 143.605px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elkp8rzgmq9il">
                                    <path
                                        d="M92.85,406.18h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,92.85,406.18Z"
                                        style="opacity: 0.2; transform-origin: 92.85px 410.43px;" class="animable"></path>
                                </g>
                                <g id="elv9q6fnbosfr">
                                    <path
                                        d="M99.84,406.18h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.5.5,0,0,1-.5-.49v-7.52A.5.5,0,0,1,99.84,406.18Z"
                                        style="opacity: 0.2; transform-origin: 99.835px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elhspmdxms58g">
                                    <path
                                        d="M107.59,406.18h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.5-.49v-7.52A.49.49,0,0,1,107.59,406.18Z"
                                        style="opacity: 0.2; transform-origin: 107.585px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elr0aiavuh48r">
                                    <path
                                        d="M87.11,406.18h0a.49.49,0,0,1,.5.49v7.52a.49.49,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,87.11,406.18Z"
                                        style="opacity: 0.2; transform-origin: 87.115px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <g id="elj2445nwklrn">
                                    <path
                                        d="M115.36,414.68h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,115.36,414.68Z"
                                        style="opacity: 0.2; transform-origin: 115.365px 410.43px;" class="animable">
                                    </path>
                                </g>
                                <rect x="86.53" y="395.71" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 117.125px 400.57px;"
                                    id="elvtt66y8cacq" class="animable"></rect>
                                <g id="elui3ovimfwi7">
                                    <rect x="86.53" y="395.71" width="61.19" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 117.125px 400.57px;"
                                        class="animable"></rect>
                                </g>
                                <g id="el4p61hywzga9">
                                    <path
                                        d="M139.63,404.82h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,139.63,404.82Z"
                                        style="opacity: 0.2; transform-origin: 139.635px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="el8njkqu8b6eb">
                                    <path
                                        d="M132.64,404.82h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.49.49,0,0,1,132.64,404.82Z"
                                        style="opacity: 0.2; transform-origin: 132.645px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elj90jprhhc1g">
                                    <path
                                        d="M124.9,404.82h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,124.9,404.82Z"
                                        style="opacity: 0.2; transform-origin: 124.895px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elafh5n6w00km">
                                    <path
                                        d="M145.37,404.82h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,145.37,404.82Z"
                                        style="opacity: 0.2; transform-origin: 145.365px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="el26lr23o8rk6">
                                    <path
                                        d="M94.61,396.32h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,94.61,396.32Z"
                                        style="opacity: 0.2; transform-origin: 94.61px 400.57px;" class="animable"></path>
                                </g>
                                <g id="eld5rhqdn7zc">
                                    <path
                                        d="M101.6,396.32h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.5.5,0,0,1-.5-.49v-7.52A.5.5,0,0,1,101.6,396.32Z"
                                        style="opacity: 0.2; transform-origin: 101.595px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="el3trug05st3m">
                                    <path
                                        d="M109.35,396.32h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.5-.49v-7.52A.49.49,0,0,1,109.35,396.32Z"
                                        style="opacity: 0.2; transform-origin: 109.345px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elwiol5aa06cr">
                                    <path
                                        d="M88.87,396.32h0a.49.49,0,0,1,.5.49v7.52a.49.49,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,88.87,396.32Z"
                                        style="opacity: 0.2; transform-origin: 88.875px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <g id="elejp07y3kvt9">
                                    <path
                                        d="M117.12,404.82h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,117.12,404.82Z"
                                        style="opacity: 0.2; transform-origin: 117.125px 400.57px;" class="animable">
                                    </path>
                                </g>
                                <rect x="83.28" y="385.85" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 113.875px 390.71px;"
                                    id="elx6dbxg3ihd" class="animable"></rect>
                                <g id="el62mfaqn40e4">
                                    <rect x="83.28" y="385.85" width="61.19" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 113.875px 390.71px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eloef23e7l8e">
                                    <path
                                        d="M136.39,395h0a.51.51,0,0,1-.5-.5V387a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.5.5,0,0,1,136.39,395Z"
                                        style="opacity: 0.2; transform-origin: 136.385px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="elcrk74iu3zpg">
                                    <path
                                        d="M129.4,395h0a.5.5,0,0,1-.49-.5V387a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.49.49v7.52A.5.5,0,0,1,129.4,395Z"
                                        style="opacity: 0.2; transform-origin: 129.4px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="elxbh5qayyi6d">
                                    <path
                                        d="M121.65,395h0a.5.5,0,0,1-.49-.5V387a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.51.51,0,0,1,121.65,395Z"
                                        style="opacity: 0.2; transform-origin: 121.655px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="elfqtdau2xaww">
                                    <path
                                        d="M142.13,395h0a.5.5,0,0,1-.5-.5V387a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.5.5,0,0,1,142.13,395Z"
                                        style="opacity: 0.2; transform-origin: 142.125px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <g id="elyg4g0mjc3vq">
                                    <path
                                        d="M91.37,386.46h0a.49.49,0,0,1,.49.49v7.52a.5.5,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V387A.49.49,0,0,1,91.37,386.46Z"
                                        style="opacity: 0.2; transform-origin: 91.3637px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="el6s678wi1dv7">
                                    <path
                                        d="M98.36,386.46h0a.49.49,0,0,1,.49.49v7.52a.5.5,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V387A.49.49,0,0,1,98.36,386.46Z"
                                        style="opacity: 0.2; transform-origin: 98.3537px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="elly77q77x10n">
                                    <path
                                        d="M106.1,386.46h0a.5.5,0,0,1,.5.49v7.52a.51.51,0,0,1-.5.5h0a.5.5,0,0,1-.49-.5V387A.49.49,0,0,1,106.1,386.46Z"
                                        style="opacity: 0.2; transform-origin: 106.104px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="elifmkvo17r8o">
                                    <path
                                        d="M85.63,386.46h0a.49.49,0,0,1,.49.49v7.52a.5.5,0,0,1-.49.5h0a.5.5,0,0,1-.49-.5V387A.49.49,0,0,1,85.63,386.46Z"
                                        style="opacity: 0.2; transform-origin: 85.6287px 390.715px;" class="animable">
                                    </path>
                                </g>
                                <g id="elwllbo197itl">
                                    <path
                                        d="M113.88,395h0a.51.51,0,0,1-.5-.5V387a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.5.5,0,0,1,113.88,395Z"
                                        style="opacity: 0.2; transform-origin: 113.875px 390.755px;" class="animable">
                                    </path>
                                </g>
                                <rect x="83.04" y="375.99" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 113.635px 380.85px;"
                                    id="el4dpn89chj82" class="animable"></rect>
                                <g id="el30hhk8tcy1g">
                                    <rect x="83.04" y="375.99" width="61.19" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 113.635px 380.85px;"
                                        class="animable"></rect>
                                </g>
                                <g id="el3j4n8r8ri3u">
                                    <path
                                        d="M136.15,385.11h0a.5.5,0,0,1-.5-.5V377.1a.5.5,0,0,1,.5-.5h0a.49.49,0,0,1,.49.5v7.51A.49.49,0,0,1,136.15,385.11Z"
                                        style="opacity: 0.2; transform-origin: 136.145px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elkw6o9f3odv8">
                                    <path
                                        d="M129.16,385.11h0a.5.5,0,0,1-.5-.5V377.1a.5.5,0,0,1,.5-.5h0a.49.49,0,0,1,.49.5v7.51A.49.49,0,0,1,129.16,385.11Z"
                                        style="opacity: 0.2; transform-origin: 129.155px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="eld1mhaq5g8a">
                                    <path
                                        d="M121.41,385.11h0a.49.49,0,0,1-.49-.5V377.1a.49.49,0,0,1,.49-.5h0a.5.5,0,0,1,.5.5v7.51A.5.5,0,0,1,121.41,385.11Z"
                                        style="opacity: 0.2; transform-origin: 121.415px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elq5sl4wx4wl">
                                    <path
                                        d="M141.88,385.11h0a.49.49,0,0,1-.49-.5V377.1a.49.49,0,0,1,.49-.5h0a.5.5,0,0,1,.5.5v7.51A.5.5,0,0,1,141.88,385.11Z"
                                        style="opacity: 0.2; transform-origin: 141.885px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="eljmwi6oh1i">
                                    <path
                                        d="M91.13,376.6h0a.49.49,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V377.1A.5.5,0,0,1,91.13,376.6Z"
                                        style="opacity: 0.2; transform-origin: 91.125px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elw6yh1q087tp">
                                    <path
                                        d="M98.11,376.6h0a.5.5,0,0,1,.5.5v7.51a.5.5,0,0,1-.5.5h0a.49.49,0,0,1-.49-.5V377.1A.49.49,0,0,1,98.11,376.6Z"
                                        style="opacity: 0.2; transform-origin: 98.1149px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="el0grksi5ll1a6">
                                    <path
                                        d="M105.86,376.6h0a.5.5,0,0,1,.5.5v7.51a.5.5,0,0,1-.5.5h0a.49.49,0,0,1-.49-.5V377.1A.49.49,0,0,1,105.86,376.6Z"
                                        style="opacity: 0.2; transform-origin: 105.865px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="eldid7n4nmcg6">
                                    <path
                                        d="M85.39,376.6h0a.49.49,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5V377.1A.5.5,0,0,1,85.39,376.6Z"
                                        style="opacity: 0.2; transform-origin: 85.3851px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <g id="elbvc9arcswxn">
                                    <path
                                        d="M113.64,385.11h0a.5.5,0,0,1-.5-.5V377.1a.5.5,0,0,1,.5-.5h0a.49.49,0,0,1,.49.5v7.51A.49.49,0,0,1,113.64,385.11Z"
                                        style="opacity: 0.2; transform-origin: 113.635px 380.855px;" class="animable">
                                    </path>
                                </g>
                                <rect x="85.8" y="366.14" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 116.395px 371px;" id="el3d99vg0d53r"
                                    class="animable"></rect>
                                <g id="elwaliqcrdcm">
                                    <rect x="85.8" y="366.14" width="61.19" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 116.395px 371px;"
                                        class="animable"></rect>
                                </g>
                                <g id="el57yiwvr4ebx">
                                    <path
                                        d="M138.91,375.25h0a.5.5,0,0,1-.5-.5v-7.51a.51.51,0,0,1,.5-.5h0a.5.5,0,0,1,.49.5v7.51A.49.49,0,0,1,138.91,375.25Z"
                                        style="opacity: 0.2; transform-origin: 138.905px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="el3bgq6y20rb">
                                    <path
                                        d="M131.92,375.25h0a.5.5,0,0,1-.5-.5v-7.51a.51.51,0,0,1,.5-.5h0a.5.5,0,0,1,.49.5v7.51A.49.49,0,0,1,131.92,375.25Z"
                                        style="opacity: 0.2; transform-origin: 131.915px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elr6b9m92mkzs">
                                    <path
                                        d="M124.17,375.25h0a.49.49,0,0,1-.49-.5v-7.51a.5.5,0,0,1,.49-.5h0a.51.51,0,0,1,.5.5v7.51A.5.5,0,0,1,124.17,375.25Z"
                                        style="opacity: 0.2; transform-origin: 124.175px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="eleyac6dqalza">
                                    <path
                                        d="M144.64,375.25h0a.49.49,0,0,1-.49-.5v-7.51a.5.5,0,0,1,.49-.5h0a.5.5,0,0,1,.5.5v7.51A.5.5,0,0,1,144.64,375.25Z"
                                        style="opacity: 0.2; transform-origin: 144.645px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elo2ajvvr6xj">
                                    <path
                                        d="M93.89,366.74h0a.5.5,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5v-7.51A.5.5,0,0,1,93.89,366.74Z"
                                        style="opacity: 0.2; transform-origin: 93.8851px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="eldatou47zgu7">
                                    <path
                                        d="M100.87,366.74h0a.5.5,0,0,1,.5.5v7.51a.5.5,0,0,1-.5.5h0a.49.49,0,0,1-.49-.5v-7.51A.5.5,0,0,1,100.87,366.74Z"
                                        style="opacity: 0.2; transform-origin: 100.875px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elsyl7fcb0p9">
                                    <path
                                        d="M108.62,366.74h0a.51.51,0,0,1,.5.5v7.51a.5.5,0,0,1-.5.5h0a.49.49,0,0,1-.49-.5v-7.51A.5.5,0,0,1,108.62,366.74Z"
                                        style="opacity: 0.2; transform-origin: 108.625px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="el6yibi3d24l5">
                                    <path
                                        d="M88.15,366.74h0a.5.5,0,0,1,.49.5v7.51a.49.49,0,0,1-.49.5h0a.5.5,0,0,1-.5-.5v-7.51A.51.51,0,0,1,88.15,366.74Z"
                                        style="opacity: 0.2; transform-origin: 88.1451px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <g id="elo39qs6i054">
                                    <path
                                        d="M116.4,375.25h0a.5.5,0,0,1-.5-.5v-7.51a.5.5,0,0,1,.5-.5h0a.5.5,0,0,1,.49.5v7.51A.49.49,0,0,1,116.4,375.25Z"
                                        style="opacity: 0.2; transform-origin: 116.395px 370.995px;" class="animable">
                                    </path>
                                </g>
                                <rect x="83.56" y="356.28" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 114.155px 361.14px;"
                                    id="elmsji1wrchfa" class="animable"></rect>
                                <g id="el13fe1kld56z">
                                    <rect x="83.56" y="356.28" width="61.19" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 114.155px 361.14px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eljeaurf5103e">
                                    <path
                                        d="M136.67,365.39h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,136.67,365.39Z"
                                        style="opacity: 0.2; transform-origin: 136.665px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="elq7qtc80op2">
                                    <path
                                        d="M129.68,365.39h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,129.68,365.39Z"
                                        style="opacity: 0.2; transform-origin: 129.675px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="ellylwsivst7m">
                                    <path
                                        d="M121.93,365.39h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,121.93,365.39Z"
                                        style="opacity: 0.2; transform-origin: 121.925px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="elcl1bbd6xth">
                                    <path
                                        d="M142.4,365.39h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,142.4,365.39Z"
                                        style="opacity: 0.2; transform-origin: 142.405px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="elaoz0ms6mzj">
                                    <path
                                        d="M91.64,356.89h0a.5.5,0,0,1,.5.49v7.52a.5.5,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,91.64,356.89Z"
                                        style="opacity: 0.2; transform-origin: 91.645px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="elhcsv6cvrsvl">
                                    <path
                                        d="M98.63,356.89h0a.5.5,0,0,1,.5.49v7.52a.5.5,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,98.63,356.89Z"
                                        style="opacity: 0.2; transform-origin: 98.635px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="elg0l09hnj8dw">
                                    <path
                                        d="M106.38,356.89h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.5.5,0,0,1-.5-.49v-7.52A.5.5,0,0,1,106.38,356.89Z"
                                        style="opacity: 0.2; transform-origin: 106.375px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="elkr8vzp4vkab">
                                    <path
                                        d="M85.91,356.89h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.5-.49v-7.52A.49.49,0,0,1,85.91,356.89Z"
                                        style="opacity: 0.2; transform-origin: 85.905px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <g id="el2x5n3pwe5n4">
                                    <path
                                        d="M114.15,365.39h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.49.49,0,0,1,114.15,365.39Z"
                                        style="opacity: 0.2; transform-origin: 114.155px 361.14px;" class="animable">
                                    </path>
                                </g>
                                <rect x="86.32" y="346.42" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 116.915px 351.28px;"
                                    id="elvrff27y1dho" class="animable"></rect>
                                <g id="elli1uje8dxdo">
                                    <rect x="86.32" y="346.42" width="61.19" height="9.72" rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 116.915px 351.28px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eljr5easccci">
                                    <path
                                        d="M139.43,355.53h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49V355A.49.49,0,0,1,139.43,355.53Z"
                                        style="opacity: 0.2; transform-origin: 139.426px 351.28px;" class="animable">
                                    </path>
                                </g>
                                <g id="elqcpfw05kti">
                                    <path
                                        d="M132.44,355.53h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49V355A.49.49,0,0,1,132.44,355.53Z"
                                        style="opacity: 0.2; transform-origin: 132.436px 351.28px;" class="animable">
                                    </path>
                                </g>
                                <g id="el5ydaklzkjhb">
                                    <path
                                        d="M124.69,355.53h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.49.49V355A.49.49,0,0,1,124.69,355.53Z"
                                        style="opacity: 0.2; transform-origin: 124.691px 351.28px;" class="animable">
                                    </path>
                                </g>
                                <g id="elnkdjxsl2apf">
                                    <path
                                        d="M145.16,355.53h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49V355A.5.5,0,0,1,145.16,355.53Z"
                                        style="opacity: 0.2; transform-origin: 145.165px 351.28px;" class="animable">
                                    </path>
                                </g>
                                <g id="elgu0h0svr7xo">
                                    <path
                                        d="M94.4,347h0a.49.49,0,0,1,.5.49V355a.49.49,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,94.4,347Z"
                                        style="opacity: 0.2; transform-origin: 94.405px 351.245px;" class="animable">
                                    </path>
                                </g>
                                <g id="el3a5f25hbmh2">
                                    <path
                                        d="M101.39,347h0a.5.5,0,0,1,.5.49V355a.5.5,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,101.39,347Z"
                                        style="opacity: 0.2; transform-origin: 101.395px 351.245px;" class="animable">
                                    </path>
                                </g>
                                <g id="elzcosuhrtbym">
                                    <path
                                        d="M109.14,347h0a.49.49,0,0,1,.49.49V355a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,109.14,347Z"
                                        style="opacity: 0.2; transform-origin: 109.14px 351.245px;" class="animable">
                                    </path>
                                </g>
                                <g id="elqb1vefjj5d">
                                    <path
                                        d="M88.67,347h0a.49.49,0,0,1,.49.49V355a.49.49,0,0,1-.49.49h0a.5.5,0,0,1-.5-.49v-7.52A.5.5,0,0,1,88.67,347Z"
                                        style="opacity: 0.2; transform-origin: 88.665px 351.245px;" class="animable">
                                    </path>
                                </g>
                                <g id="elfk9qee1cjje">
                                    <path
                                        d="M116.91,355.53h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49V355A.49.49,0,0,1,116.91,355.53Z"
                                        style="opacity: 0.2; transform-origin: 116.916px 351.28px;" class="animable">
                                    </path>
                                </g>
                                <rect x="86.08" y="336.56" width="61.19" height="9.72" rx="1.35"
                                    style="fill: rgb(53, 218, 51); transform-origin: 116.675px 341.42px;"
                                    id="eljnp8qnynymo" class="animable"></rect>
                                <g id="elhl9fry8eso5">
                                    <rect x="86.08" y="336.56" width="61.19" height="9.72"
                                        rx="1.35"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 116.675px 341.42px;"
                                        class="animable"></rect>
                                </g>
                                <g id="el2u2ye647p74">
                                    <path
                                        d="M139.18,345.67h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.49.49,0,0,1,139.18,345.67Z"
                                        style="opacity: 0.2; transform-origin: 139.185px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="ellal451ertsb">
                                    <path
                                        d="M132.2,345.67h0a.49.49,0,0,1-.5-.49v-7.52a.49.49,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,132.2,345.67Z"
                                        style="opacity: 0.2; transform-origin: 132.195px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="elakl0gsoa3fh">
                                    <path
                                        d="M124.45,345.67h0a.5.5,0,0,1-.5-.49v-7.52a.5.5,0,0,1,.5-.49h0a.49.49,0,0,1,.49.49v7.52A.49.49,0,0,1,124.45,345.67Z"
                                        style="opacity: 0.2; transform-origin: 124.445px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="elz79jmkuach">
                                    <path
                                        d="M144.92,345.67h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.5.5,0,0,1,.5.49v7.52A.5.5,0,0,1,144.92,345.67Z"
                                        style="opacity: 0.2; transform-origin: 144.925px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="elpq8sq1snzi">
                                    <path
                                        d="M94.16,337.17h0a.5.5,0,0,1,.5.49v7.52a.5.5,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,94.16,337.17Z"
                                        style="opacity: 0.2; transform-origin: 94.165px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="elogsnuznx5h">
                                    <path
                                        d="M101.15,337.17h0a.5.5,0,0,1,.5.49v7.52a.5.5,0,0,1-.5.49h0a.49.49,0,0,1-.49-.49v-7.52A.49.49,0,0,1,101.15,337.17Z"
                                        style="opacity: 0.2; transform-origin: 101.155px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="el7we1xfx8k35">
                                    <path
                                        d="M108.9,337.17h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.5.5,0,0,1-.5-.49v-7.52A.5.5,0,0,1,108.9,337.17Z"
                                        style="opacity: 0.2; transform-origin: 108.895px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="elwhvpjctwk4">
                                    <path
                                        d="M88.43,337.17h0a.49.49,0,0,1,.49.49v7.52a.49.49,0,0,1-.49.49h0a.49.49,0,0,1-.5-.49v-7.52A.49.49,0,0,1,88.43,337.17Z"
                                        style="opacity: 0.2; transform-origin: 88.425px 341.42px;" class="animable">
                                    </path>
                                </g>
                                <g id="eltog36skwhh">
                                    <path
                                        d="M116.67,345.67h0a.49.49,0,0,1-.49-.49v-7.52a.49.49,0,0,1,.49-.49h0a.49.49,0,0,1,.5.49v7.52A.49.49,0,0,1,116.67,345.67Z"
                                        style="opacity: 0.2; transform-origin: 116.675px 341.42px;" class="animable">
                                    </path>
                                </g>
                            </g>
                            <g id="freepik--coin-2--inject-107" class="animable"
                                style="transform-origin: 114.87px 281.2px;">
                                <g id="elerow27a1fcv">
                                    <circle cx="114.87" cy="281.2" r="30.59"
                                        style="fill: rgb(53, 218, 51); transform-origin: 114.87px 281.2px; transform: rotate(-56.47deg);"
                                        class="animable"></circle>
                                </g>
                                <g id="el4odgfrqtszc">
                                    <path
                                        d="M141.58,296.12a30.58,30.58,0,0,1-40.64,12.3c-.34-.16-.66-.34-1-.52a30.37,30.37,0,0,1-9.16-7.84,30.59,30.59,0,0,1,27.26-49.29,28.55,28.55,0,0,1,5.18,1,29.83,29.83,0,0,1,6.55,2.71A30.6,30.6,0,0,1,141.58,296.12Z"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 114.866px 281.194px;"
                                        class="animable"></path>
                                </g>
                                <g id="elrhpaduwql8">
                                    <path
                                        d="M107.81,275.37c.4,2,2.38,2.55,4.94,2.77l-1.5-7.41C108.38,271.79,107.44,273.54,107.81,275.37Z"
                                        style="opacity: 0.1; transform-origin: 110.242px 274.435px;" class="animable">
                                    </path>
                                </g>
                                <g id="elhxxlpaajjsw">
                                    <path
                                        d="M117.36,283.36l1.5,7.37c3-1.07,4-2.75,3.59-4.54C122,284.15,120,283.56,117.36,283.36Z"
                                        style="opacity: 0.1; transform-origin: 119.949px 287.045px;" class="animable">
                                    </path>
                                </g>
                                <g id="elyonr9cla5hd">
                                    <path
                                        d="M109.39,254.19a27.56,27.56,0,1,0,32.49,21.53A27.55,27.55,0,0,0,109.39,254.19Zm12.45,16.6a17.61,17.61,0,0,0-7.2-.88l1.7,8.41c4.85.19,10.19.62,11.36,6.41.86,4.25-1.52,8.55-7.92,10.54l1,4.67-3.42.69-.94-4.62c-4.13.58-8.35.05-10.9-1.39l1-4.58a16.35,16.35,0,0,0,9,1.47l-1.69-8.33c-4.85-.19-10.11-.68-11.28-6.47-.87-4.25,1.46-8.58,7.83-10.52l-.95-4.71,3.42-.69.93,4.62a18.21,18.21,0,0,1,9,.83Z"
                                        style="opacity: 0.1; transform-origin: 114.87px 281.199px;" class="animable">
                                    </path>
                                </g>
                                <g id="elwp3ovp5kg3f">
                                    <g style="opacity: 0.1; transform-origin: 103.751px 279.595px;" class="animable">
                                        <path d="M110.09,251l-19.3,49.08A30.58,30.58,0,0,1,110.09,251Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 97.1807px 275.54px;"
                                            id="ele1gwk2pj22" class="animable"></path>
                                        <path
                                            d="M123.23,251.78l-22.29,56.64c-.34-.16-.66-.34-1-.52a29.42,29.42,0,0,1-3.49-2.27l21.59-54.86A28.55,28.55,0,0,1,123.23,251.78Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 109.84px 279.595px;"
                                            id="eld2gonp7b008" class="animable"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--coin-1--inject-107" class="animable"
                                style="transform-origin: 150.64px 208.72px;">
                                <g id="el0frqp6clmf">
                                    <circle cx="150.64" cy="208.72" r="30.59"
                                        style="fill: rgb(53, 218, 51); transform-origin: 150.64px 208.72px; transform: rotate(-22.34deg);"
                                        class="animable"></circle>
                                </g>
                                <g id="el08o1qs4qr16p">
                                    <path
                                        d="M178.87,220.51a30.58,30.58,0,0,1-39,16.84c-.35-.12-.69-.26-1-.4a29.34,29.34,0,0,1-3.72-1.86,29.9,29.9,0,0,1-6.27-4.89,30.59,30.59,0,0,1,13.6-51,30.23,30.23,0,0,1,7.88-1.11,28.4,28.4,0,0,1,5.26.41,29.81,29.81,0,0,1,6.82,2A30.6,30.6,0,0,1,178.87,220.51Z"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.5; transform-origin: 150.632px 208.7px;"
                                        class="animable"></path>
                                </g>
                                <g id="eluytqqw4z9mq">
                                    <path
                                        d="M148.06,199.94c-.78,1.88.54,3.45,2.54,5.06l2.91-7C150.55,197.29,148.78,198.21,148.06,199.94Z"
                                        style="opacity: 0.1; transform-origin: 150.671px 201.379px;" class="animable">
                                    </path>
                                </g>
                                <g id="el2cbet47lu7j">
                                    <path
                                        d="M151.49,211.91l-2.9,7c3,.76,4.82-.07,5.52-1.75C154.91,215.19,153.56,213.56,151.49,211.91Z"
                                        style="opacity: 0.1; transform-origin: 151.467px 215.552px;" class="animable">
                                    </path>
                                </g>
                                <g id="elog9r8mhkm">
                                    <path
                                        d="M161.25,183.29a27.56,27.56,0,1,0,14.82,36.05A27.56,27.56,0,0,0,161.25,183.29Zm1,20.73a17.46,17.46,0,0,0-5.47-4.77l-3.31,7.92c3.91,2.88,8.08,6.23,5.81,11.68-1.67,4-6.05,6.22-12.47,4.28L145,227.52l-3.21-1.34,1.82-4.35c-3.75-1.84-7-4.65-8.25-7.27l3.41-3.22a16.39,16.39,0,0,0,6.6,6.25l3.28-7.84c-3.91-2.88-8-6.24-5.72-11.69,1.67-4,6-6.28,12.4-4.31l1.85-4.43,3.21,1.34L158.55,195a18.29,18.29,0,0,1,7,5.72Z"
                                        style="opacity: 0.1; transform-origin: 150.637px 208.724px;" class="animable">
                                    </path>
                                </g>
                                <g id="elv9ma25pp1oa">
                                    <g style="opacity: 0.1; transform-origin: 137.808px 207.72px;" class="animable">
                                        <path d="M142.46,179.24l-13.6,51a30.59,30.59,0,0,1,13.6-51Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 131.238px 204.74px;"
                                            id="eln2fhmr3bcw" class="animable"></path>
                                        <path
                                            d="M155.6,178.54l-15.71,58.81c-.35-.12-.69-.26-1-.4a29.34,29.34,0,0,1-3.72-1.86l15.21-57A28.4,28.4,0,0,1,155.6,178.54Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 145.385px 207.72px;"
                                            id="eloo3gx7awh7" class="animable"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--Arrow--inject-107" class="animable"
                                style="transform-origin: 133.135px 151.055px;">
                                <polygon
                                    points="122.8 151.45 133.14 163.35 143.47 151.45 138.36 151.45 138.36 138.76 127.91 138.76 127.91 151.45 122.8 151.45"
                                    style="fill: rgb(53, 218, 51); transform-origin: 133.135px 151.055px;"
                                    id="elueiynz220zi" class="animable"></polygon>
                            </g>
                            <g id="freepik--Character--inject-107" class="animable"
                                style="transform-origin: 230.852px 278.403px;">
                                <path
                                    d="M241.13,183.73l3.2.23,3.24.2c2.15.12,4.3.24,6.34.24,1,0,2,0,2.91-.08.44,0,.88-.07,1.23-.12s.66-.1.77-.11.06,0,.05,0a.3.3,0,0,0-.08.08s0,0,.12-.06a3.08,3.08,0,0,0,.59-.53,14.29,14.29,0,0,0,1.49-2,46.19,46.19,0,0,0,2.8-5.45c.86-2,1.67-4,2.45-6.05,1.54-4.12,3-8.42,4.35-12.63l5.58,1a108.14,108.14,0,0,1-2.06,13.87c-.5,2.3-1.07,4.6-1.78,6.91a46.78,46.78,0,0,1-2.71,7A22.64,22.64,0,0,1,267.4,190a14.5,14.5,0,0,1-1.76,1.94,11.72,11.72,0,0,1-1.23,1c-.27.17-.54.34-.82.5l-.73.36a16.45,16.45,0,0,1-2.49.88,21,21,0,0,1-2.13.46c-1.35.23-2.63.37-3.88.47a76.42,76.42,0,0,1-14.46-.41Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 258.035px 176.614px;"
                                    id="elmqpbw1q2bw9" class="animable"></path>
                                <path d="M241,181.43l15.07,1.4L250.3,200s-11.38,4.1-15.6-1.66S229.87,181.56,241,181.43Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 243.98px 191.422px;"
                                    id="el67nlzodi7o6" class="animable"></path>
                                <g id="elc4wb73obycw">
                                    <path
                                        d="M256.05,182.83,250.3,200s-.89.32-2.28.66a20.42,20.42,0,0,1-8.93.41h0a7.28,7.28,0,0,1-4.38-2.73c-4.22-5.75-4.82-16.74,6.28-16.87Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 243.975px 191.426px;"
                                        class="animable"></path>
                                </g>
                                <g id="elm8fedwwd0aj">
                                    <path
                                        d="M248,200.62a20.42,20.42,0,0,1-8.93.41h0c-2.07-4.38.12-11.45,3-9.63C245.18,193.31,247.07,197.74,248,200.62Z"
                                        style="opacity: 0.2; transform-origin: 243.127px 196.224px;" class="animable">
                                    </path>
                                </g>
                                <path d="M270.45,157.65l5.2-5.69,3.21,7.92s-4.95,4.8-7.31,2.15Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 274.655px 157.394px;"
                                    id="eldxdf7df9v5h" class="animable"></path>
                                <polygon points="282.98 149.82 283.42 157.57 278.86 159.88 275.65 151.96 282.98 149.82"
                                    style="fill: rgb(228, 137, 123); transform-origin: 279.535px 154.85px;"
                                    id="ellm9vi5kjjc" class="animable"></polygon>
                                <polygon points="238.07 409.78 245.54 408.48 244.68 390.89 237.22 392.19 238.07 409.78"
                                    style="fill: rgb(228, 137, 123); transform-origin: 241.38px 400.335px;"
                                    id="elb3ssqms483s" class="animable"></polygon>
                                <polygon points="181.1 409.26 188.54 410.58 193.72 393.72 186.28 392.39 181.1 409.26"
                                    style="fill: rgb(228, 137, 123); transform-origin: 187.41px 401.485px;"
                                    id="elodrl5g63sfo" class="animable"></polygon>
                                <g id="elxb93sl7hrim">
                                    <polygon points="244.68 390.9 245.13 399.96 237.66 401.26 237.21 392.2 244.68 390.9"
                                        style="opacity: 0.2; transform-origin: 241.17px 396.08px;" class="animable">
                                    </polygon>
                                </g>
                                <g id="elfewtd4avso">
                                    <polygon points="186.27 392.4 193.72 393.72 191.05 402.41 183.6 401.09 186.27 392.4"
                                        style="opacity: 0.2; transform-origin: 188.66px 397.405px;" class="animable">
                                    </polygon>
                                </g>
                                <path
                                    d="M247.64,397.75,235,400s-2-42.5-2.92-66a246.51,246.51,0,0,0-3.39-27.9c-2.24-13.51-5.19-28.15-7.63-39.62-2.58-12.08-4.58-20.64-4.58-20.64l26.61-.64s9.56,59.87,10,82.94C253.55,352.05,247.64,397.75,247.64,397.75Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 234.798px 322.6px;"
                                    id="elrd46fb1ahrp" class="animable"></path>
                                <g id="elcb9qc24accc">
                                    <path
                                        d="M228.69,306c-2.24-13.51-5.19-28.15-7.63-39.62l3.08-5.8C230.28,268.72,230.7,293,228.69,306Z"
                                        style="opacity: 0.2; transform-origin: 225.414px 283.29px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M228.73,245.48s-6.84,65.1-10.45,87c-3.95,24-23.47,68.84-23.47,68.84l-13.63-2.43s13-41.3,15.36-65.32c2.69-26.86,6.08-87.46,6.08-87.46Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 204.955px 323.4px;"
                                    id="el0y4jzytb761o" class="animable"></path>
                                <polygon points="196.39 401.89 180.33 399.04 181.24 394.25 198.17 396.26 196.39 401.89"
                                    style="fill: rgb(53, 218, 51); transform-origin: 189.25px 398.07px;"
                                    id="elupoyqd73dkg" class="animable"></polygon>
                                <polygon points="249.25 397.88 234.15 400.29 233.42 395.43 249.98 392.53 249.25 397.88"
                                    style="fill: rgb(53, 218, 51); transform-origin: 241.7px 396.41px;"
                                    id="el1o58vusiviy" class="animable"></polygon>
                                <path
                                    d="M246.27,406.87l-8.28-.23a.68.68,0,0,0-.66.5l-1.74,6.66a1.09,1.09,0,0,0,1,1.37c3,0,7.31,0,11.06.08,4.38.12,7.17-.1,12.32,0,3.11.08,4.08-3,2.79-3.34-5.88-1.45-9.72-1.17-14.73-4.45A3.46,3.46,0,0,0,246.27,406.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 249.434px 410.963px;"
                                    id="ele8lv17vhh4q" class="animable"></path>
                                <path
                                    d="M246.86,407.78a.17.17,0,0,1,.1-.18c.35-.17,3.45-1.63,4.36-1.09a.55.55,0,0,1,.27.49,1,1,0,0,1-.36.86c-.86.71-3,.35-4.23.08h0A.18.18,0,0,1,246.86,407.78Zm.75-.08c1.66.32,2.91.28,3.39-.12a.68.68,0,0,0,.24-.57.22.22,0,0,0-.11-.19l-.07,0C250.5,406.58,248.83,407.16,247.61,407.7Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 249.226px 407.333px;"
                                    id="elijagds671dl" class="animable"></path>
                                <path
                                    d="M246.93,407.9a.16.16,0,0,1-.07-.16c0-.09.29-2.11,1.28-2.87a1.28,1.28,0,0,1,1-.28c.49.06.62.31.65.51.11.86-1.76,2.44-2.69,2.83H247Zm2.17-3a1,1,0,0,0-.74.21,4.17,4.17,0,0,0-1.08,2.3c.95-.54,2.23-1.78,2.16-2.3,0,0,0-.11-.16-.17Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 248.326px 406.253px;"
                                    id="elmjefi3u9oir" class="animable"></path>
                                <path
                                    d="M198.59,182.26a167.89,167.89,0,0,1,3.53,25c.42,5.88.56,11.48.57,16.55,0,11.9-.71,20.94-.51,24l40.46-1.15C250.33,204,241,181.43,241,181.43a77.35,77.35,0,0,0-9.59-1.59c-.68-.07-1.37-.13-2.08-.17a149,149,0,0,0-17.2.49c-1.09.08-2.18.19-3.25.32C203.41,181.14,198.59,182.26,198.59,182.26Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 222.134px 213.708px;"
                                    id="elvi8aw18x5gh" class="animable"></path>
                                <g id="elwm1pgwdzusn">
                                    <path
                                        d="M198.59,182.26a167.89,167.89,0,0,1,3.53,25c.42,5.88.56,11.48.57,16.55,0,11.9-.71,20.94-.51,24l40.46-1.15C250.33,204,241,181.43,241,181.43a77.35,77.35,0,0,0-9.59-1.59c-.68-.07-1.37-.13-2.08-.17a149,149,0,0,0-17.2.49c-1.09.08-2.18.19-3.25.32C203.41,181.14,198.59,182.26,198.59,182.26Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 222.134px 213.708px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M227.08,187.56c1.06,3,2.81,5.46,4.16,13.3q-.69,2.49-1.62,5-1.44-2.39-3.09-4.77c-.66-7.57.05-9.58-1.06-13.41Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 228.355px 196.71px;"
                                    id="elzlwy09znkr" class="animable"></path>
                                <polygon points="227.04 190 228.36 186.16 225.59 185.04 223.57 186.35 227.04 190"
                                    style="fill: rgb(38, 50, 56); transform-origin: 225.965px 187.52px;"
                                    id="elzvahwanxtjh" class="animable"></polygon>
                                <path
                                    d="M225.47,185.05a17.05,17.05,0,0,1-13.36-4.89,8.38,8.38,0,0,0,2-4.07c1.11-4.69.19-11.26-.68-15.32l10.72,8.7a19.83,19.83,0,0,0-.38,2.13c-.47,3.6.33,7,5.51,8.06C230.41,181.48,230.23,184.81,225.47,185.05Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 220.983px 172.937px;"
                                    id="elr7w538nowu" class="animable"></path>
                                <path
                                    d="M225.59,185s-1.73,2.36-3.78,4.7c-3.18-1.55-10.67-5.73-10.53-9.86a4.15,4.15,0,0,1,1.92-2A44.68,44.68,0,0,0,225.59,185Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 218.434px 183.77px;"
                                    id="elhut529ur5rr" class="animable"></path>
                                <path
                                    d="M225.59,185a22,22,0,0,1,4.24,4.39c2.19-1.66.63-9.27-.25-10.09a5.28,5.28,0,0,0-3.1-.9S229.15,184,225.59,185Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 228.268px 183.894px;"
                                    id="elhoikrke3ksm" class="animable"></path>
                                <g id="el10m1bjclvwl">
                                    <path
                                        d="M224.18,169.47a19.83,19.83,0,0,0-.38,2.13,11.37,11.37,0,0,1-9.66,4.49c1.11-4.69.19-11.26-.68-15.32Z"
                                        style="opacity: 0.2; transform-origin: 218.82px 168.438px;" class="animable">
                                    </path>
                                </g>
                                <path d="M205.66,150c-1.12,2.83-1,8.83,3.15,7.18S207.59,145.09,205.66,150Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 207.701px 153.08px;"
                                    id="el52695pbo97l" class="animable"></path>
                                <path
                                    d="M226.31,155.37c-.09,7.5.25,11.89-3.34,15.88-5.4,6-14.82,2.95-17-4.44-1.94-6.65-1.48-17.79,5.7-21.06A10.35,10.35,0,0,1,226.31,155.37Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 215.649px 159.625px;"
                                    id="elaflk3yt8apl" class="animable"></path>
                                <path
                                    d="M215.05,157.92c0,.61-.27,1.12-.67,1.13s-.74-.46-.77-1.07.26-1.12.66-1.13S215,157.31,215.05,157.92Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 214.329px 157.95px;"
                                    id="elkef1ppeuab" class="animable"></path>
                                <path
                                    d="M208.16,158.2c0,.61-.27,1.12-.67,1.13s-.75-.46-.78-1.07.27-1.12.67-1.13S208.12,157.59,208.16,158.2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 207.434px 158.23px;"
                                    id="elp92wb6hblj" class="animable"></path>
                                <path d="M210.36,158.41a21.06,21.06,0,0,1-2.71,5.15,3.66,3.66,0,0,0,2.93.37Z"
                                    style="fill: rgb(222, 87, 83); transform-origin: 209.115px 161.246px;"
                                    id="elis6vjde55wm" class="animable"></path>
                                <path
                                    d="M214,166.13a6.4,6.4,0,0,1-.79.08A.19.19,0,0,1,213,166a.19.19,0,0,1,.17-.19,4.79,4.79,0,0,0,3.85-2,.18.18,0,0,1,.24-.07.19.19,0,0,1,.07.25A5,5,0,0,1,214,166.13Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 215.175px 164.965px;"
                                    id="elr5tcajumiua" class="animable"></path>
                                <path
                                    d="M217.06,155.61a.37.37,0,0,1-.34-.12,2.9,2.9,0,0,0-2.35-1.1.36.36,0,0,1-.4-.32.35.35,0,0,1,.31-.39,3.56,3.56,0,0,1,3,1.35.35.35,0,0,1-.21.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 215.668px 154.645px;"
                                    id="elno0y0kv2rkr" class="animable"></path>
                                <path
                                    d="M205.07,156a.31.31,0,0,1-.21,0,.36.36,0,0,1-.19-.47,3.53,3.53,0,0,1,2.47-2.12.37.37,0,0,1,.42.3.37.37,0,0,1-.29.41,2.75,2.75,0,0,0-1.94,1.7A.35.35,0,0,1,205.07,156Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 206.103px 154.712px;"
                                    id="elrthatshmk8" class="animable"></path>
                                <path
                                    d="M214.33,149.82s2-1.55,3,0,1.1,5.8,1.1,5.8l.39-.77s3,9.35,6.77,6.82,9.06-12.33-.12-16.88c0,0-1.05-2.24-7-3.14s-13,3-14.11,7,.73,6.09.73,6.09a5.69,5.69,0,0,1,1-2.37,2.46,2.46,0,0,0,1.55,1.75,4.19,4.19,0,0,1,.4-2.33,4.84,4.84,0,0,0,1.07,1.85c.27-4.06,3-5,3.86-5A1.47,1.47,0,0,1,214.33,149.82Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 217.285px 151.812px;"
                                    id="elpgj3hk7j4u" class="animable"></path>
                                <path
                                    d="M229.5,161.45a7,7,0,0,1-3.3,4.3c-2.18,1.22-3.87-.59-3.78-2.95.08-2.13,1.31-5.33,3.74-5.58A3.23,3.23,0,0,1,229.5,161.45Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 226.04px 161.675px;"
                                    id="eld0s99qz8gtl" class="animable"></path>
                                <path
                                    d="M189,406.87l-8.28-.23a.68.68,0,0,0-.66.5l-1.74,6.66a1.09,1.09,0,0,0,1,1.37c3,0,7.31,0,11.06.08,4.39.12,7.18-.1,12.32,0,3.11.08,4.09-3,2.79-3.34-5.88-1.45-9.72-1.17-14.73-4.45A3.46,3.46,0,0,0,189,406.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 192.166px 410.963px;"
                                    id="ellm8mgndvy6m" class="animable"></path>
                                <path
                                    d="M189.61,407.78a.19.19,0,0,1,.1-.18c.35-.17,3.45-1.63,4.36-1.09a.58.58,0,0,1,.28.49,1,1,0,0,1-.37.86c-.86.71-3,.35-4.23.08h0A.17.17,0,0,1,189.61,407.78Zm.75-.08c1.66.32,2.91.28,3.39-.12A.65.65,0,0,0,194,407a.22.22,0,0,0-.11-.19l-.06,0C193.25,406.58,191.58,407.16,190.36,407.7Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 191.981px 407.333px;"
                                    id="elixtohtg7xvj" class="animable"></path>
                                <path
                                    d="M189.68,407.9a.16.16,0,0,1-.07-.16c0-.09.29-2.11,1.28-2.87a1.29,1.29,0,0,1,1-.28c.49.06.62.31.65.51.11.86-1.76,2.44-2.69,2.83h-.13Zm2.17-3a1,1,0,0,0-.74.21,4.24,4.24,0,0,0-1.08,2.3c.95-.54,2.23-1.78,2.16-2.3,0,0,0-.11-.16-.17Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 191.076px 406.254px;"
                                    id="el3wkvajve5zb" class="animable"></path>
                                <path
                                    d="M246.62,223.39c0,.34,0,.69-.05,1-.1,2.17-.26,4.43-.47,6.76-.07.81-.15,1.63-.23,2.46-.15,1.42-.32,2.87-.52,4.35-.25,2-.56,4.05-.9,6.16-.15.92-.32,1.85-.48,2.79-12.18.35-35.86.76-41.79.92,0-.67,0-1.63,0-2.83,0-1.62.12-3.69.21-6.15.05-1.33.1-2.79.15-4.34,0-.79,0-1.6.06-2.44,0-2.11.09-4.38.09-6.77,0-.34,0-.68,0-1v-.46c0-2.82-.05-5.81-.17-8.91-.08-2.48-.21-5-.4-7.65-.16-2.38-.37-4.81-.65-7.26a156.49,156.49,0,0,0-2.88-17.78s4.82-1.11,10.26-1.77a130.66,130.66,0,0,1,20.77,25.36c3.29-8.82,4.37-17.47,2.69-25.9a78,78,0,0,1,8.67,1.49S247.76,195.9,246.62,223.39Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 222.67px 213.88px;"
                                    id="eln0pk74pn0sj" class="animable"></path>
                                <g id="elqfeghrnu0u">
                                    <path d="M245.35,238c-.25,2-.56,4.05-.9,6.16l-42.28.88c0-1.62.12-3.69.21-6.15Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 223.76px 241.52px;"
                                        class="animable"></path>
                                </g>
                                <g id="eldazmt3k484f">
                                    <path d="M246.1,231.19c-.07.81-.15,1.63-.23,2.46l-43.34.9c0-.79,0-1.6.06-2.44Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 224.315px 232.87px;"
                                        class="animable"></path>
                                </g>
                                <g id="el28kzrv2ghz9h">
                                    <path d="M246.62,223.39c0,.34,0,.69-.05,1l-43.89.91c0-.34,0-.68,0-1Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 224.65px 224.345px;"
                                        class="animable"></path>
                                </g>
                                <g id="elib0l2fzncf">
                                    <path
                                        d="M202.52,214.94c-.08-2.48-.21-5-.4-7.65-.16-2.38-.37-4.81-.65-7.26,1.67-1.6,3.54-2.6,5.39-2.46C206.86,197.57,208.89,211.49,202.52,214.94Z"
                                        style="opacity: 0.2; transform-origin: 204.319px 206.248px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M204.35,193c-2,4.59-4,9.44-5.75,14.17-.89,2.37-1.67,4.76-2.37,7.1a37.41,37.41,0,0,0-1.42,6.63,12.23,12.23,0,0,0-.06,1.27c0,.17,0,.32,0,.42v.16a.21.21,0,0,0,0-.06c-.1-.16-.2-.22-.17-.14a1.58,1.58,0,0,0,.48.46,9.93,9.93,0,0,0,2.47,1.13,28.27,28.27,0,0,0,3.3.86,107.58,107.58,0,0,0,15,1.62l.59,5.64a64,64,0,0,1-16.68,1.58,36.34,36.34,0,0,1-4.5-.52,19.94,19.94,0,0,1-5-1.61,12.13,12.13,0,0,1-2.74-1.85,9.74,9.74,0,0,1-2.4-3.38L185,226l-.14-.44a8.08,8.08,0,0,1-.22-.84,13.39,13.39,0,0,1-.26-1.54,19.56,19.56,0,0,1-.13-2.69,43.41,43.41,0,0,1,1.3-9c.65-2.78,1.46-5.43,2.32-8.06s1.81-5.18,2.84-7.7,2.06-5,3.29-7.54Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 200.333px 211.037px;"
                                    id="el2165nq5it98" class="animable"></path>
                                <path
                                    d="M196.4,183c-6.56,3.1-12.16,24-12.16,24L202,212.32a105.93,105.93,0,0,0,5.64-18.25C209.6,184.06,204.34,179.24,196.4,183Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 196.146px 197.023px;"
                                    id="eldbkvs3m978r" class="animable"></path>
                                <g id="ellr9ovuyz2p">
                                    <path
                                        d="M196.4,183c-6.56,3.1-12.16,24-12.16,24L202,212.32a105.93,105.93,0,0,0,5.64-18.25C209.6,184.06,204.34,179.24,196.4,183Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 196.146px 197.023px;"
                                        class="animable"></path>
                                </g>
                                <path d="M214,226.57l6.25-4.45,1.75,9.54s-6.14,2.6-7.87-.53Z"
                                    style="fill: rgb(228, 137, 123); transform-origin: 218px 227.397px;"
                                    id="ela1zftq2hgb" class="animable"></path>
                                <polygon points="226.48 222.39 227.56 230.35 221.95 231.66 220.2 222.12 226.48 222.39"
                                    style="fill: rgb(228, 137, 123); transform-origin: 223.88px 226.89px;"
                                    id="eliy6h17co7vf" class="animable"></polygon>
                            </g>
                            <g id="freepik--Device--inject-107" class="animable"
                                style="transform-origin: 341.51px 283.375px;">
                                <rect x="273.07" y="151.46" width="136.88" height="263.83" rx="6.73"
                                    style="fill: rgb(38, 50, 56); transform-origin: 341.51px 283.375px;"
                                    id="elsj8pyhxhro" class="animable"></rect>
                                <path
                                    d="M407.19,159V398.22a3.9,3.9,0,0,1-3.95,3.9H279.37a3.26,3.26,0,0,1-.9-.12,3.22,3.22,0,0,1-1.58-.88,3.54,3.54,0,0,1-1.06-2.58V158.68a3.14,3.14,0,0,1,3-3.26H314A2.46,2.46,0,0,1,316.3,157l1.47,3.58a2.46,2.46,0,0,0,2.26,1.57h43.05a2.46,2.46,0,0,0,2.26-1.54l1.46-3.6a2.48,2.48,0,0,1,2.27-1.59h34.67A3.55,3.55,0,0,1,407.19,159Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 341.509px 278.77px;"
                                    id="elujfy7btc0fb" class="animable"></path>
                                <g id="elff46xezcugg">
                                    <rect x="292.17" y="163.7" width="1.83" height="2.44"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 293.085px 164.92px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="eljmuw30q321n">
                                    <rect x="289.18" y="162.88" width="1.83" height="3.25"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 290.095px 164.505px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elzni6yh9uwj">
                                    <rect x="286.2" y="162.07" width="1.83" height="4.07"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 287.115px 164.105px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elgds0wbi7v3n">
                                    <rect x="283.22" y="161.25" width="1.83" height="4.88"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 284.135px 163.69px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elyewp1mlh18">
                                    <rect x="389.33" y="162.81" width="1.08" height="2.44"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 389.87px 164.03px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eloiwgzz6ajrn">
                                    <rect x="391.16" y="161.92" width="8.64" height="4.22"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.6; transform-origin: 395.48px 164.03px; transform: rotate(180deg);"
                                        class="animable"></rect>
                                </g>
                                <g id="elnxvktgt5ilj">
                                    <rect x="275.83" y="172.18" width="131.35" height="210.38"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.3; transform-origin: 341.505px 277.37px;"
                                        class="animable"></rect>
                                </g>
                                <rect x="303.27" y="317.12" width="76.47" height="22.36" rx="3.63"
                                    style="fill: rgb(53, 218, 51); transform-origin: 341.505px 328.3px;"
                                    id="elw4fgregd7z" class="animable"></rect>
                                <path
                                    d="M319.66,333l-1.86-2.67h-2.41V333H313.7v-9.11h3.74c2.4,0,3.88,1.22,3.88,3.24a2.92,2.92,0,0,1-1.94,2.88l2.1,3Zm-2.29-7.68h-2V329h2c1.48,0,2.25-.67,2.25-1.82S318.85,325.32,317.37,325.32Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 317.59px 328.45px;"
                                    id="el18sww8o5uhf" class="animable"></path>
                                <path d="M330,331.58V333h-6.83v-9.11h6.65v1.42h-5v2.37h4.4v1.39h-4.4v2.51Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 326.585px 328.445px;"
                                    id="eltun6drviep9" class="animable"></path>
                                <path d="M333.62,325.31v2.77H338v1.43h-4.4V333h-1.69v-9.11h6.65v1.42Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 335.235px 328.445px;"
                                    id="el3xyq9ijcj2x" class="animable"></path>
                                <path
                                    d="M340.14,329v-5.14h1.69V329c0,1.88.84,2.69,2.31,2.69s2.31-.81,2.31-2.69v-5.07h1.66V329c0,2.66-1.49,4.1-4,4.1S340.14,331.69,340.14,329Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 344.125px 328.48px;"
                                    id="eljtzdwimswrn" class="animable"></path>
                                <path d="M358.58,323.89V333h-1.4l-5-6.17V333h-1.68v-9.11h1.39l5,6.17v-6.17Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 354.54px 328.445px;"
                                    id="elzq1jby3xco9" class="animable"></path>
                                <path
                                    d="M361,323.89h4c3,0,5,1.82,5,4.55s-2,4.56-5,4.56h-4Zm3.9,7.68a3.13,3.13,0,1,0,0-6.25h-2.21v6.25Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 365.5px 328.445px;"
                                    id="eltkd0bzu276" class="animable"></path>
                                <g id="el8jm5v3fj2q">
                                    <rect x="275.83" y="172.18" width="131.35" height="12.86"
                                        style="fill: rgb(255, 255, 255); isolation: isolate; opacity: 0.3; transform-origin: 341.505px 178.61px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elkt9gwy1url">
                                    <circle cx="341.51" cy="258.67" r="39.54"
                                        style="fill: rgb(53, 218, 51); transform-origin: 341.51px 258.67px; transform: rotate(-76.72deg);"
                                        class="animable"></circle>
                                </g>
                                <path
                                    d="M353.58,273.69H329.43a1.33,1.33,0,0,1-1.3-1.1l-4.26-25.16a1.29,1.29,0,0,1,.29-1.07,1.31,1.31,0,0,1,1-.47h32.68a1.32,1.32,0,0,1,1.3,1.54l-4.26,25.16A1.33,1.33,0,0,1,353.58,273.69Zm-23-2.64h21.92l3.81-22.52H326.73Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 341.504px 259.79px;"
                                    id="elt5avvj8hgy7" class="animable"></path>
                                <path
                                    d="M345.52,273.69h-8a1.33,1.33,0,0,1-1.32-1.25l-1.42-25.16a1.32,1.32,0,0,1,1.32-1.39h10.85a1.32,1.32,0,0,1,1.32,1.39l-1.41,25.16A1.33,1.33,0,0,1,345.52,273.69Zm-6.77-2.64h5.52l1.26-22.52h-8Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 341.525px 259.79px;"
                                    id="elvvwl9rb2jir" class="animable"></path>
                                <path d="M356.18,257H326.83a1.33,1.33,0,0,1,0-2.65h29.35a1.33,1.33,0,1,1,0,2.65Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 341.62px 255.675px;"
                                    id="elfaleo5ch8ew" class="animable"></path>
                                <path d="M354.61,265.4H328.4a1.32,1.32,0,0,1,0-2.64h26.21a1.32,1.32,0,1,1,0,2.64Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 341.505px 264.08px;"
                                    id="elctqob1978w" class="animable"></path>
                                <path
                                    d="M355,283.63a4.16,4.16,0,1,1,4.17-4.16A4.16,4.16,0,0,1,355,283.63Zm0-5.68a1.52,1.52,0,1,0,1.52,1.52A1.53,1.53,0,0,0,355,278Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 355.01px 279.47px;"
                                    id="elze1eux9jds" class="animable"></path>
                                <path
                                    d="M328,283.63a4.16,4.16,0,1,1,4.17-4.16A4.16,4.16,0,0,1,328,283.63Zm0-5.68a1.52,1.52,0,1,0,1.52,1.52A1.52,1.52,0,0,0,328,278Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 328.01px 279.47px;"
                                    id="el3dafmwdqj79" class="animable"></path>
                                <polygon
                                    points="346.08 237.04 341.51 231.78 336.94 237.04 339.2 237.04 339.2 242.64 343.82 242.64 343.82 237.04 346.08 237.04"
                                    style="fill: rgb(255, 255, 255); transform-origin: 341.51px 237.21px;"
                                    id="elzei4e9j6xhs" class="animable"></polygon>
                                <path
                                    d="M357.85,248.53a1.32,1.32,0,0,1-.39-2.58l7-2.17a1.32,1.32,0,1,1,.77,2.52l-7,2.17A1.37,1.37,0,0,1,357.85,248.53Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 361.388px 246.113px;"
                                    id="elfgqdhrbp2lv" class="animable"></path>
                                <g id="ele86zh842ww">
                                    <g style="isolation: isolate; opacity: 0.1; transform-origin: 341.51px 278.765px;"
                                        class="animable">
                                        <path
                                            d="M334.93,162.15,297.11,303.79h0l-.42,1.59h0L296,308h0l-.43,1.59-19.74,74V294l37-138.59H314A2.47,2.47,0,0,1,316.3,157l1.46,3.58a2.47,2.47,0,0,0,2.26,1.57Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 305.38px 269.5px;"
                                            id="elg4ury49afl" class="animable"></path>
                                        <polygon
                                            points="407.19 234.49 407.19 324 386.33 402.12 362.44 402.12 362.88 400.45 363.51 398.11 364.76 393.43 365.38 391.09 366.62 386.4 367.25 384.07 386.92 310.43 386.92 310.42 387.82 307.02 407.19 234.49"
                                            style="fill: rgb(255, 255, 255); transform-origin: 384.815px 318.305px;"
                                            id="elnfw8a860sfl" class="animable"></polygon>
                                        <path
                                            d="M347.88,162.15,310.3,302.91l-.23.84L308,311.47l-.23.84-24,89.81h-4.45a3.26,3.26,0,0,1-.9-.12l23.94-89.69.24-.84,2.05-7.72.23-.84,37.58-140.76Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 313.15px 282.135px;"
                                            id="elu0q6bwi8cma" class="animable"></path>
                                    </g>
                                </g>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                        radius="2"></feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                    </feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                        radius="2"></feMorphology>
                                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                    </feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                    <feColorMatrix type="matrix"
                                        values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                    </feColorMatrix>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </center>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
