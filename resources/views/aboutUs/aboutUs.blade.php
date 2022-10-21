@extends('order_management.layout')
@section('title', 'About Us')
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
                            <h2 class="text-left">About Us</h2>
                            <p class="text-left">Lets get to know about us.</p>
                            <div class="text-left">
                                system is an online Agriculture product buying and selling platform
                                (E-Marketplace)
                                which the user can sell their products (Fruits, vegetables, seeds, fertilizer, and equipment
                                related to agriculture field) and users can buy any of products as they wish.The
                                system
                                is mainly focused on Sri Lankan agriculture sector.
                                </p>
                                <p class="card-text"> From this website Farmers will be able to get their needed products
                                    for their plantation and agricultural activities This website also support the buyers
                                    who need to buy the needed equipments and products for their purposes.Any Client can
                                    sell their products in this website. This will be very helpful for client involve in
                                    agricultural sector to fullfill their needs and wants.
                            </div>
                        </form>
                    </div>
                    <div class="col" style="margin-top: 10px">
                        <br />
                        <svg class="animated" id="freepik_stories-about-us-page" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" version="1.1"
                            xmlns:svgjs="http://svgjs.com/svgjs">
                            <style>
                                svg#freepik_stories-about-us-page:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-about-us-page.animated #freepik--background-complete--inject-144 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-about-us-page.animated #freepik--Shadow--inject-144 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-about-us-page.animated #freepik--Page--inject-144 {
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
                            <g id="freepik--background-complete--inject-144" class="animable"
                                style="transform-origin: 250px 228.23px;">
                                <rect y="382.4" width="500" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 250px 382.525px;" id="elnvpkkdnkvf8"
                                    class="animable"></rect>
                                <rect x="90.46" y="391.92" width="24.87" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 102.895px 392.045px;"
                                    id="ellmlln45iq2b" class="animable"></rect>
                                <rect x="152.33" y="389.21" width="27.5" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 166.08px 389.335px;"
                                    id="elljb70y1t4bb" class="animable"></rect>
                                <rect x="47.67" y="401.21" width="58.11" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 76.725px 401.335px;"
                                    id="elt4hxdqqci4" class="animable"></rect>
                                <rect x="428.3" y="399.53" width="21.6" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 439.1px 399.655px;"
                                    id="elzrd6iek6bjp" class="animable"></rect>
                                <rect x="214.79" y="391.14" width="27.93" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 228.755px 391.265px;"
                                    id="elty5ckd4th8" class="animable"></rect>
                                <rect x="300.67" y="395.31" width="70.22" height="0.25"
                                    style="fill: rgb(235, 235, 235); transform-origin: 335.78px 395.435px;"
                                    id="eljms65iwlzw" class="animable"></rect>
                                <path
                                    d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 140.46px 196.4px;" id="eloar9g4hjnj8"
                                    class="animable"></path>
                                <path
                                    d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 356.75px 196.4px;" id="elzg6ztjoo28k"
                                    class="animable"></path>
                                <rect x="23.25" y="64.62" width="306.37" height="195.29" rx="8.6"
                                    style="fill: rgb(235, 235, 235); transform-origin: 176.435px 162.265px;"
                                    id="elx0gh5bglxx" class="animable"></rect>
                                <rect x="23.25" y="74.5" width="306.37" height="157.42"
                                    style="fill: rgb(250, 250, 250); transform-origin: 176.435px 153.21px;"
                                    id="el58i16eah82l" class="animable"></rect>
                                <path
                                    d="M231.27,134.14a7.37,7.37,0,0,1,7.35-7.35h229a7.37,7.37,0,0,1,7.35,7.35V157.8H231.27Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 353.12px 142.295px;"
                                    id="elyeuspsohg4j" class="animable"></path>
                                <circle cx="290.71" cy="142.3" r="5.56"
                                    style="fill: rgb(255, 255, 255); transform-origin: 290.71px 142.3px;"
                                    id="el4b700i58dm1" class="animable"></circle>
                                <circle cx="271.01" cy="142.3" r="5.56"
                                    style="fill: rgb(255, 255, 255); transform-origin: 271.01px 142.3px;"
                                    id="el4qfwwdatdsl" class="animable"></circle>
                                <circle cx="251.32" cy="142.3" r="5.56"
                                    style="fill: rgb(255, 255, 255); transform-origin: 251.32px 142.3px;"
                                    id="eld0cyoy6il5k" class="animable"></circle>
                                <path
                                    d="M467.59,285.2h-229a7.37,7.37,0,0,1-7.35-7.35v-120H474.94V277.85A7.37,7.37,0,0,1,467.59,285.2Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 353.09px 221.525px;"
                                    id="el8e9d2s7owia" class="animable"></path>
                                <path
                                    d="M198.55,175.07a7.37,7.37,0,0,1,7.35-7.35h229a7.37,7.37,0,0,1,7.35,7.35v23.66H198.55Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 320.4px 183.225px;"
                                    id="elvj9mk3qfj2" class="animable"></path>
                                <circle cx="257.98" cy="183.23" r="5.56"
                                    style="fill: rgb(230, 230, 230); transform-origin: 257.98px 183.23px;"
                                    id="elh59i75xe5al" class="animable"></circle>
                                <circle cx="238.28" cy="183.23" r="5.56"
                                    style="fill: rgb(230, 230, 230); transform-origin: 238.28px 183.23px;"
                                    id="eljqp92i3f85" class="animable"></circle>
                                <circle cx="218.59" cy="183.23" r="5.56"
                                    style="fill: rgb(230, 230, 230); transform-origin: 218.59px 183.23px;"
                                    id="ele5wouza6gde" class="animable"></circle>
                                <path
                                    d="M434.86,326.13h-229a7.37,7.37,0,0,1-7.35-7.35v-120H442.21v120A7.37,7.37,0,0,1,434.86,326.13Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 320.36px 262.455px;"
                                    id="eld6a0095p0wg" class="animable"></path>
                                <path d="M165.82,216a7.37,7.37,0,0,1,7.35-7.35h229a7.37,7.37,0,0,1,7.35,7.35v23.66H165.82Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 287.67px 224.155px;"
                                    id="el88d408szzwf" class="animable"></path>
                                <circle cx="225.25" cy="224.16" r="5.56"
                                    style="fill: rgb(240, 240, 240); transform-origin: 225.25px 224.16px;"
                                    id="el1jujipj2nxph" class="animable"></circle>
                                <circle cx="205.55" cy="224.16" r="5.56"
                                    style="fill: rgb(240, 240, 240); transform-origin: 205.55px 224.16px;"
                                    id="elxtth9rju96" class="animable"></circle>
                                <circle cx="185.86" cy="224.16" r="5.56"
                                    style="fill: rgb(240, 240, 240); transform-origin: 185.86px 224.16px;"
                                    id="elf6qfw1oqcnu" class="animable"></circle>
                                <path
                                    d="M402.13,367.06h-229a7.37,7.37,0,0,1-7.35-7.35v-120H409.48v120A7.37,7.37,0,0,1,402.13,367.06Z"
                                    style="fill: rgb(230, 230, 230); transform-origin: 287.63px 303.385px;"
                                    id="elh12xxowexff" class="animable"></path>
                            </g>
                            <g id="freepik--Shadow--inject-144" class="animable"
                                style="transform-origin: 250px 416.24px;">
                                <ellipse id="freepik--path--inject-144" cx="250" cy="416.24" rx="193.89"
                                    ry="11.32" style="fill: rgb(245, 245, 245); transform-origin: 250px 416.24px;"
                                    class="animable"></ellipse>
                            </g>
                            <g id="freepik--Page--inject-144" class="animable" style="transform-origin: 250px 228.11px;">
                                <rect x="182.33" y="82.5" width="8.83" height="1"
                                    style="fill: rgb(53, 218, 51); transform-origin: 186.745px 83px;" id="elfz3q4f6jscf"
                                    class="animable"></rect>
                                <rect x="150.17" y="82.5" width="21.67" height="1"
                                    style="fill: rgb(53, 218, 51); transform-origin: 161.005px 83px;" id="elzvjqvx16z8"
                                    class="animable"></rect>
                                <path
                                    d="M90.33,86H409.67a12,12,0,0,1,12,12V373.72a0,0,0,0,1,0,0H78.33a0,0,0,0,1,0,0V98A12,12,0,0,1,90.33,86Z"
                                    style="fill: rgb(53, 218, 51); transform-origin: 250px 229.86px;" id="elp6uqmeeiws"
                                    class="animable"></path>
                                <g id="el3cpfifacfkg">
                                    <rect x="78.33" y="104" width="343.33" height="265.06"
                                        style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 249.995px 236.53px;"
                                        class="animable"></rect>
                                </g>
                                <g id="els1le8apvvea">
                                    <rect x="78.33" y="104" width="343.33" height="58.27"
                                        style="fill: rgb(53, 218, 51); opacity: 0.4; transform-origin: 249.995px 133.135px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elxg5vlvhbsza">
                                    <rect x="400.25" y="109.57" width="14.33" height="14.33"
                                        style="fill: rgb(53, 218, 51); opacity: 0.4; transform-origin: 407.415px 116.735px;"
                                        class="animable"></rect>
                                </g>
                                <g id="el5x12siyi7hl">
                                    <rect x="378.99" y="109.57" width="14.33" height="14.33"
                                        style="fill: rgb(53, 218, 51); opacity: 0.4; transform-origin: 386.155px 116.735px;"
                                        class="animable"></rect>
                                </g>
                                <g id="eltacp71qlto">
                                    <rect x="357.73" y="109.57" width="14.33" height="14.33"
                                        style="fill: rgb(53, 218, 51); opacity: 0.4; transform-origin: 364.895px 116.735px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elm5zyjeb0nc8">
                                    <rect x="128.96" y="359.5" width="14.33" height="1.44"
                                        style="fill: rgb(53, 218, 51); opacity: 0.4; transform-origin: 136.125px 360.22px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elv2fcqytffb">
                                    <rect x="107.7" y="359.5" width="14.33" height="1.44"
                                        style="fill: rgb(53, 218, 51); opacity: 0.4; transform-origin: 114.865px 360.22px;"
                                        class="animable"></rect>
                                </g>
                                <g id="elppa2att6wy">
                                    <rect x="86.44" y="359.5" width="14.33" height="1.44"
                                        style="fill: rgb(53, 218, 51); opacity: 0.4; transform-origin: 93.605px 360.22px;"
                                        class="animable"></rect>
                                </g>
                                <path
                                    d="M215.69,137.2h-4.37l-.61,2.06h-3.93l4.68-12.47h4.21l4.68,12.47h-4Zm-.8-2.69L213.52,130l-1.37,4.49Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 213.565px 133.025px;"
                                    id="elsbw7xqimrjp" class="animable"></path>
                                <path
                                    d="M221.36,126.79h3.5v4.32a3.33,3.33,0,0,1,1.17-.81,3.84,3.84,0,0,1,1.46-.28,3.54,3.54,0,0,1,2.73,1.19,4.9,4.9,0,0,1,1.08,3.41,6.42,6.42,0,0,1-.49,2.6,3.77,3.77,0,0,1-1.37,1.69,3.5,3.5,0,0,1-1.93.55,3.6,3.6,0,0,1-1.67-.39,4.23,4.23,0,0,1-1.24-1.15v1.34h-3.24Zm3.47,7.93a2.65,2.65,0,0,0,.44,1.69,1.4,1.4,0,0,0,1.11.52,1.28,1.28,0,0,0,1-.52,2.76,2.76,0,0,0,.42-1.73,2.5,2.5,0,0,0-.41-1.57,1.27,1.27,0,0,0-1-.5,1.42,1.42,0,0,0-1.15.52A2.39,2.39,0,0,0,224.83,134.72Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 226.335px 133.125px;"
                                    id="elk7opv8lhpcb" class="animable"></path>
                                <path
                                    d="M232.53,134.77a4.54,4.54,0,0,1,1.4-3.41A5.22,5.22,0,0,1,237.7,130a5.16,5.16,0,0,1,4.09,1.58,4.9,4.9,0,0,1-.26,6.53,5.28,5.28,0,0,1-3.83,1.33,5.41,5.41,0,0,1-3.52-1.1A4.44,4.44,0,0,1,232.53,134.77Zm3.47,0a2.77,2.77,0,0,0,.49,1.79,1.62,1.62,0,0,0,2.46,0,2.82,2.82,0,0,0,.48-1.83A2.67,2.67,0,0,0,239,133a1.53,1.53,0,0,0-1.2-.57,1.55,1.55,0,0,0-1.25.58A2.69,2.69,0,0,0,236,134.76Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 237.72px 134.718px;"
                                    id="elsulo29xc49" class="animable"></path>
                                <path
                                    d="M254.09,139.26h-3.23V137.8a4.67,4.67,0,0,1-1.46,1.28,3.82,3.82,0,0,1-1.81.38,2.94,2.94,0,0,1-2.24-.85,3.71,3.71,0,0,1-.81-2.63v-5.75H248v5a1.83,1.83,0,0,0,.31,1.21,1.12,1.12,0,0,0,.89.36,1.25,1.25,0,0,0,1-.48,2.68,2.68,0,0,0,.4-1.71v-4.34h3.46Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 249.309px 134.847px;"
                                    id="el5vovpvj30sq" class="animable"></path>
                                <path
                                    d="M260.37,126.79v3.44h1.9v2.53h-1.9V136a1.67,1.67,0,0,0,.11.77.62.62,0,0,0,.59.28,3.66,3.66,0,0,0,1.07-.22l.26,2.39a11.14,11.14,0,0,1-2.4.28,4.14,4.14,0,0,1-1.9-.33,2,2,0,0,1-.91-1,5.85,5.85,0,0,1-.29-2.19v-3.18h-1.28v-2.53h1.28v-1.66Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 259.01px 133.149px;"
                                    id="ell96iz757jnm" class="animable"></path>
                                <path
                                    d="M278.07,126.79h3.84v7.43a6.27,6.27,0,0,1-.34,2.09,4.52,4.52,0,0,1-1.08,1.71,4.42,4.42,0,0,1-1.54,1,8,8,0,0,1-2.7.41,16,16,0,0,1-2-.13,5.12,5.12,0,0,1-1.79-.5,4.34,4.34,0,0,1-1.33-1.08,3.94,3.94,0,0,1-.82-1.43,7.41,7.41,0,0,1-.35-2.11v-7.43h3.84v7.61a2.19,2.19,0,0,0,.56,1.59,2.12,2.12,0,0,0,1.57.57,2.07,2.07,0,0,0,1.56-.56,2.16,2.16,0,0,0,.57-1.6Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 275.935px 133.091px;"
                                    id="el1t6375lo3yo" class="animable"></path>
                                <path
                                    d="M283.62,136.75l3.44-.32a1.66,1.66,0,0,0,.59.87,1.76,1.76,0,0,0,1,.27,1.69,1.69,0,0,0,1.08-.3.66.66,0,0,0,.3-.55.64.64,0,0,0-.39-.58,7.37,7.37,0,0,0-1.49-.36,15.22,15.22,0,0,1-2.5-.58,2.66,2.66,0,0,1-1.18-.9,2.32,2.32,0,0,1-.49-1.46,2.4,2.4,0,0,1,.52-1.53,3.22,3.22,0,0,1,1.43-1,7.67,7.67,0,0,1,2.44-.32,8.65,8.65,0,0,1,2.39.25,3.12,3.12,0,0,1,1.28.77,4,4,0,0,1,.86,1.4l-3.29.32a1.1,1.1,0,0,0-.42-.64,1.74,1.74,0,0,0-1-.27,1.38,1.38,0,0,0-.85.21.63.63,0,0,0-.27.51.54.54,0,0,0,.34.5,5.71,5.71,0,0,0,1.48.3,9.76,9.76,0,0,1,2.57.55,2.84,2.84,0,0,1,1.29,1,2.48,2.48,0,0,1,.44,1.42,2.82,2.82,0,0,1-.47,1.52,3.24,3.24,0,0,1-1.49,1.18,7.21,7.21,0,0,1-2.77.43,6.57,6.57,0,0,1-3.52-.7A3.18,3.18,0,0,1,283.62,136.75Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 288.405px 134.723px;"
                                    id="elt5dndg0cdks" class="animable"></path>
                                <circle cx="149.18" cy="225.12" r="50"
                                    style="fill: rgb(53, 218, 51); transform-origin: 149.18px 225.12px;" id="elhybjhpxe6a"
                                    class="animable"></circle>
                                <g id="elfrfule85nc7">
                                    <circle cx="149.18" cy="225.12" r="47.37"
                                        style="fill: rgb(255, 255, 255); transform-origin: 149.18px 225.12px; transform: rotate(-45deg);"
                                        class="animable"></circle>
                                </g>
                                <g style="clip-path: url(&quot;#freepik--clip-path--inject-144&quot;); transform-origin: 150.411px 235.515px;"
                                    id="elgddm09n7p1b" class="animable">
                                    <path
                                        d="M151.6,235l4-8.32s20.88,6.6,24,8.13c-.08-5.22,2.58-15,2.87-20.36.79-.75,2.7-2.64,3.69-2.57,3,7,2.35,31-3.55,31.43C173.18,243.91,151.6,235,151.6,235Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 169.756px 227.609px;"
                                        id="el6kf70nqf85k" class="animable"></path>
                                    <path
                                        d="M149,233.7c2.41,5.65,22.2,10.68,22.2,10.68l4-12.16s-7.54-5.72-15.37-7.57C151.82,222.74,146.34,227.5,149,233.7Z"
                                        style="fill: rgb(53, 218, 51); transform-origin: 161.761px 234.301px;"
                                        id="eliw9axb996l" class="animable"></path>
                                    <g id="elg7gg0z012s">
                                        <path
                                            d="M149.35,234.36c2.35,3.55,11.09,6.77,16.78,8.56C162.34,235.56,157.23,231.5,149.35,234.36Z"
                                            style="opacity: 0.2; transform-origin: 157.74px 238.179px;" class="animable">
                                        </path>
                                    </g>
                                    <path d="M182.45,215.51l-3.19-4.09,5.9-3.29a10.32,10.32,0,0,1,1.71,5.93Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 183.066px 211.82px;"
                                        id="elvc5ga9n2k7p" class="animable"></path>
                                    <polygon points="178.39 205.76 184.14 204.83 185.16 208.13 179.26 211.42 178.39 205.76"
                                        style="fill: rgb(181, 91, 82); transform-origin: 181.775px 208.125px;"
                                        id="el5vagr3pejt9" class="animable"></polygon>
                                    <path
                                        d="M160.31,225.06s8.06,19.4,1.74,55.55h-31.5c-.37-5.28,2.32-31-3.38-55.88a87.92,87.92,0,0,1,11.47-1.46,127.07,127.07,0,0,1,14.61,0C158.35,223.74,160.31,225.06,160.31,225.06Z"
                                        style="fill: rgb(53, 218, 51); transform-origin: 145.82px 251.835px;"
                                        id="elecpflj88x8" class="animable"></path>
                                    <g id="elrxbrf6nzb1b">
                                        <path
                                            d="M134.78,230.86c.68,4.1-.37,13.89-4,25.2a165.59,165.59,0,0,0-3.08-28.86v0C130,226.92,134.14,227,134.78,230.86Z"
                                            style="opacity: 0.2; transform-origin: 131.337px 241.581px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M140.21,209.61c1,4.7,1.64,10.53-1.57,13.66,0,0,2,4.77,10.74,4.77,8,0,3.87-4.77,3.87-4.77-5.27-1.25-5.16-7.73-4.33-11.39Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 146.478px 218.825px;"
                                        id="elbqyxggxp49d" class="animable"></path>
                                    <path
                                        d="M149.79,227.66l1.9,2.1a.57.57,0,0,1,.12.54l-.61,1.85a.53.53,0,0,1-.48.36l-2,.1a.54.54,0,0,1-.49-.25L147,230.57a.56.56,0,0,1,0-.67l2-2.24A.56.56,0,0,1,149.79,227.66Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 149.361px 230.054px;"
                                        id="elzxwi7uf54lk" class="animable"></path>
                                    <path
                                        d="M149.38,227.2a11.06,11.06,0,0,0-1.56,5.36s-11-3.86-10.67-9.52c0,0,1.53-.92,2.5-1.67C139.65,221.37,140.11,224.94,149.38,227.2Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 143.261px 226.965px;"
                                        id="elvzzuyu11mv8" class="animable"></path>
                                    <path
                                        d="M149.38,227.2a15.66,15.66,0,0,1,2.25,5s4.88-3.36,3.25-8.95a19.66,19.66,0,0,0-2.82-.89S152.8,226,149.38,227.2Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 152.297px 227.28px;"
                                        id="el8ga7eknejo" class="animable"></path>
                                    <path
                                        d="M150.27,232.22s3.13,23,3.2,27a38.82,38.82,0,0,1-1.77,11.16s-2.15-4.07-2.52-11.33.08-22.76-.08-26.84Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 151.25px 251.295px;"
                                        id="elf1ilw4ghdfe" class="animable"></path>
                                    <g id="elg78ar5f2z6h">
                                        <path
                                            d="M148.92,211.89a14.15,14.15,0,0,0,.22,7.72,8.57,8.57,0,0,1-2.35-.72c-3-1.4-4.51-3.59-6.1-6.84-.14-.84-.3-1.65-.47-2.44Z"
                                            style="opacity: 0.2; transform-origin: 144.68px 214.61px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M157.21,208.59a5.86,5.86,0,0,1-3.5,2.95c-2,.59-3.09-1.24-2.59-3.19.46-1.76,2-4.18,4.1-3.93A2.79,2.79,0,0,1,157.21,208.59Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 154.296px 208.027px;"
                                        id="eln3r8r0q09d" class="animable"></path>
                                    <g id="elhsrdcly5c2u">
                                        <path
                                            d="M157.21,208.59a5.86,5.86,0,0,1-3.5,2.95c-2,.59-3.09-1.24-2.59-3.19.46-1.76,2-4.18,4.1-3.93A2.79,2.79,0,0,1,157.21,208.59Z"
                                            style="opacity: 0.2; transform-origin: 154.296px 208.027px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M151.41,204.52c2,1.83,5.65-8.21,1.56-11s-5.52,1-5.45,3.31S148.39,201.81,151.41,204.52Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 151.173px 198.638px;"
                                        id="elm34uxdzy3oh" class="animable"></path>
                                    <path
                                        d="M137.75,202.83c.94,6.36,1.17,10.13,4.64,13.2,5.21,4.61,12.74,1.15,13.69-5.33.86-5.84-.82-15.27-7.21-17.4A8.51,8.51,0,0,0,137.75,202.83Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 146.955px 205.495px;"
                                        id="elh918pbmy65r" class="animable"></path>
                                    <path
                                        d="M137.35,208.23c1.1.71,2.61,2.63,4.88-.77,0-.88-2.23-2.36-2.4-4.44-.2-2.42-.73-5-2.69-5.85-4.47-2-5.29,1.84-4.85,4.14S133.94,206,137.35,208.23Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 137.208px 203.013px;"
                                        id="eljxq7t1sqjx" class="animable"></path>
                                    <path
                                        d="M136.75,199.41c10.55-1.64,16.78-2,19.95-5.95s-1.7-8.84-7-9.4c-.38,2.06-5.75,7.48-14,9.83a2.48,2.48,0,0,0-.71,4.46C136,199,136.75,199.41,136.75,199.41Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 145.792px 191.735px;"
                                        id="el5p6eotj5l8e" class="animable"></path>
                                    <path
                                        d="M135.52,210.07a6.15,6.15,0,0,0,4,2.43c2.09.32,2.84-1.63,2-3.49-.75-1.68-2.74-3.86-4.72-3.33S134.35,208.46,135.52,210.07Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 138.373px 209.067px;"
                                        id="elhwxv3jnrdtg" class="animable"></path>
                                    <path
                                        d="M147.46,204c0,.52.36.93.69.9s.57-.46.53-1-.35-.92-.69-.9S147.42,203.44,147.46,204Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 148.07px 203.95px;"
                                        id="elf0cdvtw9kce" class="animable"></path>
                                    <path
                                        d="M153.26,203.57c.05.52.36.92.69.9s.57-.46.53-1-.36-.93-.69-.9S153.22,203.05,153.26,203.57Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 153.87px 203.52px;"
                                        id="ele9nxxd7473l" class="animable"></path>
                                    <path d="M151.44,204a19.24,19.24,0,0,0,2.84,4.29,2.9,2.9,0,0,1-2.41.63Z"
                                        style="fill: rgb(160, 39, 36); transform-origin: 152.86px 206.486px;"
                                        id="eluvz79hx96ja" class="animable"></path>
                                    <path
                                        d="M150.5,210.41a.14.14,0,0,0,.13-.16.15.15,0,0,0-.16-.14,4.13,4.13,0,0,1-3.45-1.39.15.15,0,1,0-.24.18A4.36,4.36,0,0,0,150.5,210.41Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 148.691px 209.544px;"
                                        id="elxifh9g3qyoj" class="animable"></path>
                                    <path
                                        d="M145.55,202.18a.28.28,0,0,0,.23-.13,2.35,2.35,0,0,1,1.84-1.16.29.29,0,0,0,.3-.3.31.31,0,0,0-.31-.31,2.91,2.91,0,0,0-2.34,1.43.3.3,0,0,0,.1.42A.24.24,0,0,0,145.55,202.18Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 146.571px 201.231px;"
                                        id="elnu8kmsq97xn" class="animable"></path>
                                    <path
                                        d="M155.69,201.31l.12-.05a.3.3,0,0,0,.08-.43,3.06,3.06,0,0,0-2.4-1.42.3.3,0,0,0-.3.31.31.31,0,0,0,.31.3h0a2.43,2.43,0,0,1,1.89,1.15A.34.34,0,0,0,155.69,201.31Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 154.569px 200.36px;"
                                        id="elvopfbzge7ni" class="animable"></path>
                                    <path
                                        d="M123.55,233.26l8.1,4.76s-10.22,20-9.11,23.12c1.51,4.2,3.8,13.43,6.48,18-.26,1-1.76,3.43-2.64,3.88-6.44-4.32-13.49-18.47-13.47-22.51C113,251.34,123.55,233.26,123.55,233.26Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 122.28px 258.14px;"
                                        id="el8gyuo6rj3y" class="animable"></path>
                                    <path
                                        d="M127.17,224.73c-6.06.88-12.51,22-12.51,22L129,251.3a115.8,115.8,0,0,0,6.63-14.87C138.29,228.63,133.67,223.78,127.17,224.73Z"
                                        style="fill: rgb(53, 218, 51); transform-origin: 125.528px 237.956px;"
                                        id="el0ur4iw1rfdno" class="animable"></path>
                                    <path d="M127.55,278.34l6.11-.44-3.08,6.74s-5.36.21-6.34-3.88Z"
                                        style="fill: rgb(181, 91, 82); transform-origin: 128.95px 281.271px;"
                                        id="el5o4isgo8q0d" class="animable"></path>
                                    <polygon points="138.7 281 135.6 286.97 130.58 284.64 133.66 277.9 138.7 281"
                                        style="fill: rgb(181, 91, 82); transform-origin: 134.64px 282.435px;"
                                        id="el967hymod7jp" class="animable"></polygon>
                                </g>
                                <circle cx="350.82" cy="309.44" r="50"
                                    style="fill: rgb(53, 218, 51); transform-origin: 350.82px 309.44px;"
                                    id="elq1pj1eb5ajh" class="animable"></circle>
                                <circle cx="350.82" cy="309.44" r="47.37"
                                    style="fill: rgb(255, 255, 255); transform-origin: 350.82px 309.44px;"
                                    id="el4vavexi3zo" class="animable"></circle>
                                <g style="clip-path: url(&quot;#freepik--clip-path-2--inject-144&quot;); transform-origin: 347.543px 319.216px;"
                                    id="elqojqov2888p" class="animable">
                                    <path
                                        d="M348.64,273.44c-7.11-.64-11.54,10.3-10.06,27,9,5.11,19.31,0,27.56,4.11C373.77,292.88,371.74,266.56,348.64,273.44Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 354.212px 288.43px;"
                                        id="elnhusnkhkmv" class="animable"></path>
                                    <path
                                        d="M337.54,321.78a53.21,53.21,0,0,1-4.29,10.94,24.48,24.48,0,0,1-3.66,5.25,12,12,0,0,1-1.37,1.26,6.2,6.2,0,0,1-2.67,1.35,4.72,4.72,0,0,1-2.29-.1,4.83,4.83,0,0,1-1.79-1,6.68,6.68,0,0,1-1.56-2.09,14.77,14.77,0,0,1-1.09-3.33,27.27,27.27,0,0,1-.48-3c-.22-2-.32-3.86-.35-5.76a93.93,93.93,0,0,1,.51-11.25l3.68.07c.32,3.6.69,7.24,1.16,10.78.25,1.77.53,3.53.89,5.21.18.83.39,1.65.61,2.4a8.28,8.28,0,0,0,.77,1.86c.11.18.25.28.08.09a1.69,1.69,0,0,0-.59-.33,2,2,0,0,0-.93-.06c-.45.08-.48.21-.3,0a7.22,7.22,0,0,0,.59-.68,21.41,21.41,0,0,0,2.31-4,48.74,48.74,0,0,0,1.94-4.73c.6-1.61,1.16-3.34,1.65-4.9Z"
                                        style="fill: rgb(255, 181, 115); transform-origin: 327.76px 327.363px;"
                                        id="elen52tr7n64a" class="animable"></path>
                                    <path
                                        d="M332.6,312.15c-3,.77-5.1,13.11-5.1,13.11l11.47,7.8s4.72-14.63,2.41-17.93S337,311,332.6,312.15Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 334.758px 322.36px;"
                                        id="elma8bwono7je" class="animable"></path>
                                    <g id="elmw3624ej">
                                        <polygon points="332.87 314.91 330.56 327.35 335.21 330.5 332.87 314.91"
                                            style="opacity: 0.2; transform-origin: 332.885px 322.705px;" class="animable">
                                        </polygon>
                                    </g>
                                    <path d="M322.34,315.15l1.52-7.67-6.1,1.77s-.6,5.31,1.86,7.06Z"
                                        style="fill: rgb(255, 181, 115); transform-origin: 320.778px 311.895px;"
                                        id="elu6zuvj2foje" class="animable"></path>
                                    <polygon points="323.25 304.11 318.21 306.2 317.76 309.25 323.86 307.48 323.25 304.11"
                                        style="fill: rgb(255, 181, 115); transform-origin: 320.81px 306.68px;"
                                        id="elp9iu15fubl" class="animable"></polygon>
                                    <path
                                        d="M332.6,312.15s-3.47,1.23,3.48,43.93h29.55c-.49-12-.51-19.45,5.24-44.14a88,88,0,0,0-12.55-1.65,93.82,93.82,0,0,0-13.42,0C339.14,310.82,332.6,312.15,332.6,312.15Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 351.302px 333.065px;"
                                        id="elhcc8fsvlpwj" class="animable"></path>
                                    <g id="eltzt3eqounz">
                                        <path
                                            d="M368.44,321.72c-2.68.66-5.16,3.59-4.86,9a13,13,0,0,0,2.47,6.78c.47-4.14,1.26-8.95,2.52-15.09Z"
                                            style="opacity: 0.2; transform-origin: 366.063px 329.61px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M346.46,319.76s4.84,4,4.84,8.23c4-2.95,9.45-11,10-16.11a1.54,1.54,0,0,0-1.46-1.68,8.79,8.79,0,0,1-1.08-.14,1,1,0,0,0-.86.22Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 353.883px 319.014px;"
                                        id="elcbqrtsx98td" class="animable"></path>
                                    <path
                                        d="M346.46,319.76a12.24,12.24,0,0,0-4.85,8.23c-4.08-3-2.39-12.23-.12-16.59a2.34,2.34,0,0,1,1.82-1.24c.59-.07,1.05-.15,1.35-.21a.4.4,0,0,1,.48.34Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 342.797px 318.966px;"
                                        id="elsbmlvm4q91" class="animable"></path>
                                    <path
                                        d="M357,295.18c-.84,4.32-1.69,12.23,1.33,15.11a37.91,37.91,0,0,1-11.86,9.47c-6-4.79-1.56-9.47-1.56-9.47,4.82-1.15,4.69-4.72,3.85-8.08Z"
                                        style="fill: rgb(255, 181, 115); transform-origin: 350.829px 307.47px;"
                                        id="elvyr5l6frldf" class="animable"></path>
                                    <g id="elp9wkych00r">
                                        <path
                                            d="M353.63,298.05l-4.87,4.16a14.29,14.29,0,0,1,.41,2.38c1.84-.26,4.73-1.83,5.13-3.83A5.67,5.67,0,0,0,353.63,298.05Z"
                                            style="opacity: 0.2; transform-origin: 351.53px 301.32px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M364.23,288.24c-2,6.94-2.69,9.92-7.05,12.75-6.55,4.24-14.64.27-14.76-7.13-.11-6.66,3.18-16.89,10.69-18.16A9.85,9.85,0,0,1,364.23,288.24Z"
                                        style="fill: rgb(255, 181, 115); transform-origin: 353.532px 289.14px;"
                                        id="els40qf0dmaia" class="animable"></path>
                                    <path
                                        d="M358.9,281.77c1.22,6.93,1.69,9.61,4.14,11.4s4.73-6.43,2.92-9.59S358.9,281.77,358.9,281.77Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 362.756px 287.453px;"
                                        id="elquripe57den" class="animable"></path>
                                    <path
                                        d="M347.38,275.27c-1.47,1.74,1.55,5.38,4.48,6.57a5,5,0,0,1-.39-1.2,19.67,19.67,0,0,0,7,3,2.75,2.75,0,0,1-.55-1.23c0-.34,7.22,4.44,8.27,1s-2.53-7.94-8-9.38C353.53,272.86,349.19,273.12,347.38,275.27Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 356.684px 279.001px;"
                                        id="elk8s0va9rdrc" class="animable"></path>
                                    <path
                                        d="M352.59,287.62c-.12.57-.53,1-.91.88s-.57-.61-.44-1.19.53-1,.91-.88S352.72,287,352.59,287.62Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 351.915px 287.465px;"
                                        id="eligysc7ym9cs" class="animable"></path>
                                    <path
                                        d="M346.12,286.18c-.13.57-.54,1-.91.88s-.58-.61-.45-1.19.53-1,.91-.88S346.24,285.6,346.12,286.18Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 345.439px 286.025px;"
                                        id="elimp5vx3yvyc" class="animable"></path>
                                    <path d="M345.83,285.06l-1.29-.71S345,285.58,345.83,285.06Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 345.185px 284.769px;"
                                        id="el4a473gwkc62" class="animable"></path>
                                    <path d="M347.88,287.65a15.7,15.7,0,0,1-2.85,3.2,2.51,2.51,0,0,0,2,.84Z"
                                        style="fill: rgb(237, 137, 62); transform-origin: 346.455px 289.672px;"
                                        id="el3vxh8o7sqiq" class="animable"></path>
                                    <path
                                        d="M349.61,294.63a7.09,7.09,0,0,1-.86-.12.18.18,0,0,1-.13-.21.17.17,0,0,1,.21-.13,4.66,4.66,0,0,0,4.09-.95.18.18,0,0,1,.25,0,.18.18,0,0,1,0,.24A4.87,4.87,0,0,1,349.61,294.63Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 350.916px 293.907px;"
                                        id="el81oyat5hmnl" class="animable"></path>
                                    <path
                                        d="M364.69,295.17a5.27,5.27,0,0,1-3.36,2.21c-1.82.34-2.57-1.33-1.92-3,.58-1.47,2.22-3.41,4-3A2.37,2.37,0,0,1,364.69,295.17Z"
                                        style="fill: rgb(255, 181, 115); transform-origin: 362.197px 294.374px;"
                                        id="elk1mvdak6z2d" class="animable"></path>
                                    <path
                                        d="M355.77,286.36a.33.33,0,0,1-.29-.28,4.1,4.1,0,0,0-2.16-2.46.35.35,0,1,1,.29-.63,4.74,4.74,0,0,1,2.54,3,.35.35,0,0,1-.27.4Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 354.613px 284.663px;"
                                        id="elj6oamn5197" class="animable"></path>
                                    <path
                                        d="M344.84,281.59a.36.36,0,0,1-.31-.16.35.35,0,0,1,.1-.48,3.43,3.43,0,0,1,3.12-.4.34.34,0,0,1,.18.46.34.34,0,0,1-.45.17,2.78,2.78,0,0,0-2.47.35A.35.35,0,0,1,344.84,281.59Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 346.218px 280.967px;"
                                        id="elolqu1tgtng" class="animable"></path>
                                    <path d="M352.3,286.5l-1.28-.71S351.48,287,352.3,286.5Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 351.66px 286.206px;"
                                        id="elen2nwevyo1i" class="animable"></path>
                                    <path
                                        d="M366.08,354.35l.75,2.64c.11.21-.14.42-.48.42H335.93c-.27,0-.49-.14-.5-.3l-.27-2.65c0-.18.21-.34.5-.34H365.6A.53.53,0,0,1,366.08,354.35Z"
                                        style="fill: rgb(53, 218, 51); transform-origin: 351.008px 355.764px;"
                                        id="elbd4jjr69yia" class="animable"></path>
                                    <g id="elgf8yayi1omt">
                                        <path
                                            d="M366.08,354.35l.75,2.64c.11.21-.14.42-.48.42H335.93c-.27,0-.49-.14-.5-.3l-.27-2.65c0-.18.21-.34.5-.34H365.6A.53.53,0,0,1,366.08,354.35Z"
                                            style="opacity: 0.2; transform-origin: 351.008px 355.764px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M362,357.69h.8c.16,0,.28-.08.27-.18l-.38-3.44c0-.1-.15-.18-.31-.18h-.8c-.16,0-.28.08-.27.18l.38,3.44C361.66,357.61,361.8,357.69,362,357.69Z"
                                        style="fill: rgb(53, 218, 51); transform-origin: 362.19px 355.79px;"
                                        id="elbvr054enojg" class="animable"></path>
                                    <g id="el0qltpy54lxg">
                                        <path
                                            d="M362,357.69h.8c.16,0,.28-.08.27-.18l-.38-3.44c0-.1-.15-.18-.31-.18h-.8c-.16,0-.28.08-.27.18l.38,3.44C361.66,357.61,361.8,357.69,362,357.69Z"
                                            style="opacity: 0.4; transform-origin: 362.19px 355.79px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M338.18,357.69h.8c.16,0,.29-.08.28-.18l-.38-3.44c0-.1-.15-.18-.31-.18h-.8c-.16,0-.28.08-.27.18l.37,3.44C337.88,357.61,338,357.69,338.18,357.69Z"
                                        style="fill: rgb(53, 218, 51); transform-origin: 338.38px 355.79px;"
                                        id="eloqetqm8dlao" class="animable"></path>
                                    <g id="eljo05xprpb9a">
                                        <path
                                            d="M338.18,357.69h.8c.16,0,.29-.08.28-.18l-.38-3.44c0-.1-.15-.18-.31-.18h-.8c-.16,0-.28.08-.27.18l.37,3.44C337.88,357.61,338,357.69,338.18,357.69Z"
                                            style="opacity: 0.4; transform-origin: 338.38px 355.79px;" class="animable">
                                        </path>
                                    </g>
                                    <path
                                        d="M350,357.69h.8c.16,0,.28-.08.27-.18l-.37-3.44c0-.1-.15-.18-.31-.18h-.8c-.16,0-.29.08-.28.18l.38,3.44C349.72,357.61,349.86,357.69,350,357.69Z"
                                        style="fill: rgb(53, 218, 51); transform-origin: 350.19px 355.79px;"
                                        id="ell15con6v12p" class="animable"></path>
                                    <g id="el9kbckdh90od">
                                        <path
                                            d="M350,357.69h.8c.16,0,.28-.08.27-.18l-.37-3.44c0-.1-.15-.18-.31-.18h-.8c-.16,0-.29.08-.28.18l.38,3.44C349.72,357.61,349.86,357.69,350,357.69Z"
                                            style="opacity: 0.4; transform-origin: 350.19px 355.79px;" class="animable">
                                        </path>
                                    </g>
                                    <path d="M347.87,362l-7.17-3.21,2,7.11s4.56,1,6.54-1.25Z"
                                        style="fill: rgb(255, 181, 115); transform-origin: 344.97px 362.456px;"
                                        id="elq62bbqqycph" class="animable"></path>
                                    <path
                                        d="M374.32,320.71c.33,2.5.59,5,.89,7.5l.76,7.51c.27,2.5.46,5,.68,7.51L377,347l.08.94c0,.1,0,.49.05.76a8.44,8.44,0,0,1,0,.87,7.89,7.89,0,0,1-1,3.05,12.63,12.63,0,0,1-3.38,3.7,26.57,26.57,0,0,1-3.62,2.29,52,52,0,0,1-7.35,3.09,94.53,94.53,0,0,1-15,3.7l-.82-3.59c2.33-.77,4.71-1.56,7-2.44s4.61-1.75,6.82-2.76a53,53,0,0,0,6.32-3.29,21.53,21.53,0,0,0,2.65-1.92,6.42,6.42,0,0,0,1.59-1.91,1.26,1.26,0,0,0,.15-.52l-.17-1.19-.53-3.74c-.35-2.49-.74-5-1-7.48l-.95-7.49c-.27-2.51-.59-5-.82-7.51Z"
                                        style="fill: rgb(255, 181, 115); transform-origin: 361.551px 343.055px;"
                                        id="eleb45haoifk" class="animable"></path>
                                    <path
                                        d="M370.87,311.94c3,.9,6.52,11.1,6.52,11.1L367,333.71s-5.32-11-4.07-14.79C364.25,314.93,367.49,310.92,370.87,311.94Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 370.065px 322.745px;"
                                        id="eljhv0eb74rw" class="animable"></path>
                                    <polygon points="334.76 360.25 336.79 366.11 342.74 365.88 340.69 358.77 334.76 360.25"
                                        style="fill: rgb(255, 181, 115); transform-origin: 338.75px 362.44px;"
                                        id="elrdxrlxhy9ga" class="animable"></polygon>
                                </g>
                                <path
                                    d="M346.49,220.34H215.19a4.34,4.34,0,0,1-4.34-4.34h0a4.33,4.33,0,0,1,4.34-4.33h131.3a4.33,4.33,0,0,1,4.33,4.33h0A4.33,4.33,0,0,1,346.49,220.34Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 280.835px 216.005px;"
                                    id="elbztd7xbgqwn" class="animable"></path>
                                <path
                                    d="M316,238.57H215.19a4.33,4.33,0,0,1-4.34-4.33h0a4.34,4.34,0,0,1,4.34-4.34H316a4.34,4.34,0,0,1,4.34,4.34h0A4.33,4.33,0,0,1,316,238.57Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 265.595px 234.235px;"
                                    id="el0cenupupgv0c" class="animable"></path>
                                <path
                                    d="M234.72,304.66h50.09a4.34,4.34,0,0,0,4.34-4.34h0a4.33,4.33,0,0,0-4.34-4.33H234.72a4.33,4.33,0,0,0-4.33,4.33h0A4.33,4.33,0,0,0,234.72,304.66Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 259.77px 300.325px;"
                                    id="elgylp67p33tj" class="animable"></path>
                                <path
                                    d="M179.06,304.66h34.56a4.33,4.33,0,0,0,4.33-4.34h0a4.33,4.33,0,0,0-4.33-4.33H179.06a4.33,4.33,0,0,0-4.33,4.33h0A4.33,4.33,0,0,0,179.06,304.66Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 196.34px 300.325px;"
                                    id="elm58mxg65l7" class="animable"></path>
                                <path
                                    d="M153.51,322.89h131.3a4.33,4.33,0,0,0,4.34-4.33h0a4.34,4.34,0,0,0-4.34-4.34H153.51a4.33,4.33,0,0,0-4.33,4.34h0A4.33,4.33,0,0,0,153.51,322.89Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 219.165px 318.555px;"
                                    id="elqqceraxm7x" class="animable"></path>
                                <path d="M99.83,95a4.17,4.17,0,1,1-4.16-4.17A4.17,4.17,0,0,1,99.83,95Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 95.66px 95px;" id="elgs3eacukj5g"
                                    class="animable"></path>
                                <circle cx="109.84" cy="95" r="4.17"
                                    style="fill: rgb(255, 255, 255); transform-origin: 109.84px 95px;" id="elr6vcg6icjm"
                                    class="animable"></circle>
                                <circle cx="124.01" cy="95" r="4.17"
                                    style="fill: rgb(255, 255, 255); transform-origin: 124.01px 95px;" id="eli6s2cppzt2l"
                                    class="animable"></circle>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                    </feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
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
                            <defs>
                                <clipPath id="freepik--clip-path--inject-144">
                                    <circle cx="149.18" cy="225.12" r="47.37"
                                        transform="translate(-115.49 171.42) rotate(-45)" style="fill:#fff"></circle>
                                </clipPath>
                                <clipPath id="freepik--clip-path-2--inject-144">
                                    <circle cx="350.82" cy="309.44" r="47.37" style="fill:#fff"></circle>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <h4 class="text-left" style="--font-weight:theme;color:#000000; margin-top:10px">
                    Our Vision
                </h4>
                <p class="text-left">
                    “A vibrant and dynamic agricultural sector for food security and national prosperity”
                </p>
            </div>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <h4 class="text-left" style="--font-weight:theme;color:#000000; margin-top:10px">
                    Our Mission
                </h4>
                <p class="text-left">
                    “To achieve globally competitive production, processing and marketing enterprises through socially
                    acceptable, innovative and commercially-oriented agriculture, through sustainable management of natural
                    resources of the country”
                </p>
            </div>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <h4 class="text-left" style="--font-weight:theme;color:#000000; margin-top:10px">
                    Our Objectives
                </h4>
                <p class="text-left">
                <ul class="text-left">
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Supportive agricultural
                                policy for food and allied agricultural crops.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Established food and
                                nutrition security.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Stable prices for
                                agricultural products.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Efficiently coordinated
                                paddy purchasing and marketing programme</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Timely implementation of
                                projects.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Increase production in
                                selected crops.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Efficient and effective
                                implementation of accelerated food production programme.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Efficient and effective
                                use of foreign funds.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Customer friendly and
                                result oriented administrative system.</span></p>
                    </li>
                    <li>
                        <p><span style="font-family: arial,helvetica,sans-serif; font-size: 10pt;">Results based management
                                in entire government sector.</span></p>
                    </li>
                </ul>
                </p>
            </div>
        </center>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
