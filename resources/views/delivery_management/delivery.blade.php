@extends('order_management.layout')
@section('title', 'Delivery Status')
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
                    <div class="col">
                        <form method="post" style="width: 100%">
                            <h2 class="text-left">Delivery Status</h2>
                            <p class="text-left">Track your ordered items here.</p>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="username" placeholder="Username">
                            </div>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="orderno" placeholder="Order Number">
                            </div>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="status" placeholder="Status">
                            </div>
                            <div class="form-group"><input class="form-control" type="text" name="address"
                                    placeholder="Address" style="height: 80px; padding-bottom: 80px; ">
                            </div>
                            <div class="form-group"><button class="btn btn-block" type="submit"
                                    style="background-color:#6EBD6C; color: white;">Confirm Delivery</button>
                            </div>
                        </form>
                    </div>
                    <div class="col" style="margin-top: 10px">
                        <br />
                        <svg class="animated" id="freepik_stories-take-away" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 750 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" style="width: 500px; height: 500px;">
                            <style>
                                svg#freepik_stories-take-away:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-take-away.animated #freepik--background-complete--inject-69 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-take-away.animated #freepik--Plant--inject-69 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-take-away.animated #freepik--Device--inject-69 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-take-away.animated #freepik--Character--inject-69 {
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
                            <g id="freepik--background-complete--inject-69" class="animable"
                                style="transform-origin: 383.895px 278.965px;">
                                <g id="elqzb8gui054r">
                                    <rect x="87.08" y="248.12" width="104.15" height="80.33"
                                        style="fill: rgb(245, 245, 245); transform-origin: 139.155px 288.285px; transform: rotate(180deg);"
                                        class="animable" id="el081bns9sbw"></rect>
                                </g>
                                <path
                                    d="M113.18,327.88c.14,0,.26-17.9.26-40s-.12-40-.26-40-.26,17.9-.26,40S113,327.88,113.18,327.88Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 113.18px 287.88px;"
                                    id="elgoarzhya7ln" class="animable"></path>
                                <g id="elccesqctdlze">
                                    <rect x="95.92" y="310.16" width="7.98" height="9.03"
                                        style="fill: rgb(250, 250, 250); transform-origin: 99.91px 314.675px; transform: rotate(180deg);"
                                        class="animable" id="elfjy0x7q68m"></rect>
                                </g>
                                <rect x="147.63" y="248.32" width="11.83" height="17.14"
                                    style="fill: rgb(235, 235, 235); transform-origin: 153.545px 256.89px;"
                                    id="elmu6gi74znqf" class="animable"></rect>
                                <rect x="147.63" y="311.07" width="11.83" height="17.14"
                                    style="fill: rgb(235, 235, 235); transform-origin: 153.545px 319.64px;"
                                    id="elxyjb7x3s4z" class="animable"></rect>
                                <rect x="58.99" y="329.58" width="171.94" height="132.61"
                                    style="fill: rgb(235, 235, 235); transform-origin: 144.96px 395.885px;"
                                    id="elufnggcd7o2n" class="animable"></rect>
                                <path
                                    d="M187.85,461.26c-.19,0-.34-29.56-.34-66s.15-66,.34-66,.34,29.55.34,66S188,461.26,187.85,461.26Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 187.85px 395.26px;"
                                    id="elo7baq7n2oco" class="animable"></path>
                                <rect x="203.17" y="432.01" width="13.18" height="14.9"
                                    style="fill: rgb(250, 250, 250); transform-origin: 209.76px 439.46px;"
                                    id="el8djynijunof" class="animable"></rect>
                                <rect x="111.44" y="329.92" width="19.53" height="28.3"
                                    style="fill: rgb(224, 224, 224); transform-origin: 121.205px 344.07px;"
                                    id="elnw2j8kkysj" class="animable"></rect>
                                <rect x="111.44" y="433.5" width="19.53" height="28.3"
                                    style="fill: rgb(224, 224, 224); transform-origin: 121.205px 447.65px;"
                                    id="elfessd6rycrn" class="animable"></rect>
                                <path d="M365.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 362.76px 96px;" id="ellnvnug71m8g"
                                    class="animable"></path>
                                <path d="M375.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 372.76px 96px;" id="elsvzg0rans5"
                                    class="animable"></path>
                                <path d="M385.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 382.76px 96px;" id="el6hmv7ewbxta"
                                    class="animable"></path>
                                <path d="M395.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 392.76px 96px;" id="elwwpvjlhovp"
                                    class="animable"></path>
                                <path d="M405.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 402.76px 96px;" id="elh58kze8ad9f"
                                    class="animable"></path>
                                <path d="M415.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 412.76px 96px;" id="els1i1okthsk9"
                                    class="animable"></path>
                                <path d="M425.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 422.76px 96px;" id="elrw0gvzu32t"
                                    class="animable"></path>
                                <path d="M435.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 432.76px 96px;" id="eliz23jv66cfi"
                                    class="animable"></path>
                                <path d="M445.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 442.76px 96px;" id="elfuhxcmdvwt8"
                                    class="animable"></path>
                                <path d="M455.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 452.76px 96px;" id="el9lc2bpwun48"
                                    class="animable"></path>
                                <path d="M465.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 462.76px 96px;" id="elvg0foekjdd"
                                    class="animable"></path>
                                <path d="M475.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 472.76px 96px;" id="el1qwbghifoit"
                                    class="animable"></path>
                                <path d="M485.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 482.76px 96px;" id="elp715pkn6ys"
                                    class="animable"></path>
                                <path d="M495.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 492.76px 96px;" id="el0mz7c1219sh"
                                    class="animable"></path>
                                <path d="M505.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 502.76px 96px;" id="el5wjuez189ci"
                                    class="animable"></path>
                                <path d="M515.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 512.76px 96px;" id="elbwsnh7u92h5"
                                    class="animable"></path>
                                <path d="M525.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 522.76px 96px;" id="el7gm9ax8ptmg"
                                    class="animable"></path>
                                <path d="M535.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 532.76px 96px;" id="elo35cw7ggkqa"
                                    class="animable"></path>
                                <path d="M545.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 542.76px 96px;" id="el8yukfza44ln"
                                    class="animable"></path>
                                <path d="M555.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 552.76px 96px;" id="elvgaydokc22"
                                    class="animable"></path>
                                <path d="M565.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 562.76px 96px;" id="el1kya162ofzo"
                                    class="animable"></path>
                                <path d="M575.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 572.76px 96px;" id="elfx2xthlkgf"
                                    class="animable"></path>
                                <path d="M585.26,96a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 582.76px 96px;" id="elzlualya9zyh"
                                    class="animable"></path>
                                <path
                                    d="M587.82,103.41a6.27,6.27,0,0,1-.26-2.5,6.31,6.31,0,0,1,.26-2.5,6.11,6.11,0,0,1,.26,2.5A6.07,6.07,0,0,1,587.82,103.41Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 587.822px 100.91px;"
                                    id="elgs1yyklopv4" class="animable"></path>
                                <path
                                    d="M587.82,113.41a6.27,6.27,0,0,1-.26-2.5,6.31,6.31,0,0,1,.26-2.5,6.11,6.11,0,0,1,.26,2.5A6.07,6.07,0,0,1,587.82,113.41Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 587.822px 110.91px;"
                                    id="ele370rmqv2u" class="animable"></path>
                                <path
                                    d="M587.82,123.41a6.27,6.27,0,0,1-.26-2.5,6.31,6.31,0,0,1,.26-2.5,6.11,6.11,0,0,1,.26,2.5A6.07,6.07,0,0,1,587.82,123.41Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 587.822px 120.91px;"
                                    id="el1rhomqxrfkk" class="animable"></path>
                                <path d="M587.82,133.41a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 587.82px 130.91px;"
                                    id="eltrrze5xu6pk" class="animable"></path>
                                <path d="M587.82,143.41a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 587.82px 140.91px;"
                                    id="el6xeo5hh8a0k" class="animable"></path>
                                <path
                                    d="M589.77,151.46c0,.13-.83.23-1.95.26h-.25v-.26c0-.18,0-.36,0-.55a6.31,6.31,0,0,1,.26-2.5,6.11,6.11,0,0,1,.26,2.5v.55l-.26-.25A4.64,4.64,0,0,1,589.77,151.46Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 588.655px 150.065px;"
                                    id="el0e4w8kn9jgwe" class="animable"></path>
                                <path d="M599.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 597.27px 151.46px;"
                                    id="el3hjk56o2sn5" class="animable"></path>
                                <path d="M609.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 607.27px 151.46px;"
                                    id="eljxp7sv0jlf8" class="animable"></path>
                                <path d="M619.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 617.27px 151.46px;"
                                    id="el2vofg8l0c9m" class="animable"></path>
                                <path d="M629.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 627.27px 151.46px;"
                                    id="elglaalwl47vt" class="animable"></path>
                                <path d="M639.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 637.27px 151.46px;"
                                    id="el3wy8df8hat7" class="animable"></path>
                                <path d="M649.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 647.27px 151.46px;"
                                    id="ela41g5s4s42h" class="animable"></path>
                                <path d="M659.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 657.27px 151.46px;"
                                    id="elyxuryxvzipa" class="animable"></path>
                                <path d="M669.77,151.46a12.15,12.15,0,0,1-5,0,12.15,12.15,0,0,1,5,0Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 667.27px 151.46px;"
                                    id="elcylj0mmbkqt" class="animable"></path>
                                <path d="M673.66,157.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 155.08px;"
                                    id="elk5tylprsrqe" class="animable"></path>
                                <path d="M673.66,167.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 165.08px;"
                                    id="el7na6yur53ub" class="animable"></path>
                                <path d="M673.66,177.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 175.08px;"
                                    id="elq7vlw91hcxc" class="animable"></path>
                                <path d="M673.66,187.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 185.08px;"
                                    id="eln4i3bo511h" class="animable"></path>
                                <path d="M673.66,197.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 195.08px;"
                                    id="ell017mhnd8km" class="animable"></path>
                                <path d="M673.66,207.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 205.08px;"
                                    id="elq2tu0oraam" class="animable"></path>
                                <path d="M673.66,217.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 215.08px;"
                                    id="elpuiqw1z6mjp" class="animable"></path>
                                <path d="M673.66,227.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 225.08px;"
                                    id="elhtcprs7odtp" class="animable"></path>
                                <path d="M673.66,237.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 235.08px;"
                                    id="el2qc3ie6cqgj" class="animable"></path>
                                <path d="M673.66,247.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 245.08px;"
                                    id="elh5gidevc7bk" class="animable"></path>
                                <path d="M673.66,257.58a12.15,12.15,0,0,1,0-5,12.15,12.15,0,0,1,0,5Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 673.66px 255.08px;"
                                    id="el7eff4aufdj" class="animable"></path>
                                <path
                                    d="M417.73,113s-7.76-4.3-15.37,14.06-10.21,28.8-10.21,28.8-2.09,3.89-4.82,1.67-6.75-8.8-11-7.23c-4.38,1.64-5.46,6.75-4,14s4,23.33,4.21,24.78-.44,3.61-2.54,2.39-14.58-13.08-19.86-6.83,2,25.88,2.8,28,.4,3.13-.6,3.76-4.83-3.76-8.51-7-8.53-6.33-11.28-2.47-2.53,19,13.73,42.33l8.23,10.32,13.15-1.77c27.89-5.5,38.55-16.24,39.26-20.93S406,231.18,401.1,231s-10.69.27-11-.88.14-2.1,2.18-3.13,20.93-10.06,21.48-18.23-16.68-8.29-19-8.88-1.32-2.61-.17-3.48,14.16-10.67,20.24-14.91,8.86-8.67,6.84-12.89c-1.94-4.06-9.4-2.12-12.91-2.42s-2.31-4.54-2.31-4.54,5.38-9.33,12.65-27.82-1.52-20.8-1.52-20.8"
                                    style="fill: rgb(235, 235, 235); transform-origin: 378.774px 186.071px;"
                                    id="elhksx849n5mw" class="animable"></path>
                                <path
                                    d="M359,257c5.39-13.56,13-32.23,21.48-52.83s16.12-39.24,21.59-52.77c2.72-6.75,4.92-12.22,6.46-16l1.76-4.35c.2-.48.35-.86.47-1.13a4.09,4.09,0,0,1,.17-.38s0,.14-.13.4-.24.65-.43,1.14c-.39,1-.95,2.5-1.68,4.39-1.47,3.81-3.63,9.3-6.33,16.08-5.39,13.56-13,32.23-21.47,52.82s-16.12,39.25-21.59,52.78"
                                    style="fill: rgb(224, 224, 224); transform-origin: 384.965px 193.345px;"
                                    id="elhaf1ug54lgb" class="animable"></path>
                                <path
                                    d="M381.61,159.78a4.21,4.21,0,0,1,.41.86c.24.57.56,1.4.94,2.42.77,2.06,1.75,4.93,2.77,8.11s1.89,6,2.59,8.17l.79,2.47a3.74,3.74,0,0,1,.25.92,4.21,4.21,0,0,1-.41-.86c-.24-.57-.56-1.4-.93-2.43-.75-2.06-1.69-4.94-2.72-8.13l-2.64-8.14c-.31-1-.58-1.79-.8-2.47A3.74,3.74,0,0,1,381.61,159.78Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 385.485px 171.255px;"
                                    id="el5zjki1d6f1w" class="animable"></path>
                                <path
                                    d="M390.59,182.87c0-.12,5.78-2.41,13-5.11s13.12-4.81,13.16-4.69-5.77,2.41-13,5.11S390.63,183,390.59,182.87Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 403.67px 177.97px;"
                                    id="el30vq0c21kjl" class="animable"></path>
                                <path
                                    d="M376.15,213.91a4,4,0,0,1,1-.13l2.64-.21c2.23-.17,5.31-.42,8.7-.82s6.44-.85,8.65-1.2l2.62-.41a3.37,3.37,0,0,1,1-.09,4.67,4.67,0,0,1-.94.27c-.61.14-1.5.33-2.6.55-2.19.42-5.25.93-8.65,1.33s-6.49.6-8.73.69c-1.12,0-2,.07-2.65.06A4.52,4.52,0,0,1,376.15,213.91Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 388.455px 212.504px;"
                                    id="elwrfms4gc9x" class="animable"></path>
                                <path
                                    d="M363.44,194.81a3.71,3.71,0,0,1,.58.69c.34.46.84,1.14,1.44,2,1.2,1.68,2.84,4,4.62,6.63s3.37,5,4.51,6.71c.57.86,1,1.57,1.32,2.06a3.56,3.56,0,0,1,.44.79s-.23-.23-.58-.69-.84-1.14-1.45-2c-1.2-1.69-2.83-4-4.62-6.63s-3.37-5-4.51-6.71c-.56-.86-1-1.57-1.32-2.06A3.22,3.22,0,0,1,363.44,194.81Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 369.895px 204.25px;"
                                    id="elf97vbkyyank" class="animable"></path>
                                <path
                                    d="M347.21,220.59a5.49,5.49,0,0,1,.73.89c.49.68,1.12,1.52,1.86,2.54,1.55,2.15,3.67,5.13,6,8.45s4.4,6.33,5.88,8.53c.7,1,1.28,1.92,1.74,2.61a7,7,0,0,1,.59,1,4.91,4.91,0,0,1-.73-.89l-1.86-2.53c-1.55-2.15-3.67-5.14-6-8.45s-4.39-6.33-5.87-8.53l-1.74-2.61A5,5,0,0,1,347.21,220.59Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 355.61px 232.6px;"
                                    id="el1vb8wel1gkg" class="animable"></path>
                                <path
                                    d="M363.75,243.92a6.7,6.7,0,0,1,1.22-.2l3.34-.38c2.82-.32,6.71-.77,11-1.39s8.15-1.28,10.94-1.77l3.31-.58a6.72,6.72,0,0,1,1.23-.16,6.45,6.45,0,0,1-1.19.33c-.78.19-1.9.44-3.29.72-2.78.58-6.65,1.29-10.94,1.9s-8.2,1-11,1.27c-1.41.12-2.56.2-3.35.24A6.89,6.89,0,0,1,363.75,243.92Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 379.27px 241.69px;"
                                    id="el688vg4lnd5j" class="animable"></path>
                                <path
                                    d="M708.8,282.05a35.14,35.14,0,1,0-65.43,17.75h0l.1.13c1.34,2.27,3,3.89,4.74,6.28l20.4,27a6.33,6.33,0,0,0,10.12,0l20.07-26.57a76.08,76.08,0,0,0,5.1-6.77l.07-.09h0A35,35,0,0,0,708.8,282.05Zm-35.14,15.3a15.47,15.47,0,1,1,15.46-15.47A15.47,15.47,0,0,1,673.66,297.35Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 673.66px 291.291px;"
                                    id="elutk42hajcv" class="animable"></path>
                                <path
                                    d="M542.9,125.82v41.32a1.61,1.61,0,0,0,1.61,1.61h86.64a1.6,1.6,0,0,0,1.61-1.63L632.57,152a1.72,1.72,0,0,0-.32-1l-12.43-16.61a1.61,1.61,0,0,0-1.28-.64l-14.32-.11a1.62,1.62,0,0,1-1.6-1.61v-6.25a1.61,1.61,0,0,0-1.61-1.61h-56.5A1.61,1.61,0,0,0,542.9,125.82Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 587.83px 146.46px;"
                                    id="elb81jjmk2h9v" class="animable"></path>
                                <path
                                    d="M606.65,137.28v13.26a.92.92,0,0,0,.94.92l19.13-.34a.92.92,0,0,0,.75-1.44l-9-13.19a.91.91,0,0,0-.78-.41l-10.19.28A.92.92,0,0,0,606.65,137.28Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 617.141px 143.77px;"
                                    id="el54t6vpw53i7" class="animable"></path>
                                <rect x="541.16" y="170.01" width="93.33" height="2.88"
                                    style="fill: rgb(245, 245, 245); transform-origin: 587.825px 171.45px;"
                                    id="elptqyeuycb39" class="animable"></rect>
                                <g id="el013apktugue8">
                                    <circle cx="562.79" cy="171.11" r="9.23"
                                        style="fill: rgb(235, 235, 235); transform-origin: 562.79px 171.11px; transform: rotate(-45deg);"
                                        class="animable" id="el51zf49bwwcd"></circle>
                                </g>
                                <path d="M568.22,171.11a5.43,5.43,0,1,1-5.43-5.43A5.44,5.44,0,0,1,568.22,171.11Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 562.79px 171.11px;"
                                    id="elyaur2p6l4m" class="animable"></path>
                                <path
                                    d="M602.55,168.75c-.23,0-.42-10-.42-22.27s.19-22.27.42-22.27.42,10,.42,22.27S602.78,168.75,602.55,168.75Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 602.55px 146.48px;"
                                    id="el9myjwjvk02g" class="animable"></path>
                                <g id="el98fgwxizvgo">
                                    <circle cx="613.1" cy="171.11" r="9.23"
                                        style="fill: rgb(235, 235, 235); transform-origin: 613.1px 171.11px; transform: rotate(-45deg);"
                                        class="animable" id="eljuml538xucm"></circle>
                                </g>
                                <path d="M618.53,171.11a5.44,5.44,0,1,1-5.43-5.43A5.44,5.44,0,0,1,618.53,171.11Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 613.09px 171.12px;"
                                    id="elcejt7hkf9ab" class="animable"></path>
                                <path
                                    d="M613.12,154.08c0,.23-1.32.42-3,.42s-2.95-.19-2.95-.42,1.32-.42,2.95-.42S613.12,153.84,613.12,154.08Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 610.145px 154.08px;"
                                    id="eldhct42r1p9l" class="animable"></path>
                            </g>
                            <g id="freepik--Floor--inject-69" class="animable"
                                style="transform-origin: 376.11px 462.19px;">
                                <path
                                    d="M726.14,462.19c0,.15-156.73.26-350,.26s-350.06-.11-350.06-.26,156.7-.26,350.06-.26S726.14,462.05,726.14,462.19Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 376.11px 462.19px;" id="elgdg8ph8xx76"
                                    class="animable"></path>
                            </g>
                            <g id="freepik--Plant--inject-69" class="animable"
                                style="transform-origin: 146px 413.583px;">
                                <path
                                    d="M165.86,457.79c13.48-9.35,16.59-26.77,16.11-42.44-.08-2.61.22-5.37-1-7.67s-4.13-3.87-6.48-2.78c-1.94.91-2.8,3.16-3.89,5a15.29,15.29,0,0,1-6.15,5.84c-1.67.85-3.73,1.37-5.38.46-2.25-1.25-2.5-4.37-2.48-7q.08-7.27.14-14.54A24.13,24.13,0,0,0,156,387c-.8-2.47-2.58-4.77-5.06-5.48s-5.53.72-6.06,3.26a23.3,23.3,0,0,0-.09,3.24,2.74,2.74,0,0,1-1.61,2.57c-1,.3-2.08-.44-2.85-1.2-2.68-2.64-4.49-6-6.18-9.4s-3.33-6.82-5.76-9.69-5.79-5.16-9.51-5.38-7.7,2.06-8.66,5.71,1.17,7.4,3.49,10.37a58,58,0,0,0,12,11.57,4.77,4.77,0,0,1,2,2.18c.55,1.74-1.09,3.45-2.81,4-1.94.64-4,.43-6.07.66s-4.23,1.12-5,3c-1.07,2.66,1.14,5.45,3.32,7.28a49.53,49.53,0,0,0,14.7,8.55,16.86,16.86,0,0,1,5.46,2.68c1.54,1.35,2.46,3.69,1.52,5.52s-3.33,2.41-5.34,2-3.79-1.47-5.7-2.2c-3.57-1.36-8.19-1.13-10.49,1.95a8.25,8.25,0,0,0-.9,7.28,19,19,0,0,0,3.92,6.44,50,50,0,0,0,21.31,15.08c8.28,2.91,16,3.71,24.21.73"
                                    style="fill: #35DA33; transform-origin: 146px 412.253px;" id="elutwbcugwgrh"
                                    class="animable"></path>
                                <path
                                    d="M165,462.2c-.54-6.21-.82-6.34-3.12-14.25a232,232,0,0,0-9.16-25.13q-1.4-3.27-2.74-6.46c-.91-2.12-1.8-4.22-2.81-6.22A115.7,115.7,0,0,0,140.71,399c-2.21-3.46-4.44-6.65-6.55-9.63s-4.13-5.7-6.08-8.11a92.89,92.89,0,0,0-10-10.68c-1.28-1.17-2.3-2-3-2.62l-.8-.65c-.18-.15-.28-.22-.29-.21a3.45,3.45,0,0,0,.26.25l.77.69c.68.6,1.68,1.49,2.94,2.68a98,98,0,0,1,9.89,10.76c1.93,2.41,3.93,5.15,6,8.13s4.3,6.18,6.51,9.63a117.4,117.4,0,0,1,6.37,11.14c1,2,1.89,4.08,2.79,6.2s1.81,4.28,2.74,6.46a238.86,238.86,0,0,1,9.18,25.07c2.31,7.88,2.62,8,3.21,14.15"
                                    style="fill: rgb(38, 50, 56); transform-origin: 139.495px 414.68px;"
                                    id="elh971zj19a28" class="animable"></path>
                                <path
                                    d="M147,410.12a5.28,5.28,0,0,0,.25-1.11c.14-.72.31-1.76.5-3.06.37-2.59.77-6.18,1.2-10.14s.87-7.54,1.28-10.12c.21-1.29.38-2.33.52-3.05a4.69,4.69,0,0,0,.14-1.13,6.36,6.36,0,0,0-.33,1.09c-.18.71-.41,1.75-.66,3-.5,2.57-1,6.16-1.43,10.12s-.78,7.45-1.06,10.16c-.13,1.22-.25,2.25-.34,3.07A4.46,4.46,0,0,0,147,410.12Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 148.939px 395.815px;"
                                    id="elhp6x69pj9zp" class="animable"></path>
                                <path
                                    d="M113.58,403.75a6.88,6.88,0,0,0,1.34.17c.85.08,2.1.18,3.63.37,3.06.34,7.27,1,11.89,1.85s8.76,1.88,11.74,2.68c1.49.39,2.69.74,3.52,1a8.09,8.09,0,0,0,1.31.32,7.85,7.85,0,0,0-1.25-.51c-.82-.29-2-.69-3.49-1.12-3-.89-7.11-1.93-11.74-2.83a116.22,116.22,0,0,0-12-1.71c-1.54-.14-2.79-.2-3.65-.22A7.5,7.5,0,0,0,113.58,403.75Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 130.295px 406.931px;"
                                    id="elbghpf22zy86" class="animable"></path>
                                <path
                                    d="M161.44,447.34a1.81,1.81,0,0,0,.24-.41c.15-.33.34-.73.57-1.21.5-1.05,1.17-2.59,2-4.5,1.62-3.83,3.71-9.18,5.92-15.13s4.25-11.31,5.79-15.16l1.85-4.56c.19-.5.36-.91.49-1.24s.16-.44.14-.45a1.93,1.93,0,0,0-.23.41l-.57,1.2c-.5,1.06-1.18,2.6-2,4.51-1.63,3.82-3.71,9.18-5.92,15.12s-4.25,11.31-5.8,15.17c-.75,1.87-1.38,3.41-1.84,4.55-.2.5-.36.91-.49,1.25A2.29,2.29,0,0,0,161.44,447.34Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 169.943px 426.01px;"
                                    id="elfv9yiuiq3yk" class="animable"></path>
                                <path
                                    d="M117.05,432.86a2.2,2.2,0,0,0,.44.18l1.29.44,4.76,1.56c4,1.31,9.53,3.2,15.63,5.28s11.65,3.93,15.69,5.16c2,.62,3.66,1.1,4.8,1.41l1.32.36a2.65,2.65,0,0,0,.46.09s-.14-.08-.44-.19l-1.28-.43L155,445.16c-4-1.32-9.53-3.2-15.64-5.29s-11.64-3.93-15.68-5.16c-2-.62-3.66-1.1-4.8-1.41l-1.32-.35A1.36,1.36,0,0,0,117.05,432.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 139.245px 440.1px;" id="el67y7d4wqij6"
                                    class="animable"></path>
                            </g>
                            <g id="freepik--Device--inject-69" class="animable"
                                style="transform-origin: 259.215px 256.155px;">
                                <path
                                    d="M328.24,462.19H189.07c-16.81-.07-31-14.41-30.95-31.23L159.6,80.45a30.45,30.45,0,0,1,30.59-30.33L330,50.77a30.44,30.44,0,0,1,30.31,30.58l-1.48,350.51A30.45,30.45,0,0,1,328.24,462.19Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 259.215px 256.155px;"
                                    id="elxvo5k8g5sns" class="animable"></path>
                                <path
                                    d="M329.81,64.08,302.7,64a6.73,6.73,0,0,0-6.61,6.85l0,4.92a6.74,6.74,0,0,1-6.61,6.85l-52.84-.25a6.73,6.73,0,0,1-6.55-6.91l0-4.91a6.76,6.76,0,0,0-6.56-6.92l-9.53,0-23.73-.11a21.33,21.33,0,0,0-21.42,21.24L167.4,426.81a21.33,21.33,0,0,0,21.23,21.42l139.53.64a21.32,21.32,0,0,0,21.43-21.24L351,85.5A21.34,21.34,0,0,0,329.81,64.08Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 259.2px 256.195px;"
                                    id="el6lr5irnaxlj" class="animable"></path>
                                <path d="M270.59,384.22c-.16,4.13-.31,8-.44,11.23h20l-2.45-12.32Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 280.15px 389.29px;"
                                    id="elcc311d506hu" class="animable"></path>
                                <path d="M189.13,389.37l.17,6.08h78.85c.13-3.42.28-7.2.43-11.1Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 228.855px 389.9px;"
                                    id="elphk1ktqtg5" class="animable"></path>
                                <polygon points="288.75 383.07 291.21 395.44 328.17 395.44 327.72 380.61 288.75 383.07"
                                    style="fill: rgb(245, 245, 245); transform-origin: 308.46px 388.025px;"
                                    id="elmnkmsru5v0d" class="animable"></polygon>
                                <polygon points="272.59 210.08 279.58 169.57 261.28 168.21 261.28 210.08 272.59 210.08"
                                    style="fill: rgb(245, 245, 245); transform-origin: 270.43px 189.145px;"
                                    id="elfyw5m7ukkli" class="animable"></polygon>
                                <polygon points="187.48 366.88 167.62 374.66 167.56 388.73 188.07 387.43 187.48 366.88"
                                    style="fill: rgb(245, 245, 245); transform-origin: 177.815px 377.805px;"
                                    id="elqvrb35cluhq" class="animable"></polygon>
                                <polygon
                                    points="187.39 363.72 186.31 325.99 186.29 325.99 186.29 312.68 167.87 314.63 167.63 371.44 187.38 363.7 187.39 363.72"
                                    style="fill: rgb(245, 245, 245); transform-origin: 177.51px 342.06px;"
                                    id="elp2z5lqww92e" class="animable"></polygon>
                                <polygon points="186.29 282.98 168.02 280.56 167.89 311.62 186.29 309.67 186.29 282.98"
                                    style="fill: rgb(245, 245, 245); transform-origin: 177.09px 296.09px;"
                                    id="elxyza28jvid" class="animable"></polygon>
                                <polygon
                                    points="322.48 313.24 321.71 324.06 300.13 326.38 301.8 334.94 326.29 333.09 325.93 320.82 327.88 312.7 322.48 313.24"
                                    style="fill: rgb(245, 245, 245); transform-origin: 314.005px 323.82px;"
                                    id="elc5d1x78hcrb" class="animable"></polygon>
                                <polygon points="283.58 336.31 300.79 335.01 297.04 315.81 282.02 317.33 283.58 336.31"
                                    style="fill: rgb(245, 245, 245); transform-origin: 291.405px 326.06px;"
                                    id="elto4jsvjjxm" class="animable"></polygon>
                                <polygon
                                    points="283.75 338.31 285.06 354.32 287.39 376.28 288.35 381.09 327.66 378.61 326.35 335.09 283.75 338.31"
                                    style="fill: rgb(245, 245, 245); transform-origin: 305.705px 358.09px;"
                                    id="elgz3b1pcf2t" class="animable"></polygon>
                                <path
                                    d="M216.09,262.7l1.51,2.59L187.29,283v41.95l32-2.27L281,316.43l-2.26-27.49-58.91-7.7.39-3,58.27,7.61-3.82-46.53-57.68,5.54-.19-2,57.7-5.54-2-24.28H217l-48.71,8.86-.24,55.6L186.48,280Zm-25.7,58.21s.23-34.58,0-35.87l24.74-13.16,3.21,47.27Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 224.525px 268.995px;"
                                    id="elguv3n5ru94" class="animable"></path>
                                <polygon points="320.45 313.45 298.04 315.71 299.74 324.41 319.83 322.25 320.45 313.45"
                                    style="fill: rgb(245, 245, 245); transform-origin: 309.245px 318.93px;"
                                    id="elqvtkmoa28l" class="animable"></polygon>
                                <path d="M270.87,376.81c-.07,1.82-.14,3.62-.2,5.4l16.68-1.06-.86-4.3Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 279.01px 379.51px;"
                                    id="eljappqgkxp6i" class="animable"></path>
                                <polygon
                                    points="234.94 210.08 237.88 196.75 260.28 196.75 260.28 168.14 190.25 162.95 190.25 189.82 168.38 194.77 168.28 218.89 216.71 210.08 234.94 210.08"
                                    style="fill: rgb(245, 245, 245); transform-origin: 214.28px 190.92px;"
                                    id="elq9jq1l9mpnp" class="animable"></polygon>
                                <path
                                    d="M281.67,130.45l-.6-2.45,26.74-10.58L290.42,82.5a6.22,6.22,0,0,1-1,.08l-29.55-.14.8,48.87Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 283.84px 106.875px;"
                                    id="eld89fuo2z2f4" class="animable"></path>
                                <path
                                    d="M322.19,111.72l0-47.67L302.7,64a6.73,6.73,0,0,0-6.61,6.85l0,4.92a7,7,0,0,1-2.86,5.64l17.4,34.94Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 307.71px 90.175px;"
                                    id="el77xkx3rebzk" class="animable"></path>
                                <path
                                    d="M221.67,113.77l-2.26-50.2-5.41,0-21.15-.1-9,44.89Zm-4.82-45.11.72,40.88-28.11-4.11,6.15-36.77Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 202.76px 88.62px;"
                                    id="eleagn7lmi2jh" class="animable"></path>
                                <path
                                    d="M222.69,113.92v.42c0,3.92.12,11,.18,18.51l36.83-1.5-.8-48.91-22.29-.11a6.73,6.73,0,0,1-6.55-6.91l0-4.91a6.76,6.76,0,0,0-6.56-6.92h-3.11l2.26,50.33Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 240.045px 98.22px;"
                                    id="eltpl8cquqmj" class="animable"></path>
                                <path d="M180.87,107.91l8.92-44.45a21.32,21.32,0,0,0-20.94,21.22l-.1,22.16.1-.65Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 179.27px 85.685px;"
                                    id="elc5ew5lo31ep" class="animable"></path>
                                <polygon points="187.25 162.73 168.52 161.34 168.39 191.69 187.25 187.42 187.25 162.73"
                                    style="fill: rgb(245, 245, 245); transform-origin: 177.82px 176.515px;"
                                    id="el4grg415yojv" class="animable"></polygon>
                                <polygon points="180.67 108.89 168.75 107.18 168.54 156.33 171.11 156.52 180.67 108.89"
                                    style="fill: rgb(245, 245, 245); transform-origin: 174.605px 131.85px;"
                                    id="ellp4syxss0w" class="animable"></polygon>
                                <polygon points="218.5 363.14 218.81 323.69 187.3 325.92 188.42 364.57 218.5 363.14"
                                    style="fill: rgb(245, 245, 245); transform-origin: 203.055px 344.13px;"
                                    id="elg5khb77re3r" class="animable"></polygon>
                                <path
                                    d="M224.3,354l44.62,21.38c.54-14,1-27,1-27.87l1-.05.48-.94c.63.31.63.31.3,9.84-.19,5.31-.45,12.38-.72,19.45h15.43l-2.27-21.44-3-37-58.31,5.88Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 254.62px 346.59px;"
                                    id="el4o050j8my8u" class="animable"></path>
                                <polygon
                                    points="333.69 288.56 333.18 283.35 279.69 288.92 281.94 316.33 328.13 311.67 333.69 288.56"
                                    style="fill: rgb(245, 245, 245); transform-origin: 306.69px 299.84px;"
                                    id="elezo4an9oht" class="animable"></polygon>
                                <polygon points="260.28 199.75 240.29 199.75 238.01 210.08 260.28 210.08 260.28 199.75"
                                    style="fill: rgb(245, 245, 245); transform-origin: 249.145px 204.915px;"
                                    id="eluw5v6xt4q" class="animable"></polygon>
                                <path
                                    d="M325.43,203.24l-50.05-3.46-2,11.82,2.11,25.66,52.78-5.08Zm-48.21,8.34,2.69-7.46,43.47,2.75,2.51,21.34-47.2,5.6Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 300.825px 218.52px;"
                                    id="els0xrhhhd5s" class="animable"></path>
                                <polygon points="330.62 256.87 328.42 234.18 275.61 239.25 277.6 263.4 330.62 256.87"
                                    style="fill: rgb(245, 245, 245); transform-origin: 303.115px 248.79px;"
                                    id="el4rnmrglen8w" class="animable"></polygon>
                                <polygon
                                    points="188.13 389.44 167.64 390.73 167.56 389.4 167.53 395.44 188.3 395.44 188.13 389.44"
                                    style="fill: rgb(245, 245, 245); transform-origin: 177.915px 392.42px;"
                                    id="elh053wpw1bg7" class="animable"></polygon>
                                <path d="M350.67,100.45l.3.77L351,85.5a21.34,21.34,0,0,0-21.23-21.42l-6.65,0,0,47.28Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 337.06px 87.72px;"
                                    id="elqu2lx00lx4" class="animable"></path>
                                <path
                                    d="M268.88,376.51l-45.55-21.83-1.61-31.27-1.9.19-.33,40.5-31.05,1.47,0,.9v0h0l.6,20.88,79.59-5C268.73,380.4,268.81,378.45,268.88,376.51Zm-78.49-8.36,43.46-3,28.27,13.11-71.73,3.88Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 228.66px 355.38px;"
                                    id="el6wy7agdf0vu" class="animable"></path>
                                <path d="M337.72,153l1.87-11.05c-16.34-5.83-17.47-22.87-17.42-28l-10.66,4.22,16.05,32.23Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 325.55px 133.475px;"
                                    id="elbjy6dm9os0n" class="animable"></path>
                                <polygon points="279.44 285.93 301.65 283.62 297.28 264 277.84 266.4 279.44 285.93"
                                    style="fill: rgb(245, 245, 245); transform-origin: 289.745px 274.965px;"
                                    id="el6b8t8delyyq" class="animable"></polygon>
                                <polygon
                                    points="325.5 169.9 284.02 169.9 280.58 169.64 275.89 196.81 325.13 200.21 323.99 188.4 328.84 170.96 325.5 169.9"
                                    style="fill: rgb(245, 245, 245); transform-origin: 302.365px 184.925px;"
                                    id="el6jbuumgnkq6" class="animable"></polygon>
                                <path
                                    d="M324.49,164.9l.52-13-16.3-32.73-25.28,10,8.69,35.68Zm-16.77-41.71,14.94,28.42-2.16,8.86-25.56-1-6.39-26.88Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 304.22px 142.035px;"
                                    id="elzkqkafejlq" class="animable"></path>
                                <polygon
                                    points="330.94 321.34 331.71 346.81 349.68 345.8 349.74 346.8 331.74 347.81 332.65 378.29 349.65 377.21 349.77 379.21 332.71 380.29 333.17 395.44 349.73 395.44 350.09 310.46 333.15 312.17 330.94 321.34"
                                    style="fill: rgb(245, 245, 245); transform-origin: 340.515px 352.95px;"
                                    id="el8k5ceylubjf" class="animable"></polygon>
                                <path
                                    d="M221.7,114.78l-38.06-5.46-9.52,47.42,47.75,3.54C222.06,153,221.89,130.58,221.7,114.78Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 198.037px 134.8px;"
                                    id="el2vgpsw89ozt" class="animable"></path>
                                <polygon
                                    points="284.3 164.9 290.06 164.9 281.91 131.44 260.73 132.31 261.24 163.19 284.3 164.9"
                                    style="fill: rgb(245, 245, 245); transform-origin: 275.395px 148.17px;"
                                    id="elod3lzj7wxbd" class="animable"></polygon>
                                <path d="M167.43,419.79l0,7c0,.21,0,.42,0,.64Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 167.43px 423.61px;"
                                    id="ely4vsr3fdrz" class="animable"></path>
                                <path d="M222.84,160.35l37.39,2.77-.5-30.77-36.84,1.5C223,144.26,223,155.36,222.84,160.35Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 241.535px 147.735px;"
                                    id="elklc2lal9gkq" class="animable"></path>
                                <polygon points="330.91 259.86 298.27 263.88 302.66 283.51 332.89 280.37 330.91 259.86"
                                    style="fill: rgb(245, 245, 245); transform-origin: 315.58px 271.685px;"
                                    id="el7ats1owwjgp" class="animable"></polygon>
                                <path
                                    d="M339.76,140.9l2.09-12.4,9,.7.12-26.71-27.79,11C322.61,132.28,334.42,138.89,339.76,140.9Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 337.065px 121.695px;"
                                    id="elruwj1xhbws" class="animable"></path>
                                <polygon
                                    points="329.06 188.84 330.19 200.56 350.55 201.97 350.65 177.84 333.61 172.46 329.06 188.84"
                                    style="fill: rgb(245, 245, 245); transform-origin: 339.855px 187.215px;"
                                    id="elgxxjgqp34v8" class="animable"></polygon>
                                <path d="M338.74,288.91l-5.34,22.23,16.69-1.69.1-23.31c-5.12-1.35-9.59-2.45-12-2.91Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 341.795px 297.185px;"
                                    id="elpnx3ixvjsmq" class="animable"></path>
                                <polygon points="327.48 165.28 350.67 172.61 350.73 159.42 327.95 153.53 327.48 165.28"
                                    style="fill: rgb(245, 245, 245); transform-origin: 339.105px 163.07px;"
                                    id="elnm8oi4qqr5n" class="animable"></polygon>
                                <path d="M337.9,280.18c1.87.28,5.41,1,12.3,2.85l.22-51-17,1.64Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 341.92px 257.53px;"
                                    id="elw8isk4b4vkh" class="animable"></path>
                                <polygon points="333.21 231.71 350.43 230.05 350.53 204.98 330.48 203.59 333.21 231.71"
                                    style="fill: rgb(245, 245, 245); transform-origin: 340.505px 217.65px;"
                                    id="elxzfxoilphn" class="animable"></polygon>
                                <path d="M341.68,141.53a93.52,93.52,0,0,0,9.11,2.33l0-12.66-7.33-.57Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 346.235px 137.245px;"
                                    id="elul4zix9k3i" class="animable"></path>
                                <path d="M339.67,153.46l11.07,2.86.05-11.43c-2.87-.58-6-1.36-9.28-2.36Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 345.23px 149.425px;"
                                    id="ell3d5qfvuwws" class="animable"></path>
                                <path
                                    d="M188.13,389.43l.17,6h1l-.17-6.08,79.45-5c-.15,3.9-.3,7.68-.43,11.1h2c.13-3.23.28-7.1.44-11.23l17.15-1.09,2.45,12.32h1l-2.46-12.38,39-2.46.45,14.84h5l-.46-15.16,17.06-1.08-.12-2-17,1.08-.91-30.48,18-1-.06-1-18,1-.77-25.47,2.21-9.17,16.94-1.71v-1l-16.69,1.69,5.34-22.23-.55-5.68c2.41.46,6.88,1.56,12,2.91V283c-6.89-1.82-10.43-2.57-12.3-2.85l-4.5-46.48,17-1.64v-2l-17.22,1.66-2.73-28.12,20,1.39,0-3-20.36-1.41-1.13-11.72,4.55-16.38,17,5.38,0-5.23-23.19-7.33.47-11.75,22.78,5.89v-3.1l-11.07-2.86,1.84-10.93c3.32,1,6.41,1.78,9.28,2.36v-1a93.52,93.52,0,0,1-9.11-2.33l1.83-10.9,7.33.57v-2l-9-.7-2.09,12.4c-5.34-2-17.15-8.62-16.58-27.42l27.79-11v-1.27l-.3-.77-27.48,10.88,0-47.28h-1l0,47.67-11.58,4.59-17.4-34.94a6.34,6.34,0,0,1-2.79,1.13l17.39,34.92L281.07,128l.6,2.45-21,.86-.8-48.87h-1l.8,48.91-36.83,1.5c-.06-7.54-.14-14.59-.18-18.51v-.42h0l-2.26-50.33h-1l2.26,50.2-37.83-5.43,9-44.89h-2.58l-.48,0-8.92,44.45-12-1.72-.1.65v.34l11.92,1.71-9.56,47.63-2.57-.19,0,5,18.73,1.39v24.69l-18.86,4.27v3.08l21.87-5V163l70,5.19v28.62h-22.4l-2.94,13.32H216.71l-48.43,8.81v3.05L217,213.08h55.48l2,24.28-57.7,5.54.19,2,57.68-5.54,3.82,46.53-58.27-7.61-.39,3,58.91,7.7L281,316.43l-61.67,6.22-32,2.27V283l30.31-17.68-1.51-2.59L186.48,280,168,277.54v3L186.29,283v26.69l-18.4,1.95,0,3,18.42-1.95V326h0l1.09,37.73v0l-19.75,7.74v3.22l19.86-7.78.59,20.55-20.51,1.3v.67l.08,1.33Zm82.54-7.22c.06-1.78.13-3.58.2-5.4l15.62,0,.86,4.3Zm17.68-1.12-1-4.81-2.33-22-1.31-16,42.6-3.22,1.31,43.51ZM298,315.71l22.42-2.26-.63,8.8-20.09,2.16Zm-1,.1,3.75,19.2-17.21,1.3-1.56-19Zm29.25,17.28-24.49,1.85-1.67-8.56,21.58-2.32.77-10.82,5.4-.54-1.95,8.12Zm-29-69.09,4.37,19.62-22.21,2.31-1.6-19.53Zm5.38,19.51-4.39-19.63,32.64-4,2,20.51Zm22.47-83.3-49.24-3.41,4.69-27.16,3.44.26h41.49l3.33,1.06L324,188.4Zm-3-86.33c-.05,5.16,1.08,22.2,17.42,28L337.72,153l-10.16-2.63L311.51,118.1Zm-13.46,5.33L325,151.94l-.52,13H292.12l-8.69-35.68Zm-26.8,12.23,8.15,33.46H284.3l-23.06-1.7-.51-30.89Zm-22.18.91.5,30.77-37.39-2.77c.16-5,.13-16.09,0-26.5Zm-76.09-23,38.06,5.46c.19,15.8.36,38.2.17,45.5l-47.75-3.54Zm95.94,60.25-7,40.51H261.28V168.21Zm-39.29,30.19h20v10.32H238Zm33,11.84,2-11.82,50.05,3.46,2.8,28.94-52.78,5.08Zm55.08,22.58,2.2,22.69-53,6.54-2-24.16Zm-48.73,54.74,53.49-5.57.51,5.21-5.56,23.11-46.19,4.66Zm4.38,65.49,2.27,21.44H270.91c.27-7.07.53-14.14.72-19.45.33-9.53.33-9.53-.3-9.84l-.48.94-1,.05c0,.83-.43,13.9-1,27.87L224.3,354l-1.58-30.73L281,317.43Zm-65.26-30.72-.31,39.45-30.08,1.43-1.12-38.65Zm-30.34,42.8h0v0l0-.9,31.05-1.47.33-40.5,1.9-.19,1.61,31.27,45.55,21.83c-.07,1.94-.15,3.89-.22,5.83l-79.59,5Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 259.175px 229.46px;"
                                    id="el9omesqgfolj" class="animable"></path>
                                <polygon points="233.85 365.1 190.39 368.14 190.39 382.1 262.13 378.21 233.85 365.1"
                                    style="fill: rgb(235, 235, 235); transform-origin: 226.26px 373.6px;"
                                    id="el35u95qprzuf" class="animable"></polygon>
                                <polygon
                                    points="323.38 206.87 279.91 204.12 277.22 211.58 278.69 233.81 325.89 228.21 323.38 206.87"
                                    style="fill: rgb(235, 235, 235); transform-origin: 301.555px 218.965px;"
                                    id="elm39w1d52skf" class="animable"></polygon>
                                <path
                                    d="M188.63,448.23l139.53.64a21.32,21.32,0,0,0,21.43-21.24l.14-32.18H167.53l-.1,24.34v7.66A21.32,21.32,0,0,0,188.63,448.23Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 258.58px 422.16px;"
                                    id="el9bqfpjop6xk" class="animable"></path>
                                <polygon points="217.57 109.54 216.85 68.66 195.62 68.66 189.46 105.43 217.57 109.54"
                                    style="fill: rgb(235, 235, 235); transform-origin: 203.515px 89.1px;"
                                    id="elfq9uh4yvrku" class="animable"></polygon>
                                <polygon
                                    points="320.5 160.47 322.66 151.61 307.72 123.19 288.55 132.63 294.94 159.51 320.5 160.47"
                                    style="fill: rgb(235, 235, 235); transform-origin: 305.605px 141.83px;"
                                    id="elva5yqlprre" class="animable"></polygon>
                                <path d="M190.39,285c.23,1.29,0,35.87,0,35.87l28-1.76-3.21-47.27Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 204.39px 296.355px;"
                                    id="ely0rlbqn9esl" class="animable"></path>
                                <polygon
                                    points="283.59 313.12 282.11 291.69 330.04 285.53 330.04 289.23 324.24 308.94 283.59 313.12"
                                    style="fill: rgb(235, 235, 235); transform-origin: 306.075px 299.325px;"
                                    id="ellxqlxav0ni" class="animable"></polygon>
                                <path d="M248.14,135.39a5.84,5.84,0,1,1-5.84-5.84A5.84,5.84,0,0,1,248.14,135.39Z"
                                    style="fill: #35DA33; transform-origin: 242.3px 135.39px;" id="elas8gbnygnk"
                                    class="animable"></path>
                                <g id="elj0t9h0xluj">
                                    <g style="opacity: 0.6; transform-origin: 242.296px 135.395px;" class="animable"
                                        id="elgry2dijfu0w">
                                        <path d="M248.13,135.14a5.84,5.84,0,1,1-6.08-5.58A5.84,5.84,0,0,1,248.13,135.14Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 242.296px 135.395px;"
                                            id="el1fnm23j7wkv" class="animable"></path>
                                    </g>
                                </g>
                                <circle cx="242.3" cy="135.19" r="3.88"
                                    style="fill: #35DA33; transform-origin: 242.3px 135.19px;" id="el5cr332u7n7o"
                                    class="animable"></circle>
                                <path d="M332.53,368.54A2.5,2.5,0,1,1,330,366,2.5,2.5,0,0,1,332.53,368.54Z"
                                    style="fill: #35DA33; transform-origin: 330.03px 368.5px;" id="elsef72zkynj9"
                                    class="animable"></path>
                                <path
                                    d="M328.54,367.73l-.61-14-42.12,2.05a6.43,6.43,0,0,1-3.19-.68l-59.75-30.18a4.34,4.34,0,0,1-2.37-3.64l-8.14-157.74a2.63,2.63,0,0,1,2.83-2.76l25.61,1.89v-28h3v28.38A2.65,2.65,0,0,1,243,165a2.69,2.69,0,0,1-2,.69l-25.59-1.89,8.11,157.33a1.34,1.34,0,0,0,.73,1.11L284,352.44a3.39,3.39,0,0,0,1.69.36l42.48-2.07a2.67,2.67,0,0,1,1.91.69,2.63,2.63,0,0,1,.87,1.85l.61,14.33Z"
                                    style="fill: #35DA33; transform-origin: 271.958px 251.2px;" id="elypea3jd4f9"
                                    class="animable"></path>
                                <circle cx="217.26" cy="232.05" r="7.56"
                                    style="fill: #35DA33; transform-origin: 217.26px 232.05px;" id="elmvpfyiechh"
                                    class="animable"></circle>
                                <circle cx="217.26" cy="232.05" r="5.25"
                                    style="fill: rgb(250, 250, 250); transform-origin: 217.26px 232.05px;"
                                    id="elygzxq824i1" class="animable"></circle>
                                <path
                                    d="M217.26,237.68a5.63,5.63,0,1,1,5.62-5.63A5.64,5.64,0,0,1,217.26,237.68Zm0-10.51a4.88,4.88,0,1,0,4.87,4.88A4.89,4.89,0,0,0,217.26,227.17Z"
                                    style="fill: #35DA33; transform-origin: 217.25px 232.05px;" id="el8we3t2usj1l"
                                    class="animable"></path>
                                <path
                                    d="M261.79,200.34h-36a3.17,3.17,0,0,0-3.17,3.17v13a3.17,3.17,0,0,0,3.17,3.17h.42v3.11l3.61-3.11h32a3.17,3.17,0,0,0,3.17-3.17v-13A3.17,3.17,0,0,0,261.79,200.34Z"
                                    style="fill: #35DA33; transform-origin: 243.805px 211.565px;" id="ellzralp1554"
                                    class="animable"></path>
                                <g id="elos7ml3vj3xi">
                                    <g style="opacity: 0.4; transform-origin: 243.805px 211.565px;" class="animable"
                                        id="eld1lz68eur9m">
                                        <path
                                            d="M261.79,200.34h-36a3.17,3.17,0,0,0-3.17,3.17v13a3.17,3.17,0,0,0,3.17,3.17h.42v3.11l3.61-3.11h32a3.17,3.17,0,0,0,3.17-3.17v-13A3.17,3.17,0,0,0,261.79,200.34Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 243.805px 211.565px;"
                                            id="elcci2myl0sl6" class="animable"></path>
                                    </g>
                                </g>
                                <path
                                    d="M230.72,209.82a2.16,2.16,0,1,1,2.17,2.08A2.07,2.07,0,0,1,230.72,209.82Zm3.74,0a1.58,1.58,0,1,0-1.57,1.57A1.52,1.52,0,0,0,234.46,209.82Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 232.879px 209.741px;"
                                    id="elnu132gmyukr" class="animable"></path>
                                <path
                                    d="M239,210.32a1.49,1.49,0,0,1-1.55,1.57,1.29,1.29,0,0,1-1.1-.52v.49h-.54v-4.32h.56v1.7a1.32,1.32,0,0,1,1.08-.49A1.49,1.49,0,0,1,239,210.32Zm-.56,0a1,1,0,1,0-1,1.08A1,1,0,0,0,238.48,210.32Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 237.406px 209.716px;"
                                    id="el1kdbe0l0odz" class="animable"></path>
                                <path
                                    d="M238.75,212.83l.18-.43a.69.69,0,0,0,.46.15c.29,0,.46-.19.46-.54v-3.23h.55V212a.92.92,0,0,1-1,1A1.11,1.11,0,0,1,238.75,212.83Zm1-5a.36.36,0,0,1,.37-.36.36.36,0,0,1,.38.35.36.36,0,0,1-.38.37A.35.35,0,0,1,239.75,207.82Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 239.625px 210.237px;"
                                    id="ela0u0mbj5zyu" class="animable"></path>
                                <path
                                    d="M244.24,210.5h-2.5a1,1,0,0,0,1.12.9,1.16,1.16,0,0,0,.89-.37l.31.36a1.69,1.69,0,0,1-2.88-1.07,1.51,1.51,0,0,1,1.55-1.57,1.48,1.48,0,0,1,1.52,1.58A1,1,0,0,1,244.24,210.5Zm-2.5-.4h2a1,1,0,0,0-2,0Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 242.716px 210.317px;"
                                    id="el3vucoj33wf4" class="animable"></path>
                                <path
                                    d="M244.74,210.32a1.54,1.54,0,0,1,1.63-1.57,1.36,1.36,0,0,1,1.25.65l-.42.28a1,1,0,0,0-.84-.45,1.09,1.09,0,0,0,0,2.17,1,1,0,0,0,.84-.44l.42.27a1.37,1.37,0,0,1-1.25.66A1.55,1.55,0,0,1,244.74,210.32Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 246.18px 210.32px;"
                                    id="ellmk7zzoc34l" class="animable"></path>
                                <path
                                    d="M250.12,211.68a1.1,1.1,0,0,1-.68.21.87.87,0,0,1-1-1v-1.7h-.53v-.45h.53v-.68H249v.68h.88v.45H249v1.67a.45.45,0,0,0,.48.52.69.69,0,0,0,.43-.14Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 249.015px 209.981px;"
                                    id="el2e1fa49emdq" class="animable"></path>
                                <path
                                    d="M250.69,207.82a.37.37,0,0,1,.38-.36.36.36,0,0,1,.38.35.38.38,0,0,1-.76,0Zm.1,1h.56v3.08h-.56Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 251.07px 209.68px;"
                                    id="el0m27yihae7j" class="animable"></path>
                                <path d="M255.14,208.78l-1.35,3.08h-.57l-1.35-3.08h.59l1,2.47,1.08-2.47Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 253.505px 210.32px;"
                                    id="eleic27a27uz7" class="animable"></path>
                                <path
                                    d="M258.35,210.5h-2.5a1,1,0,0,0,1.12.9,1.16,1.16,0,0,0,.89-.37l.3.36a1.51,1.51,0,0,1-1.21.5,1.55,1.55,0,0,1-1.66-1.57,1.51,1.51,0,0,1,1.55-1.57,1.48,1.48,0,0,1,1.52,1.58A1,1,0,0,1,258.35,210.5Zm-2.5-.4h2a1,1,0,0,0-2,0Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 256.826px 210.322px;"
                                    id="eldakle2hcc0b" class="animable"></path>
                                <path
                                    d="M249.9,115.78A7.48,7.48,0,1,0,236,119.56h0l0,0c.29.48.65.83,1,1.34l4.35,5.75a1.35,1.35,0,0,0,2.16,0l4.27-5.66a15.94,15.94,0,0,0,1.09-1.44v0h0A7.46,7.46,0,0,0,249.9,115.78ZM242.42,119a3.3,3.3,0,1,1,3.29-3.3A3.3,3.3,0,0,1,242.42,119Z"
                                    style="fill: #35DA33; transform-origin: 242.42px 117.716px;" id="eld2ym3gy3znp"
                                    class="animable"></path>
                                <path d="M201.44,410.65h-1.39v-.51h3.36v.51H202v3.56h-.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 201.73px 412.175px;"
                                    id="el5a8ybkxicbe" class="animable"></path>
                                <path
                                    d="M203.36,412.67a1.6,1.6,0,1,1,1.61,1.58A1.53,1.53,0,0,1,203.36,412.67Zm2.64,0a1,1,0,1,0-2.07,0,1,1,0,1,0,2.07,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 204.959px 412.651px;"
                                    id="elvhvp5md8xjl" class="animable"></path>
                                <path
                                    d="M209.07,414a1,1,0,0,1-.67.22.88.88,0,0,1-1-1v-1.69h-.52v-.46h.52v-.67H208v.67h.88v.46H208v1.67a.45.45,0,0,0,.48.52.75.75,0,0,0,.44-.15Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 207.975px 412.315px;"
                                    id="eli7fsdamiix" class="animable"></path>
                                <path
                                    d="M212.19,412.35v1.86h-.53v-.4a1.17,1.17,0,0,1-1,.44c-.7,0-1.14-.37-1.14-.91s.32-.9,1.23-.9h.89v-.11c0-.47-.27-.75-.83-.75a1.5,1.5,0,0,0-1,.34l-.24-.42a2,2,0,0,1,1.28-.4A1.15,1.15,0,0,1,212.19,412.35Zm-.56.92v-.43h-.86c-.55,0-.71.22-.71.48s.25.5.68.5A.89.89,0,0,0,211.63,413.27Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 210.858px 412.668px;"
                                    id="elwt3veh2sjs" class="animable"></path>
                                <path d="M213.22,409.9h.56v4.31h-.56Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 213.5px 412.055px;" id="el409zsa1u1pg"
                                    class="animable"></path>
                                <path
                                    d="M219.31,409.9v4.31h-.53v-.49a1.31,1.31,0,0,1-1.1.53,1.58,1.58,0,0,1,0-3.15,1.3,1.3,0,0,1,1.08.5v-1.7Zm-.55,2.77a1,1,0,1,0-1,1.09A1,1,0,0,0,218.76,412.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 217.768px 412.075px;"
                                    id="el4bsb3nr4eyf" class="animable"></path>
                                <path
                                    d="M220.27,410.18a.37.37,0,0,1,.38-.37.37.37,0,1,1,0,.73A.37.37,0,0,1,220.27,410.18Zm.1.95h.56v3.08h-.56Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 220.675px 412.007px;"
                                    id="elup6a18gt08m" class="animable"></path>
                                <path
                                    d="M221.6,413.89l.24-.45a1.94,1.94,0,0,0,1.08.32c.52,0,.73-.15.73-.41,0-.7-2-.1-2-1.32,0-.56.5-.93,1.29-.93a2.29,2.29,0,0,1,1.12.28l-.24.44a1.62,1.62,0,0,0-.89-.24c-.49,0-.72.18-.72.42,0,.73,2,.14,2,1.33,0,.56-.51.92-1.33.92A2.29,2.29,0,0,1,221.6,413.89Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 222.905px 412.675px;"
                                    id="elaayvc1d0v1" class="animable"></path>
                                <path
                                    d="M226.64,414a1,1,0,0,1-.68.22.88.88,0,0,1-1-1v-1.69h-.53v-.46H225v-.67h.56v.67h.88v.46h-.88v1.67a.45.45,0,0,0,.48.52.7.7,0,0,0,.43-.15Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 225.535px 412.315px;"
                                    id="el2o76oti139o" class="animable"></path>
                                <path
                                    d="M229.76,412.35v1.86h-.53v-.4a1.18,1.18,0,0,1-1,.44c-.69,0-1.14-.37-1.14-.91s.32-.9,1.24-.9h.89v-.11c0-.47-.28-.75-.83-.75a1.55,1.55,0,0,0-1,.34l-.23-.42a2,2,0,0,1,1.28-.4A1.15,1.15,0,0,1,229.76,412.35Zm-.56.92v-.43h-.86c-.56,0-.71.22-.71.48s.25.5.68.5A.89.89,0,0,0,229.2,413.27Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 228.428px 412.67px;"
                                    id="el0qjzhod9jcwo" class="animable"></path>
                                <path
                                    d="M233.71,412.44v1.77h-.55V412.5c0-.6-.31-.9-.84-.9a.92.92,0,0,0-1,1v1.58h-.56v-3.08h.53v.47a1.33,1.33,0,0,1,1.12-.5A1.19,1.19,0,0,1,233.71,412.44Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 232.242px 412.637px;"
                                    id="elfuu1hh4gud8" class="animable"></path>
                                <path
                                    d="M234.48,412.67a1.54,1.54,0,0,1,1.63-1.57,1.39,1.39,0,0,1,1.26.66l-.43.27a1,1,0,0,0-.84-.44,1.09,1.09,0,0,0,0,2.17,1,1,0,0,0,.84-.44l.43.26a1.4,1.4,0,0,1-1.26.67A1.55,1.55,0,0,1,234.48,412.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 235.925px 412.675px;"
                                    id="elcitpf33wgb6" class="animable"></path>
                                <path
                                    d="M240.81,412.86h-2.5a1,1,0,0,0,1.12.9,1.16,1.16,0,0,0,.89-.37l.31.36a1.58,1.58,0,0,1-1.22.5,1.55,1.55,0,0,1-1.66-1.58,1.51,1.51,0,0,1,1.55-1.57,1.48,1.48,0,0,1,1.52,1.59A1,1,0,0,1,240.81,412.86Zm-2.5-.4h2a1,1,0,0,0-2,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 239.286px 412.677px;"
                                    id="ell9b10oto1n" class="animable"></path>
                                <path d="M205.1,418.78v9.7h-2.25v-7.9h-1.94v-1.8Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 203.005px 423.63px;"
                                    id="elj94w8chjzim" class="animable"></path>
                                <path
                                    d="M209.41,427.24a3.31,3.31,0,0,1-.37,1.38l-.8,2h-1.37l.61-2.2a1.21,1.21,0,0,1-.75-1.18,1.34,1.34,0,1,1,2.68,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 208.069px 428.26px;"
                                    id="elgxm567td4mm" class="animable"></path>
                                <path d="M214,418.78v9.7H211.7v-7.9h-1.94v-1.8Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 211.88px 423.63px;" id="el3coes1ysjx4"
                                    class="animable"></path>
                                <path
                                    d="M215.64,423.63c0-3.2,1.77-5,4.16-5s4.16,1.82,4.16,5-1.76,5-4.16,5S215.64,426.83,215.64,423.63Zm6.06,0c0-2.2-.78-3.12-1.9-3.12s-1.89.92-1.89,3.12.78,3.12,1.89,3.12S221.7,425.84,221.7,423.63Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 219.8px 423.63px;" id="el4uq7gqwgnbx"
                                    class="animable"></path>
                                <path
                                    d="M225.05,423.63c0-3.2,1.78-5,4.17-5s4.16,1.82,4.16,5-1.76,5-4.16,5S225.05,426.83,225.05,423.63Zm6.07,0c0-2.2-.78-3.12-1.9-3.12s-1.89.92-1.89,3.12.78,3.12,1.89,3.12S231.12,425.84,231.12,423.63Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 229.215px 423.63px;" id="elv5kaeimrh6"
                                    class="animable"></path>
                                <path
                                    d="M251.46,424.21v4.27H249.3v-3.93c0-1.21-.54-1.77-1.42-1.77s-1.65.63-1.65,2v3.74h-2.16v-3.93c0-1.21-.51-1.77-1.41-1.77s-1.64.63-1.64,2v3.74h-2.16V421h2.06v.86a3,3,0,0,1,2.35-1,2.78,2.78,0,0,1,2.45,1.22,3.37,3.37,0,0,1,2.69-1.22C250.19,420.91,251.46,421.94,251.46,424.21Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 245.16px 424.708px;"
                                    id="elgl515xje71c" class="animable"></path>
                                <g id="eld4ynj8hwxt6">
                                    <circle cx="186.8" cy="418.02" r="8.37"
                                        style="fill: #35DA33; transform-origin: 186.8px 418.02px; transform: rotate(-76.77deg);"
                                        class="animable" id="el1nhue3pvbf5"></circle>
                                </g>
                                <path
                                    d="M183.42,419.54a13.07,13.07,0,0,1,2.15-.13c1.37,0,3.33-.07,5.67-.09l-.17.37c-.67-.76-1.38-1.6-2.14-2.47l-.13-.15.13-.17,2.11-2.63.2.42h-1l-6.87,0,.24-.23c0,2.54-.06,4.68-.1,6.18a14.85,14.85,0,0,1-.14,2.37,16.51,16.51,0,0,1-.14-2.37c0-1.5-.07-3.64-.09-6.18v-.23h.23l6.87,0h1.49l-.34.42-2.13,2.63v-.32l2.1,2.5.32.37h-.49c-2.34,0-4.3-.06-5.67-.09A12.25,12.25,0,0,1,183.42,419.54Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 187.435px 418.62px;"
                                    id="el25k400z51r5" class="animable"></path>
                                <path
                                    d="M322.22,403.73h-25.3a4.85,4.85,0,0,0-4.85,4.85V428.5a4.85,4.85,0,0,0,4.85,4.84h.64v4.75l5.51-4.75h19.15a4.85,4.85,0,0,0,4.85-4.84V408.58A4.85,4.85,0,0,0,322.22,403.73Z"
                                    style="fill: #35DA33; transform-origin: 309.57px 420.91px;" id="el9jl1uao3wp9"
                                    class="animable"></path>
                                <path
                                    d="M299.33,412.87v10.22a.4.4,0,0,0,.4.4h21.42a.4.4,0,0,0,.39-.41l-.05-3.74a.39.39,0,0,0-.07-.23L318.34,415a.38.38,0,0,0-.31-.16l-3.54,0a.4.4,0,0,1-.4-.39v-1.55a.39.39,0,0,0-.39-.4h-14A.4.4,0,0,0,299.33,412.87Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 310.435px 417.995px;"
                                    id="els0rg1nekrjd" class="animable"></path>
                                <path
                                    d="M315.09,415.71V419a.23.23,0,0,0,.23.23l4.73-.08a.23.23,0,0,0,.18-.36L318,415.51a.21.21,0,0,0-.19-.1l-2.52.07A.22.22,0,0,0,315.09,415.71Z"
                                    style="fill: #35DA33; transform-origin: 317.68px 417.32px;" id="elgds1vv9xg8o"
                                    class="animable"></path>
                                <rect x="298.9" y="423.8" width="23.07" height="0.71"
                                    style="fill: rgb(250, 250, 250); transform-origin: 310.435px 424.155px;"
                                    id="el5r2p7j3d7lh" class="animable"></rect>
                                <path d="M306.53,424.07a2.29,2.29,0,1,1-2.28-2.28A2.28,2.28,0,0,1,306.53,424.07Z"
                                    style="fill: #35DA33; transform-origin: 304.24px 424.08px;" id="ely8qf249uci"
                                    class="animable"></path>
                                <path d="M305.59,424.07a1.35,1.35,0,1,1-1.34-1.34A1.34,1.34,0,0,1,305.59,424.07Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 304.24px 424.08px;"
                                    id="el14vyqcyeu0lj" class="animable"></path>
                                <path
                                    d="M314.08,423.49c-.06,0-.11-2.47-.11-5.51s0-5.51.11-5.51.1,2.47.1,5.51S314.13,423.49,314.08,423.49Z"
                                    style="fill: #35DA33; transform-origin: 314.075px 417.98px;" id="el37nx1zovrow"
                                    class="animable"></path>
                                <path d="M319,424.07a2.28,2.28,0,1,1-2.28-2.28A2.28,2.28,0,0,1,319,424.07Z"
                                    style="fill: #35DA33; transform-origin: 316.72px 424.07px;" id="el7v6lywsm28d"
                                    class="animable"></path>
                                <path d="M318,424.07a1.35,1.35,0,1,1-1.35-1.34A1.35,1.35,0,0,1,318,424.07Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 316.65px 424.08px;"
                                    id="elbr0102cjyeo" class="animable"></path>
                                <path
                                    d="M316.69,419.86c0,.06-.33.1-.73.1s-.73,0-.73-.1.33-.11.73-.11S316.69,419.8,316.69,419.86Z"
                                    style="fill: #35DA33; transform-origin: 315.96px 419.855px;" id="elrqp65i6nz5"
                                    class="animable"></path>
                            </g>
                            <g id="freepik--Character--inject-69" class="animable"
                                style="transform-origin: 510.078px 308.308px;">
                                <path
                                    d="M555.34,252.13s16.13,2.72,17.43,3.07,6.41,2.77,6.67,4.33a46.79,46.79,0,0,1,0,6.15s-.93.75-1.5-.75a15.31,15.31,0,0,1-.49-4.47l-2.86-1.1,1.56,2.77.26,6.49s-2-.18-2.39-1.73a15.31,15.31,0,0,1-.38-3.29l-2.08-1.76,1.56,2.11.52,4.67s-1.52.5-2-.54a16.1,16.1,0,0,1-.52-4.13l-5.88-2.06-3.89,2.17L554.08,260Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 566.811px 260.435px;"
                                    id="el9c6uzh3yjin" class="animable"></path>
                                <path
                                    d="M498.86,212.26c.08.32,19.44,27,19.44,27l38.9,12.1-1.77,14.61-47.67-9.6-16.92-19.42Z"
                                    style="fill: #35DA33; transform-origin: 524.02px 239.115px;" id="elvakt7yq9efi"
                                    class="animable"></path>
                                <g id="elrwdwt6wg9e">
                                    <g style="opacity: 0.2; transform-origin: 524.02px 239.115px;" class="animable"
                                        id="elgqijxsqwais">
                                        <path
                                            d="M498.86,212.26c.08.32,19.44,27,19.44,27l38.9,12.1-1.77,14.61-47.67-9.6-16.92-19.42Z"
                                            id="ele247wh223f" class="animable"
                                            style="transform-origin: 524.02px 239.115px;"></path>
                                    </g>
                                </g>
                                <rect x="348.57" y="248.95" width="85.58" height="15.49" rx="3.05"
                                    style="fill: rgb(245, 245, 245); transform-origin: 391.36px 256.695px;"
                                    id="elhtbmesqq4dt" class="animable"></rect>
                                <path
                                    d="M431.11,264.44s.17,0,.5-.07a3,3,0,0,0,2.44-2.63c0-.94,0-2.06,0-3.3s0-2.63,0-4.14c0-.76,0-1.55,0-2.37a3,3,0,0,0-1-2.14,2.91,2.91,0,0,0-1.13-.59,4.59,4.59,0,0,0-1.35-.09h-2.92l-6.35,0-69.61.08a2.8,2.8,0,0,0-2.07.91,2.87,2.87,0,0,0-.72,2.15c0,1.68,0,3.35,0,5V261a4.18,4.18,0,0,0,.1,1.14,2.82,2.82,0,0,0,2.39,2.05c.35,0,.78,0,1.18,0l18.48,0,31.29.06,21.1.08,5.74.05,1.49,0,.51,0-.51,0-1.49,0-5.74.05-21.1.08-31.29.06H352.5c-.41,0-.79,0-1.24,0a3.41,3.41,0,0,1-1.24-.4,3.31,3.31,0,0,1-1.58-2,4.06,4.06,0,0,1-.12-1.28v-3.71c0-1.65,0-3.32,0-5a3.45,3.45,0,0,1,.87-2.5,3.28,3.28,0,0,1,2.45-1.08l69.61.08h9.27a5.76,5.76,0,0,1,1.43.12,3.16,3.16,0,0,1,1.24.66,3.22,3.22,0,0,1,1.11,2.35c0,.82,0,1.62,0,2.38,0,1.51,0,2.89,0,4.14s0,2.34-.05,3.32a3.16,3.16,0,0,1-1.21,2.09,3,3,0,0,1-1.38.57A1.78,1.78,0,0,1,431.11,264.44Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 391.306px 256.585px;"
                                    id="el8ctjjq4t1q9" class="animable"></path>
                                <g id="eln9murq5yufp">
                                    <circle cx="644.95" cy="421.54" r="40.89"
                                        style="fill: rgb(38, 50, 56); transform-origin: 644.95px 421.54px; transform: rotate(-2.75deg);"
                                        class="animable" id="el18jx7rhibc0h"></circle>
                                </g>
                                <path d="M604.08,420.84s0,.07,0,.11a40.89,40.89,0,0,0,81.77,1.18s0-.07,0-.11Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 644.964px 441.514px;"
                                    id="elwjf9ecgvaid" class="animable"></path>
                                <path d="M616.25,421.12a28.71,28.71,0,1,0,29.12-28.29A28.71,28.71,0,0,0,616.25,421.12Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 644.957px 421.537px;"
                                    id="elfygcxppyjsd" class="animable"></path>
                                <path
                                    d="M645.37,392.83a28.71,28.71,0,0,0-29.12,28.29l57.41.83A28.71,28.71,0,0,0,645.37,392.83Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 644.956px 407.389px;"
                                    id="elt0ly05rqj9j" class="animable"></path>
                                <path d="M627.47,421.28a17.49,17.49,0,1,0,17.74-17.23A17.49,17.49,0,0,0,627.47,421.28Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 644.958px 421.538px;"
                                    id="elk6ow9hqscje" class="animable"></path>
                                <path d="M625.55,361.58s41.86-12.66,59.17,32.82l-87.6,27.14Z"
                                    style="fill: #35DA33; transform-origin: 640.92px 390.75px;" id="elkh7cr6nt43"
                                    class="animable"></path>
                                <g id="el5oh3q9kmjn6">
                                    <circle cx="392.67" cy="421.54" r="40.89"
                                        style="fill: rgb(38, 50, 56); transform-origin: 392.67px 421.54px; transform: rotate(-2.75deg);"
                                        class="animable" id="elsr2qqnwo4j"></circle>
                                </g>
                                <path d="M351.79,420.84s0,.07,0,.11a40.89,40.89,0,0,0,81.77,1.18V422Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 392.674px 441.511px;"
                                    id="eln6cu0wx32lr" class="animable"></path>
                                <path d="M364,421.12a28.71,28.71,0,1,0,29.12-28.29A28.71,28.71,0,0,0,364,421.12Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 392.707px 421.537px;"
                                    id="elxbi2tkw0nfd" class="animable"></path>
                                <path
                                    d="M393.08,392.83A28.71,28.71,0,0,0,364,421.12l57.41.83A28.71,28.71,0,0,0,393.08,392.83Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 392.706px 407.389px;"
                                    id="elzuhvwcq7sg" class="animable"></path>
                                <path d="M375.18,421.28a17.49,17.49,0,1,0,17.74-17.23A17.49,17.49,0,0,0,375.18,421.28Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 392.668px 421.538px;"
                                    id="elar2vvo8vu7" class="animable"></path>
                                <path
                                    d="M450.83,405.12c-.23.12-21.52-3.29-21.52-3.29h0a13,13,0,0,1-9.71,5.08c-9.2.44-18.19.85-26,1.2A13.2,13.2,0,0,0,381,421.84h0a13.21,13.21,0,0,0,12.67,12.64L439,436.27c7.45.29,17.35-4.23,22-10.06h0Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 420.994px 419.057px;"
                                    id="elz2msaac85g" class="animable"></path>
                                <path
                                    d="M339.58,387s-1.94-39.85,35.51-48.15v-5.11H506.27V346s-19.25,23.19-13,42.44,8.25,21.22,8.25,21.22h74.66a51,51,0,0,0,9.43-28.29c.4-16.9-6.62-45.79-11.87-64.26C569,300.26,566,286.22,566,286.22l22.4-7.47S629.85,333,631.54,336s7.45,10.16,6.1,25.74S599,425.38,589.22,430.8s-18.62,5.76-27.43,7.11c-7.64,1.18-64.16.4-78.95.17a29,29,0,0,1-14.6-4.05c-4.42-2.68-7.74-7.12-11.41-14.4L449,404.39Z"
                                    style="fill: #35DA33; transform-origin: 488.703px 358.648px;" id="elp9tniqdir3p"
                                    class="animable"></path>
                                <path
                                    d="M349.62,384.26,333.1,410.14a4,4,0,0,0,4.91,5.92,19.24,19.24,0,0,0,5.55-3.76c7.55-7.19,21-26.13,21-26.13Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 348.481px 400.329px;"
                                    id="elv3vzhoz6m4c" class="animable"></path>
                                <path
                                    d="M468.11,388.92s0-.13.1-.38l.33-1.09a28.76,28.76,0,0,0,.87-4.27,30.14,30.14,0,0,0-2.56-15.62,32.72,32.72,0,0,0-6.09-9.15,39.94,39.94,0,0,0-10-7.66,50.62,50.62,0,0,0-13.1-4.88,69,69,0,0,0-15-1.55,113,113,0,0,0-15,1.11c-4.84.65-9.48,1.45-13.86,2.45a82.08,82.08,0,0,0-22.25,8.23,55.06,55.06,0,0,0-12.71,9.71c-1.32,1.36-2.27,2.49-2.9,3.26l-.71.89a1.79,1.79,0,0,1-.26.29,33.61,33.61,0,0,1,3.72-4.58,54,54,0,0,1,12.68-9.89,81.36,81.36,0,0,1,22.33-8.38c4.38-1,9-1.83,13.89-2.49a113.77,113.77,0,0,1,15.12-1.12,68.81,68.81,0,0,1,15.08,1.57,51.23,51.23,0,0,1,13.22,5,40.21,40.21,0,0,1,10.13,7.78,32.92,32.92,0,0,1,6.11,9.3,30,30,0,0,1,2.42,15.8,25.52,25.52,0,0,1-1,4.27c-.16.46-.28.81-.38,1.08A2.11,2.11,0,0,1,468.11,388.92Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 412.424px 366.359px;"
                                    id="el9kte27ceg5" class="animable"></path>
                                <path
                                    d="M460.56,380c-.06,0,.21-.63.49-1.77a12.94,12.94,0,0,0,.15-5,20.55,20.55,0,0,0-2.44-6.94,23.7,23.7,0,0,0-2.42-3.64,21.94,21.94,0,0,0-3.25-3.37,28.39,28.39,0,0,0-7.8-4.56,36.71,36.71,0,0,0-7.16-2,46.88,46.88,0,0,0-5-.57,14.69,14.69,0,0,1-1.84-.14,1.61,1.61,0,0,1,.48,0c.31,0,.77,0,1.37,0a37.4,37.4,0,0,1,5,.41,34.58,34.58,0,0,1,7.28,1.87,28.51,28.51,0,0,1,8,4.61,22.91,22.91,0,0,1,3.32,3.45,25,25,0,0,1,2.43,3.73,19.9,19.9,0,0,1,2.38,7.12,12.32,12.32,0,0,1-.31,5.06,7.19,7.19,0,0,1-.48,1.29A1.76,1.76,0,0,1,460.56,380Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 446.486px 365.996px;"
                                    id="eljy7ygkqsenm" class="animable"></path>
                                <g id="elaebeg6kboch">
                                    <g style="opacity: 0.4; transform-origin: 456.308px 368.27px;" class="animable"
                                        id="eldmsty1y1j5e">
                                        <path
                                            d="M434.87,345.06a52.54,52.54,0,0,1,19.75,8,34.91,34.91,0,0,1,13.23,16.44c2.62,6.74,2.23,15.67-.53,21.25l9.27.77c3.12-10.41-.27-23.18-7.77-31.33a46,46,0,0,0-33.95-15.17"
                                            id="elehbv63o5kpt" class="animable"
                                            style="transform-origin: 456.308px 368.27px;"></path>
                                    </g>
                                </g>
                                <rect x="342.24" y="263.66" width="98.25" height="70.11" rx="8.58"
                                    style="fill: rgb(69, 90, 100); transform-origin: 391.365px 298.715px;"
                                    id="elqlmyiqigxsa" class="animable"></rect>
                                <path
                                    d="M440.49,279.3c0,.15-22.09.26-49.33.26s-49.34-.11-49.34-.26,22.08-.26,49.34-.26S440.49,279.16,440.49,279.3Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 391.155px 279.3px;"
                                    id="el2gl48xa9jzx" class="animable"></path>
                                <path
                                    d="M506.21,338.41c0,.14-29.49.26-65.85.26s-65.85-.12-65.85-.26,29.48-.26,65.85-.26S506.21,338.27,506.21,338.41Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 440.36px 338.41px;"
                                    id="elfxg7lnakwvm" class="animable"></path>
                                <path
                                    d="M506.27,333.77a11.34,11.34,0,0,0,2.38-5.88c.2-3.29-1.3-7.41-4.85-7.41H458.5a13.29,13.29,0,0,0-13.29,13.29h61.06Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 476.939px 327.125px;"
                                    id="elulp7qcfi52l" class="animable"></path>
                                <path
                                    d="M566,286.22l-7.88-16.43a10,10,0,0,1,4-12.85l23.56-14.05a7.9,7.9,0,0,1,4.07-1.13h5.09l2,33.21L589,278l5,8.08Z"
                                    style="fill: #35DA33; transform-origin: 577.011px 263.99px;" id="eledowhi05kfi"
                                    class="animable"></path>
                                <path d="M594.91,243s8.06,1.85,9.07,14.27-7.11,16.3-7.11,16.3Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 599.488px 258.285px;"
                                    id="elgyrqjb5l2u5" class="animable"></path>
                                <path
                                    d="M568.75,263.35s-16.29,7.72-18.28,9c-1.38.88-2.56,2.42-1.48,5.13,1.84,4.61,9.46.27,9.46.27l15.17-7.58s5.83-2.75,3.67-6.2C574.88,260.11,568.75,263.35,568.75,263.35Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 563.169px 270.839px;"
                                    id="elpv8ly89dbd" class="animable"></path>
                                <path
                                    d="M545.69,260.54s15.31,2.62,16.61,3,6.4,2.77,6.66,4.33a46.79,46.79,0,0,1,0,6.15s-.92.75-1.5-.75a15.77,15.77,0,0,1-.49-4.48l-2.86-1.1,1.56,2.77.26,6.5s-2-.18-2.38-1.74a15.18,15.18,0,0,1-.38-3.28l-2.09-1.77,1.56,2.11.53,4.68s-1.52.49-2-.55a16.06,16.06,0,0,1-.52-4.13l-5.88-2.05-3.89,2.17L544.76,269Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 556.911px 268.808px;"
                                    id="elkm1ty7c8djs" class="animable"></path>
                                <path
                                    d="M569.53,239.22c0,6.2-2.85,11.22-6.36,11.22s-6.36-5-6.36-11.22S559.65,228,563.17,228,569.53,233,569.53,239.22Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 563.17px 239.22px;"
                                    id="elioq92ndguu8" class="animable"></path>
                                <path
                                    d="M564.21,246.93l3.5,12.12a3.14,3.14,0,0,0,1.63-3.58c-.88-4.15-1.38-7.1-2.34-10.74-.12-.36-2.79,2.2-2.79,2.2"
                                    style="fill: rgb(38, 50, 56); transform-origin: 566.824px 251.873px;"
                                    id="elqgsdumvc2" class="animable"></path>
                                <g id="elk94o4dh0ujh">
                                    <g style="opacity: 0.4; transform-origin: 551.571px 353.786px;" class="animable"
                                        id="el1mprcucmb5g">
                                        <path
                                            d="M495,393.57c-.34-1-.7-2-1-3.07s-.68-2-.94-3a32.21,32.21,0,0,1-.88-4.57c-5.9,24,3.11,40.93,18.57,42.12,22.6,1.74,50.15,3,61.29.08,20.31-5.33,27.76-22.27,29.54-25.06s17.93-32.32,8-60.75-27.15-58.62-27.15-58.62L566,286.22s3,14,7.77,30.84c5.25,18.47,12.27,47.36,11.87,64.26a51,51,0,0,1-9.43,28.29H501.56s-1.6-1.6-6.53-16"
                                            id="elloagpr0atbi" class="animable"
                                            style="transform-origin: 551.571px 353.786px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M336.6,380.78l.53-5.7,136.28,15.7a13.46,13.46,0,0,1,11.68,15.72l-.61,3.45-141-20.49A8,8,0,0,1,336.6,380.78Z"
                                    style="fill: #35DA33; transform-origin: 410.931px 392.515px;" id="el4jfrj9cjfsu"
                                    class="animable"></path>
                                <g id="elbajbffzzafv">
                                    <g style="opacity: 0.6; transform-origin: 410.931px 392.515px;" class="animable"
                                        id="elq0whv0qbb4">
                                        <path
                                            d="M336.6,380.78l.53-5.7,136.28,15.7a13.46,13.46,0,0,1,11.68,15.72l-.61,3.45-141-20.49A8,8,0,0,1,336.6,380.78Z"
                                            id="el0f7bb9cparj5" class="animable"
                                            style="transform-origin: 410.931px 392.515px;"></path>
                                    </g>
                                </g>
                                <g id="eldun7irx02q9">
                                    <g style="opacity: 0.3; transform-origin: 624.32px 389.43px;" class="animable"
                                        id="else7k3892rts">
                                        <path
                                            d="M601.58,418.9s30-33,36.19-58.94a58.33,58.33,0,0,1,9.29.69S629.32,408.88,601.58,418.9Z"
                                            id="el0tv9suxot2n" class="animable"
                                            style="transform-origin: 624.32px 389.43px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M637.33,348.34a4.81,4.81,0,0,1,.16.83c.08.55.24,1.36.34,2.41a36.74,36.74,0,0,1-.23,9,45.46,45.46,0,0,1-4,12.68,143.7,143.7,0,0,1-7.94,14.2,189.6,189.6,0,0,1-17.56,23.74c-2.44,2.89-4.46,5.19-5.86,6.77l-1.62,1.81a7,7,0,0,1-.59.61,4.46,4.46,0,0,1,.51-.67l1.55-1.88,5.73-6.87a206.16,206.16,0,0,0,17.4-23.78,152.39,152.39,0,0,0,8-14.13,46.41,46.41,0,0,0,4-12.54,40,40,0,0,0,.39-8.88c-.07-1.05-.2-1.86-.24-2.42A4.42,4.42,0,0,1,637.33,348.34Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 619.017px 384.365px;"
                                    id="elhi5l5mpdcp6" class="animable"></path>
                                <path
                                    d="M585.47,418.66a40.08,40.08,0,0,1-4.81-4.34,41.15,41.15,0,0,1-4.44-4.71,80.15,80.15,0,0,1,9.25,9.05Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 580.845px 414.135px;"
                                    id="el1p0nvtyc6mn" class="animable"></path>
                                <path
                                    d="M496.43,417.65a13.89,13.89,0,0,1,2.21-4.27,14.07,14.07,0,0,1,3.15-3.63c.11.11-1.26,1.75-2.72,3.92S496.57,417.71,496.43,417.65Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 499.113px 413.701px;"
                                    id="elfw72lhm922r" class="animable"></path>
                                <path
                                    d="M438.79,436.7a20.14,20.14,0,0,0,4.09-5.2,17.9,17.9,0,0,0,2-6.85,15.91,15.91,0,0,0-7.18-15,17.87,17.87,0,0,0-6.58-2.75,20.11,20.11,0,0,0-6.61-.09,1.93,1.93,0,0,1,.44-.13,10.9,10.9,0,0,1,1.32-.26,15.69,15.69,0,0,1,4.92.12,17.89,17.89,0,0,1,6.78,2.71,16.16,16.16,0,0,1,7.39,15.49,17.89,17.89,0,0,1-2.16,7,15.5,15.5,0,0,1-3,3.9,10.27,10.27,0,0,1-1,.87A1.87,1.87,0,0,1,438.79,436.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 434.988px 421.491px;"
                                    id="elvzhcvlvpfn9" class="animable"></path>
                                <path
                                    d="M389,426.25a21.48,21.48,0,0,1-.49-4.8,22.71,22.71,0,0,1,0-4.84,44.88,44.88,0,0,1,.46,9.64Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 388.716px 421.43px;"
                                    id="el2xgqv75y71a" class="animable"></path>
                                <path
                                    d="M392.64,426.26a46.3,46.3,0,0,1-1.23-9.66,23.52,23.52,0,0,1,.87,4.8A23.28,23.28,0,0,1,392.64,426.26Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 392.031px 421.43px;"
                                    id="elt77s1aus6qo" class="animable"></path>
                                <path
                                    d="M448.85,333.77c0,.14-16.57.26-37,.26s-37-.12-37-.26,16.57-.26,37-.26S448.85,333.62,448.85,333.77Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 411.85px 333.77px;"
                                    id="eljcpyojtlqjl" class="animable"></path>
                                <path
                                    d="M395.19,333.72c-.15,0-.26-19-.26-42.38S395,249,395.19,249s.26,19,.26,42.39S395.33,333.72,395.19,333.72Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 395.19px 291.36px;"
                                    id="elnuans6vdw2d" class="animable"></path>
                                <path
                                    d="M385,333.65c-.14,0,.57-19,1.59-42.36s2-42.35,2.1-42.34-.56,19-1.58,42.36S385.19,333.66,385,333.65Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 386.841px 291.3px;"
                                    id="el95n4iudbwyt" class="animable"></path>
                                <path
                                    d="M362.09,449.3a3.25,3.25,0,0,1-.44-.45c-.26-.3-.69-.73-1.16-1.34a38.38,38.38,0,0,1-3.69-5.42,41.43,41.43,0,0,1,.17-41.48,37.66,37.66,0,0,1,3.73-5.39c.48-.61.91-1,1.18-1.34s.43-.45.44-.43a2.52,2.52,0,0,1-.36.5c-.24.33-.65.77-1.1,1.4a42.27,42.27,0,0,0-3.74,46.56,42.57,42.57,0,0,0,3.53,5.47c.44.63.84,1.08,1.08,1.41S362.11,449.28,362.09,449.3Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 356.82px 421.374px;"
                                    id="elecdjb9hp1e9" class="animable"></path>
                                <path
                                    d="M505.35,373.11l-.31.58L499,385l-8.44,8.12,16.87,22.46,14.05-2.33s-1.57-3.21-8.63-3.83L510.18,396l9.91-15.36"
                                    style="fill: rgb(69, 90, 100); transform-origin: 506.02px 394.345px;"
                                    id="el6s5oidl07no" class="animable"></path>
                                <polygon
                                    points="490.58 393.15 507.45 415.61 521.5 413.28 519.57 411.43 508.04 412.69 492.38 391.42 490.58 393.15"
                                    style="fill: rgb(224, 224, 224); transform-origin: 506.04px 403.515px;"
                                    id="eluzobx8g6yj" class="animable"></polygon>
                                <path
                                    d="M511.75,403.28c-.08.16-1-.17-2,.05s-1.81.79-1.94.67.5-1.06,1.82-1.29S511.86,403.15,511.75,403.28Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 509.776px 403.339px;"
                                    id="elvmr05inicqh" class="animable"></path>
                                <path
                                    d="M511,400c-.12.12-.89-.6-2-.64s-2,.63-2.09.5.07-.31.43-.6a2.71,2.71,0,0,1,1.68-.52,2.63,2.63,0,0,1,1.64.63C510.93,399.65,511,399.92,511,400Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 508.943px 399.376px;"
                                    id="elf376h8dz2ob" class="animable"></path>
                                <path
                                    d="M510.35,395.65c-.14.11-.76-.62-1.79-.8s-1.86.29-2,.14.09-.29.46-.5a2.47,2.47,0,0,1,3,.54C510.36,395.35,510.42,395.61,510.35,395.65Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 508.447px 394.932px;"
                                    id="elaf1trumjg1r" class="animable"></path>
                                <path
                                    d="M513.55,391.7c-.15.08-.68-.65-1.65-1.07s-1.85-.36-1.89-.53,1-.58,2.15,0S513.72,391.65,513.55,391.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 511.798px 390.753px;"
                                    id="elbko1y1ic63" class="animable"></path>
                                <path
                                    d="M514.91,388.51c-.07.05-.62-.43-1.47-1.27L512,385.75a4.6,4.6,0,0,1-.84-1,1.13,1.13,0,0,1-.06-.87.87.87,0,0,1,.77-.58,2.56,2.56,0,0,1,1.43.46,5.27,5.27,0,0,1,1,.83,4.87,4.87,0,0,1,1.07,1.91,2.63,2.63,0,0,1,0,2,15,15,0,0,0-.42-1.83,5,5,0,0,0-1.07-1.65,4.58,4.58,0,0,0-.91-.7,2.33,2.33,0,0,0-1.06-.37.26.26,0,0,0-.24.17.54.54,0,0,0,0,.41,4.42,4.42,0,0,0,.7.88l1.37,1.59A6,6,0,0,1,514.91,388.51Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 513.304px 385.907px;"
                                    id="elhvjzl0e88e" class="animable"></path>
                                <path
                                    d="M515.48,388.84c-.07,0-.14-.74.48-1.71a3.56,3.56,0,0,1,4-1.45.68.68,0,0,1,.3.47.84.84,0,0,1-.1.47,2,2,0,0,1-.43.53,6.69,6.69,0,0,1-.9.73,6.23,6.23,0,0,1-1.76.82,2.88,2.88,0,0,1-1.76.13c0-.1.65-.16,1.62-.55a7,7,0,0,0,1.57-.87,6.36,6.36,0,0,0,.8-.7,1.59,1.59,0,0,0,.31-.37c.05-.14,0-.1,0-.13a1.11,1.11,0,0,0-.43-.09,3.11,3.11,0,0,0-.53,0,3.5,3.5,0,0,0-1,.24,3.43,3.43,0,0,0-1.39,1A12.41,12.41,0,0,0,515.48,388.84Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 517.786px 387.22px;"
                                    id="el4yqlvn9a9yq" class="animable"></path>
                                <path d="M501.72,390.86a1.69,1.69,0,1,1-1.94-1.39A1.7,1.7,0,0,1,501.72,390.86Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 500.053px 391.138px;"
                                    id="ell64sznupdf" class="animable"></path>
                                <path
                                    d="M556.55,383.91l4.51,29.28,36.47-5.42c-.74-3.45-20.64-7.64-20.64-7.64l-2.12-18.88Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 577.04px 397.22px;"
                                    id="elwuhvreh3qw" class="animable"></path>
                                <path
                                    d="M565.38,400.23a1.5,1.5,0,0,0-.78,1.85,1.46,1.46,0,0,0,1.83.79,1.59,1.59,0,0,0,.81-2,1.5,1.5,0,0,0-2-.61"
                                    style="fill: rgb(224, 224, 224); transform-origin: 565.93px 401.525px;"
                                    id="elf6ugyesra6" class="animable"></path>
                                <path d="M561.06,413.19l-.34-3,35.09-4.09s1.73.47,1.72,1.64Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 579.125px 409.645px;"
                                    id="elqereeili75" class="animable"></path>
                                <path
                                    d="M577.45,399.86c0,.18-.85.39-1.65,1.09s-1.14,1.52-1.32,1.48-.06-1.12.91-1.95S577.47,399.69,577.45,399.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 575.93px 401.096px;"
                                    id="elni5s586xov9" class="animable"></path>
                                <path
                                    d="M581.51,400.87c.07.17-.66.58-1.15,1.43s-.55,1.66-.73,1.68-.44-1,.19-2S581.48,400.7,581.51,400.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 580.468px 402.402px;"
                                    id="elti55q3zwwxt" class="animable"></path>
                                <path
                                    d="M584.37,405.12c-.16.07-.54-.79-.23-1.83s1.09-1.56,1.19-1.42-.34.74-.59,1.6S584.54,405.08,584.37,405.12Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 584.683px 403.486px;"
                                    id="elkv7s1txe4fo" class="animable"></path>
                                <path
                                    d="M576.49,395.61c0,.17-.9.05-1.9.26s-1.73.66-1.85.52.55-.89,1.72-1.13S576.56,395.45,576.49,395.61Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 574.61px 395.803px;"
                                    id="ele6ykwtefak" class="animable"></path>
                                <path
                                    d="M575,391.41a3.47,3.47,0,0,1-1.83.26,8.37,8.37,0,0,1-2-.3A8.56,8.56,0,0,1,570,391a2,2,0,0,1-.61-.35.76.76,0,0,1-.22-.93,1,1,0,0,1,.72-.53,2.27,2.27,0,0,1,.69,0,5.67,5.67,0,0,1,1.2.22,6.63,6.63,0,0,1,1.85.85c1,.66,1.35,1.28,1.29,1.33s-.57-.43-1.52-.95a7.12,7.12,0,0,0-1.77-.67,5.39,5.39,0,0,0-1.1-.17c-.4,0-.73,0-.8.19s0,.09.07.2a1.85,1.85,0,0,0,.45.25,10.78,10.78,0,0,0,1.05.41,10.28,10.28,0,0,0,1.87.41A12.88,12.88,0,0,1,575,391.41Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 572.048px 390.431px;"
                                    id="eludeqhxsskue" class="animable"></path>
                                <path
                                    d="M574.79,391.7c-.06,0-.51-.55-.75-1.69a6.18,6.18,0,0,1,0-2,6.82,6.82,0,0,1,.3-1.18,1.52,1.52,0,0,1,1-1.09.87.87,0,0,1,.84.39,2.61,2.61,0,0,1,.29.65,4.07,4.07,0,0,1,.18,1.23,4.25,4.25,0,0,1-.5,2c-.57,1-1.28,1.37-1.3,1.31s.49-.51.9-1.5a4.17,4.17,0,0,0,.32-1.8,3.53,3.53,0,0,0-.19-1.05c-.11-.38-.3-.67-.44-.61s-.45.36-.55.69a6.06,6.06,0,0,0-.31,1.06,6.75,6.75,0,0,0-.08,1.87C574.59,391,574.88,391.66,574.79,391.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 575.304px 388.717px;"
                                    id="el2cxsoobyrvp" class="animable"></path>
                                <polyline points="527.86 315.13 496.59 383.27 517.24 395.67 560.48 313.68"
                                    style="fill: rgb(38, 50, 56); transform-origin: 528.535px 354.675px;"
                                    id="elixrf79fjz9" class="animable"></polyline>
                                <path
                                    d="M579.43,397.22,557,400.82l-13.43-80.14-66.35,4.81A16.16,16.16,0,0,1,472,325c-18.63-5.11-16.11-28.87-14.31-32.68l91.81-2.63a19.54,19.54,0,0,1,19.92,16.83Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 517.944px 345.251px;"
                                    id="elrk3zgocsjo" class="animable"></path>
                                <path
                                    d="M456.76,296.08l.33-33.88s-4.37-22-5.67-30.69c-2-13.44-4.76-19.83,17.26-29.38l4.82-1.86,7.45.1c8.88.67,18.24,8.7,18.46,14L508,290.74Z"
                                    style="fill: #35DA33; transform-origin: 479.051px 248.175px;" id="el9qe3dl8wy0n"
                                    class="animable"></path>
                                <path
                                    d="M458.14,210s-6.22,13.38-5,25.57l23.17,22.24c5.19,5.78,11.69,8.24,20,8.74l47.94,5.24,1.33-12.54L500,246.33c-1.82-.34-2.73-2.23-4.12-3.45L458.14,210"
                                    style="fill: #35DA33; transform-origin: 499.281px 240.895px;" id="elqcanlkplm5"
                                    class="animable"></path>
                                <path
                                    d="M454.39,213.86a3.28,3.28,0,0,1,.92-.62,11.43,11.43,0,0,1,3.1-.87,16,16,0,0,1,5.18,0,5.37,5.37,0,0,1,1.52.52,15.29,15.29,0,0,1,1.41,1c.92.72,1.85,1.55,2.8,2.45,1.92,1.79,3.74,4.06,5.87,6.36s4.46,4.77,7,7.36,5.27,5.3,8.19,8.1c1.47,1.4,3,2.82,4.59,4.21.81.66,1.61,1.44,2.38,2.17A5.76,5.76,0,0,0,500,246.1h0L545.67,259l.21.06,0,.22c-.09.89-.2,1.84-.3,2.81-.35,3.33-.7,6.63-1,9.73l0,.26-.26,0L524,269.82l-9.6-1.05-9.19-.93c-3-.33-5.89-.67-8.7-1.08a39.17,39.17,0,0,1-8.06-1.87,29.68,29.68,0,0,1-6.78-3.65c-2-1.41-3.88-2.88-5.61-4.33-6.85-5.84-11.88-11.07-15.37-14.63-1.73-1.79-3.06-3.2-3.95-4.16l-1-1.1-.33-.39s.13.11.37.35.59.61,1,1.07l4,4.1c3.53,3.51,8.6,8.7,15.46,14.49,1.73,1.43,3.58,2.89,5.59,4.28a29.9,29.9,0,0,0,6.72,3.58,39.13,39.13,0,0,0,8,1.82c2.81.4,5.71.74,8.69,1.06l9.19.9,9.6,1.05,20.3,2.21-.29.23c.33-3.1.68-6.4,1-9.74.11-1,.21-1.92.3-2.81l.19.28-45.6-12.95h0a6.08,6.08,0,0,1-2.92-1.69c-.81-.77-1.54-1.49-2.37-2.18-1.61-1.4-3.12-2.83-4.59-4.23-2.92-2.81-5.64-5.54-8.17-8.14s-4.85-5.08-7-7.41-3.91-4.59-5.81-6.38a33.31,33.31,0,0,0-2.76-2.45,11.85,11.85,0,0,0-1.38-1,4.83,4.83,0,0,0-1.45-.51,15.51,15.51,0,0,0-5.11-.08,11.55,11.55,0,0,0-3.09.79A7,7,0,0,0,454.39,213.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 500.135px 242.119px;"
                                    id="elhsuzv5n9v5" class="animable"></path>
                                <path
                                    d="M466.36,170.88l2.32,33a10.28,10.28,0,0,0,10.26,9.55h0a10.28,10.28,0,0,0,10.26-10.95c-.21-3.14-.39-5.71-.39-5.71s8-1.24,8.08-9.23c.06-4.61-.74-15.07-1.42-23.09A10.47,10.47,0,0,0,485,154.87h-4.83A14.76,14.76,0,0,0,466.36,170.88Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 481.599px 184.15px;"
                                    id="elrtncc62474k" class="animable"></path>
                                <path d="M488.82,196.64a18.61,18.61,0,0,1-10.41-2.95s2.46,5.74,10.43,5Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 483.625px 196.223px;"
                                    id="elx29uip4mioi" class="animable"></path>
                                <path
                                    d="M493.68,174.7a1.14,1.14,0,0,1-1.1,1.15,1.08,1.08,0,0,1-1.18-1,1.15,1.15,0,0,1,1.1-1.16A1.1,1.1,0,0,1,493.68,174.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 492.54px 174.771px;"
                                    id="el0oetwzuhtkng" class="animable"></path>
                                <path
                                    d="M494.1,172.45c-.15.15-1-.49-2.24-.49s-2.12.62-2.26.47.08-.34.48-.62a3.08,3.08,0,0,1,1.8-.56,3,3,0,0,1,1.78.58C494,172.11,494.16,172.38,494.1,172.45Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 491.835px 171.861px;"
                                    id="elijc6yaargl" class="animable"></path>
                                <path
                                    d="M482.16,174.7a1.13,1.13,0,0,1-1.1,1.15,1.08,1.08,0,0,1-1.18-1,1.15,1.15,0,0,1,1.1-1.16A1.1,1.1,0,0,1,482.16,174.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 481.02px 174.771px;"
                                    id="el6iwkarhvnfo" class="animable"></path>
                                <path
                                    d="M482,172.68c-.14.15-1-.49-2.24-.49s-2.12.62-2.25.47.07-.34.47-.62a3.08,3.08,0,0,1,1.8-.56,3,3,0,0,1,1.78.57C482,172.34,482.11,172.61,482,172.68Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 479.755px 172.091px;"
                                    id="elkofelm6v36a" class="animable"></path>
                                <path
                                    d="M486.49,181.78a8.18,8.18,0,0,1,2-.36c.31,0,.61-.1.66-.31a1.5,1.5,0,0,0-.21-.93L488,177.8a40.28,40.28,0,0,1-2.08-6.24,42.44,42.44,0,0,1,2.58,6.05l.88,2.4a1.81,1.81,0,0,1,.17,1.23.79.79,0,0,1-.52.46,2.21,2.21,0,0,1-.53.07A8,8,0,0,1,486.49,181.78Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 487.755px 176.699px;"
                                    id="eljk4ka8wpd18" class="animable"></path>
                                <path
                                    d="M482.88,182.63c.2,0,.2,1.32,1.34,2.26s2.56.8,2.57,1-.32.25-.92.27a3.32,3.32,0,0,1-2.14-.75,2.88,2.88,0,0,1-1-1.9C482.64,183,482.79,182.62,482.88,182.63Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 484.746px 184.395px;"
                                    id="eltp3jhnasdbf" class="animable"></path>
                                <path
                                    d="M482.35,167.87c-.12.33-1.34.18-2.78.35s-2.61.57-2.8.27.12-.46.59-.78a4.84,4.84,0,0,1,4.25-.47C482.14,167.45,482.41,167.71,482.35,167.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 479.536px 167.775px;"
                                    id="el8v3ciaafe38" class="animable"></path>
                                <path
                                    d="M493.64,168.9c-.21.28-1.06,0-2.07,0s-1.88.18-2.08-.11.05-.42.43-.68a2.83,2.83,0,0,1,1.69-.46,2.89,2.89,0,0,1,1.65.56C493.62,168.48,493.74,168.76,493.64,168.9Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 491.547px 168.336px;"
                                    id="elqeu5c1xnulh" class="animable"></path>
                                <path
                                    d="M469.05,176.88c-.14-.06-5.49-1.63-5.31,3.83s5.61,4.16,5.62,4S469.05,176.88,469.05,176.88Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 466.548px 180.792px;"
                                    id="elt5dwdjzbe" class="animable"></path>
                                <path
                                    d="M467.62,182.7s-.09.07-.25.15a1,1,0,0,1-.71,0,2.35,2.35,0,0,1-1.15-2.07,3.16,3.16,0,0,1,.22-1.37,1.11,1.11,0,0,1,.69-.76.49.49,0,0,1,.57.25c.08.15.05.26.08.27s.11-.1.06-.32a.59.59,0,0,0-.23-.34.71.71,0,0,0-.53-.12,1.32,1.32,0,0,0-1,.88,3.17,3.17,0,0,0-.28,1.53,2.45,2.45,0,0,0,1.46,2.31,1,1,0,0,0,.86-.17C467.62,182.83,467.64,182.71,467.62,182.7Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 466.354px 180.761px;"
                                    id="el3dwc2enlagt" class="animable"></path>
                                <path
                                    d="M466,176.69a2.88,2.88,0,0,1,2.63,1.35c.35.78.43,1.66.78,2.44a2,2,0,0,0,2,1.29,1.68,1.68,0,0,0,1.14-1.25,4.53,4.53,0,0,0,0-1.76c-.32-2.55-.85-5.07-.95-7.64a13,13,0,0,1,1.61-7.42,7.14,7.14,0,0,1,6.38-3.59c1.7.14,3.25,1,4.94,1.26a6.68,6.68,0,0,0,5.54-1.85,11.11,11.11,0,0,1,1-.75,3.09,3.09,0,0,0-.57-1.68c-3.35-3.1-9.37-4-13.79-2.85a15.93,15.93,0,0,0-10.45,8.37c-1.9,4.14-1.34,9.89-.29,14.08"
                                    style="fill: rgb(38, 50, 56); transform-origin: 478.038px 167.767px;"
                                    id="elsnyua1hr0ha" class="animable"></path>
                                <path
                                    d="M495.56,163.21s-20.94-6.74-30,11.38a33.78,33.78,0,0,1-1.36-7c0-1.62,1-11.29,10.92-14.33C475.12,153.3,490.11,147.58,495.56,163.21Z"
                                    style="fill: #35DA33; transform-origin: 479.88px 163.43px;" id="elc33pwogipiv"
                                    class="animable"></path>
                                <path
                                    d="M477.56,163.66a4.56,4.56,0,0,0,7.26.66,2.68,2.68,0,0,0,5.07-.26,6.21,6.21,0,0,0,2,1.49,2.08,2.08,0,0,0,2.33-.49,2,2,0,0,0-.15-2.4,4.88,4.88,0,0,0-2.12-1.43,15.35,15.35,0,0,0-7.9-1.2,10.67,10.67,0,0,0-6.93,3.77"
                                    style="fill: rgb(38, 50, 56); transform-origin: 485.835px 162.972px;"
                                    id="elvop5ah5kj5" class="animable"></path>
                                <g id="elzt7kxlwtgw9">
                                    <g style="opacity: 0.4; transform-origin: 479.88px 163.442px;" class="animable"
                                        id="els9tcbbj7c6">
                                        <path
                                            d="M495.56,163.21a9.73,9.73,0,0,0-6.66-3c-6.18-.27-17.74,3.2-23.34,14.4a33.78,33.78,0,0,1-1.36-7c0-1.62,1-11.29,10.92-14.33C475.12,153.3,490.11,147.58,495.56,163.21Z"
                                            id="elwque55k6zzg" class="animable"
                                            style="transform-origin: 479.88px 163.442px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M466.43,172.47a39.43,39.43,0,0,1,12.2-11.68c4.82-3,12.78-6,18.26-7.44a11.92,11.92,0,0,1,5.05-.53,4.55,4.55,0,0,1,3.74,3.06c.52,2.07-3.15,5.26-4.88,6.51a55.21,55.21,0,0,1-5.24,3.1s.05-3.84-6.09-4.63C481.12,159.79,466.43,172.47,466.43,172.47Z"
                                    style="fill: #35DA33; transform-origin: 486.08px 162.609px;" id="elf7yogvygw4"
                                    class="animable"></path>
                                <g id="elncqrysg3t9h">
                                    <g style="opacity: 0.3; transform-origin: 480.173px 255.324px;" class="animable"
                                        id="elnp1pusx99t">
                                        <path
                                            d="M459.06,240.52c2.16,5.21,4.34,11.64,7.47,16.33s7.31,8.86,12.51,11c6.54,2.74,14.27,3.18,20.77.38.53-.23,1.57-.52,1.47-1.09,0,0-2.15-.25-2.82-.36C485.33,264.6,483.9,263,477.61,258c-3.92-3.09-12.61-12.46-18.55-17.48"
                                            id="elbqo1jmtzetl" class="animable"
                                            style="transform-origin: 480.173px 255.324px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M500.82,278.46a5.49,5.49,0,0,1-.55,1.22,15.25,15.25,0,0,1-2.12,3A23,23,0,0,1,488,288.87a46.53,46.53,0,0,1-11.84,1.77c-1.53.06-2.77.07-3.62.07a7.73,7.73,0,0,1-1.33-.06,5.86,5.86,0,0,1,1.32-.15l3.61-.23a51.81,51.81,0,0,0,11.71-1.9,23.8,23.8,0,0,0,10.06-6A25.64,25.64,0,0,0,500.82,278.46Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 486.015px 284.588px;"
                                    id="eli1mrvlxz3ps" class="animable"></path>
                                <path
                                    d="M557.39,403.21a1,1,0,0,1-.08-.31c0-.23-.1-.54-.18-.92-.15-.84-.37-2-.64-3.54-.55-3.12-1.32-7.57-2.28-13.06-1.87-11.06-4.45-26.29-7.3-43.11-1.27-7.62-2.48-14.9-3.59-21.55l.26.21L514.87,323l-8.24.56-2.2.13-.56,0h-.2l.19,0,.57-.07,2.19-.2,8.23-.7,28.69-2.29.22,0,0,.22c1.12,6.65,2.35,13.93,3.63,21.54,2.79,16.83,5.31,32.07,7.15,43.14.88,5.5,1.6,10,2.11,13.08l.54,3.57c.06.38.1.69.13.92A1.29,1.29,0,0,1,557.39,403.21Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 530.53px 361.82px;"
                                    id="el5x6aec1v6jd" class="animable"></path>
                                <path
                                    d="M550.3,313.54c.09.12-1.66,1.62-3.64,3.64s-3.46,3.79-3.58,3.69a23.82,23.82,0,0,1,7.22-7.33Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 546.692px 317.207px;"
                                    id="ellz6ic0eua7n" class="animable"></path>
                                <path
                                    d="M489,203.17s.06.11.12.33a4.69,4.69,0,0,1,.19,1,8.21,8.21,0,0,1-.48,3.64,9.32,9.32,0,0,1-3.3,4.32,10,10,0,0,1-6.41,1.72,11.58,11.58,0,0,1-6.23-2.34,13.23,13.23,0,0,1-3.54-4.13,14.28,14.28,0,0,1-1.36-3.4c-.1-.42-.17-.75-.2-1s0-.35,0-.35a22.69,22.69,0,0,0,1.89,4.54,13.71,13.71,0,0,0,3.51,3.93,11.33,11.33,0,0,0,6,2.2,9.71,9.71,0,0,0,6.11-1.59,9.22,9.22,0,0,0,3.22-4.06,8.49,8.49,0,0,0,.63-3.49C489.08,203.65,489,203.19,489,203.17Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 478.562px 208.584px;"
                                    id="elnqgotfmf2na" class="animable"></path>
                                <path
                                    d="M503.11,246.84a4.19,4.19,0,0,1-.22-1c-.11-.79-.24-1.75-.4-2.86-.33-2.55-.76-5.83-1.23-9.46s-.81-7-1-9.48c-.11-1.21-.18-2.2-.22-2.88a3.93,3.93,0,0,1,0-1.06,4.93,4.93,0,0,1,.21,1c.11.79.24,1.74.39,2.86.32,2.55.73,5.83,1.18,9.46s.84,7,1.08,9.47c.11,1.22.19,2.2.24,2.89A4.54,4.54,0,0,1,503.11,246.84Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 501.581px 233.47px;"
                                    id="eltop9qdvo5mr" class="animable"></path>
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
