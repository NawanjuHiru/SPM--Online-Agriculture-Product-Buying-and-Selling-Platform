@extends('order_management.layout')
@section('title', 'Rate our service')
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


                        <form method="post" style="width: 100%" action="/review">
                            @csrf
                            <h2 class="text-left">Rate Our Service</h2>
                            <p class="text-left">Leave a comment to improve our service.</p>

                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="username" placeholder="Username" maxlength="45">
                            </div>
                            <div class="form-group"><input class="form-control" type="text" name="comments"
                                    placeholder="Leave a comment" style="height: 150px; padding-bottom: 150px;"
                                    maxlength="100">
                            </div>
                            <div class="form-group rate">
                                <input type="radio" id="star5" class="rate" checked id="star5"
                                    name="star_rating" value="5" required />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" class="rate" name="star_rating" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" class="rate" name="star_rating" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" class="rate" name="star_rating" value="2">
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" class="rate" name="star_rating" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>

                            <div class="form-group"><button class="btn btn-block" type="submit"
                                    style="background-color:#6EBD6C; color: white;">Post Review</button>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <br />
                        <svg class="animated" id="freepik_stories-feedback" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs">
                            <style>
                                svg#freepik_stories-feedback:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-feedback.animated #freepik--Plant--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--Shadow--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--Icons--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--Window--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--Screen--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--speech-bubble-3--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--speech-bubble-2--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--speech-bubble-1--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--stars--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--paper-planes--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--character-3--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--character-2--inject-3 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-feedback.animated #freepik--character-1--inject-3 {
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
                            <g id="freepik--Plant--inject-3" class="animable"
                                style="transform-origin: 264.646px 386.357px;">
                                <g id="freepik--Plants--inject-3" class="animable"
                                    style="transform-origin: 264.646px 386.357px;">
                                    <path
                                        d="M286.58,411.44c-1.23-10.42-1-21.08-8.21-35.17-6.07-11.83-15.57-20.91-25.87-21.14-4.27-.1-7.3,1-8.94,4.16-2.88,5.48,2.08,10.95,7.26,14,2.27,1.34,20.86,9.82,26.86,30.37l2.76,11.74.7-.45Z"
                                        style="fill: #12D30F; transform-origin: 264.646px 385.262px;" id="elbw694eevg89"
                                        class="animable"></path>
                                    <g id="elr8mtt735t1j">
                                        <path
                                            d="M286.58,411.44c-1.23-10.42-1-21.08-8.21-35.17-6.07-11.83-15.57-20.91-25.87-21.14-4.27-.1-7.3,1-8.94,4.16-2.88,5.48,2.08,10.95,7.26,14,2.27,1.34,20.86,9.82,26.86,30.37l2.76,11.74.7-.45Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.25; transform-origin: 264.646px 385.262px;"
                                            class="animable" id="el0jiehnwmpm4g"></path>
                                    </g>
                                    <path
                                        d="M283.1,408a.47.47,0,0,1-.41-.38c-4.5-25.14-14.85-39.8-32.67-44.89a.45.45,0,0,1-.26-.6.47.47,0,0,1,.6-.26c18,4.78,28.68,20.12,33.24,45.59a.46.46,0,0,1-.37.54A.57.57,0,0,1,283.1,408Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 266.666px 384.922px;"
                                        id="el45d1175vmk8" class="animable"></path>
                                    <path
                                        d="M277.13,417.59c-.92-3.59-3.08-7.69-10.85-15.42-6.72-6.68-16.85-10.08-19-14.33-2.59-5.1,1.36-10.1,9.4-9.45,9.66.77,20.17,14.58,24.82,36.32Z"
                                        style="fill: #12D30F; transform-origin: 263.995px 397.961px;" id="elsmp5mbqmuzj"
                                        class="animable"></path>
                                    <g id="elt9w03r57vya">
                                        <path
                                            d="M277.13,417.59c-.92-3.59-3.08-7.69-10.85-15.42-6.72-6.68-16.85-10.08-19-14.33-2.59-5.1,1.36-10.1,9.4-9.45,9.66.77,20.17,14.58,24.82,36.32Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.65; transform-origin: 263.995px 397.961px;"
                                            class="animable" id="elecskbm25kjv"></path>
                                    </g>
                                    <path
                                        d="M279.24,414.3a.46.46,0,0,1-.39-.32c-6.13-18.73-18.8-28.55-25.33-29.58a.46.46,0,0,1-.38-.53.45.45,0,0,1,.53-.39c7.22,1.14,19.81,11.09,26.06,30.21a.48.48,0,0,1-.3.59A.62.62,0,0,1,279.24,414.3Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 266.442px 398.886px;"
                                        id="elggq6hqh6fem" class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--Shadow--inject-3" class="animable"
                                style="transform-origin: 335.11px 423.88px;">
                                <ellipse id="freepik--shadow--inject-3" cx="335.11" cy="423.88" rx="64.92"
                                    ry="37.48" style="fill: rgb(224, 224, 224); transform-origin: 335.11px 423.88px;"
                                    class="animable"></ellipse>
                            </g>
                            <g id="freepik--Icons--inject-3" class="animable"
                                style="transform-origin: 246.103px 230.623px;">
                                <path id="freepik--Star--inject-3"
                                    d="M463.5,361.13l-7.4-1.21-5.19,5.41a1.11,1.11,0,0,1-1.9-.6l-1.13-7.41-6.75-3.27a1.11,1.11,0,0,1,0-2l6.7-3.37,1-7.43a1.11,1.11,0,0,1,1.89-.63L456,346l7.39-1.32a1.11,1.11,0,0,1,1.18,1.6l-3.44,6.66,3.54,6.61A1.11,1.11,0,0,1,463.5,361.13Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 452.641px 352.981px;"
                                    class="animable"></path>
                                <path id="freepik--star--inject-3"
                                    d="M43.92,184.82l-3-2.59-3.82,1a.58.58,0,0,1-.68-.79L38,178.8l-2.12-3.33a.58.58,0,0,1,.54-.89l3.93.33,2.51-3a.58.58,0,0,1,1,.24l.89,3.84,3.68,1.44a.59.59,0,0,1,.08,1.05l-3.38,2-.23,3.94A.59.59,0,0,1,43.92,184.82Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 42.2917px 178.34px;"
                                    class="animable"></path>
                                <g id="freepik--star--inject-3" class="animable"
                                    style="transform-origin: 238.075px 429.617px;">
                                    <path
                                        d="M236.59,437.52a.92.92,0,0,1-.29,0,1,1,0,0,1-.67-.78l-.65-4.29-3.91-1.89a1,1,0,0,1-.55-.86,1,1,0,0,1,.54-.87l3.87-2,.59-4.3a1,1,0,0,1,.65-.78,1,1,0,0,1,1,.23l3.05,3.09,4.27-.77a1,1,0,0,1,1,1.39l-2,3.86,2.05,3.83a1,1,0,0,1-1,1.41l-4.28-.71-3,3.14A.94.94,0,0,1,236.59,437.52Zm-.11-15.21a.25.25,0,0,0-.12,0,.35.35,0,0,0-.24.29l-.64,4.62-4.16,2.09a.37.37,0,0,0-.2.33.35.35,0,0,0,.21.32l4.19,2,.71,4.6a.37.37,0,0,0,.25.3.36.36,0,0,0,.37-.1l3.22-3.36,4.6.75a.36.36,0,0,0,.36-.14.37.37,0,0,0,0-.39l-2.2-4.1,2.14-4.14a.36.36,0,0,0-.39-.53l-4.59.82-3.27-3.3A.33.33,0,0,0,236.48,422.31Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 238.075px 429.617px;"
                                        id="elize8ke93gn" class="animable"></path>
                                </g>
                                <g id="freepik--star--inject-3" class="animable"
                                    style="transform-origin: 446.654px 319.186px;">
                                    <path
                                        d="M445.14,327.09a.93.93,0,0,1-.29,0,1,1,0,0,1-.67-.78l-.65-4.29-3.91-1.89a1,1,0,0,1,0-1.73l3.87-2,.59-4.3a1,1,0,0,1,.65-.78,1,1,0,0,1,1,.23l3,3.09,4.27-.77a1,1,0,0,1,.95.38,1,1,0,0,1,.08,1l-2,3.86,2.05,3.83a1,1,0,0,1-.06,1,1,1,0,0,1-.95.4h0l-4.28-.7-3,3.13A1,1,0,0,1,445.14,327.09ZM445,311.87a.2.2,0,0,0-.11,0,.34.34,0,0,0-.25.29L444,316.8l-4.15,2.09a.34.34,0,0,0-.2.33.36.36,0,0,0,.2.33l4.19,2,.71,4.6a.36.36,0,0,0,.62.2l3.23-3.36,4.59.75a.39.39,0,0,0,.36-.14.37.37,0,0,0,0-.39l-2.2-4.1,2.14-4.14a.39.39,0,0,0,0-.39.38.38,0,0,0-.36-.14l-4.58.82-3.28-3.3A.33.33,0,0,0,445,311.87Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 446.654px 319.186px;"
                                        id="el61pfspgydt9" class="animable"></path>
                                </g>
                                <g id="freepik--Like--inject-3" class="animable"
                                    style="transform-origin: 196.349px 376.486px;">
                                    <path
                                        d="M190.78,374.25s1-5.51.95-6.31-1.65-3.69-1.89-4.24,2.26-1.91,4-.29a8.71,8.71,0,0,1,2.85,5.28l6.32-2.82a2.12,2.12,0,0,1,2.76,1.14,2.34,2.34,0,0,1-.2,2.3,1.92,1.92,0,0,1,2.05,1.21,2.16,2.16,0,0,1-.68,2.6,2.56,2.56,0,0,1,1.08,1.32,2.35,2.35,0,0,1-.95,2.63,4.28,4.28,0,0,1,.91,1.31,2.39,2.39,0,0,1-1.43,3l-10.45,4.67Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 198.971px 374.346px;"
                                        id="ele2jnl96j3vh" class="animable"></path>
                                    <path
                                        d="M189.13,374.59l-4.55,2,6.13,13.74,4.56-2ZM192,388.1a.89.89,0,0,1,0-1.78.89.89,0,1,1,0,1.78Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 189.925px 382.46px;"
                                        id="elcu02c4rn887" class="animable"></path>
                                </g>
                                <g id="freepik--like--inject-3" class="animable"
                                    style="transform-origin: 316.519px 41.8925px;">
                                    <path
                                        d="M323.82,38.79s-3.18-6.95-3.41-8,.91-5.43,1-6.24-3.64-1.75-5.34,1a12,12,0,0,0-2,8l-9.31-1.57a2.91,2.91,0,0,0-3.27,2.45,3.23,3.23,0,0,0,1.05,3,2.64,2.64,0,0,0-2.3,2.3,3,3,0,0,0,1.79,3.2,3.66,3.66,0,0,0-1,2.12,3.26,3.26,0,0,0,2.16,3.16,5.73,5.73,0,0,0-.75,2,3.27,3.27,0,0,0,2.93,3.5l15.41,2.6Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 312.014px 40.0125px;"
                                        id="elnf6x1db4zl" class="animable"></path>
                                    <path
                                        d="M326.12,38.67,322.7,58.94l6.72,1.13,3.41-20.27Zm.31,19a1.42,1.42,0,1,1,1.42-1.42A1.42,1.42,0,0,1,326.43,57.64Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 327.765px 49.37px;"
                                        id="elieez66e2rz" class="animable"></path>
                                </g>
                                <g id="freepik--like--inject-3" class="animable"
                                    style="transform-origin: 36.0918px 222.373px;">
                                    <path
                                        d="M41.85,204.58a.54.54,0,0,1,.65.26l8.78,16.55a.55.55,0,0,1-.22.74L45.58,225a.54.54,0,0,1-.74-.23l-8.78-16.54a.56.56,0,0,1-.05-.42.59.59,0,0,1,.27-.33l5.48-2.9Zm8.21,16.84-8.27-15.58-4.51,2.39,8.27,15.58ZM35.58,210.36a.54.54,0,0,1,.65.27l7.55,14.21a.59.59,0,0,1,.06.32c-.3,2.76-.71,7.12-.64,7.81a22.65,22.65,0,0,0,2.1,4c.26.42.46.75.54.91s.28.76-.52,1.41a4.19,4.19,0,0,1-5.2,0,11.37,11.37,0,0,1-4-5.93l-7,3.71a3.21,3.21,0,0,1-4.27-1.41,3.4,3.4,0,0,1-.29-2.56,3,3,0,0,1-2.31-1.65,3.3,3.3,0,0,1,.27-3.43,4.74,4.74,0,0,1-1.09-1.39,3.68,3.68,0,0,1,.61-3.65,6.15,6.15,0,0,1-.9-1.26,3.5,3.5,0,0,1,1.76-4.61l12.57-6.67Zm7.15,14.85-7.21-13.58L23.43,218a2.46,2.46,0,0,0-1.3,3.13,4.81,4.81,0,0,0,1.1,1.37.55.55,0,0,1-.08.92,2.46,2.46,0,0,0-.73,2.61,2.84,2.84,0,0,0,1.17,1.3.51.51,0,0,1,.33.42.55.55,0,0,1-.18.5,2.15,2.15,0,0,0-.5,2.61,1.84,1.84,0,0,0,2,1.06.54.54,0,0,1,.6.81,2.36,2.36,0,0,0,0,2.33,2.1,2.1,0,0,0,2.78,1l7.6-4a.56.56,0,0,1,.49,0,.57.57,0,0,1,.31.37,10.43,10.43,0,0,0,3.79,6,3,3,0,0,0,2.67.56,2.61,2.61,0,0,0,1.32-.71l-.43-.73c-1.14-1.87-2.17-3.62-2.26-4.44C42,232.11,42.6,226.44,42.73,225.21Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 36.0918px 222.373px;"
                                        id="elsk6gi7r9wwj" class="animable"></path>
                                </g>
                                <g id="freepik--like--inject-3" class="animable"
                                    style="transform-origin: 451.029px 127.623px;">
                                    <path
                                        d="M435.66,104.94l8.1,1.37a.69.69,0,0,1,.47.29.75.75,0,0,1,.13.54l-4.13,24.47a.71.71,0,0,1-.83.6l-8.1-1.37a.74.74,0,0,1-.48-.29.76.76,0,0,1-.12-.55l4.12-24.46a.73.73,0,0,1,.72-.61Zm3.26,25.71,3.88-23-6.67-1.12-3.87,23Zm7-21.06,18.59,3.13a4.63,4.63,0,0,1,4.13,5.06,7.88,7.88,0,0,1-.6,2,4.88,4.88,0,0,1,2.3,4.33,6,6,0,0,1-.8,2.2,4.39,4.39,0,0,1,1.78,4.21,4,4,0,0,1-2.21,3,4.5,4.5,0,0,1,.7,3.33,4.25,4.25,0,0,1-4.78,3.56l-10.33-1.74a15.07,15.07,0,0,1-2.54,9.11,5.54,5.54,0,0,1-6.53,2.21c-1.28-.49-1.3-1.25-1.25-1.55s.16-.74.3-1.37c.35-1.51,1.16-5.06,1-5.89s-2.54-6.2-4.07-9.55a.68.68,0,0,1-.05-.42l3.54-21a.73.73,0,0,1,.71-.61Zm1.16,31.28c.23,1.06-.33,3.69-1,6.53-.11.45-.19.83-.24,1.09a3.56,3.56,0,0,0,2,.34A3.9,3.9,0,0,0,451,147a13.78,13.78,0,0,0,2.26-9.15.71.71,0,0,1,.23-.6.73.73,0,0,1,.62-.18L465.31,139a2.78,2.78,0,0,0,3.1-2.36,3.13,3.13,0,0,0-1-2.92.72.72,0,0,1-.22-.78.73.73,0,0,1,.64-.5,2.41,2.41,0,0,0,2.11-2.17,2.84,2.84,0,0,0-1.71-3.07.71.71,0,0,1-.44-.55.75.75,0,0,1,.23-.68,3.63,3.63,0,0,0,.94-2.12c.15-.87-.89-2.78-2-3a.7.7,0,0,1-.54-.43.74.74,0,0,1,.05-.69,6.17,6.17,0,0,0,.81-2.19,3.23,3.23,0,0,0-2.94-3.38l-17.88-3-3.38,20.08C443.72,132.72,446.85,139.61,447.12,140.87Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 451.029px 127.623px;"
                                        id="ellof2xc5z6nn" class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--Window--inject-3" class="animable"
                                style="transform-origin: 166.115px 214.827px;">
                                <g id="freepik--window--inject-3" class="animable"
                                    style="transform-origin: 166.115px 214.827px;">
                                    <g id="freepik--window--inject-3" class="animable"
                                        style="transform-origin: 166.115px 214.827px;">
                                        <path
                                            d="M76.19,403.64a3,3,0,0,1-.75-.1,2.26,2.26,0,0,1-.46-.15l-.32-.18-.3-.2a4,4,0,0,1-2.14-3.57v-2h0V152c0-7.83,3.33-12.55,6.44-14.35l184-106a5.58,5.58,0,0,1,2.71-.83,3,3,0,0,1,1.31.28,2.16,2.16,0,0,1,.48.27,2.26,2.26,0,0,1,.38.38l.05.06.06.05.09.13a.91.91,0,0,1,.14.21l0,.06,0,.06a2.41,2.41,0,0,1,.33.71,2.11,2.11,0,0,1,.14.5l0,0,.07.2a3.27,3.27,0,0,1,.08.5c0,.25,0,.52,0,.79V285.83A14.28,14.28,0,0,1,262.13,297L84.71,399.28l-6.57,3.79a3.93,3.93,0,0,1-1.87.57Z"
                                            style="fill: rgb(250, 250, 250); transform-origin: 170.36px 217.23px;"
                                            id="elqf0nwwtans" class="animable"></path>
                                        <path
                                            d="M265.36,31.4a2.61,2.61,0,0,1,1.11.24l.32.18,0,0,.07,0a1.25,1.25,0,0,1,.23.23l.09.12,0,0,.09.12.06.08,0,.08.07.12a1.68,1.68,0,0,1,.26.56l0,0v0a1.18,1.18,0,0,1,.07.2l0,.08L268,34a1.43,1.43,0,0,1,.07.37c0,.23,0,.5,0,.75V285.83a13.69,13.69,0,0,1-6.19,10.71L84.45,398.83l-6.29,3.63h0l-.1,0-.17.1a3.32,3.32,0,0,1-1.61.5h-.09a3.37,3.37,0,0,1-.64-.08,1.42,1.42,0,0,1-.33-.12l-.26-.14-.2-.13-.07,0,0,0,0,0a3.5,3.5,0,0,1-1.87-3.11v-2.51h0V152c0-7.61,3.19-12.17,6.18-13.9l184-106a5.06,5.06,0,0,1,2.46-.77m0-1a6.07,6.07,0,0,0-3,.9l-184,106c-3.69,2.13-6.7,7.33-6.7,14.79V401.11c0-2.93,0-3.14,0-3.14h0v1.47a4.53,4.53,0,0,0,2.41,4l.28.19.36.2a2.56,2.56,0,0,0,.57.2,4.13,4.13,0,0,0,.86.11h.09a4.34,4.34,0,0,0,2.12-.64l.18-.1h0L85,399.72,262.39,297.43a14.79,14.79,0,0,0,6.7-11.6V35.14c0-.29,0-.57,0-.84a3.88,3.88,0,0,0-.11-.61.13.13,0,0,0,0-.13,2.2,2.2,0,0,0-.15-.6,3,3,0,0,0-.4-.85,1,1,0,0,0-.22-.36,1.06,1.06,0,0,0-.19-.24,2.29,2.29,0,0,0-.44-.44l-.05,0a2.92,2.92,0,0,0-.57-.33,3.5,3.5,0,0,0-1.53-.33Z"
                                            style="fill: rgb(230, 230, 230); transform-origin: 170.425px 217.235px;"
                                            id="eldl1hp34j0x" class="animable"></path>
                                        <path
                                            d="M266.9,30.67c-1.21-.57-2.77-.41-4.51.57l-184,106a14.84,14.84,0,0,0-6.7,11.6v13l-8.55-5V144a14.8,14.8,0,0,1,6.68-11.58l184-106c1.91-1.12,3.62-1.14,4.85-.4S265.47,29.93,266.9,30.67Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 165.02px 93.6768px;"
                                            id="el6s79xvq2nse" class="animable"></path>
                                        <path
                                            d="M269.08,35.07c0-4.23-3-5.94-6.69-3.82l-184,106a14.78,14.78,0,0,0-6.7,11.59v13L269.08,48.14Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 170.385px 96.09px;"
                                            id="elkelkxpfmf4h" class="animable"></path>
                                        <path
                                            d="M63.14,156.83V144a13.79,13.79,0,0,1,2-6.69l8.53,4.9a13.59,13.59,0,0,0-2,6.65v13Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 68.405px 149.585px;"
                                            id="el791zb0s0b9x" class="animable"></path>
                                        <path
                                            d="M242.69,48.82c-1.4.81-2.54,3.22-2.54,5.38s1.14,3.26,2.54,2.45,2.55-3.22,2.55-5.39S244.1,48,242.69,48.82Z"
                                            style="fill: #12D30F; transform-origin: 242.695px 52.7317px;"
                                            id="el3ma5s7ffvyo" class="animable"></path>
                                        <path
                                            d="M251.85,43.52c-1.4.81-2.54,3.22-2.54,5.38s1.14,3.26,2.54,2.45,2.55-3.22,2.55-5.38S253.26,42.71,251.85,43.52Z"
                                            style="fill: rgb(250, 250, 250); transform-origin: 251.855px 47.435px;"
                                            id="elt32nbdk8bio" class="animable"></path>
                                        <path
                                            d="M261,38.22c-1.4.81-2.54,3.22-2.54,5.39s1.14,3.26,2.54,2.44,2.54-3.22,2.54-5.38S262.42,37.41,261,38.22Z"
                                            style="fill: rgb(250, 250, 250); transform-origin: 261px 42.1383px;"
                                            id="elpy9745acj3" class="animable"></path>
                                        <path
                                            d="M74.11,403.46l-.35-.19-7.06-4.09A7.11,7.11,0,0,1,63.2,394a7.89,7.89,0,0,1-.06-1V156.8l8.56,5V399.4a5.14,5.14,0,0,0,2.41,4.06Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 68.625px 280.13px;"
                                            id="elc5e1dc5ab66" class="animable"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--Screen--inject-3" class="animable"
                                style="transform-origin: 355.28px 153.243px;">
                                <g id="freepik--window--inject-3" class="animable"
                                    style="transform-origin: 355.28px 153.243px;">
                                    <g id="freepik--window--inject-3" class="animable"
                                        style="transform-origin: 355.28px 153.243px;">
                                        <g id="freepik--window--inject-3" class="animable"
                                            style="transform-origin: 355.28px 153.243px;">
                                            <path
                                                d="M313.26,271.13a3,3,0,0,1-.75-.1,1.77,1.77,0,0,1-.46-.15l-.3-.17-.28-.19a4,4,0,0,1-2.18-3.59v-2h0V106.29c0-7.84,3.33-12.55,6.44-14.35L403.9,41.07a5.58,5.58,0,0,1,2.71-.83,3.1,3.1,0,0,1,1.31.28,2.64,2.64,0,0,1,.48.28,1.7,1.7,0,0,1,.38.38l.05.06.06,0,.09.13a.91.91,0,0,1,.14.21l0,.07,0,.06a2.3,2.3,0,0,1,.33.71,2.24,2.24,0,0,1,.14.5l0,0,.07.2a3.22,3.22,0,0,1,.08.51c0,.24,0,.51,0,.78V208.43a14.25,14.25,0,0,1-6.44,11.15l-81.6,47.19-6.57,3.79a3.79,3.79,0,0,1-1.87.57Z"
                                                style="fill: rgb(250, 250, 250); transform-origin: 359.515px 155.685px;"
                                                id="el5914o6ilxk6" class="animable"></path>
                                            <path
                                                d="M406.61,40.76a2.57,2.57,0,0,1,1.11.24,1.91,1.91,0,0,1,.32.17l0,0,.07,0a1,1,0,0,1,.23.23l.09.12,0,0,.09.12.06.07,0,.09.07.11a1.83,1.83,0,0,1,.26.57l0,0v0c0,.07,0,.14.07.2l0,.08.13.41a1.52,1.52,0,0,1,.07.37c0,.24,0,.5,0,.75V208.43a13.69,13.69,0,0,1-6.19,10.71l-81.59,47.18-6.3,3.64h0l-.1.05-.17.1a3.34,3.34,0,0,1-1.61.51h-.09a2.71,2.71,0,0,1-.64-.08l-.33-.11-.26-.15-.22-.15-.05,0,0,0,0,0a3.5,3.5,0,0,1-1.87-3.11v-2.5h0V106.29c0-7.62,3.19-12.17,6.18-13.9l88.17-50.87a5.14,5.14,0,0,1,2.46-.76m0-1a6,6,0,0,0-3,.91L315.47,91.49c-3.7,2.13-6.71,7.34-6.71,14.8V268.6c0-2.93,0-3.14,0-3.14h0v1.47a4.52,4.52,0,0,0,2.41,4l.29.19a2.91,2.91,0,0,0,.35.2,2.56,2.56,0,0,0,.57.2,4.13,4.13,0,0,0,.86.11h.09a4.4,4.4,0,0,0,2.13-.64l.17-.1h0l6.38-3.68L403.64,220a14.79,14.79,0,0,0,6.7-11.6V44.49c0-.28,0-.57,0-.83a4,4,0,0,0-.11-.62.13.13,0,0,0,0-.13,2,2,0,0,0-.15-.59,2.94,2.94,0,0,0-.4-.86,1.25,1.25,0,0,0-.21-.35,1,1,0,0,0-.2-.24,2,2,0,0,0-.44-.44l-.05,0a2.92,2.92,0,0,0-.57-.33,3.65,3.65,0,0,0-1.53-.33Z"
                                                style="fill: rgb(230, 230, 230); transform-origin: 359.55px 155.695px;"
                                                id="el1zs4f7dd272" class="animable"></path>
                                            <path
                                                d="M408.15,40a4.87,4.87,0,0,0-4.51.57L315.47,91.47c-3.69,2.13-6.7,8.11-6.7,12.38v12.21l-8.55-5V98.21a14.78,14.78,0,0,1,6.68-11.58l88.2-50.87c1.91-1.12,3.62-1.14,4.85-.39S406.72,39.28,408.15,40Z"
                                                style="fill: #12D30F; transform-origin: 354.185px 75.4576px;"
                                                id="elf9ev5cqczt9" class="animable"></path>
                                            <g id="elfm1z6kawfye">
                                                <g style="opacity: 0.45; transform-origin: 354.185px 75.4576px;"
                                                    class="animable" id="elfs9o9rpi6jh">
                                                    <path
                                                        d="M408.15,40a4.87,4.87,0,0,0-4.51.57L315.47,91.47c-3.69,2.13-6.7,8.11-6.7,12.38v12.21l-8.55-5V98.21a14.78,14.78,0,0,1,6.68-11.58l88.2-50.87c1.91-1.12,3.62-1.14,4.85-.39S406.72,39.28,408.15,40Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 354.185px 75.4576px;"
                                                        id="elrcm1zk7p7n" class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M311.18,271a5.14,5.14,0,0,1-2.41-4.06V105.31a22.56,22.56,0,0,1,2.14-8.79l-8.67-5a13.84,13.84,0,0,0-2,6.7v162.3a6.33,6.33,0,0,0,.07,1,7.05,7.05,0,0,0,3.49,5.19l7.06,4.09.35.19Z"
                                                style="fill: #12D30F; transform-origin: 305.725px 181.26px;"
                                                id="elwqzelw07ap" class="animable"></path>
                                            <g id="elm7gnxvhxqye">
                                                <path
                                                    d="M311.18,271a5.14,5.14,0,0,1-2.41-4.06V105.31a22.56,22.56,0,0,1,2.14-8.79l-8.67-5a13.84,13.84,0,0,0-2,6.7v162.3a6.33,6.33,0,0,0,.07,1,7.05,7.05,0,0,0,3.49,5.19l7.06,4.09.35.19Z"
                                                    style="opacity: 0.25; transform-origin: 305.725px 181.26px;"
                                                    class="animable" id="elzdrpovxmuf8"></path>
                                            </g>
                                        </g>
                                    </g>
                                    <path
                                        d="M324.27,102.15l70.56-40.77c1.68-1,3-.25,3,1.61a6.52,6.52,0,0,1-3,5.1l-70.56,40.77c-1.67,1-3,.24-3-1.61A6.57,6.57,0,0,1,324.27,102.15Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 359.55px 85.119px;"
                                        id="els8w8kn255wl" class="animable"></path>
                                    <path
                                        d="M323.13,114.27l34.35-19.81c1-.6,1.89-.16,1.89,1a4.1,4.1,0,0,1-1.89,3.18l-34.35,19.81c-1.05.6-1.89.15-1.89-1A4.06,4.06,0,0,1,323.13,114.27Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 340.305px 106.454px;"
                                        id="elfwy3x6n0a8d" class="animable"></path>
                                    <path
                                        d="M364.45,95.6a6.3,6.3,0,0,0,2.84-4.93c0-1.82-1.27-2.56-2.84-1.65A6.31,6.31,0,0,0,361.6,94C361.6,95.77,362.88,96.51,364.45,95.6Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 364.445px 92.3106px;"
                                        id="elw8yrw0icwas" class="animable"></path>
                                    <g id="freepik--Stars--inject-3" class="animable"
                                        style="transform-origin: 343.16px 122.062px;">
                                        <path
                                            d="M363.72,108.31a3.76,3.76,0,0,0-3.7.41L329.6,126.28a11,11,0,0,0-5.09,8.46,3.24,3.24,0,0,0,1.32,2.94l-3.21-1.85a3.21,3.21,0,0,1-1.38-3,10.92,10.92,0,0,1,5.09-8.46l30.43-17.57a4.94,4.94,0,0,1,2.39-.73,2.62,2.62,0,0,1,1.32.34Z"
                                            style="fill: #12D30F; transform-origin: 342.47px 121.875px;"
                                            id="el42klr7avlsh" class="animable"></path>
                                        <path
                                            d="M329.6,126.28,360,108.72c2.82-1.63,5.1-.47,5.1,2.57a10.9,10.9,0,0,1-5.1,8.46L329.6,137.32c-2.81,1.62-5.09.47-5.09-2.58A10.93,10.93,0,0,1,329.6,126.28Z"
                                            style="fill: #12D30F; transform-origin: 344.805px 123.018px;"
                                            id="eld26w0rghfm" class="animable"></path>
                                        <g id="eld4dcp8dxkdd">
                                            <path
                                                d="M329.6,126.28,360,108.72c2.82-1.63,5.1-.47,5.1,2.57a10.9,10.9,0,0,1-5.1,8.46L329.6,137.32c-2.81,1.62-5.09.47-5.09-2.58A10.93,10.93,0,0,1,329.6,126.28Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 344.805px 123.018px;"
                                                class="animable" id="elw26is3u9lo"></path>
                                        </g>
                                        <g id="freepik--stars--inject-3" class="animable"
                                            style="transform-origin: 344.825px 123.098px;">
                                            <path
                                                d="M332.82,126.8l.54,1.14a.13.13,0,0,0,.18.07l1.2-.46c.2-.07.27.2.13.46l-.87,1.63a.64.64,0,0,0-.07.32l.21,1.48c0,.24-.17.55-.34.52l-1.08-.13a.26.26,0,0,0-.22.13l-1.07,1.38c-.18.22-.38.14-.34-.14l.2-1.72a.23.23,0,0,0-.06-.23l-.88-.63c-.14-.1-.06-.46.13-.61l1.21-.93a.57.57,0,0,0,.17-.27l.54-1.77C332.49,126.76,332.74,126.62,332.82,126.8Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 332.611px 130.093px;"
                                                id="el3bnpix5bpvi" class="animable"></path>
                                            <path
                                                d="M338.93,123.3l.54,1.15a.12.12,0,0,0,.17.07l1.21-.47c.19-.07.27.2.13.46l-.87,1.64a.52.52,0,0,0-.07.31l.21,1.49c0,.23-.17.54-.34.52l-1.08-.13a.25.25,0,0,0-.22.12l-1.08,1.38c-.17.22-.37.14-.34-.13l.21-1.72a.25.25,0,0,0-.07-.24l-.87-.63c-.14-.1-.06-.46.13-.61l1.2-.93a.48.48,0,0,0,.18-.27l.54-1.77C338.6,123.26,338.84,123.12,338.93,123.3Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 338.72px 126.593px;"
                                                id="elidplec358go" class="animable"></path>
                                            <path
                                                d="M345,119.81l.54,1.14a.14.14,0,0,0,.18.07l1.21-.46c.19-.08.26.19.13.45l-.88,1.64a.54.54,0,0,0-.06.32l.2,1.48c0,.23-.17.54-.34.52l-1.08-.13a.25.25,0,0,0-.21.13l-1.08,1.37c-.17.22-.37.15-.34-.13l.2-1.72a.25.25,0,0,0-.06-.24l-.88-.63c-.13-.1-.06-.45.13-.6l1.21-.93a.59.59,0,0,0,.18-.27l.54-1.77C344.7,119.77,345,119.62,345,119.81Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 344.795px 123.097px;"
                                                id="el1pr3l2p8b96" class="animable"></path>
                                            <path
                                                d="M351.14,116.31l.54,1.15a.13.13,0,0,0,.18.06l1.2-.46c.19-.07.27.2.13.46l-.87,1.64a.52.52,0,0,0-.07.31l.21,1.48c0,.24-.17.55-.34.53l-1.08-.14a.29.29,0,0,0-.22.13l-1.08,1.38c-.17.22-.37.14-.34-.13l.21-1.72a.25.25,0,0,0-.07-.24l-.87-.63c-.14-.1-.06-.46.13-.61l1.21-.93a.57.57,0,0,0,.17-.27l.54-1.77C350.81,116.27,351.05,116.13,351.14,116.31Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 350.93px 119.603px;"
                                                id="el02e80gem2mni" class="animable"></path>
                                            <path
                                                d="M357.25,112.81l.54,1.15a.12.12,0,0,0,.17.07l1.21-.46c.19-.08.27.19.13.45l-.88,1.64a.53.53,0,0,0-.06.32l.2,1.48c0,.23-.16.54-.34.52l-1.07-.13a.28.28,0,0,0-.22.12l-1.08,1.38c-.17.22-.37.14-.34-.13l.21-1.72a.28.28,0,0,0-.07-.24l-.87-.63c-.14-.1-.07-.46.13-.6l1.2-.93a.57.57,0,0,0,.18-.28l.54-1.76C356.91,112.77,357.16,112.63,357.25,112.81Z"
                                                style="fill: #12D30F; transform-origin: 357.039px 116.103px;"
                                                id="elz74f6jcsto" class="animable"></path>
                                            <path
                                                d="M356.83,113.06l-.54,1.76a.57.57,0,0,1-.18.28l-1.2.93c-.2.14-.27.5-.13.6l.87.63a.28.28,0,0,1,.07.24l-.21,1.72c0,.27.17.35.34.13l1.08-1.38a.31.31,0,0,1,.11-.09v-5.12A.5.5,0,0,0,356.83,113.06Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 355.873px 116.119px;"
                                                id="elifek0f3i6be" class="animable"></path>
                                        </g>
                                    </g>
                                    <g id="freepik--Image--inject-3" class="animable"
                                        style="transform-origin: 359.55px 169.731px;">
                                        <path
                                            d="M321.24,152.79v78.12c0,1.12.78,1.57,1.75,1l73.12-42.22a3.85,3.85,0,0,0,1.75-3V108.55c0-1.11-.78-1.57-1.75-1L323,149.76A3.87,3.87,0,0,0,321.24,152.79Z"
                                            style="fill: #12D30F; transform-origin: 359.55px 169.731px;"
                                            id="el54wd9a9f6wu" class="animable"></path>
                                        <g id="elpxmh7s2oe2">
                                            <path
                                                d="M321.24,152.79v78.12c0,1.12.78,1.57,1.75,1l73.12-42.22a3.85,3.85,0,0,0,1.75-3V108.55c0-1.11-.78-1.57-1.75-1L323,149.76A3.87,3.87,0,0,0,321.24,152.79Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 359.55px 169.731px;"
                                                class="animable" id="elbns9gx5aw6o"></path>
                                        </g>
                                        <g id="el7ocdvfjr8cl">
                                            <polygon
                                                points="325.28 153.1 393.82 113.53 393.82 186.36 325.28 225.93 325.28 153.1"
                                                style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 359.55px 169.73px;"
                                                class="animable" id="elaqips9d0tiv"></polygon>
                                        </g>
                                        <polygon
                                            points="325.28 225.93 325.28 202.28 343.79 160.25 373.97 181.22 363.97 171.06 376.69 155.1 393.82 162.87 393.82 186.36 325.28 225.93"
                                            style="fill: rgb(255, 255, 255); transform-origin: 359.55px 190.515px;"
                                            id="elu2locaj8vi" class="animable"></polygon>
                                        <path
                                            d="M370.5,135c3-1.74,5.47-.33,5.47,3.16a12.09,12.09,0,0,1-5.47,9.48c-3,1.75-5.47.33-5.47-3.16A12.11,12.11,0,0,1,370.5,135Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 370.5px 141.322px;"
                                            id="el99vqdd0bxwj" class="animable"></path>
                                    </g>
                                    <path
                                        d="M335.66,234.2l47.78-27.59c1.32-.76,2.39-.14,2.39,1.38v10a5.27,5.27,0,0,1-2.39,4.14l-47.78,27.59c-1.32.76-2.39.14-2.39-1.38v-10A5.27,5.27,0,0,1,335.66,234.2Z"
                                        style="fill: #12D30F; transform-origin: 359.55px 228.165px;" id="el463xbqnix6b"
                                        class="animable"></path>
                                    <path
                                        d="M345.24,232.2a.12.12,0,0,1,.15,0,.25.25,0,0,1,.06.19v.87a.66.66,0,0,1-.06.27.42.42,0,0,1-.15.19l-2.54,1.46v2.38l2.38-1.37a.11.11,0,0,1,.15,0,.25.25,0,0,1,.06.19v.87a.66.66,0,0,1-.06.27.38.38,0,0,1-.15.19l-2.38,1.37v2.81a.54.54,0,0,1-.07.27.42.42,0,0,1-.15.19l-.64.37a.12.12,0,0,1-.15,0,.24.24,0,0,1-.07-.2v-7.92a.54.54,0,0,1,.07-.27.35.35,0,0,1,.15-.18Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 343.535px 237.46px;"
                                        id="elshc9ac6shyn" class="animable"></path>
                                    <path
                                        d="M346,237.15a7,7,0,0,1,.13-1.37,6.17,6.17,0,0,1,.39-1.28,5.08,5.08,0,0,1,.62-1.07,2.73,2.73,0,0,1,.81-.72,1.33,1.33,0,0,1,.81-.21.93.93,0,0,1,.61.31,1.87,1.87,0,0,1,.4.77,4.21,4.21,0,0,1,.14,1.11v.56a.54.54,0,0,1-.07.27.35.35,0,0,1-.15.18l-2.66,1.54a1.1,1.1,0,0,0,.08.45.54.54,0,0,0,.2.24.43.43,0,0,0,.3,0,.82.82,0,0,0,.34-.12,1.54,1.54,0,0,0,.41-.32,1.73,1.73,0,0,0,.27-.35,1.21,1.21,0,0,1,.14-.22.44.44,0,0,1,.15-.12l.64-.37a.11.11,0,0,1,.15,0,.19.19,0,0,1,.06.19,1.74,1.74,0,0,1-.12.52,4,4,0,0,1-.35.73,4.71,4.71,0,0,1-.57.76,2.84,2.84,0,0,1-.78.64,1.44,1.44,0,0,1-.81.23.92.92,0,0,1-.62-.32,2.07,2.07,0,0,1-.39-.83A5.14,5.14,0,0,1,346,237.15Zm2-3a1.44,1.44,0,0,0-.4.33,2.8,2.8,0,0,0-.27.43,3,3,0,0,0-.17.47,2.65,2.65,0,0,0-.08.43l1.8-1a2.14,2.14,0,0,0-.06-.35.66.66,0,0,0-.14-.29.35.35,0,0,0-.26-.11A.83.83,0,0,0,348,234.18Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 347.955px 235.999px;"
                                        id="elnt3ur8dv7i" class="animable"></path>
                                    <path
                                        d="M350.59,234.51a7,7,0,0,1,.13-1.37,6.36,6.36,0,0,1,.39-1.28,4.76,4.76,0,0,1,.62-1.06,2.92,2.92,0,0,1,.81-.73,1.33,1.33,0,0,1,.81-.21.94.94,0,0,1,.61.32,1.76,1.76,0,0,1,.4.76,4.23,4.23,0,0,1,.14,1.12v.55a.54.54,0,0,1-.07.27.35.35,0,0,1-.15.18l-2.66,1.54a1.1,1.1,0,0,0,.08.45.52.52,0,0,0,.2.25.6.6,0,0,0,.3,0,1,1,0,0,0,.34-.13,1.54,1.54,0,0,0,.41-.32,1.73,1.73,0,0,0,.27-.35,1.21,1.21,0,0,1,.14-.22.61.61,0,0,1,.15-.12l.64-.37a.12.12,0,0,1,.15,0,.21.21,0,0,1,.06.2,1.69,1.69,0,0,1-.12.51,4,4,0,0,1-.35.73,4.76,4.76,0,0,1-.57.77,3,3,0,0,1-.78.63,1.44,1.44,0,0,1-.81.23.92.92,0,0,1-.62-.32,2,2,0,0,1-.39-.83A5.14,5.14,0,0,1,350.59,234.51Zm2-3a1.45,1.45,0,0,0-.4.34,2.31,2.31,0,0,0-.27.42,3,3,0,0,0-.17.47,2.65,2.65,0,0,0-.08.43l1.8-1a2.14,2.14,0,0,0-.06-.35.66.66,0,0,0-.14-.29.35.35,0,0,0-.26-.11A.83.83,0,0,0,352.54,231.54Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 352.545px 233.359px;"
                                        id="elsh23w16rucg" class="animable"></path>
                                    <path
                                        d="M357,227.52a1.7,1.7,0,0,1,.44-.18.79.79,0,0,1,.34,0,.5.5,0,0,1,.25.09.85.85,0,0,1,.17.14V225a.66.66,0,0,1,.06-.27.41.41,0,0,1,.16-.18l.6-.35a.11.11,0,0,1,.15,0,.26.26,0,0,1,.07.19v8.05a.68.68,0,0,1-.07.27.35.35,0,0,1-.15.18l-.6.35a.13.13,0,0,1-.16,0,.28.28,0,0,1-.06-.2v-.28a3.57,3.57,0,0,1-.17.34,3.52,3.52,0,0,1-.25.38,3,3,0,0,1-.34.38,2,2,0,0,1-.44.33,1.1,1.1,0,0,1-.72.18.89.89,0,0,1-.55-.32,2.06,2.06,0,0,1-.36-.71,3.82,3.82,0,0,1-.15-1v-.86a6.05,6.05,0,0,1,.15-1.17,6.49,6.49,0,0,1,.36-1.13,4.22,4.22,0,0,1,.55-.95A2.35,2.35,0,0,1,357,227.52Zm-.74,3.4a3.86,3.86,0,0,0,0,.68c0,.52.14.84.32,1a.57.57,0,0,0,.66,0,1.68,1.68,0,0,0,.65-.73,3,3,0,0,0,.31-1.2c0-.13,0-.28,0-.47s0-.34,0-.46a1.15,1.15,0,0,0-.31-.83.54.54,0,0,0-.65,0,1.85,1.85,0,0,0-.66.74A3.17,3.17,0,0,0,356.22,230.92Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 357.23px 229.273px;"
                                        id="elghuc95qa2o" class="animable"></path>
                                    <path
                                        d="M362.53,224.3a1.09,1.09,0,0,1,.72-.17.85.85,0,0,1,.55.32,1.89,1.89,0,0,1,.36.71,3.82,3.82,0,0,1,.15,1c0,.12,0,.26,0,.42s0,.31,0,.44a6.05,6.05,0,0,1-.15,1.17,6.38,6.38,0,0,1-.36,1.12,4.08,4.08,0,0,1-.55,1,2.32,2.32,0,0,1-.72.65,1.2,1.2,0,0,1-.44.18.81.81,0,0,1-.34,0,.63.63,0,0,1-.25-.1.61.61,0,0,1-.17-.14v.28a.66.66,0,0,1-.06.27.45.45,0,0,1-.16.19l-.6.35a.12.12,0,0,1-.15,0,.28.28,0,0,1-.06-.2v-8a.66.66,0,0,1,.06-.27.42.42,0,0,1,.15-.19l.6-.34a.11.11,0,0,1,.16,0,.25.25,0,0,1,.06.19v2.61a2.62,2.62,0,0,1,.17-.33,2.84,2.84,0,0,1,.25-.39,3.88,3.88,0,0,1,.34-.38A3,3,0,0,1,362.53,224.3Zm.74,2.54c0-.51-.13-.83-.32-1a.57.57,0,0,0-.66,0,1.68,1.68,0,0,0-.65.75,3,3,0,0,0-.31,1.18c0,.13,0,.29,0,.48s0,.34,0,.45a1.1,1.1,0,0,0,.31.84.54.54,0,0,0,.65,0,1.76,1.76,0,0,0,.66-.73,3.06,3.06,0,0,0,.32-1.33A4,4,0,0,0,363.27,226.84Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 362.304px 227.486px;"
                                        id="elero1irmvcwr" class="animable"></path>
                                    <path
                                        d="M365.22,224.44a3.37,3.37,0,0,1,.15-.64,4.69,4.69,0,0,1,.33-.74,3.85,3.85,0,0,1,.52-.72,2.62,2.62,0,0,1,.71-.57,1.62,1.62,0,0,1,.73-.26.78.78,0,0,1,.56.16,1.11,1.11,0,0,1,.36.59,3.42,3.42,0,0,1,.13,1v3.6a.66.66,0,0,1-.06.27.63.63,0,0,1-.15.19l-.61.35a.12.12,0,0,1-.15,0,.28.28,0,0,1-.06-.2v-.41a3.9,3.9,0,0,1-.49.89,2.39,2.39,0,0,1-.8.71,1.3,1.3,0,0,1-.61.22.62.62,0,0,1-.45-.14,1,1,0,0,1-.29-.44,2.43,2.43,0,0,1-.1-.71,3.13,3.13,0,0,1,.39-1.55,4.3,4.3,0,0,1,1.05-1.25l1.3-1.1c0-.33-.08-.53-.22-.58a.58.58,0,0,0-.53.1.9.9,0,0,0-.31.26,2,2,0,0,0-.22.36,1.6,1.6,0,0,1-.13.21.45.45,0,0,1-.13.11l-.74.43a.12.12,0,0,1-.14,0S365.21,224.53,365.22,224.44Zm1.33,2.69a2.27,2.27,0,0,0,.49-.39,2.58,2.58,0,0,0,.56-1.09,2.14,2.14,0,0,0,.08-.54V225l-1.09.92a2.18,2.18,0,0,0-.47.52,1.08,1.08,0,0,0-.14.53c0,.17.06.26.17.28A.61.61,0,0,0,366.55,227.13Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 366.825px 225.194px;"
                                        id="elmfj3ajoct9f" class="animable"></path>
                                    <path
                                        d="M370.61,222.52c0,.13,0,.28,0,.44s0,.3,0,.42a1.77,1.77,0,0,0,.11.59.6.6,0,0,0,.22.3.41.41,0,0,0,.29.08.72.72,0,0,0,.32-.11,1.28,1.28,0,0,0,.34-.24,1.18,1.18,0,0,0,.23-.27,2.19,2.19,0,0,0,.16-.3,3.42,3.42,0,0,0,.13-.34l.11-.29a.48.48,0,0,1,.16-.2l.6-.35a.13.13,0,0,1,.16,0,.28.28,0,0,1,.06.2,4,4,0,0,1-.12.69,5,5,0,0,1-.35.91,5.56,5.56,0,0,1-.6.92,3.33,3.33,0,0,1-.88.74,1.41,1.41,0,0,1-.78.22.92.92,0,0,1-.61-.26,1.55,1.55,0,0,1-.41-.66,3.42,3.42,0,0,1-.18-1c0-.14,0-.3,0-.48s0-.35,0-.51a5.45,5.45,0,0,1,.18-1.18,6.15,6.15,0,0,1,.4-1.14,4.74,4.74,0,0,1,.61-1,3,3,0,0,1,.79-.69,1.75,1.75,0,0,1,.88-.27,1,1,0,0,1,.6.23,1.19,1.19,0,0,1,.35.5,2.09,2.09,0,0,1,.12.56.65.65,0,0,1-.06.26.39.39,0,0,1-.16.19l-.6.35a.12.12,0,0,1-.16,0l-.11-.16a1.27,1.27,0,0,0-.13-.19.36.36,0,0,0-.16-.11.43.43,0,0,0-.23,0,1.31,1.31,0,0,0-.34.15,1.26,1.26,0,0,0-.32.26,1.84,1.84,0,0,0-.29.42,2.42,2.42,0,0,0-.22.56A3,3,0,0,0,370.61,222.52Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 371.536px 222.335px;"
                                        id="elu518914mh5" class="animable"></path>
                                    <path
                                        d="M375.4,220.93V223a.66.66,0,0,1-.06.27.52.52,0,0,1-.16.19l-.6.34q-.09.06-.15,0a.3.3,0,0,1-.07-.2v-8a.68.68,0,0,1,.07-.27.42.42,0,0,1,.15-.19l.6-.35a.13.13,0,0,1,.16,0,.28.28,0,0,1,.06.2v3.86l1.33-2.42.12-.21a.54.54,0,0,1,.19-.18l.81-.47a.11.11,0,0,1,.14,0,.26.26,0,0,1,.05.17.53.53,0,0,1,0,.13.68.68,0,0,1-.07.17l-1.86,3.38,2,1.83a.33.33,0,0,1,.06.08.31.31,0,0,1,0,.11.53.53,0,0,1-.06.24.35.35,0,0,1-.13.16l-.77.45a.28.28,0,0,1-.21,0l-.12-.06Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 376.267px 219.296px;"
                                        id="el0ffft7fzawz5" class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--speech-bubble-3--inject-3" class="animable"
                                style="transform-origin: 210.57px 283.709px;">
                                <g id="freepik--speech-bubble--inject-3" class="animable"
                                    style="transform-origin: 210.57px 283.709px;">
                                    <g id="freepik--speech-bubble--inject-3" class="animable"
                                        style="transform-origin: 210.57px 283.709px;">
                                        <g id="freepik--shadow--inject-3">
                                            <g style="opacity: 0.2; transform-origin: 205.445px 280.473px;"
                                                class="animable" id="el355y0unvlw8">
                                                <path
                                                    d="M277.57,264.1c0,2.73-1.92,4.48-4.3,5.84L137.62,348.27c-2.37,1.37-4.3.26-4.3-2.48V298.25h0a8.55,8.55,0,0,1,4.28-7.41l135.67-78.37a2.87,2.87,0,0,1,4.3,2.48h0Z"
                                                    id="eli1djof0om4" class="animable"
                                                    style="transform-origin: 205.445px 280.473px;"></path>
                                            </g>
                                        </g>
                                        <g id="freepik--speech-bubble--inject-3" class="animable"
                                            style="transform-origin: 214.54px 285.62px;">
                                            <path
                                                d="M287.78,221.5a5.86,5.86,0,0,0-2.62-4.39l-1-.57a5.83,5.83,0,0,0-5.27,0l-135,77.94a5.84,5.84,0,0,0-2.63,4.57v50.52a5.84,5.84,0,0,0,2.63,4.57l1,.56a5.83,5.83,0,0,0,5.27,0l52.58-30.36,41.15-23.75a5.54,5.54,0,0,1,1.18-.51l6.28,6.05.3.23,2.21,1.25L258,310h0a3.28,3.28,0,0,0,3-.18,5.28,5.28,0,0,0,2.07-4.23v-13a5.84,5.84,0,0,1,2.63-4.57l19.47-11.24a5.81,5.81,0,0,0,2.64-4.57V221.7C287.8,221.62,287.78,221.56,287.78,221.5Z"
                                                style="fill: #12D30F; transform-origin: 214.535px 285.62px;"
                                                id="elc71dbkpjsfv" class="animable"></path>
                                            <g id="elh7nhaqcu0vc">
                                                <path
                                                    d="M287.78,221.5a5.86,5.86,0,0,0-2.62-4.39l-1-.57a5.83,5.83,0,0,0-5.27,0l-135,77.94a5.84,5.84,0,0,0-2.63,4.57v50.52a5.84,5.84,0,0,0,2.63,4.57l1,.56a5.83,5.83,0,0,0,5.27,0l52.58-30.36,41.15-23.75a5.54,5.54,0,0,1,1.18-.51l6.28,6.05.3.23,2.21,1.25L258,310h0a3.28,3.28,0,0,0,3-.18,5.28,5.28,0,0,0,2.07-4.23v-13a5.84,5.84,0,0,1,2.63-4.57l19.47-11.24a5.81,5.81,0,0,0,2.64-4.57V221.7C287.8,221.62,287.78,221.56,287.78,221.5Z"
                                                    style="opacity: 0.25; transform-origin: 214.535px 285.62px;"
                                                    class="animable" id="el4myzkag5imq"></path>
                                            </g>
                                            <path
                                                d="M287.8,221.67c0-1.68-1.18-2.36-2.64-1.52l-135,77.94a5.09,5.09,0,0,0-1.65,1.62l-6.24-3.6a5.1,5.1,0,0,1,1.64-1.63l135-77.94a5.83,5.83,0,0,1,5.27,0l1,.56A5.83,5.83,0,0,1,287.8,221.67Z"
                                                style="fill: #12D30F; transform-origin: 215.035px 257.81px;"
                                                id="elq6geqd4xh2" class="animable"></path>
                                            <g id="el0wz0coe09yg">
                                                <path
                                                    d="M287.8,221.67c0-1.68-1.18-2.36-2.64-1.52l-135,77.94a5.09,5.09,0,0,0-1.65,1.62l-6.24-3.6a5.1,5.1,0,0,1,1.64-1.63l135-77.94a5.83,5.83,0,0,1,5.27,0l1,.56A5.83,5.83,0,0,1,287.8,221.67Z"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 215.035px 257.81px;"
                                                    class="animable" id="elsqpk26rwa3"></path>
                                            </g>
                                            <path
                                                d="M149,354.52c-.85,0-.94-.95-.94-1.36V302.64a5.34,5.34,0,0,1,2.38-4.12l135-77.9a1.92,1.92,0,0,1,.92-.29c.85,0,.94,1,.94,1.37v50.51a5.34,5.34,0,0,1-2.38,4.12l-19.47,11.24a6.32,6.32,0,0,0-2.89,5v13a4.79,4.79,0,0,1-1.81,3.78,3.08,3.08,0,0,1-1.51.41h0a1.79,1.79,0,0,1-1.23-.39l-9.77-9.4a2.5,2.5,0,0,0-1.78-.6,5.78,5.78,0,0,0-2.78.79l-93.72,54.09A1.92,1.92,0,0,1,149,354.52Z"
                                                style="fill: rgb(250, 250, 250); transform-origin: 217.68px 287.425px;"
                                                id="eluxedrnt0nk" class="animable"></path>
                                            <path
                                                d="M286.34,220.85c.37,0,.42.53.42.85v50.51a4.86,4.86,0,0,1-2.12,3.68l-19.46,11.24a6.88,6.88,0,0,0-3.16,5.46v13a4.26,4.26,0,0,1-1.54,3.33,2.57,2.57,0,0,1-1.27.34,1.28,1.28,0,0,1-.86-.25l-9.77-9.4a3,3,0,0,0-2.14-.73,6.32,6.32,0,0,0-3,.85l-93.73,54.09a1.37,1.37,0,0,1-.66.23c-.37,0-.43-.54-.43-.85V302.64a4.87,4.87,0,0,1,2.12-3.67l135-77.9a1.42,1.42,0,0,1,.66-.22m0-1a2.42,2.42,0,0,0-1.18.36l-135,77.9a5.83,5.83,0,0,0-2.64,4.57v50.52c0,1.19.59,1.88,1.46,1.88a2.37,2.37,0,0,0,1.18-.36l93.72-54.09a5.26,5.26,0,0,1,2.52-.72,2,2,0,0,1,1.42.45l9.77,9.4a2.26,2.26,0,0,0,1.58.54,3.58,3.58,0,0,0,1.78-.48,5.28,5.28,0,0,0,2.07-4.23v-13a5.84,5.84,0,0,1,2.63-4.57l19.47-11.24a5.81,5.81,0,0,0,2.64-4.57V221.7c0-1.2-.6-1.89-1.46-1.89Z"
                                                style="fill: rgb(230, 230, 230); transform-origin: 217.7px 287.445px;"
                                                id="elvegpfla8mki" class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M274,237.27a2.8,2.8,0,0,0,1.26-2.18c0-.8-.57-1.12-1.26-.72a2.78,2.78,0,0,0-1.26,2.17C272.7,237.34,273.27,237.67,274,237.27Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 273.999px 235.819px;"
                                        id="el3dv5k19elpc" class="animable"></path>
                                    <path
                                        d="M278.08,234.9a2.77,2.77,0,0,0,1.26-2.18c0-.8-.56-1.12-1.26-.72a2.77,2.77,0,0,0-1.25,2.17C276.83,235,277.39,235.3,278.08,234.9Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 278.085px 233.452px;"
                                        id="elkgn71i5m2f" class="animable"></path>
                                    <path
                                        d="M269.84,239.64a2.79,2.79,0,0,0,1.25-2.18c0-.8-.56-1.12-1.25-.72a2.75,2.75,0,0,0-1.26,2.17C268.58,239.72,269.14,240,269.84,239.64Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 269.835px 238.181px;"
                                        id="ell0ai460q3w" class="animable"></path>
                                    <path
                                        d="M160.46,300.52l30.61-17.68c1.2-.69,2.18-.18,2.18,1.15a4.71,4.71,0,0,1-2.18,3.66l-30.61,17.68c-1.2.69-2.17.17-2.17-1.15A4.7,4.7,0,0,1,160.46,300.52Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 175.77px 294.084px;"
                                        id="ely44arpcub1h" class="animable"></path>
                                    <path
                                        d="M159.65,309.2,184.28,295c.75-.43,1.35-.11,1.35.72a2.91,2.91,0,0,1-1.35,2.28l-24.63,14.2c-.75.43-1.36.11-1.36-.71A3,3,0,0,1,159.65,309.2Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 171.96px 303.6px;"
                                        id="elelvj35nz6j" class="animable"></path>
                                    <path
                                        d="M189.28,295.82a4.54,4.54,0,0,0,2-3.54c0-1.3-.91-1.83-2-1.18a4.51,4.51,0,0,0-2,3.54C187.24,295.94,188.15,296.47,189.28,295.82Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 189.279px 293.46px;"
                                        id="elhzcc80j0xxm" class="animable"></path>
                                    <path
                                        d="M202.58,297.06l75-43.5c1.19-.7,2.16-.2,2.16,1.09a4.65,4.65,0,0,1-2.16,3.6l-75,43.5c-1.19.69-2.16.2-2.16-1.1A4.65,4.65,0,0,1,202.58,297.06Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 240.08px 277.653px;"
                                        id="el707e36ly9iq" class="animable"></path>
                                    <path
                                        d="M162.92,323.92a.12.12,0,0,1,.17,0,.29.29,0,0,1,.07.22v1a.66.66,0,0,1-.07.3.46.46,0,0,1-.17.21L159,327.93a.12.12,0,0,1-.17,0,.29.29,0,0,1-.07-.22v-8.95a.67.67,0,0,1,.07-.31.46.46,0,0,1,.17-.21l3.88-2.24a.13.13,0,0,1,.17,0,.3.3,0,0,1,.07.23v1a.66.66,0,0,1-.07.3.38.38,0,0,1-.17.21l-2.91,1.68v2.2l2.71-1.56a.13.13,0,0,1,.17,0,.29.29,0,0,1,.07.22v1a.66.66,0,0,1-.07.3.41.41,0,0,1-.17.21l-2.71,1.57v2.3Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 160.96px 321.967px;"
                                        id="elrubdmfnkt1l" class="animable"></path>
                                    <path
                                        d="M166.2,321.47l-1.06,2.64a1.28,1.28,0,0,1-.19.32.87.87,0,0,1-.21.17l-.69.4a.12.12,0,0,1-.17,0,.29.29,0,0,1-.07-.23.54.54,0,0,1,0-.22l1.62-4-1.55-2.06a.39.39,0,0,1,0-.17A.88.88,0,0,1,164,318a.46.46,0,0,1,.17-.21l.69-.4a.52.52,0,0,1,.21-.07.23.23,0,0,1,.19.11l1,1.35,1-2.52a.93.93,0,0,1,.19-.32.68.68,0,0,1,.21-.17l.69-.4a.12.12,0,0,1,.17,0,.38.38,0,0,1,.07.24.93.93,0,0,1,0,.22L167,319.71l1.61,2.1a.45.45,0,0,1,0,.18.67.67,0,0,1-.07.31.45.45,0,0,1-.16.21l-.7.4a.35.35,0,0,1-.21.07c-.06,0-.12,0-.18-.1Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 166.209px 320.185px;"
                                        id="elg22yi52ez8s" class="animable"></path>
                                    <path
                                        d="M170.23,317.34c0,.15,0,.31,0,.5s0,.34,0,.47a2.44,2.44,0,0,0,.12.66.7.7,0,0,0,.25.35.49.49,0,0,0,.33.09.94.94,0,0,0,.37-.12,2,2,0,0,0,.38-.28,1.53,1.53,0,0,0,.26-.31,2.21,2.21,0,0,0,.18-.34c0-.12.1-.24.15-.38s.08-.21.13-.32a.48.48,0,0,1,.17-.23l.68-.39a.14.14,0,0,1,.18,0,.28.28,0,0,1,.07.22,4.57,4.57,0,0,1-.14.79,5,5,0,0,1-.39,1,5.45,5.45,0,0,1-.68,1,3.77,3.77,0,0,1-1,.83,1.59,1.59,0,0,1-.89.26,1.11,1.11,0,0,1-.69-.3,1.8,1.8,0,0,1-.46-.74,4,4,0,0,1-.2-1.1c0-.16,0-.34,0-.54s0-.4,0-.58a6.21,6.21,0,0,1,.2-1.33,6,6,0,0,1,.46-1.29,5.72,5.72,0,0,1,.68-1.09,3.42,3.42,0,0,1,.9-.77,1.81,1.81,0,0,1,1-.31,1.14,1.14,0,0,1,.68.25,1.27,1.27,0,0,1,.39.57,2.33,2.33,0,0,1,.14.63.66.66,0,0,1-.07.3.46.46,0,0,1-.18.22l-.68.39a.12.12,0,0,1-.17,0,1.09,1.09,0,0,1-.13-.17,1,1,0,0,0-.15-.21.38.38,0,0,0-.18-.13.45.45,0,0,0-.26,0,1.56,1.56,0,0,0-.38.16,1.44,1.44,0,0,0-.37.3,2.44,2.44,0,0,0-.33.47,3,3,0,0,0-.25.64A4.64,4.64,0,0,0,170.23,317.34Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 171.276px 317.115px;"
                                        id="elyedg7v5i9n" class="animable"></path>
                                    <path
                                        d="M174.24,315.51a7.42,7.42,0,0,1,.16-1.55,7.21,7.21,0,0,1,.44-1.45,5.25,5.25,0,0,1,.7-1.2,3,3,0,0,1,.91-.81,1.47,1.47,0,0,1,.91-.25,1.06,1.06,0,0,1,.7.36,2.09,2.09,0,0,1,.44.87,4.43,4.43,0,0,1,.16,1.26v.62a.73.73,0,0,1-.07.31.54.54,0,0,1-.17.21l-3,1.73a1.23,1.23,0,0,0,.09.51.59.59,0,0,0,.23.28.58.58,0,0,0,.33.06,1,1,0,0,0,.39-.15,2,2,0,0,0,.47-.35,1.81,1.81,0,0,0,.29-.41,1.54,1.54,0,0,1,.17-.24.49.49,0,0,1,.17-.14l.72-.42a.15.15,0,0,1,.17,0,.3.3,0,0,1,.07.23,2.44,2.44,0,0,1-.14.58,5.4,5.4,0,0,1-.39.82,6.9,6.9,0,0,1-.64.87,3.85,3.85,0,0,1-.89.72,1.56,1.56,0,0,1-.91.25,1,1,0,0,1-.7-.36,2.24,2.24,0,0,1-.44-.93A5.47,5.47,0,0,1,174.24,315.51Zm2.21-3.35a1.82,1.82,0,0,0-.45.37,2.71,2.71,0,0,0-.31.49,2.58,2.58,0,0,0-.19.53,3.31,3.31,0,0,0-.09.48l2-1.17a2.57,2.57,0,0,0-.07-.4.74.74,0,0,0-.16-.32.47.47,0,0,0-.3-.14A1,1,0,0,0,176.45,312.16Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 176.45px 314.234px;"
                                        id="el2cgr6krxiiv" class="animable"></path>
                                    <path
                                        d="M180.81,315a.66.66,0,0,1-.07.3.46.46,0,0,1-.17.21l-.68.39c-.07,0-.13,0-.17,0a.28.28,0,0,1-.08-.22v-9.09a.67.67,0,0,1,.08-.3.37.37,0,0,1,.17-.21l.68-.4a.13.13,0,0,1,.17,0,.3.3,0,0,1,.07.23Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 180.226px 310.774px;"
                                        id="el9bom0avcffo" class="animable"></path>
                                    <path
                                        d="M183.22,313.55a.7.7,0,0,1-.07.31.46.46,0,0,1-.17.21l-.68.39a.12.12,0,0,1-.17,0,.29.29,0,0,1-.07-.22v-9.09a.73.73,0,0,1,.07-.31.46.46,0,0,1,.17-.21l.68-.39a.13.13,0,0,1,.17,0,.29.29,0,0,1,.07.22Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 182.64px 309.352px;"
                                        id="elasxmxu8mhoc" class="animable"></path>
                                    <path
                                        d="M184.23,309.74a7.42,7.42,0,0,1,.16-1.55,7.11,7.11,0,0,1,.44-1.44,5.38,5.38,0,0,1,.69-1.2,3.2,3.2,0,0,1,.92-.82,1.47,1.47,0,0,1,.91-.25,1.19,1.19,0,0,1,.7.36,2.09,2.09,0,0,1,.44.87,4.43,4.43,0,0,1,.16,1.26v.62a.67.67,0,0,1-.07.31.54.54,0,0,1-.17.21l-3,1.73a1.2,1.2,0,0,0,.09.51.55.55,0,0,0,.23.28.46.46,0,0,0,.33.06,1.22,1.22,0,0,0,.39-.14,2,2,0,0,0,.47-.36,1.76,1.76,0,0,0,.29-.4,1.73,1.73,0,0,1,.17-.25.49.49,0,0,1,.17-.14l.72-.41a.12.12,0,0,1,.17,0,.24.24,0,0,1,.07.22,2.33,2.33,0,0,1-.14.58,5,5,0,0,1-.39.82,5.18,5.18,0,0,1-.65.87,3.39,3.39,0,0,1-.88.72,1.66,1.66,0,0,1-.92.26,1,1,0,0,1-.69-.37,2.24,2.24,0,0,1-.44-.93A5.42,5.42,0,0,1,184.23,309.74Zm2.21-3.35a1.65,1.65,0,0,0-.45.38,3,3,0,0,0-.31.48,2.58,2.58,0,0,0-.19.53,3.58,3.58,0,0,0-.09.48l2-1.17a2.79,2.79,0,0,0-.07-.4.74.74,0,0,0-.16-.32.42.42,0,0,0-.3-.13A.87.87,0,0,0,186.44,306.39Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 186.44px 308.469px;"
                                        id="elummwq14z2mr" class="animable"></path>
                                    <path
                                        d="M194,307.32a.66.66,0,0,1-.07.3.46.46,0,0,1-.17.21l-.68.4a.13.13,0,0,1-.17,0,.32.32,0,0,1-.08-.23v-3.52a2.07,2.07,0,0,0-.25-1.18c-.17-.24-.42-.25-.77-.05a1.79,1.79,0,0,0-.75.93,3.7,3.7,0,0,0-.28,1.49v3.52a.66.66,0,0,1-.07.3.46.46,0,0,1-.17.21l-.68.4a.14.14,0,0,1-.18,0,.3.3,0,0,1-.07-.22V303.4a.87.87,0,0,1,.07-.31.48.48,0,0,1,.18-.21l.68-.39a.12.12,0,0,1,.17,0,.29.29,0,0,1,.07.22V303a5.5,5.5,0,0,1,.55-.91,2.52,2.52,0,0,1,.75-.67,1.57,1.57,0,0,1,.92-.27.88.88,0,0,1,.59.37,2,2,0,0,1,.32.84,7.29,7.29,0,0,1,.09,1.19Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 191.805px 305.641px;"
                                        id="el21cp55je4l7" class="animable"></path>
                                    <path
                                        d="M196.75,303.51a.9.9,0,0,0,.15.6c.1.12.28.1.55-.06l.55-.32a.13.13,0,0,1,.17,0,.3.3,0,0,1,.08.23v.91a.75.75,0,0,1-.08.31.35.35,0,0,1-.17.2l-.66.39c-.57.33-1,.37-1.3.12s-.46-.8-.46-1.67v-3l-.59.34c-.07,0-.13,0-.17,0a.28.28,0,0,1-.08-.22v-.91a.68.68,0,0,1,.08-.31.41.41,0,0,1,.17-.21l.59-.34v-2.26a.73.73,0,0,1,.07-.31.54.54,0,0,1,.17-.21l.69-.39a.14.14,0,0,1,.17,0,.29.29,0,0,1,.07.22v2.26l1.16-.67a.13.13,0,0,1,.17,0,.3.3,0,0,1,.08.23v.91a.75.75,0,0,1-.08.31.35.35,0,0,1-.17.2l-1.16.67Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 196.495px 301.211px;"
                                        id="ela1tksq91f3b" class="animable"></path>
                                    <path
                                        d="M162.08,341.24l-1.29-.34c-1.23-.33-2.7-1-2.7-2.63a4.14,4.14,0,0,1,2-3.15,1.25,1.25,0,0,1,2,.95,5,5,0,0,1,2-3.24c1.1-.64,2-.26,2,.84,0,1.58-1.46,4-2.69,5.74Z"
                                        style="fill: #12D30F; transform-origin: 162.09px 336.879px;" id="elacgami34hso"
                                        class="animable"></path>
                                    <path
                                        d="M172.78,335.14a2,2,0,0,1-1-.26,2.56,2.56,0,0,1-1.1-2.36,7.5,7.5,0,0,1,3.39-5.87,2.27,2.27,0,0,1,3.7,2.14,5.75,5.75,0,0,1-.21,1.49l1.1,1.5a.33.33,0,0,1,0,.33.33.33,0,0,1-.29.18h-1.71a6.77,6.77,0,0,1-2.3,2.36A3.21,3.21,0,0,1,172.78,335.14Zm2.89-8.34a2.53,2.53,0,0,0-1.28.4,6.78,6.78,0,0,0-3.07,5.32,1.66,1.66,0,0,0,2.75,1.58,6.33,6.33,0,0,0,2.17-2.29.3.3,0,0,1,.27-.16h1.27l-.79-1.07a.34.34,0,0,1-.09-.32,5.06,5.06,0,0,0,.24-1.47,2,2,0,0,0-.79-1.82A1.4,1.4,0,0,0,175.67,326.8Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 174.686px 330.626px;"
                                        id="elt42ly5obgc" class="animable"></path>
                                    <path
                                        d="M183.91,329.11h0a.32.32,0,0,1-.28-.29l-.28-4.57-2.71-.74a.3.3,0,0,1-.23-.26.32.32,0,0,1,.15-.32l6.46-3.73a.32.32,0,0,1,.46.38l-3.23,9.32A.32.32,0,0,1,183.91,329.11Zm-2.41-6,2.2.59a.31.31,0,0,1,.23.29l.2,3.21,2.43-7Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 183.951px 324.136px;"
                                        id="el1zpiix372et" class="animable"></path>
                                    <path
                                        d="M183.62,324.31a.31.31,0,0,1-.2-.07.32.32,0,0,1,0-.45l3.52-4.52a.32.32,0,0,1,.44,0,.32.32,0,0,1,.06.45l-3.52,4.51A.31.31,0,0,1,183.62,324.31Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 185.417px 321.752px;"
                                        id="elnqz8mnx7sfc" class="animable"></path>
                                    <path
                                        d="M271.06,278.29H271a.31.31,0,0,1-.25-.31v-7.45a.32.32,0,0,1,.16-.28l4.71-2.74a.36.36,0,0,1,.32,0,.33.33,0,0,1,.16.28v7.45a.33.33,0,0,1-.2.3.31.31,0,0,1-.34-.07l-2.05-2-2.16,4.68A.3.3,0,0,1,271.06,278.29Zm.31-7.59v5.82l1.74-3.78a.35.35,0,0,1,.23-.18.34.34,0,0,1,.29.09l1.82,1.82v-6.14Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 273.425px 272.882px;"
                                        id="el5udr172jr99" class="animable"></path>
                                    <g id="freepik--stars--inject-3" class="animable"
                                        style="transform-origin: 241.055px 259.454px;">
                                        <path
                                            d="M261.61,245.7a3.76,3.76,0,0,0-3.7.41l-30.42,17.56a11,11,0,0,0-5.09,8.46,3.24,3.24,0,0,0,1.32,2.94l-3.21-1.85a3.21,3.21,0,0,1-1.38-3,10.92,10.92,0,0,1,5.09-8.46l30.43-17.57a4.94,4.94,0,0,1,2.39-.73,2.62,2.62,0,0,1,1.32.34Z"
                                            style="fill: #12D30F; transform-origin: 240.36px 259.265px;"
                                            id="elk8bhm6o54rf" class="animable"></path>
                                        <path
                                            d="M227.49,263.68l30.42-17.57c2.81-1.62,5.09-.47,5.09,2.58a10.93,10.93,0,0,1-5.09,8.46l-30.42,17.56c-2.82,1.63-5.1.47-5.1-2.57A10.9,10.9,0,0,1,227.49,263.68Z"
                                            style="fill: #12D30F; transform-origin: 242.695px 260.412px;"
                                            id="elsgwr82sa7ri" class="animable"></path>
                                        <g id="el75p26aply5m">
                                            <path
                                                d="M227.49,263.68l30.42-17.57c2.81-1.62,5.09-.47,5.09,2.58a10.93,10.93,0,0,1-5.09,8.46l-30.42,17.56c-2.82,1.63-5.1.47-5.1-2.57A10.9,10.9,0,0,1,227.49,263.68Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 242.695px 260.412px;"
                                                class="animable" id="el5obm0n1yhpw"></path>
                                        </g>
                                        <g id="freepik--stars--inject-3" class="animable"
                                            style="transform-origin: 242.711px 260.487px;">
                                            <path
                                                d="M230.71,264.19l.54,1.15a.13.13,0,0,0,.18.07l1.2-.47c.19-.07.27.2.13.46l-.87,1.64a.52.52,0,0,0-.07.31l.21,1.49c0,.23-.17.54-.34.52l-1.08-.13a.25.25,0,0,0-.22.12l-1.08,1.38c-.17.22-.37.14-.33-.13l.2-1.72a.25.25,0,0,0-.07-.24l-.87-.63c-.14-.1-.06-.46.13-.61l1.21-.93a.53.53,0,0,0,.17-.27l.54-1.77C230.38,264.15,230.63,264,230.71,264.19Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 230.5px 267.481px;"
                                                id="elmr8xzl1z6kp" class="animable"></path>
                                            <path
                                                d="M236.82,260.7l.54,1.14a.12.12,0,0,0,.17.07l1.21-.46c.19-.08.27.19.13.45l-.88,1.64a.54.54,0,0,0-.06.32l.2,1.48c0,.24-.16.54-.33.52l-1.08-.13a.26.26,0,0,0-.22.13l-1.08,1.37c-.17.22-.37.15-.34-.13l.21-1.72a.28.28,0,0,0-.07-.24l-.87-.63c-.14-.1-.07-.45.13-.6l1.2-.93a.59.59,0,0,0,.18-.27l.54-1.77C236.48,260.66,236.73,260.51,236.82,260.7Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 236.609px 263.988px;"
                                                id="eleoz47qd9nck" class="animable"></path>
                                            <path
                                                d="M242.92,257.2l.54,1.15a.13.13,0,0,0,.18.06l1.2-.46c.2-.07.27.2.13.46l-.87,1.64a.61.61,0,0,0-.07.31l.21,1.48c0,.24-.17.55-.34.53l-1.08-.14a.29.29,0,0,0-.22.13l-1.07,1.38c-.18.22-.38.14-.34-.13l.2-1.72a.25.25,0,0,0-.06-.24l-.88-.63c-.14-.1-.06-.46.13-.61l1.21-.93a.57.57,0,0,0,.17-.27l.54-1.77C242.59,257.16,242.84,257,242.92,257.2Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 242.711px 260.489px;"
                                                id="elkfzsoyftm8h" class="animable"></path>
                                            <path
                                                d="M249,253.7l.54,1.15a.12.12,0,0,0,.17.07l1.21-.46c.19-.08.27.19.13.45l-.87,1.64a.54.54,0,0,0-.07.32l.21,1.48c0,.23-.17.54-.34.52l-1.08-.13a.28.28,0,0,0-.22.12l-1.08,1.38c-.17.22-.37.14-.34-.13l.21-1.72a.25.25,0,0,0-.07-.24l-.87-.63c-.14-.1-.06-.46.13-.6l1.2-.93a.51.51,0,0,0,.18-.28l.54-1.76C248.7,253.67,248.94,253.52,249,253.7Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 248.79px 256.994px;"
                                                id="el6rbmtuz736f" class="animable"></path>
                                            <path
                                                d="M255.13,250.21l.54,1.14a.13.13,0,0,0,.18.07l1.21-.46c.19-.07.26.2.12.46l-.87,1.64a.61.61,0,0,0-.07.31l.21,1.48c0,.24-.17.55-.34.53l-1.08-.14a.25.25,0,0,0-.21.13l-1.08,1.38c-.17.22-.37.14-.34-.14l.2-1.72a.24.24,0,0,0-.06-.23l-.88-.63c-.13-.1-.06-.46.13-.61l1.21-.93a.59.59,0,0,0,.18-.27l.54-1.77C254.8,250.17,255.05,250,255.13,250.21Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 254.924px 253.496px;"
                                                id="elct4r8u901jc" class="animable"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--speech-bubble-2--inject-3" class="animable"
                                style="transform-origin: 121.21px 259.466px;">
                                <g id="freepik--Feed--inject-3" class="animable"
                                    style="transform-origin: 121.21px 259.466px;">
                                    <g id="freepik--speech-bubble--inject-3" class="animable"
                                        style="transform-origin: 121.21px 259.466px;">
                                        <g id="freepik--shadow--inject-3">
                                            <g style="opacity: 0.2; transform-origin: 116.07px 253.77px;" class="animable"
                                                id="el4mpvg8t45ug">
                                                <path
                                                    d="M188.19,237.4c0,2.73-1.92,4.47-4.29,5.84L48.24,321.57c-2.36,1.36-4.29.26-4.29-2.48V271.55h0a8.56,8.56,0,0,1,4.27-7.41l135.67-78.37a2.87,2.87,0,0,1,4.3,2.48h0Z"
                                                    id="el91ychnckbmg" class="animable"
                                                    style="transform-origin: 116.07px 253.77px;"></path>
                                            </g>
                                        </g>
                                        <g id="freepik--speech-bubble--inject-3" class="animable"
                                            style="transform-origin: 125.19px 261.372px;">
                                            <path
                                                d="M55.55,328l-1-.56a5.83,5.83,0,0,1-2.64-4.57V272.35a5.83,5.83,0,0,1,2.64-4.57l135-77.94a5.85,5.85,0,0,1,5.28,0l1,.56a5.84,5.84,0,0,1,2.64,4.57v50.52a5.83,5.83,0,0,1-2.64,4.57l-93.72,54.13a11.49,11.49,0,0,0-3.94,4.28l-9.77,20.68a10.35,10.35,0,0,1-3.36,4,5.31,5.31,0,0,1-4.7-.34l-.66-.38A5.81,5.81,0,0,1,77,327.82v-6.11c0-1.68-1.18-2.36-2.64-1.52L60.82,328A5.83,5.83,0,0,1,55.55,328Z"
                                                style="fill: #12D30F; transform-origin: 125.19px 261.377px;"
                                                id="elxucnolp7oxs" class="animable"></path>
                                            <g id="els8dj5qfclx">
                                                <path
                                                    d="M55.55,328l-1-.56a5.83,5.83,0,0,1-2.64-4.57V272.35a5.83,5.83,0,0,1,2.64-4.57l135-77.94a5.85,5.85,0,0,1,5.28,0l1,.56a5.84,5.84,0,0,1,2.64,4.57v50.52a5.83,5.83,0,0,1-2.64,4.57l-93.72,54.13a11.49,11.49,0,0,0-3.94,4.28l-9.77,20.68a10.35,10.35,0,0,1-3.36,4,5.31,5.31,0,0,1-4.7-.34l-.66-.38A5.81,5.81,0,0,1,77,327.82v-6.11c0-1.68-1.18-2.36-2.64-1.52L60.82,328A5.83,5.83,0,0,1,55.55,328Z"
                                                    style="opacity: 0.25; transform-origin: 125.19px 261.377px;"
                                                    class="animable" id="el3m93oagpiyi"></path>
                                            </g>
                                            <path
                                                d="M198.42,195c0-1.68-1.18-2.36-2.64-1.52l-135,77.94A5.09,5.09,0,0,0,59.17,273l-6.24-3.6a5.1,5.1,0,0,1,1.64-1.63l135-77.94a5.83,5.83,0,0,1,5.27,0l1,.56A5.83,5.83,0,0,1,198.42,195Z"
                                                style="fill: #12D30F; transform-origin: 125.675px 231.1px;"
                                                id="el5e5x8m9le1e" class="animable"></path>
                                            <g id="elxsc6s3te99">
                                                <path
                                                    d="M198.42,195c0-1.68-1.18-2.36-2.64-1.52l-135,77.94A5.09,5.09,0,0,0,59.17,273l-6.24-3.6a5.1,5.1,0,0,1,1.64-1.63l135-77.94a5.83,5.83,0,0,1,5.27,0l1,.56A5.83,5.83,0,0,1,198.42,195Z"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 125.675px 231.1px;"
                                                    class="animable" id="elkm2d5iyvwxi"></path>
                                            </g>
                                            <path
                                                d="M84.24,332.8a.58.58,0,0,1-.51-.32,2.27,2.27,0,0,1-.29-1.24V318.29c0-1.44-.79-2.4-2-2.4a2.92,2.92,0,0,0-1.44.42L60.56,327.55a1.92,1.92,0,0,1-.92.29c-.85,0-.94-.95-.94-1.36V276a5.35,5.35,0,0,1,2.38-4.12L196,193.9a1.92,1.92,0,0,1,.92-.29c.85,0,.94.95.94,1.36v50.52a5.34,5.34,0,0,1-2.38,4.12L101.8,303.75a11.81,11.81,0,0,0-4.15,4.5l-9.77,20.68a10,10,0,0,1-3.15,3.72A1,1,0,0,1,84.24,332.8Z"
                                                style="fill: rgb(250, 250, 250); transform-origin: 128.28px 263.205px;"
                                                id="el8dvd8mjc7l" class="animable"></path>
                                            <path
                                                d="M197,194.12c.37,0,.43.54.43.85v50.52a4.85,4.85,0,0,1-2.12,3.67L101.54,303.3A12.4,12.4,0,0,0,97.18,308l-9.77,20.68a9.46,9.46,0,0,1-2.94,3.49.6.6,0,0,1-.23.09c-.08,0-.28-.36-.28-1.05V318.29c0-1.72-1-2.92-2.49-2.92a3.39,3.39,0,0,0-1.7.5L60.3,327.11a1.36,1.36,0,0,1-.66.22c-.37,0-.42-.53-.42-.85V276a4.84,4.84,0,0,1,2.12-3.67l135-77.94a1.37,1.37,0,0,1,.66-.23m0-1a2.48,2.48,0,0,0-1.18.36l-135,77.94A5.83,5.83,0,0,0,58.18,276v50.52c0,1.19.6,1.88,1.46,1.88a2.32,2.32,0,0,0,1.18-.36l19.47-11.24a2.42,2.42,0,0,1,1.18-.36c.86,0,1.45.69,1.45,1.89v12.95c0,1.29.55,2.08,1.32,2.08a1.55,1.55,0,0,0,.75-.22,10.35,10.35,0,0,0,3.36-4l9.77-20.68a11.49,11.49,0,0,1,3.94-4.28l93.72-54.13a5.83,5.83,0,0,0,2.64-4.57V195c0-1.19-.59-1.88-1.46-1.88Z"
                                                style="fill: rgb(230, 230, 230); transform-origin: 128.3px 263.24px;"
                                                id="elmuxwedu583e" class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M184.59,210.57a2.79,2.79,0,0,0,1.25-2.18c0-.8-.56-1.13-1.25-.72a2.75,2.75,0,0,0-1.26,2.17C183.33,210.64,183.89,211,184.59,210.57Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 184.585px 209.123px;"
                                        id="elg6qylqa8sds" class="animable"></path>
                                    <path
                                        d="M188.71,208.2A2.8,2.8,0,0,0,190,206c0-.8-.57-1.12-1.26-.72a2.78,2.78,0,0,0-1.26,2.17C187.45,208.27,188,208.6,188.71,208.2Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 188.739px 206.739px;"
                                        id="el7y24itfy9n" class="animable"></path>
                                    <path
                                        d="M180.46,212.94a2.77,2.77,0,0,0,1.26-2.18c0-.8-.56-1.12-1.26-.72a2.77,2.77,0,0,0-1.25,2.17C179.21,213,179.77,213.34,180.46,212.94Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 180.465px 211.488px;"
                                        id="el85sqcaxjw8b" class="animable"></path>
                                    <path
                                        d="M71.09,273.81l30.61-17.67c1.2-.69,2.17-.18,2.17,1.15A4.7,4.7,0,0,1,101.7,261L71.09,278.62c-1.2.7-2.17.18-2.17-1.15A4.73,4.73,0,0,1,71.09,273.81Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 86.395px 267.382px;"
                                        id="els8qcy00313" class="animable"></path>
                                    <path
                                        d="M70.27,282.5l24.64-14.2c.74-.43,1.35-.11,1.35.72a3,3,0,0,1-1.35,2.28L70.27,285.5c-.75.43-1.35.11-1.35-.72A3,3,0,0,1,70.27,282.5Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 82.59px 276.9px;"
                                        id="elw4kft03njm" class="animable"></path>
                                    <path
                                        d="M99.9,269.12a4.54,4.54,0,0,0,2-3.54c0-1.3-.92-1.83-2-1.18a4.52,4.52,0,0,0-2,3.54C97.86,269.24,98.78,269.77,99.9,269.12Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 99.8994px 266.76px;"
                                        id="eld9quf9vmax5" class="animable"></path>
                                    <path
                                        d="M122.27,265.15l65.92-38.3c1.2-.69,2.17-.2,2.17,1.1a4.64,4.64,0,0,1-2.17,3.59l-65.92,38.31c-1.2.69-2.17.2-2.17-1.1A4.64,4.64,0,0,1,122.27,265.15Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 155.23px 248.35px;"
                                        id="el2dn1wzlo5su" class="animable"></path>
                                    <path
                                        d="M71.74,290.23c.72-.42,1.29-.48,1.69-.19s.6.95.6,2a5.72,5.72,0,0,1-.6,2.68,4.39,4.39,0,0,1-1.69,1.78l-1.44.83v3.09a.67.67,0,0,1-.08.3.41.41,0,0,1-.17.21l-.73.42a.12.12,0,0,1-.17,0,.29.29,0,0,1-.07-.22v-8.95a.7.7,0,0,1,.07-.31.54.54,0,0,1,.17-.21Zm-1.44,5.33,1.39-.8a2.3,2.3,0,0,0,.82-.79,2.35,2.35,0,0,0,.31-1.26c0-.52-.11-.82-.31-.9a1,1,0,0,0-.82.18l-1.39.8Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 71.555px 295.623px;"
                                        id="elqfg6ufxc2es" class="animable"></path>
                                    <path
                                        d="M77.12,291.28a1.86,1.86,0,0,0-.78.82,3.1,3.1,0,0,0-.24,1.33V297a.66.66,0,0,1-.07.3.54.54,0,0,1-.17.21l-.69.4a.14.14,0,0,1-.17,0,.32.32,0,0,1-.07-.22v-6.46A.82.82,0,0,1,75,291a.54.54,0,0,1,.17-.21l.69-.39a.12.12,0,0,1,.17,0,.28.28,0,0,1,.07.22v.32a4.59,4.59,0,0,1,.5-.8,2.41,2.41,0,0,1,.7-.59l.4-.23a.13.13,0,0,1,.17,0,.29.29,0,0,1,.08.22v.92a.67.67,0,0,1-.08.3.37.37,0,0,1-.17.21Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 76.44px 293.614px;"
                                        id="elycoojhgo1w" class="animable"></path>
                                    <path
                                        d="M78.39,292.49a8.06,8.06,0,0,1,.15-1.55,7.21,7.21,0,0,1,.44-1.45,5.4,5.4,0,0,1,.7-1.2,3.32,3.32,0,0,1,.91-.82,1.55,1.55,0,0,1,.92-.24,1.06,1.06,0,0,1,.69.36,2.25,2.25,0,0,1,.45.86,4.84,4.84,0,0,1,.16,1.27v.62a.67.67,0,0,1-.08.3.41.41,0,0,1-.17.21l-3,1.74a1.43,1.43,0,0,0,.08.51.66.66,0,0,0,.23.28.53.53,0,0,0,.33.05.88.88,0,0,0,.39-.14,2,2,0,0,0,.47-.36,2.2,2.2,0,0,0,.3-.4,1.63,1.63,0,0,1,.16-.24.47.47,0,0,1,.17-.14l.72-.42a.15.15,0,0,1,.18,0,.25.25,0,0,1,.06.22,1.89,1.89,0,0,1-.14.58,3.81,3.81,0,0,1-.39.83,6,6,0,0,1-.64.87,3.9,3.9,0,0,1-.89.72,1.54,1.54,0,0,1-.91.25,1,1,0,0,1-.7-.36,2.3,2.3,0,0,1-.44-.93A6,6,0,0,1,78.39,292.49Zm2.2-3.35a1.58,1.58,0,0,0-.44.37,2.07,2.07,0,0,0-.31.48,2.86,2.86,0,0,0-.2.53,3.31,3.31,0,0,0-.08.49l2-1.18a1.78,1.78,0,0,0-.07-.39.68.68,0,0,0-.16-.33.42.42,0,0,0-.3-.13A.9.9,0,0,0,80.59,289.14Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 80.5998px 291.214px;"
                                        id="els1y0dds8vdq" class="animable"></path>
                                    <path
                                        d="M85.36,289.46a.92.92,0,0,0,.15.6c.1.11.28.09.55-.07l.55-.31a.12.12,0,0,1,.17,0,.29.29,0,0,1,.07.22v.92a.66.66,0,0,1-.07.3.46.46,0,0,1-.17.21l-.66.39c-.57.32-1,.36-1.3.12s-.46-.81-.46-1.67v-3l-.59.34a.13.13,0,0,1-.17,0,.3.3,0,0,1-.08-.23v-.91a.67.67,0,0,1,.08-.3.34.34,0,0,1,.17-.21l.59-.35v-2.25a.82.82,0,0,1,.07-.31.54.54,0,0,1,.17-.21l.69-.39a.12.12,0,0,1,.17,0,.28.28,0,0,1,.07.22v2.26l1.16-.67c.07,0,.13,0,.17,0a.29.29,0,0,1,.08.22v.92a.67.67,0,0,1-.08.3.41.41,0,0,1-.17.21l-1.16.67Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 85.1002px 287.154px;"
                                        id="el8i7971ahv96" class="animable"></path>
                                    <path
                                        d="M89.31,287.18a.94.94,0,0,0,.15.6c.1.11.28.09.55-.07l.55-.31c.07,0,.13,0,.17,0a.29.29,0,0,1,.08.22v.92a.67.67,0,0,1-.08.3.41.41,0,0,1-.17.21l-.66.38c-.57.33-1,.37-1.3.12s-.46-.8-.46-1.67v-3l-.59.35a.13.13,0,0,1-.17,0,.3.3,0,0,1-.07-.23v-.91a.73.73,0,0,1,.07-.31.39.39,0,0,1,.17-.2l.59-.35V281a.82.82,0,0,1,.07-.3.48.48,0,0,1,.18-.21l.68-.4a.13.13,0,0,1,.17,0,.28.28,0,0,1,.07.22v2.26l1.16-.67c.07,0,.13,0,.17,0a.29.29,0,0,1,.08.22v.91a.68.68,0,0,1-.08.31.41.41,0,0,1-.17.21l-1.16.67Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 89.0593px 284.885px;"
                                        id="el5rib34f9wrp" class="animable"></path>
                                    <path
                                        d="M93.11,287.2l-1.78-5.32a.22.22,0,0,1,0-.09.66.66,0,0,1,.07-.3.54.54,0,0,1,.17-.21l.68-.39a.17.17,0,0,1,.19,0,.36.36,0,0,1,.11.16l1.19,3.59,1.2-5a1.06,1.06,0,0,1,.11-.29.52.52,0,0,1,.19-.22l.67-.39a.12.12,0,0,1,.17,0,.28.28,0,0,1,.07.22v.1L93.61,289.6a1.53,1.53,0,0,1-.11.29.6.6,0,0,1-.19.22l-.68.39a.12.12,0,0,1-.17,0,.3.3,0,0,1-.07-.22.34.34,0,0,1,0-.1Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 93.7386px 284.62px;"
                                        id="el9838w4933hr" class="animable"></path>
                                    <path
                                        d="M103.2,281.39a.73.73,0,0,1-.07.31.44.44,0,0,1-.17.2l-.69.4a.14.14,0,0,1-.17,0,.29.29,0,0,1-.07-.22v-3.52a2.11,2.11,0,0,0-.25-1.19c-.17-.23-.43-.25-.78-.05a1.84,1.84,0,0,0-.75.93,3.92,3.92,0,0,0-.27,1.49v3.52a.82.82,0,0,1-.07.3.46.46,0,0,1-.18.22l-.68.39a.13.13,0,0,1-.17,0,.29.29,0,0,1-.07-.22v-6.46a.73.73,0,0,1,.07-.31.39.39,0,0,1,.17-.2l.68-.4a.15.15,0,0,1,.18,0,.34.34,0,0,1,.07.22v.32a4.9,4.9,0,0,1,.55-.91,2.61,2.61,0,0,1,.74-.67,1.49,1.49,0,0,1,.92-.26.83.83,0,0,1,.6.36,2.16,2.16,0,0,1,.31.85,6.11,6.11,0,0,1,.1,1.18Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 101.004px 279.74px;"
                                        id="elue8w8arfy" class="animable"></path>
                                    <path
                                        d="M105.37,270.67a.14.14,0,0,1,.17,0,.28.28,0,0,1,.07.22V272a.66.66,0,0,1-.07.3.42.42,0,0,1-.17.21l-.78.45a.14.14,0,0,1-.17,0,.29.29,0,0,1-.07-.22v-1.08a.67.67,0,0,1,.07-.31.54.54,0,0,1,.17-.21Zm.2,9.35a.68.68,0,0,1-.08.31.41.41,0,0,1-.17.21l-.68.39a.12.12,0,0,1-.17,0,.28.28,0,0,1-.07-.22v-6.46a.66.66,0,0,1,.07-.3.46.46,0,0,1,.17-.21l.68-.4a.15.15,0,0,1,.17,0,.32.32,0,0,1,.08.23Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 104.98px 275.803px;"
                                        id="elo5ilfpnk54" class="animable"></path>
                                    <path
                                        d="M107.75,275.05c0,.14,0,.31,0,.49s0,.35,0,.48a2.13,2.13,0,0,0,.13.66.81.81,0,0,0,.25.35.47.47,0,0,0,.33.09.75.75,0,0,0,.36-.13,2,2,0,0,0,.38-.27,1.86,1.86,0,0,0,.26-.31,1.93,1.93,0,0,0,.19-.34l.15-.39a2.56,2.56,0,0,1,.12-.32.51.51,0,0,1,.17-.22l.69-.4a.15.15,0,0,1,.17,0,.27.27,0,0,1,.07.23,4.17,4.17,0,0,1-.13.78,5.58,5.58,0,0,1-.4,1,5,5,0,0,1-.68,1,3.51,3.51,0,0,1-1,.84,1.55,1.55,0,0,1-.89.25,1.13,1.13,0,0,1-.69-.29,1.83,1.83,0,0,1-.45-.75,3.91,3.91,0,0,1-.21-1.09c0-.16,0-.34,0-.55s0-.39,0-.58a7,7,0,0,1,.2-1.33,6.71,6.71,0,0,1,.46-1.28,5,5,0,0,1,.69-1.09,3.25,3.25,0,0,1,.89-.78,2,2,0,0,1,1-.31,1.13,1.13,0,0,1,.68.26,1.37,1.37,0,0,1,.4.57,2.28,2.28,0,0,1,.13.63.57.57,0,0,1-.07.3.54.54,0,0,1-.17.21l-.69.4a.13.13,0,0,1-.17,0,.71.71,0,0,1-.12-.18l-.15-.21a.43.43,0,0,0-.19-.13.45.45,0,0,0-.26,0,1.66,1.66,0,0,0-.38.17,1.59,1.59,0,0,0-.36.3,1.87,1.87,0,0,0-.33.47,3.06,3.06,0,0,0-.25.63A3.81,3.81,0,0,0,107.75,275.05Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 108.797px 274.815px;"
                                        id="el1i642qy5s71" class="animable"></path>
                                    <path
                                        d="M111.77,273.22a8.24,8.24,0,0,1,.15-1.56,7.31,7.31,0,0,1,.44-1.44,5.4,5.4,0,0,1,.7-1.2,3.17,3.17,0,0,1,.91-.82,1.55,1.55,0,0,1,.92-.24,1.06,1.06,0,0,1,.69.36,2,2,0,0,1,.45.86,4.82,4.82,0,0,1,.16,1.26v.62a.82.82,0,0,1-.07.31.48.48,0,0,1-.18.21l-3,1.73a1.45,1.45,0,0,0,.08.52.57.57,0,0,0,.23.27.49.49,0,0,0,.34.06A1,1,0,0,0,114,274a2,2,0,0,0,.47-.36,2.2,2.2,0,0,0,.3-.4,2.86,2.86,0,0,1,.16-.25.85.85,0,0,1,.17-.14l.72-.41a.14.14,0,0,1,.18,0,.25.25,0,0,1,.06.22,2,2,0,0,1-.14.58,3.76,3.76,0,0,1-.39.82,5.11,5.11,0,0,1-.64.87,3.44,3.44,0,0,1-.89.72,1.55,1.55,0,0,1-.91.26,1,1,0,0,1-.7-.37,2.24,2.24,0,0,1-.44-.93A5.83,5.83,0,0,1,111.77,273.22Zm2.2-3.36a1.8,1.8,0,0,0-.44.38,2.07,2.07,0,0,0-.31.48,2.86,2.86,0,0,0-.2.53,3.31,3.31,0,0,0-.08.49l2-1.18a2,2,0,0,0-.07-.4.65.65,0,0,0-.16-.32.41.41,0,0,0-.29-.13A.87.87,0,0,0,114,269.86Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 113.98px 271.934px;"
                                        id="elpylrcw40v5" class="animable"></path>
                                    <path
                                        d="M72.7,314.54l-1.29-.34c-1.23-.33-2.7-1.05-2.7-2.63a4.13,4.13,0,0,1,2-3.15,1.25,1.25,0,0,1,2,.95,5,5,0,0,1,2-3.25c1.1-.63,2-.26,2,.85,0,1.58-1.47,4-2.7,5.74Z"
                                        style="fill: #12D30F; transform-origin: 72.71px 310.177px;" id="eli2zqm41aq8"
                                        class="animable"></path>
                                    <path
                                        d="M83.41,308.44a2,2,0,0,1-1-.26,2.57,2.57,0,0,1-1.1-2.37A7.51,7.51,0,0,1,84.69,300a2.28,2.28,0,0,1,3.71,2.14,5.75,5.75,0,0,1-.21,1.49l1.1,1.5a.3.3,0,0,1,0,.33.3.3,0,0,1-.28.17H87.32A6.74,6.74,0,0,1,85,308,3.17,3.17,0,0,1,83.41,308.44Zm2.88-8.34a2.59,2.59,0,0,0-1.28.4,6.8,6.8,0,0,0-3.07,5.31,1.66,1.66,0,0,0,2.75,1.59,6.17,6.17,0,0,0,2.17-2.29.32.32,0,0,1,.28-.16H88.4l-.78-1.07a.32.32,0,0,1-.09-.32,5,5,0,0,0,.23-1.47,2,2,0,0,0-.78-1.82A1.41,1.41,0,0,0,86.29,300.1Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 85.3185px 303.954px;"
                                        id="elsq2cb9s8yrc" class="animable"></path>
                                    <path
                                        d="M94.54,302.4h-.05a.31.31,0,0,1-.27-.29l-.28-4.57-2.71-.74a.32.32,0,0,1-.24-.26.33.33,0,0,1,.16-.32l6.46-3.73a.32.32,0,0,1,.46.38l-3.23,9.32A.32.32,0,0,1,94.54,302.4Zm-2.41-6,2.2.59a.32.32,0,0,1,.23.29l.2,3.21,2.43-7Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 94.5372px 297.425px;"
                                        id="elu2ozbnwvzi" class="animable"></path>
                                    <path
                                        d="M94.24,297.61a.34.34,0,0,1-.19-.07.32.32,0,0,1-.06-.45l3.52-4.52A.32.32,0,0,1,98,293l-3.53,4.52A.31.31,0,0,1,94.24,297.61Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 96.0023px 295.035px;"
                                        id="el9pq8hb2nqn" class="animable"></path>
                                    <path
                                        d="M181.68,251.59h-.07a.32.32,0,0,1-.25-.31v-7.46a.32.32,0,0,1,.16-.27l4.72-2.74a.36.36,0,0,1,.32,0,.32.32,0,0,1,.16.28v7.45a.32.32,0,0,1-.55.23l-2-2L182,251.4A.31.31,0,0,1,181.68,251.59ZM182,244v5.82l1.74-3.78a.33.33,0,0,1,.23-.18.3.3,0,0,1,.28.09l1.83,1.82v-6.14Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 184.04px 246.182px;"
                                        id="eldff0sbzmt0h" class="animable"></path>
                                    <g id="freepik--stars--inject-3" class="animable"
                                        style="transform-origin: 151.68px 232.762px;">
                                        <path
                                            d="M172.23,219a3.76,3.76,0,0,0-3.7.41L138.11,237a11,11,0,0,0-5.09,8.46,3.24,3.24,0,0,0,1.32,2.94l-3.21-1.85a3.21,3.21,0,0,1-1.38-3,10.92,10.92,0,0,1,5.09-8.46l30.43-17.57a4.94,4.94,0,0,1,2.39-.73,2.62,2.62,0,0,1,1.32.34Z"
                                            style="fill: #12D30F; transform-origin: 150.98px 232.595px;"
                                            id="elk404m2tviam" class="animable"></path>
                                        <path
                                            d="M138.11,237l30.43-17.57c2.81-1.62,5.09-.47,5.09,2.58a10.92,10.92,0,0,1-5.09,8.45L138.11,248c-2.81,1.62-5.09.47-5.09-2.58A10.92,10.92,0,0,1,138.11,237Z"
                                            style="fill: #12D30F; transform-origin: 153.325px 233.715px;"
                                            id="elhcrp6d8ays" class="animable"></path>
                                        <g id="el4kf6wm53hl">
                                            <path
                                                d="M138.11,237l30.43-17.57c2.81-1.62,5.09-.47,5.09,2.58a10.92,10.92,0,0,1-5.09,8.45L138.11,248c-2.81,1.62-5.09.47-5.09-2.58A10.92,10.92,0,0,1,138.11,237Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 153.325px 233.715px;"
                                                class="animable" id="el53yp8q49862"></path>
                                        </g>
                                        <g id="freepik--stars--inject-3" class="animable"
                                            style="transform-origin: 153.34px 233.776px;">
                                            <path
                                                d="M141.34,237.49l.54,1.15a.12.12,0,0,0,.17.06l1.21-.46c.19-.07.27.2.13.46l-.87,1.64a.52.52,0,0,0-.07.31l.2,1.48c0,.24-.16.55-.33.53l-1.08-.14a.29.29,0,0,0-.22.13L139.94,244c-.17.22-.37.14-.34-.13l.21-1.72a.25.25,0,0,0-.07-.24l-.87-.63c-.14-.1-.06-.46.13-.61l1.2-.93a.52.52,0,0,0,.18-.27l.54-1.77C141,237.45,141.25,237.31,141.34,237.49Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 141.13px 240.768px;"
                                                id="eljvoqphct9s" class="animable"></path>
                                            <path
                                                d="M147.44,234l.54,1.15a.14.14,0,0,0,.18.07l1.2-.46c.2-.08.27.19.13.45l-.87,1.64a.62.62,0,0,0-.07.32l.21,1.48c0,.23-.17.54-.34.52l-1.08-.13a.25.25,0,0,0-.21.12l-1.08,1.38c-.18.22-.38.14-.34-.13l.2-1.72a.25.25,0,0,0-.06-.24l-.88-.63c-.14-.1-.06-.46.13-.6l1.21-.93a.5.5,0,0,0,.17-.28l.54-1.76C147.11,234,147.36,233.81,147.44,234Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 147.231px 237.295px;"
                                                id="el17hr3rkjltb" class="animable"></path>
                                            <path
                                                d="M153.55,230.5l.54,1.14a.12.12,0,0,0,.17.07l1.21-.46c.19-.07.27.2.13.46l-.87,1.64a.52.52,0,0,0-.07.31l.21,1.48c0,.24-.17.55-.34.53l-1.08-.14a.26.26,0,0,0-.22.13L152.15,237c-.17.22-.37.14-.34-.14l.21-1.72A.24.24,0,0,0,152,235l-.87-.63c-.14-.1-.06-.46.13-.61l1.2-.93a.52.52,0,0,0,.18-.27l.54-1.77C153.22,230.46,153.46,230.32,153.55,230.5Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 153.365px 233.774px;"
                                                id="eli7gmwszs17d" class="animable"></path>
                                            <path
                                                d="M159.65,227l.54,1.15a.14.14,0,0,0,.18.07l1.21-.47c.19-.07.26.2.13.46l-.88,1.64a.51.51,0,0,0-.06.31l.2,1.49c0,.23-.17.54-.34.52l-1.08-.13a.26.26,0,0,0-.21.12l-1.08,1.38c-.17.22-.37.14-.34-.13l.2-1.72a.25.25,0,0,0-.06-.24l-.88-.63c-.13-.1-.06-.46.13-.6l1.21-.93a.62.62,0,0,0,.18-.28l.54-1.77C159.32,227,159.57,226.82,159.65,227Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 159.445px 230.297px;"
                                                id="elld68quwb9fc" class="animable"></path>
                                            <path
                                                d="M165.76,223.51l.54,1.14a.13.13,0,0,0,.18.07l1.2-.46c.19-.07.27.2.13.46l-.87,1.63a.55.55,0,0,0-.07.32l.21,1.48c0,.24-.17.55-.34.52l-1.08-.13a.26.26,0,0,0-.22.13l-1.08,1.38c-.17.22-.37.14-.34-.14l.21-1.72c0-.11,0-.19-.07-.23l-.87-.63c-.14-.1-.06-.46.13-.61l1.21-.93a.57.57,0,0,0,.17-.27l.54-1.77C165.43,223.47,165.67,223.32,165.76,223.51Z"
                                                style="fill: #12D30F; transform-origin: 165.55px 226.801px;"
                                                id="elun5bv4w3zqd" class="animable"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--speech-bubble-1--inject-3" class="animable"
                                style="transform-origin: 210.57px 126.234px;">
                                <g id="freepik--feed--inject-3" class="animable"
                                    style="transform-origin: 210.57px 126.234px;">
                                    <g id="freepik--speech-bubble--inject-3" class="animable"
                                        style="transform-origin: 210.57px 126.234px;">
                                        <g id="freepik--shadow--inject-3">
                                            <g style="opacity: 0.2; transform-origin: 205.445px 123.013px;"
                                                class="animable" id="el8paxh1mcm2g">
                                                <path
                                                    d="M277.57,106.65c0,2.73-1.92,4.48-4.3,5.84L137.62,190.82c-2.37,1.37-4.3.26-4.3-2.48V140.8h0a8.55,8.55,0,0,1,4.28-7.41L273.27,55a2.87,2.87,0,0,1,4.3,2.48h0Z"
                                                    id="elowt6w5or9xa" class="animable"
                                                    style="transform-origin: 205.445px 123.013px;"></path>
                                            </g>
                                        </g>
                                        <g id="freepik--speech-bubble--inject-3" class="animable"
                                            style="transform-origin: 214.565px 128.14px;">
                                            <path
                                                d="M287.78,64.05a5.9,5.9,0,0,0-2.62-4.4l-1-.56a5.83,5.83,0,0,0-5.27,0L143.94,137a5.84,5.84,0,0,0-2.63,4.57v50.52a5.84,5.84,0,0,0,2.63,4.57l1,.56a5.83,5.83,0,0,0,5.27,0l52.58-30.36,41.15-23.75a5.54,5.54,0,0,1,1.18-.51l6.28,6.05.3.23,2.21,1.25,4.06,2.35h0a3.28,3.28,0,0,0,3-.18,5.28,5.28,0,0,0,2.07-4.24v-13a5.84,5.84,0,0,1,2.63-4.57l19.47-11.24a5.81,5.81,0,0,0,2.64-4.57V64.25C287.8,64.17,287.78,64.11,287.78,64.05Z"
                                                style="fill: #12D30F; transform-origin: 214.549px 128.155px;"
                                                id="elewnyv0ur1u" class="animable"></path>
                                            <g id="el2cax6r6h055">
                                                <path
                                                    d="M287.78,64.05a5.9,5.9,0,0,0-2.62-4.4l-1-.56a5.83,5.83,0,0,0-5.27,0L143.94,137a5.84,5.84,0,0,0-2.63,4.57v50.52a5.84,5.84,0,0,0,2.63,4.57l1,.56a5.83,5.83,0,0,0,5.27,0l52.58-30.36,41.15-23.75a5.54,5.54,0,0,1,1.18-.51l6.28,6.05.3.23,2.21,1.25,4.06,2.35h0a3.28,3.28,0,0,0,3-.18,5.28,5.28,0,0,0,2.07-4.24v-13a5.84,5.84,0,0,1,2.63-4.57l19.47-11.24a5.81,5.81,0,0,0,2.64-4.57V64.25C287.8,64.17,287.78,64.11,287.78,64.05Z"
                                                    style="opacity: 0.25; transform-origin: 214.549px 128.155px;"
                                                    class="animable" id="elrpwp8rfsqnr"></path>
                                            </g>
                                            <path
                                                d="M287.8,64.22c0-1.68-1.18-2.36-2.64-1.52l-135,77.94a5.09,5.09,0,0,0-1.65,1.62l-6.24-3.6A5.1,5.1,0,0,1,144,137l135-77.94a5.83,5.83,0,0,1,5.27,0l1,.56A5.83,5.83,0,0,1,287.8,64.22Z"
                                                style="fill: #12D30F; transform-origin: 215.035px 100.345px;"
                                                id="elr1km1lx5di" class="animable"></path>
                                            <g id="el5nybio4qu1s">
                                                <path
                                                    d="M287.8,64.22c0-1.68-1.18-2.36-2.64-1.52l-135,77.94a5.09,5.09,0,0,0-1.65,1.62l-6.24-3.6A5.1,5.1,0,0,1,144,137l135-77.94a5.83,5.83,0,0,1,5.27,0l1,.56A5.83,5.83,0,0,1,287.8,64.22Z"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 215.035px 100.345px;"
                                                    class="animable" id="elsandtsxwwbi"></path>
                                            </g>
                                            <path
                                                d="M149,197.07c-.85,0-.94-.95-.94-1.36V145.19a5.34,5.34,0,0,1,2.38-4.12l135-77.9a1.92,1.92,0,0,1,.92-.29c.85,0,.94.95.94,1.37v50.51a5.34,5.34,0,0,1-2.38,4.12l-19.47,11.24a6.32,6.32,0,0,0-2.89,5v13a4.79,4.79,0,0,1-1.81,3.79,3.08,3.08,0,0,1-1.51.41h0a1.79,1.79,0,0,1-1.23-.39l-9.77-9.4a2.5,2.5,0,0,0-1.78-.6,5.78,5.78,0,0,0-2.78.79l-93.72,54.09A1.92,1.92,0,0,1,149,197.07Z"
                                                style="fill: rgb(250, 250, 250); transform-origin: 217.68px 129.975px;"
                                                id="elq95dm6r5eql" class="animable"></path>
                                            <path
                                                d="M286.34,63.4c.37,0,.42.53.42.85v50.51a4.86,4.86,0,0,1-2.12,3.68l-19.46,11.23a6.91,6.91,0,0,0-3.16,5.47v13a4.26,4.26,0,0,1-1.54,3.34,2.57,2.57,0,0,1-1.27.34,1.28,1.28,0,0,1-.86-.25l-9.77-9.4a3,3,0,0,0-2.14-.73,6.32,6.32,0,0,0-3,.85l-93.73,54.09a1.37,1.37,0,0,1-.66.23c-.37,0-.43-.54-.43-.85V145.19a4.85,4.85,0,0,1,2.12-3.67l135-77.9a1.42,1.42,0,0,1,.66-.22m0-1a2.42,2.42,0,0,0-1.18.36l-135,77.9a5.83,5.83,0,0,0-2.64,4.57v50.52c0,1.19.59,1.88,1.46,1.88a2.48,2.48,0,0,0,1.18-.36l93.72-54.09a5.26,5.26,0,0,1,2.52-.72,2,2,0,0,1,1.42.45l9.77,9.4a2.26,2.26,0,0,0,1.58.54,3.58,3.58,0,0,0,1.78-.48,5.28,5.28,0,0,0,2.07-4.24v-13a5.84,5.84,0,0,1,2.63-4.57l19.47-11.24a5.81,5.81,0,0,0,2.64-4.57V64.25c0-1.2-.6-1.89-1.46-1.89Z"
                                                style="fill: rgb(230, 230, 230); transform-origin: 217.7px 129.995px;"
                                                id="el9nak7s1ecg" class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M274,79.82a2.8,2.8,0,0,0,1.26-2.18c0-.8-.57-1.12-1.26-.72a2.78,2.78,0,0,0-1.26,2.17C272.7,79.89,273.27,80.22,274,79.82Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 273.999px 78.369px;"
                                        id="els751i29pw4f" class="animable"></path>
                                    <path
                                        d="M278.08,77.45a2.77,2.77,0,0,0,1.26-2.18c0-.8-.56-1.12-1.26-.72a2.77,2.77,0,0,0-1.25,2.17C276.83,77.52,277.39,77.85,278.08,77.45Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 278.085px 75.999px;"
                                        id="el56mfxa89nlc" class="animable"></path>
                                    <path
                                        d="M269.84,82.19A2.79,2.79,0,0,0,271.09,80c0-.8-.56-1.12-1.25-.72a2.75,2.75,0,0,0-1.26,2.17C268.58,82.26,269.14,82.59,269.84,82.19Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 269.835px 80.7339px;"
                                        id="el9ihvkoj1tkv" class="animable"></path>
                                    <path
                                        d="M160.46,143.06l30.61-17.67c1.2-.69,2.18-.18,2.18,1.15a4.71,4.71,0,0,1-2.18,3.66l-30.61,17.67c-1.2.7-2.17.18-2.17-1.15A4.73,4.73,0,0,1,160.46,143.06Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 175.77px 136.632px;"
                                        id="elvmuylyifpt" class="animable"></path>
                                    <path
                                        d="M159.65,151.75l24.63-14.2c.75-.43,1.35-.11,1.35.72a2.93,2.93,0,0,1-1.35,2.28l-24.63,14.2c-.75.43-1.36.11-1.36-.72A3,3,0,0,1,159.65,151.75Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 171.96px 146.15px;"
                                        id="el6zyit5vjkhg" class="animable"></path>
                                    <path
                                        d="M189.28,138.37a4.56,4.56,0,0,0,2-3.54c0-1.3-.91-1.83-2-1.18a4.51,4.51,0,0,0-2,3.54C187.24,138.49,188.15,139,189.28,138.37Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 189.279px 136.006px;"
                                        id="elz7o9tus6fwm" class="animable"></path>
                                    <path
                                        d="M202.58,139.61l75-43.51c1.19-.69,2.16-.2,2.16,1.1a4.67,4.67,0,0,1-2.16,3.6l-75,43.5c-1.19.69-2.16.2-2.16-1.1A4.65,4.65,0,0,1,202.58,139.61Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 240.08px 120.2px;"
                                        id="el1ac2hc1qs9k" class="animable"></path>
                                    <path
                                        d="M156.58,162.05a2.41,2.41,0,0,1,1.07-.36,1.3,1.3,0,0,1,.76.18,1.22,1.22,0,0,1,.46.56,2,2,0,0,1,.18.75.57.57,0,0,1-.07.31.44.44,0,0,1-.17.2l-.63.37c-.1.06-.18.07-.23,0a.45.45,0,0,1-.14-.16.74.74,0,0,0-.41-.37,1.11,1.11,0,0,0-.82.22,2.66,2.66,0,0,0-.44.33,2.48,2.48,0,0,0-.37.43,2.13,2.13,0,0,0-.25.5,1.58,1.58,0,0,0-.09.52.93.93,0,0,0,.09.47.36.36,0,0,0,.29.18,1.48,1.48,0,0,0,.53,0l.83-.18a3.38,3.38,0,0,1,.93-.12,1.09,1.09,0,0,1,.64.21,1.27,1.27,0,0,1,.37.58,3.07,3.07,0,0,1,.12.94,4.68,4.68,0,0,1-.18,1.26,5.36,5.36,0,0,1-.51,1.21,5.54,5.54,0,0,1-.82,1.07,4.93,4.93,0,0,1-1.09.85,2.82,2.82,0,0,1-1,.37,1.39,1.39,0,0,1-.82-.07,1.15,1.15,0,0,1-.57-.52,2.19,2.19,0,0,1-.24-1,.57.57,0,0,1,.06-.31.51.51,0,0,1,.18-.2l.63-.37a.32.32,0,0,1,.23-.05.31.31,0,0,1,.14.17,1.51,1.51,0,0,0,.15.28.45.45,0,0,0,.25.17.68.68,0,0,0,.38,0,2.06,2.06,0,0,0,.57-.24,3.46,3.46,0,0,0,.52-.36,2.39,2.39,0,0,0,.44-.46,2.43,2.43,0,0,0,.31-.54,1.52,1.52,0,0,0,.11-.6.6.6,0,0,0-.12-.43.48.48,0,0,0-.38-.11,3.74,3.74,0,0,0-.64.1c-.25.06-.54.13-.87.19a2.81,2.81,0,0,1-.79.06.92.92,0,0,1-.56-.24,1.28,1.28,0,0,1-.32-.59,3.6,3.6,0,0,1-.11-1,4.55,4.55,0,0,1,.18-1.25,5.42,5.42,0,0,1,.49-1.19,5.36,5.36,0,0,1,.75-1A4.42,4.42,0,0,1,156.58,162.05Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 156.614px 167.044px;"
                                        id="el864rp61kdtf" class="animable"></path>
                                    <path
                                        d="M162.24,161.28a1.79,1.79,0,0,1,.89-.28,1.1,1.1,0,0,1,.69.25,1.63,1.63,0,0,1,.47.7,3.4,3.4,0,0,1,.21,1.08v1.4a7.44,7.44,0,0,1-.21,1.31,6.51,6.51,0,0,1-.47,1.23,5,5,0,0,1-.69,1,3.53,3.53,0,0,1-.89.76,1.83,1.83,0,0,1-.9.28,1,1,0,0,1-.69-.25,1.62,1.62,0,0,1-.47-.69A3.71,3.71,0,0,1,160,167c0-.08,0-.18,0-.31V166c0-.13,0-.24,0-.32a5.94,5.94,0,0,1,.2-1.31,6.35,6.35,0,0,1,.47-1.24,4.77,4.77,0,0,1,.69-1.05A3.37,3.37,0,0,1,162.24,161.28Zm1.09,2.49a2.15,2.15,0,0,0-.13-.63.68.68,0,0,0-.26-.31.47.47,0,0,0-.33,0,1.15,1.15,0,0,0-.37.15,1.84,1.84,0,0,0-.37.27,2.14,2.14,0,0,0-.34.42,2.78,2.78,0,0,0-.25.6,3.52,3.52,0,0,0-.13.79c0,.08,0,.17,0,.28V166c0,.11,0,.2,0,.26a1.93,1.93,0,0,0,.13.64.59.59,0,0,0,.25.3.5.5,0,0,0,.34,0,1,1,0,0,0,.37-.15,2.17,2.17,0,0,0,.37-.27,2.12,2.12,0,0,0,.33-.42,2.78,2.78,0,0,0,.26-.6,4.2,4.2,0,0,0,.13-.79v-1.25Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 162.25px 165.005px;"
                                        id="elumzknhs6hs" class="animable"></path>
                                    <path
                                        d="M167.59,158.19a1.83,1.83,0,0,1,.9-.28,1.08,1.08,0,0,1,.69.25,1.83,1.83,0,0,1,.47.7,3.65,3.65,0,0,1,.2,1.08,2.73,2.73,0,0,1,0,.31V161a3.11,3.11,0,0,1,0,.32,6,6,0,0,1-.21,1.31,6.48,6.48,0,0,1-.46,1.23,5.87,5.87,0,0,1-.69,1,3.79,3.79,0,0,1-.9.76,1.83,1.83,0,0,1-.9.28,1.14,1.14,0,0,1-.69-.25,1.61,1.61,0,0,1-.46-.69,3.39,3.39,0,0,1-.21-1.07c0-.08,0-.19,0-.31s0-.25,0-.38,0-.26,0-.39,0-.24,0-.32a6.49,6.49,0,0,1,.2-1.31A7.06,7.06,0,0,1,166,160a5.61,5.61,0,0,1,.69-1.05A3.37,3.37,0,0,1,167.59,158.19Zm1.09,2.49a1.93,1.93,0,0,0-.13-.64.61.61,0,0,0-.26-.3.53.53,0,0,0-.33,0,1.3,1.3,0,0,0-.37.16,1.84,1.84,0,0,0-.37.27,1.81,1.81,0,0,0-.33.42,2.78,2.78,0,0,0-.26.6,3.52,3.52,0,0,0-.13.79c0,.08,0,.17,0,.28s0,.23,0,.35,0,.24,0,.35,0,.21,0,.27a1.81,1.81,0,0,0,.13.63.64.64,0,0,0,.26.31.46.46,0,0,0,.33,0,1,1,0,0,0,.37-.15,1.84,1.84,0,0,0,.37-.27,1.81,1.81,0,0,0,.33-.42,2.78,2.78,0,0,0,.26-.6,3.52,3.52,0,0,0,.13-.79,2.18,2.18,0,0,0,0-.28V161A2.1,2.1,0,0,0,168.68,160.68Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 167.592px 161.905px;"
                                        id="el1z97xy0lkpq" class="animable"></path>
                                    <path
                                        d="M175,162.66a2.12,2.12,0,0,0,.39-.32,2.39,2.39,0,0,0,.36-.49,3.72,3.72,0,0,0,.26-.64,2.74,2.74,0,0,0,.11-.76v-.52c0,.12-.12.24-.19.38a3.7,3.7,0,0,1-.29.44,4.88,4.88,0,0,1-.38.43,3.08,3.08,0,0,1-.5.37,1.26,1.26,0,0,1-.82.2,1,1,0,0,1-.62-.36,2,2,0,0,1-.4-.81,4.26,4.26,0,0,1-.17-1.13c0-.13,0-.29,0-.48s0-.35,0-.49a6.82,6.82,0,0,1,.17-1.32,6.49,6.49,0,0,1,.4-1.27,5.16,5.16,0,0,1,.62-1.08,2.83,2.83,0,0,1,.82-.74,1.58,1.58,0,0,1,.5-.21,1,1,0,0,1,.38,0,.83.83,0,0,1,.29.1l.19.16v-.31a.67.67,0,0,1,.07-.31.46.46,0,0,1,.17-.21l.68-.39c.07,0,.13,0,.17,0a.28.28,0,0,1,.08.22v6.5a6.38,6.38,0,0,1-.61,2.88,4.3,4.3,0,0,1-1.68,1.82,2,2,0,0,1-.85.3,1.24,1.24,0,0,1-.68-.1,1.14,1.14,0,0,1-.46-.44,1.59,1.59,0,0,1-.19-.71.69.69,0,0,1,.07-.3.54.54,0,0,1,.17-.21l.62-.35a.17.17,0,0,1,.21,0l.16.16a.44.44,0,0,0,.32.2A1.18,1.18,0,0,0,175,162.66Zm-1.08-4.76a5.08,5.08,0,0,0,0,.78c0,.58.16.94.36,1.09a.67.67,0,0,0,.75,0,2,2,0,0,0,.74-.83,3.28,3.28,0,0,0,.35-1.35c0-.15,0-.32,0-.54s0-.38,0-.51a1.27,1.27,0,0,0-.35-.94.61.61,0,0,0-.74,0,2,2,0,0,0-.75.83A3.76,3.76,0,0,0,173.9,157.9Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 175.021px 158.766px;"
                                        id="el07ea6h0746ub" class="animable"></path>
                                    <path
                                        d="M180.57,150.7a1.82,1.82,0,0,1,.89-.28,1.09,1.09,0,0,1,.7.25,1.76,1.76,0,0,1,.47.7,3.64,3.64,0,0,1,.2,1.07c0,.08,0,.19,0,.32v.77c0,.12,0,.23,0,.31a7.3,7.3,0,0,1-.21,1.31,6.33,6.33,0,0,1-.46,1.24,5.41,5.41,0,0,1-.7,1,3.32,3.32,0,0,1-.89.75,1.85,1.85,0,0,1-.9.29,1.12,1.12,0,0,1-.69-.25,1.51,1.51,0,0,1-.46-.7,3.33,3.33,0,0,1-.21-1.07,2.63,2.63,0,0,1,0-.3c0-.12,0-.25,0-.38s0-.26,0-.39a3.22,3.22,0,0,1,0-.33,6,6,0,0,1,.2-1.31,6.6,6.6,0,0,1,.47-1.24,5.15,5.15,0,0,1,.69-1.05A3.53,3.53,0,0,1,180.57,150.7Zm1.09,2.49a1.88,1.88,0,0,0-.13-.64.61.61,0,0,0-.26-.3.47.47,0,0,0-.33,0,1.44,1.44,0,0,0-.37.15,2.4,2.4,0,0,0-.37.28,1.81,1.81,0,0,0-.33.42,2.36,2.36,0,0,0-.26.6,3.52,3.52,0,0,0-.13.79,2.27,2.27,0,0,0,0,.28c0,.11,0,.23,0,.35s0,.24,0,.35a1.78,1.78,0,0,0,0,.26,1.88,1.88,0,0,0,.13.64.56.56,0,0,0,.26.3.42.42,0,0,0,.33,0,1.6,1.6,0,0,0,.37-.15,1.95,1.95,0,0,0,.7-.7,2.78,2.78,0,0,0,.26-.6,3.43,3.43,0,0,0,.13-.78c0-.07,0-.16,0-.28v-.7C181.67,153.35,181.66,153.26,181.66,153.19Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 180.568px 154.425px;"
                                        id="elyfroegpwmi" class="animable"></path>
                                    <path
                                        d="M185.92,147.61a1.73,1.73,0,0,1,.9-.28,1,1,0,0,1,.69.25,1.66,1.66,0,0,1,.47.7,3.34,3.34,0,0,1,.2,1.07,2.92,2.92,0,0,1,0,.32v.76a2.92,2.92,0,0,1,0,.32,6.49,6.49,0,0,1-.2,1.31,6,6,0,0,1-.47,1.23,4.77,4.77,0,0,1-.69,1.05,3.53,3.53,0,0,1-.9.75,1.7,1.7,0,0,1-.89.28,1,1,0,0,1-.69-.24,1.6,1.6,0,0,1-.47-.7,4,4,0,0,1-.21-1.07c0-.08,0-.18,0-.3v-.77c0-.13,0-.24,0-.33a6.06,6.06,0,0,1,.21-1.31,6,6,0,0,1,.47-1.24,4.77,4.77,0,0,1,.69-1A3.49,3.49,0,0,1,185.92,147.61ZM187,150.1a1.67,1.67,0,0,0-.13-.64.59.59,0,0,0-.25-.3.45.45,0,0,0-.34,0,1.6,1.6,0,0,0-.37.15,2.2,2.2,0,0,0-.36.28,1.6,1.6,0,0,0-.34.42,2.35,2.35,0,0,0-.25.6,3,3,0,0,0-.13.78,2.33,2.33,0,0,0,0,.29v.7a1.61,1.61,0,0,0,0,.26,1.67,1.67,0,0,0,.13.64.55.55,0,0,0,.25.3.49.49,0,0,0,.34,0,1.38,1.38,0,0,0,.36-.15,1.9,1.9,0,0,0,.37-.28,2.14,2.14,0,0,0,.34-.42,2.78,2.78,0,0,0,.25-.6,3,3,0,0,0,.13-.79,2,2,0,0,0,0-.27v-.7A2.1,2.1,0,0,0,187,150.1Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 185.922px 151.35px;"
                                        id="el99cv7vneoye" class="animable"></path>
                                    <path
                                        d="M191,144.67a1.58,1.58,0,0,1,.5-.21,1,1,0,0,1,.38,0,.83.83,0,0,1,.29.1l.19.16v-3a.66.66,0,0,1,.07-.3.46.46,0,0,1,.17-.21l.68-.4a.12.12,0,0,1,.17,0,.28.28,0,0,1,.08.22v9.09a.67.67,0,0,1-.08.3.41.41,0,0,1-.17.21l-.68.4a.13.13,0,0,1-.17,0,.28.28,0,0,1-.07-.22v-.32c0,.11-.11.24-.19.38a4.73,4.73,0,0,1-.29.44,4.88,4.88,0,0,1-.38.43,3.08,3.08,0,0,1-.5.37,1.26,1.26,0,0,1-.82.2,1,1,0,0,1-.62-.36,2.19,2.19,0,0,1-.4-.81,4.26,4.26,0,0,1-.17-1.13c0-.13,0-.29,0-.48s0-.35,0-.49a6.82,6.82,0,0,1,.17-1.32,7.24,7.24,0,0,1,.4-1.27,5.16,5.16,0,0,1,.62-1.08A2.83,2.83,0,0,1,191,144.67Zm-.84,3.83a5.08,5.08,0,0,0,0,.78c0,.58.16.94.36,1.09a.67.67,0,0,0,.75,0,2,2,0,0,0,.74-.83,3.28,3.28,0,0,0,.35-1.35c0-.15,0-.32,0-.54s0-.38,0-.51a1.29,1.29,0,0,0-.35-.94.63.63,0,0,0-.74,0,2,2,0,0,0-.75.83A3.76,3.76,0,0,0,190.18,148.5Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 191.26px 146.546px;"
                                        id="elko0pdvsmjiq" class="animable"></path>
                                    <path
                                        d="M195.77,147.3a.13.13,0,0,1,.17,0,.29.29,0,0,1,.07.22v1.22a.7.7,0,0,1-.07.31.46.46,0,0,1-.17.21l-.77.45a.15.15,0,0,1-.18,0,.32.32,0,0,1-.07-.22v-1.22a.82.82,0,0,1,.07-.3.43.43,0,0,1,.18-.21ZM196,146a.92.92,0,0,1-.07.31.4.4,0,0,1-.18.2l-.68.4a.13.13,0,0,1-.17,0,.29.29,0,0,1-.07-.22V140.5a.66.66,0,0,1,.07-.3A.46.46,0,0,1,195,140l.68-.4a.15.15,0,0,1,.18,0,.32.32,0,0,1,.07.22Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 195.38px 144.655px;"
                                        id="elwxld9dhcjf" class="animable"></path>
                                    <path
                                        d="M162.08,183.79l-1.29-.34c-1.23-.33-2.7-1-2.7-2.63a4.12,4.12,0,0,1,2-3.15,1.25,1.25,0,0,1,2,1,5,5,0,0,1,2-3.25c1.1-.63,2-.25,2,.85,0,1.58-1.46,4-2.69,5.74Z"
                                        style="fill: #12D30F; transform-origin: 162.09px 179.453px;" id="el4odfzi3f94e"
                                        class="animable"></path>
                                    <path
                                        d="M172.78,177.69a2,2,0,0,1-1-.26,2.57,2.57,0,0,1-1.1-2.37,7.49,7.49,0,0,1,3.39-5.86,2.27,2.27,0,0,1,3.7,2.14,5.75,5.75,0,0,1-.21,1.49l1.1,1.5a.33.33,0,0,1,0,.33.33.33,0,0,1-.29.18h-1.71a6.77,6.77,0,0,1-2.3,2.36A3.21,3.21,0,0,1,172.78,177.69Zm2.89-8.34a2.53,2.53,0,0,0-1.28.4,6.77,6.77,0,0,0-3.07,5.31,1.66,1.66,0,0,0,2.75,1.59,6.33,6.33,0,0,0,2.17-2.29.3.3,0,0,1,.27-.16h1.27l-.79-1.07a.34.34,0,0,1-.09-.32,5.06,5.06,0,0,0,.24-1.47,2,2,0,0,0-.79-1.82A1.4,1.4,0,0,0,175.67,169.35Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 174.686px 173.176px;"
                                        id="elr7hy62oqsb" class="animable"></path>
                                    <path
                                        d="M183.91,171.66h0a.32.32,0,0,1-.28-.29l-.28-4.57-2.71-.74a.31.31,0,0,1-.23-.26.32.32,0,0,1,.15-.32l6.46-3.73a.32.32,0,0,1,.46.38l-3.23,9.32A.32.32,0,0,1,183.91,171.66Zm-2.41-6,2.2.59a.31.31,0,0,1,.23.29l.2,3.21,2.43-7Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 183.951px 166.686px;"
                                        id="el0pur65ky72x" class="animable"></path>
                                    <path
                                        d="M183.62,166.86a.37.37,0,0,1-.2-.07.32.32,0,0,1,0-.45l3.52-4.52a.32.32,0,0,1,.44,0,.31.31,0,0,1,.06.44l-3.52,4.52A.34.34,0,0,1,183.62,166.86Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 185.417px 164.3px;"
                                        id="elm1ra4ldmo7" class="animable"></path>
                                    <path
                                        d="M271.06,120.84H271a.31.31,0,0,1-.25-.31v-7.45a.32.32,0,0,1,.16-.28l4.71-2.74a.36.36,0,0,1,.32,0,.33.33,0,0,1,.16.28v7.45a.33.33,0,0,1-.2.3.31.31,0,0,1-.34-.07l-2.05-2-2.16,4.68A.3.3,0,0,1,271.06,120.84Zm.31-7.59v5.82l1.74-3.78a.35.35,0,0,1,.23-.18.34.34,0,0,1,.29.09l1.82,1.82v-6.14Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 273.425px 115.432px;"
                                        id="elhax548wi0h5" class="animable"></path>
                                    <g id="freepik--stars--inject-3" class="animable"
                                        style="transform-origin: 241.055px 101.999px;">
                                        <path
                                            d="M261.61,88.25a3.76,3.76,0,0,0-3.7.41l-30.42,17.56a11,11,0,0,0-5.09,8.46,3.24,3.24,0,0,0,1.32,2.94l-3.21-1.85a3.21,3.21,0,0,1-1.38-3,10.92,10.92,0,0,1,5.09-8.46l30.43-17.57A4.94,4.94,0,0,1,257,86a2.62,2.62,0,0,1,1.32.34Z"
                                            style="fill: #12D30F; transform-origin: 240.36px 101.81px;" id="elzgjqdzgdyhk"
                                            class="animable"></path>
                                        <path
                                            d="M227.49,106.23l30.42-17.57c2.81-1.62,5.09-.47,5.09,2.58a10.93,10.93,0,0,1-5.09,8.46l-30.42,17.56c-2.82,1.63-5.1.47-5.1-2.58A10.9,10.9,0,0,1,227.49,106.23Z"
                                            style="fill: #12D30F; transform-origin: 242.695px 102.962px;"
                                            id="elm2f1n7wb2c" class="animable"></path>
                                        <g id="el9ev3ycgsy9d">
                                            <path
                                                d="M227.49,106.23l30.42-17.57c2.81-1.62,5.09-.47,5.09,2.58a10.93,10.93,0,0,1-5.09,8.46l-30.42,17.56c-2.82,1.63-5.1.47-5.1-2.58A10.9,10.9,0,0,1,227.49,106.23Z"
                                                style="fill: rgb(255, 255, 255); opacity: 0.45; transform-origin: 242.695px 102.962px;"
                                                class="animable" id="el8e7jsidvs6s"></path>
                                        </g>
                                        <g id="freepik--stars--inject-3" class="animable"
                                            style="transform-origin: 242.711px 103.043px;">
                                            <path
                                                d="M230.71,106.74l.54,1.15a.14.14,0,0,0,.18.07l1.2-.47c.19-.07.27.2.13.46l-.87,1.64a.52.52,0,0,0-.07.31l.21,1.48c0,.24-.17.55-.34.53l-1.08-.13a.25.25,0,0,0-.22.12l-1.08,1.38c-.17.22-.37.14-.33-.13l.2-1.72a.25.25,0,0,0-.07-.24l-.87-.63c-.14-.1-.06-.46.13-.61l1.21-.93a.57.57,0,0,0,.17-.27l.54-1.77C230.38,106.7,230.63,106.56,230.71,106.74Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 230.5px 110.033px;"
                                                id="elf7ik23aj5j7" class="animable"></path>
                                            <path
                                                d="M236.82,103.25l.54,1.14a.12.12,0,0,0,.17.07l1.21-.46c.19-.08.27.19.13.45l-.88,1.64a.54.54,0,0,0-.06.32l.2,1.48c0,.23-.16.54-.33.52l-1.08-.13a.26.26,0,0,0-.22.13l-1.08,1.37c-.17.22-.37.15-.34-.13l.21-1.72a.28.28,0,0,0-.07-.24l-.87-.63c-.14-.1-.07-.45.13-.6l1.2-.93a.59.59,0,0,0,.18-.27l.54-1.77C236.48,103.21,236.73,103.06,236.82,103.25Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 236.609px 106.537px;"
                                                id="elnevccrrtl5r" class="animable"></path>
                                            <path
                                                d="M242.92,99.75l.54,1.15a.13.13,0,0,0,.18.06l1.2-.46c.2-.07.27.2.13.46l-.87,1.64a.61.61,0,0,0-.07.31l.21,1.48c0,.24-.17.55-.34.53l-1.08-.14a.29.29,0,0,0-.22.13l-1.07,1.38c-.18.22-.38.14-.34-.13l.2-1.72a.25.25,0,0,0-.06-.24l-.88-.63c-.14-.1-.06-.46.13-.61l1.21-.93a.57.57,0,0,0,.17-.27l.54-1.77C242.59,99.71,242.84,99.57,242.92,99.75Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 242.711px 103.043px;"
                                                id="elzs1mm2jcj0g" class="animable"></path>
                                            <path
                                                d="M249,96.25l.54,1.15a.12.12,0,0,0,.17.07L251,97c.19-.08.27.19.13.45l-.87,1.64a.52.52,0,0,0-.07.31l.21,1.49c0,.23-.17.54-.34.52l-1.08-.13a.28.28,0,0,0-.22.12l-1.08,1.38c-.17.22-.37.14-.34-.13l.21-1.72a.25.25,0,0,0-.07-.24l-.87-.63c-.14-.1-.06-.46.13-.6l1.2-.93a.51.51,0,0,0,.18-.28l.54-1.76C248.7,96.21,248.94,96.07,249,96.25Z"
                                                style="fill: #12D30F; transform-origin: 248.87px 99.5383px;"
                                                id="eluxp688n4oda" class="animable"></path>
                                            <path
                                                d="M248.61,96.5l-.54,1.76a.51.51,0,0,1-.18.28l-1.2.93c-.19.14-.27.5-.13.6l.87.63a.25.25,0,0,1,.07.24l-.21,1.72c0,.27.17.35.34.13l1.08-1.38a.31.31,0,0,1,.11-.09V96.2A.51.51,0,0,0,248.61,96.5Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 247.655px 99.5585px;"
                                                id="elkapampjkwzg" class="animable"></path>
                                            <path
                                                d="M255.13,92.76l.54,1.14a.13.13,0,0,0,.18.07l1.21-.46c.19-.07.26.2.12.46l-.87,1.63a.66.66,0,0,0-.07.32l.21,1.48c0,.24-.17.55-.34.53L255,97.79a.25.25,0,0,0-.21.13l-1.08,1.38c-.17.22-.37.14-.34-.14l.2-1.72a.24.24,0,0,0-.06-.23l-.88-.63c-.13-.1-.06-.46.13-.61L254,95a.59.59,0,0,0,.18-.27l.54-1.77C254.8,92.72,255.05,92.58,255.13,92.76Z"
                                                style="fill: #12D30F; transform-origin: 254.909px 96.0524px;"
                                                id="elyspjgv82mso" class="animable"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--stars--inject-3" class="animable"
                                style="transform-origin: 91.3538px 79.1908px;">
                                <g id="freepik--stars--inject-3" class="animable"
                                    style="transform-origin: 91.3538px 79.1908px;">
                                    <path
                                        d="M52.6,100.33c.44-.81.36-1.64,0-1.87-.13-.07-3.16-1.81-3.55-2a.54.54,0,0,0-.5,0l-3.26,1.25-1.08-2.29a.54.54,0,0,0-.24-.27c-.45-.25-3.46-2-3.55-2.06-.45-.25-1.2.31-1.49,1.27l-2.22,7.27a2.3,2.3,0,0,1-.72,1.12l-5,3.82c-.79.61-1.1,2.08-.53,2.49l3.59,2.59a1,1,0,0,1,.27,1l-.84,7.07c-.07.52.07.87.31,1l3.56,2.06c.28.16.7,0,1.08-.45l4.43-5.67a1.11,1.11,0,0,1,.9-.52l4.43.55c.71.09,1.53-1.19,1.4-2.16l-.85-6.09a2.22,2.22,0,0,1,.28-1.29Z"
                                        style="fill: #12D30F; transform-origin: 41.5342px 107.936px;" id="el70bjaia5z4g"
                                        class="animable"></path>
                                    <g id="el5xqom6xm79i">
                                        <path
                                            d="M52.56,98.46a.59.59,0,0,0-.49,0l-5,1.9a.52.52,0,0,1-.72-.28l-1.14-2.43,3.26-1.24a.52.52,0,0,1,.49,0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 48.885px 98.3821px;"
                                            class="animable" id="el3ysp47t520o"></path>
                                    </g>
                                    <g id="elcwueq6199tn">
                                        <path
                                            d="M40.24,103.62a2.42,2.42,0,0,1-.73,1.13l-5,3.82a1.86,1.86,0,0,0-.53.67l-3.56-2.06a2,2,0,0,1,.53-.67l5-3.82a2.38,2.38,0,0,0,.73-1.12h0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 35.33px 105.405px;"
                                            class="animable" id="eldwb4dbfkihf"></path>
                                    </g>
                                    <g id="eluec0y9j4hx">
                                        <path
                                            d="M44,95.1c-.45-.29-1.21.28-1.51,1.26l-2.21,7.26-3.56-2.06,2.21-7.26c.29-1,1-1.52,1.49-1.27.09.06,3.1,1.81,3.56,2C43.94,95.09,44,95.09,44,95.1Z"
                                            style="opacity: 0.1; transform-origin: 40.36px 98.2939px;" class="animable"
                                            id="elvwsly4arxcn"></path>
                                    </g>
                                    <g id="el2f4yhic6pw7">
                                        <path
                                            d="M37.6,113.66l-3.52-2s0,0,0,0L30.46,109c-.41-.3-.36-1.14,0-1.82L34,109.24c-.36.67-.41,1.52,0,1.82Z"
                                            style="opacity: 0.25; transform-origin: 33.8855px 110.42px;" class="animable"
                                            id="el88mpxu7150c"></path>
                                    </g>
                                    <g id="elhtt8nheyc6b">
                                        <path
                                            d="M37,121.7c-.06.53.09.88.35,1h0l-3.56-2.06c-.24-.14-.38-.48-.32-1l.86-7.07a1.11,1.11,0,0,0-.25-.94l3.52,2h0a1.09,1.09,0,0,1,.25.94Z"
                                            style="opacity: 0.15; transform-origin: 35.6642px 117.165px;" class="animable"
                                            id="el3rtbvjox022"></path>
                                    </g>
                                    <path
                                        d="M44.17,95.36l2.22,4.71a.53.53,0,0,0,.72.29l5-1.91c.79-.3,1.1.81.53,1.88L49,107.07a2.22,2.22,0,0,0-.28,1.29l.85,6.09c.13,1-.69,2.25-1.4,2.16l-4.43-.55a1.11,1.11,0,0,0-.9.52l-4.43,5.67c-.71.9-1.53.57-1.39-.55l.84-7.07a1,1,0,0,0-.27-1L34,111.06c-.57-.41-.26-1.88.53-2.49l5-3.82a2.3,2.3,0,0,0,.72-1.12l2.22-7.27C42.8,95.2,43.82,94.61,44.17,95.36Z"
                                        style="fill: #12D30F; transform-origin: 43.32px 108.897px;" id="elwd1uyx91w5s"
                                        class="animable"></path>
                                    <g id="elktl5ax4vnp">
                                        <path
                                            d="M44.17,95.36l2.22,4.71a.53.53,0,0,0,.72.29l5-1.91c.79-.3,1.1.81.53,1.88L49,107.07a2.22,2.22,0,0,0-.28,1.29l.85,6.09c.13,1-.69,2.25-1.4,2.16l-4.43-.55a1.11,1.11,0,0,0-.9.52l-4.43,5.67c-.71.9-1.53.57-1.39-.55l.84-7.07a1,1,0,0,0-.27-1L34,111.06c-.57-.41-.26-1.88.53-2.49l5-3.82a2.3,2.3,0,0,0,.72-1.12l2.22-7.27C42.8,95.2,43.82,94.61,44.17,95.36Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 43.32px 108.897px;"
                                            class="animable" id="elgkecu8gwqx9"></path>
                                    </g>
                                    <path
                                        d="M77.51,86c.43-.81.35-1.64-.05-1.86-.13-.08-3.16-1.82-3.55-2.06a.57.57,0,0,0-.5,0l-3.26,1.25L69.07,81a.54.54,0,0,0-.24-.27c-.45-.25-3.46-2-3.55-2.06-.45-.25-1.2.32-1.49,1.27l-2.22,7.27a2.3,2.3,0,0,1-.72,1.12l-5,3.82c-.79.61-1.1,2.08-.53,2.5L59,97.24a1,1,0,0,1,.27,1l-.84,7.08a1,1,0,0,0,.31,1l3.56,2c.28.17.7,0,1.08-.45l4.44-5.67a1.1,1.1,0,0,1,.89-.52l4.44.55c.7.09,1.52-1.18,1.39-2.15L73.64,94a2.23,2.23,0,0,1,.28-1.29Z"
                                        style="fill: #12D30F; transform-origin: 66.4129px 93.4979px;" id="el88d1ghgbo3i"
                                        class="animable"></path>
                                    <g id="el3gvsoradlc2">
                                        <path
                                            d="M77.46,84.1a.59.59,0,0,0-.49,0L72,86a.53.53,0,0,1-.72-.28l-1.14-2.43L73.41,82a.52.52,0,0,1,.49,0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 73.8px 83.9952px;"
                                            class="animable" id="elf304q6je9h"></path>
                                    </g>
                                    <g id="el4aha1zgwp9m">
                                        <path
                                            d="M65.14,89.27a2.36,2.36,0,0,1-.73,1.12l-5,3.82a2.07,2.07,0,0,0-.53.67l-3.56-2.06a2.19,2.19,0,0,1,.53-.67l5-3.82a2.33,2.33,0,0,0,.73-1.11h0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 60.23px 91.05px;"
                                            class="animable" id="eljc8af14vlak"></path>
                                    </g>
                                    <g id="eldt3w45cy7cg">
                                        <path
                                            d="M68.86,80.74c-.44-.29-1.21.28-1.51,1.26l-2.21,7.27-3.56-2.06,2.21-7.27c.29-1,1-1.52,1.49-1.26.09,0,3.1,1.8,3.56,2Z"
                                            style="opacity: 0.1; transform-origin: 65.22px 83.9418px;" class="animable"
                                            id="elacfqqhw01k"></path>
                                    </g>
                                    <g id="elcnpurlbopxp">
                                        <path
                                            d="M62.51,99.3l-3.53-2,0,0-3.59-2.6c-.41-.3-.36-1.14,0-1.82l3.56,2.06c-.36.67-.41,1.52,0,1.82Z"
                                            style="opacity: 0.25; transform-origin: 58.8055px 96.09px;" class="animable"
                                            id="eltqyvvq0c91n"></path>
                                    </g>
                                    <g id="el1ok15o58zpw">
                                        <path
                                            d="M61.94,107.35c-.07.52.08.87.34,1h0c-.24-.14-3.28-1.91-3.56-2.06a1,1,0,0,1-.31-1l.85-7.08a1.11,1.11,0,0,0-.25-.94l3.53,2a0,0,0,0,0,0,0h0a1.09,1.09,0,0,1,.25.94Z"
                                            style="opacity: 0.15; transform-origin: 60.5956px 102.81px;" class="animable"
                                            id="ely514sikybq"></path>
                                    </g>
                                    <path
                                        d="M69.07,81l2.22,4.72A.53.53,0,0,0,72,86l5-1.9c.79-.31,1.11.8.54,1.87l-3.59,6.74A2.23,2.23,0,0,0,73.64,94l.85,6.1c.13,1-.69,2.24-1.39,2.15l-4.44-.55a1.1,1.1,0,0,0-.89.52l-4.44,5.67c-.7.9-1.53.58-1.39-.55l.84-7.07a1,1,0,0,0-.27-1l-3.59-2.6c-.57-.41-.26-1.88.53-2.49l5-3.82a2.3,2.3,0,0,0,.72-1.12L67.35,82C67.7,80.84,68.72,80.26,69.07,81Z"
                                        style="fill: #12D30F; transform-origin: 68.2286px 94.5405px;" id="eldbzwfqx1krw"
                                        class="animable"></path>
                                    <g id="elto2yr37c5pa">
                                        <path
                                            d="M69.07,81l2.22,4.72A.53.53,0,0,0,72,86l5-1.9c.79-.31,1.11.8.54,1.87l-3.59,6.74A2.23,2.23,0,0,0,73.64,94l.85,6.1c.13,1-.69,2.24-1.39,2.15l-4.44-.55a1.1,1.1,0,0,0-.89.52l-4.44,5.67c-.7.9-1.53.58-1.39-.55l.84-7.07a1,1,0,0,0-.27-1l-3.59-2.6c-.57-.41-.26-1.88.53-2.49l5-3.82a2.3,2.3,0,0,0,.72-1.12L67.35,82C67.7,80.84,68.72,80.26,69.07,81Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 68.2286px 94.5405px;"
                                            class="animable" id="el048f0jd8cq0e"></path>
                                    </g>
                                    <path
                                        d="M102.41,71.62c.43-.81.35-1.64,0-1.87l-3.55-2a.57.57,0,0,0-.5,0l-3.26,1.25L94,66.65a.69.69,0,0,0-.25-.28l-3.55-2.05c-.45-.26-1.2.31-1.49,1.26l-2.22,7.27A2.3,2.3,0,0,1,85.75,74l-5,3.83c-.78.6-1.1,2.08-.53,2.49l3.59,2.59a1,1,0,0,1,.28,1l-.85,7.08a1,1,0,0,0,.31,1L87.16,94c.28.16.69,0,1.07-.46l4.44-5.67a1.06,1.06,0,0,1,.89-.51l4.44.54c.7.09,1.52-1.18,1.39-2.15l-.85-6.1a2.25,2.25,0,0,1,.28-1.29Z"
                                        style="fill: #12D30F; transform-origin: 91.3167px 79.1587px;" id="elhe15hcucujh"
                                        class="animable"></path>
                                    <g id="el49jpzkq628s">
                                        <path
                                            d="M102.37,69.74a.62.62,0,0,0-.5,0l-5,1.9a.52.52,0,0,1-.72-.28l-1.14-2.43,3.26-1.25a.58.58,0,0,1,.5,0C99.2,67.93,102.23,69.67,102.37,69.74Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 98.69px 69.6594px;"
                                            class="animable" id="eljca72nb68m"></path>
                                    </g>
                                    <g id="eltuwacgjee8q">
                                        <path
                                            d="M90,74.91A2.24,2.24,0,0,1,89.31,76l-5,3.82a2,2,0,0,0-.54.67l-3.56-2.06a2.19,2.19,0,0,1,.54-.67l5-3.82a2.26,2.26,0,0,0,.73-1.11h0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 85.105px 76.66px;"
                                            class="animable" id="elambvtc8ko5"></path>
                                    </g>
                                    <g id="el9ffwofuws78">
                                        <path
                                            d="M93.76,66.39c-.44-.29-1.21.28-1.5,1.25L90,74.91l-3.56-2.06,2.22-7.27c.29-1,1-1.52,1.48-1.26.09.05,3.1,1.8,3.56,2.05C93.75,66.38,93.76,66.38,93.76,66.39Z"
                                            style="opacity: 0.1; transform-origin: 90.1px 69.5818px;" class="animable"
                                            id="ela5pk2r80o6a"></path>
                                    </g>
                                    <g id="elybrt8outrw">
                                        <path
                                            d="M87.41,84.94l-3.53-2,0,0-3.59-2.6c-.41-.29-.36-1.14,0-1.82l3.56,2.06c-.36.68-.41,1.53,0,1.82Z"
                                            style="opacity: 0.25; transform-origin: 83.7055px 81.73px;" class="animable"
                                            id="else0k9mi6b5e"></path>
                                    </g>
                                    <g id="elj1u6qwrqsya">
                                        <path
                                            d="M86.84,93c-.06.53.08.88.34,1h0l-3.56-2.06c-.23-.14-.37-.48-.31-1l.85-7.08a1.11,1.11,0,0,0-.25-.94l3.53,2s0,0,0,0h0a1.06,1.06,0,0,1,.25.93Z"
                                            style="opacity: 0.15; transform-origin: 85.5046px 88.46px;" class="animable"
                                            id="el3utkn1nzcu2"></path>
                                    </g>
                                    <path
                                        d="M94,66.65l2.21,4.71a.53.53,0,0,0,.73.28l5-1.9c.79-.3,1.11.81.54,1.88l-3.59,6.73a2.25,2.25,0,0,0-.28,1.29l.85,6.1c.13,1-.69,2.24-1.39,2.15l-4.44-.54a1.06,1.06,0,0,0-.89.51l-4.44,5.67c-.7.9-1.53.58-1.39-.54l.85-7.08a1,1,0,0,0-.28-1l-3.59-2.59c-.57-.42-.25-1.89.53-2.5l5-3.82A2.24,2.24,0,0,0,90,74.91l2.21-7.27C92.61,66.49,93.62,65.9,94,66.65Z"
                                        style="fill: #12D30F; transform-origin: 93.1848px 80.1834px;" id="el1dblzpsggwv"
                                        class="animable"></path>
                                    <g id="el60cmz3l5wrf">
                                        <path
                                            d="M94,66.65l2.21,4.71a.53.53,0,0,0,.73.28l5-1.9c.79-.3,1.11.81.54,1.88l-3.59,6.73a2.25,2.25,0,0,0-.28,1.29l.85,6.1c.13,1-.69,2.24-1.39,2.15l-4.44-.54a1.06,1.06,0,0,0-.89.51l-4.44,5.67c-.7.9-1.53.58-1.39-.54l.85-7.08a1,1,0,0,0-.28-1l-3.59-2.59c-.57-.42-.25-1.89.53-2.5l5-3.82A2.24,2.24,0,0,0,90,74.91l2.21-7.27C92.61,66.49,93.62,65.9,94,66.65Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 93.1848px 80.1834px;"
                                            class="animable" id="el657qy8vz2s5"></path>
                                    </g>
                                    <path
                                        d="M127.31,57.26c.43-.81.35-1.64,0-1.87l-3.55-2a.55.55,0,0,0-.49,0L120,54.57l-1.07-2.28a.75.75,0,0,0-.24-.28c-.45-.24-3.47-2-3.56-2-.45-.26-1.2.31-1.49,1.27l-2.21,7.27a2.29,2.29,0,0,1-.73,1.12l-5,3.82c-.78.61-1.1,2.08-.53,2.49l3.59,2.59a1,1,0,0,1,.28,1l-.85,7.07c-.06.52.08.86.32,1l3.56,2.06c.28.16.69,0,1.07-.46l4.44-5.67a1.08,1.08,0,0,1,.89-.51l4.44.55c.7.08,1.53-1.19,1.39-2.16l-.85-6.09a2.27,2.27,0,0,1,.28-1.3Z"
                                        style="fill: #12D30F; transform-origin: 116.242px 64.8537px;" id="elx1nrx216ssj"
                                        class="animable"></path>
                                    <g id="el5s0uuu5mtpx">
                                        <path
                                            d="M127.27,55.39a.59.59,0,0,0-.49,0l-5,1.9a.53.53,0,0,1-.72-.28L120,54.57l3.27-1.24a.52.52,0,0,1,.49,0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 123.635px 55.3052px;"
                                            class="animable" id="elroop9wr9is9"></path>
                                    </g>
                                    <g id="eli6o5lpvnzl">
                                        <path
                                            d="M114.94,60.55a2.2,2.2,0,0,1-.73,1.12l-4.95,3.83a1.85,1.85,0,0,0-.54.66l-3.56-2.06a2,2,0,0,1,.54-.66l5-3.83a2.17,2.17,0,0,0,.73-1.11h0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 110.05px 62.33px;"
                                            class="animable" id="elzwltg952v59"></path>
                                    </g>
                                    <g id="elx13fzj3yhw9">
                                        <path
                                            d="M118.67,52c-.45-.29-1.21.28-1.51,1.25l-2.22,7.27-3.56-2.06,2.22-7.27c.29-.94,1-1.51,1.48-1.26.1,0,3.1,1.81,3.56,2Z"
                                            style="opacity: 0.1; transform-origin: 115.025px 55.1956px;"
                                            class="animable" id="elxea3rx7l0l"></path>
                                    </g>
                                    <g id="elmmu3mlsibt">
                                        <path
                                            d="M112.31,70.58l-3.53-2s0,0,0,0l-3.59-2.59c-.41-.3-.36-1.14,0-1.83l3.56,2.06c-.36.68-.41,1.53,0,1.83Z"
                                            style="opacity: 0.25; transform-origin: 108.605px 67.37px;" class="animable"
                                            id="elz8mxs92mkr"></path>
                                    </g>
                                    <g id="elayf6xzkyo0v">
                                        <path
                                            d="M111.74,78.63c-.06.53.09.88.34,1h0l-3.56-2.06c-.23-.14-.37-.48-.31-1L109,69.5a1.06,1.06,0,0,0-.25-.94l3.53,2,0,0h0a1,1,0,0,1,.25.94Z"
                                            style="opacity: 0.15; transform-origin: 110.378px 74.095px;"
                                            class="animable" id="elnpbqa32faon"></path>
                                    </g>
                                    <path
                                        d="M118.88,52.29,121.09,57a.53.53,0,0,0,.73.28l5-1.9c.78-.3,1.1.81.53,1.88L123.72,64a2.27,2.27,0,0,0-.28,1.3l.85,6.09c.14,1-.69,2.24-1.39,2.16L118.46,73a1.08,1.08,0,0,0-.89.51l-4.44,5.67c-.7.9-1.52.58-1.39-.54l.85-7.08a1,1,0,0,0-.28-1L108.72,68c-.57-.41-.25-1.89.53-2.49l5-3.83a2.26,2.26,0,0,0,.73-1.11l2.21-7.28C117.51,52.13,118.52,51.54,118.88,52.29Z"
                                        style="fill: #12D30F; transform-origin: 118.035px 65.8286px;" id="elc0zz9s8u9n"
                                        class="animable"></path>
                                    <g id="elzojyndkjy">
                                        <path
                                            d="M118.88,52.29,121.09,57a.53.53,0,0,0,.73.28l5-1.9c.78-.3,1.1.81.53,1.88L123.72,64a2.27,2.27,0,0,0-.28,1.3l.85,6.09c.14,1-.69,2.24-1.39,2.16L118.46,73a1.08,1.08,0,0,0-.89.51l-4.44,5.67c-.7.9-1.52.58-1.39-.54l.85-7.08a1,1,0,0,0-.28-1L108.72,68c-.57-.41-.25-1.89.53-2.49l5-3.83a2.26,2.26,0,0,0,.73-1.11l2.21-7.28C117.51,52.13,118.52,51.54,118.88,52.29Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 118.035px 65.8286px;"
                                            class="animable" id="elrzjy34l5dl"></path>
                                    </g>
                                    <path
                                        d="M152.21,42.9c.43-.81.36-1.64-.05-1.87L148.61,39a.52.52,0,0,0-.49,0l-3.27,1.25-1.07-2.29a.59.59,0,0,0-.24-.27c-.45-.25-3.47-2-3.56-2.06-.45-.25-1.19.31-1.49,1.27l-2.21,7.27a2.24,2.24,0,0,1-.73,1.12l-5,3.82c-.79.61-1.11,2.08-.54,2.49l3.59,2.59a1,1,0,0,1,.28,1l-.85,7.07c-.06.52.08.87.32,1L137,65.27c.28.16.69,0,1.07-.45l4.44-5.67a1.1,1.1,0,0,1,.89-.52l4.44.55c.7.09,1.53-1.19,1.39-2.16l-.84-6.09a2.13,2.13,0,0,1,.27-1.29Z"
                                        style="fill: #12D30F; transform-origin: 141.111px 50.4505px;" id="el43t0ldepjyu"
                                        class="animable"></path>
                                    <g id="eluzo11td6f9k">
                                        <path
                                            d="M152.17,41a.59.59,0,0,0-.49,0l-5,1.9a.51.51,0,0,1-.71-.28l-1.14-2.43L148.12,39a.52.52,0,0,1,.49,0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 148.5px 40.947px;"
                                            class="animable" id="elsw1zt0dj3k"></path>
                                    </g>
                                    <g id="ele9ctwz24g0a">
                                        <path
                                            d="M139.84,46.19a2.28,2.28,0,0,1-.73,1.13l-5,3.82a1.88,1.88,0,0,0-.54.67l-3.56-2.06a2.1,2.1,0,0,1,.54-.67l5-3.82a2.24,2.24,0,0,0,.73-1.12h0Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 134.925px 47.975px;"
                                            class="animable" id="elyfwk02yf3h"></path>
                                    </g>
                                    <g id="elkti30574f6a">
                                        <path
                                            d="M143.57,37.67c-.45-.29-1.21.28-1.51,1.26l-2.22,7.26-3.56-2.06,2.22-7.27c.29-.94,1-1.51,1.48-1.26.1,0,3.1,1.81,3.56,2Z"
                                            style="opacity: 0.1; transform-origin: 139.925px 40.8656px;"
                                            class="animable" id="eli7z5eievazf"></path>
                                    </g>
                                    <g id="elv8ydeybluwp">
                                        <path
                                            d="M137.21,56.23l-3.53-2a.05.05,0,0,0,0,0l-3.59-2.59c-.41-.3-.36-1.14,0-1.82l3.56,2.06c-.36.67-.41,1.52,0,1.82Z"
                                            style="opacity: 0.25; transform-origin: 133.505px 53.025px;"
                                            class="animable" id="el2ij3t5ndt3v"></path>
                                    </g>
                                    <g id="elofbqpt4ym2d">
                                        <path
                                            d="M136.64,64.27c-.06.53.09.88.34,1,0,0,0,0,0,0l-3.56-2.06c-.24-.14-.38-.48-.32-1l.85-7.07a1.08,1.08,0,0,0-.25-.94l3.53,2h0a1.06,1.06,0,0,1,.25.94Z"
                                            style="opacity: 0.15; transform-origin: 135.295px 59.735px;"
                                            class="animable" id="el1mxignphtr6"></path>
                                    </g>
                                    <path
                                        d="M143.78,37.93,146,42.64a.53.53,0,0,0,.72.29l5-1.91c.78-.3,1.1.81.53,1.88l-3.59,6.74a2.13,2.13,0,0,0-.27,1.29l.84,6.09c.14,1-.69,2.25-1.39,2.16l-4.44-.55a1.1,1.1,0,0,0-.89.52L138,64.82c-.7.9-1.52.57-1.39-.55l.85-7.07a1,1,0,0,0-.28-1l-3.59-2.59c-.57-.41-.25-1.88.54-2.49l5-3.82a2.29,2.29,0,0,0,.73-1.12l2.22-7.27C142.41,37.77,143.43,37.18,143.78,37.93Z"
                                        style="fill: #12D30F; transform-origin: 142.92px 51.4666px;" id="el5a28vxcuruh"
                                        class="animable"></path>
                                    <g id="el4km05cresha">
                                        <path
                                            d="M143.78,37.93,146,42.64a.53.53,0,0,0,.72.29l5-1.91c.78-.3,1.1.81.53,1.88l-3.59,6.74a2.13,2.13,0,0,0-.27,1.29l.84,6.09c.14,1-.69,2.25-1.39,2.16l-4.44-.55a1.1,1.1,0,0,0-.89.52L138,64.82c-.7.9-1.52.57-1.39-.55l.85-7.07a1,1,0,0,0-.28-1l-3.59-2.59c-.57-.41-.25-1.88.54-2.49l5-3.82a2.29,2.29,0,0,0,.73-1.12l2.22-7.27C142.41,37.77,143.43,37.18,143.78,37.93Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 142.92px 51.4666px;"
                                            class="animable" id="elmvjxk0w4hir"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--paper-planes--inject-3" class="animable"
                                style="transform-origin: 252.761px 311.688px;">
                                <g id="freepik--paper-plane--inject-3" class="animable"
                                    style="transform-origin: 420.595px 226.798px;">
                                    <polygon points="387.81 284.36 434.7 260.9 453.38 269.17 387.81 284.36"
                                        style="fill: #12D30F; transform-origin: 420.595px 272.63px;" id="el5mowwz1b85s"
                                        class="animable"></polygon>
                                    <g id="elqhnj4gnmnko">
                                        <g style="opacity: 0.15; transform-origin: 420.595px 272.63px;" class="animable"
                                            id="el1so1gfcdozx">
                                            <polygon points="387.81 284.36 434.7 260.9 453.38 269.17 387.81 284.36"
                                                style="fill: rgb(255, 255, 255); transform-origin: 420.595px 272.63px;"
                                                id="elpszqk9rguin" class="animable"></polygon>
                                        </g>
                                    </g>
                                    <polygon points="387.81 284.36 429.12 256.74 421.72 246.11 387.81 284.36"
                                        style="fill: #12D30F; transform-origin: 408.465px 265.235px;" id="elv1ca7u0wvri"
                                        class="animable"></polygon>
                                    <g id="eladz9300gbt6">
                                        <g style="opacity: 0.15; transform-origin: 408.465px 265.235px;"
                                            class="animable" id="elef7qpi00lnl">
                                            <polygon points="387.81 284.36 429.12 256.74 421.72 246.11 387.81 284.36"
                                                style="fill: rgb(255, 255, 255); transform-origin: 408.465px 265.235px;"
                                                id="elkbtvc9trkzo" class="animable"></polygon>
                                        </g>
                                    </g>
                                    <polygon points="429.12 256.74 428.34 264.09 387.81 284.36 429.12 256.74"
                                        style="fill: #12D30F; transform-origin: 408.465px 270.55px;" id="elvcvdwre37aq"
                                        class="animable"></polygon>
                                    <g id="elp2d8m3c2o4a">
                                        <g style="opacity: 0.2; transform-origin: 408.465px 270.55px;" class="animable"
                                            id="el8d7m5i5vx3">
                                            <polygon points="429.12 256.74 428.34 264.09 387.81 284.36 429.12 256.74"
                                                id="elm0e7uqoc03" class="animable"
                                                style="transform-origin: 408.465px 270.55px;"></polygon>
                                        </g>
                                    </g>
                                    <path
                                        d="M435.8,255.33a.45.45,0,0,1-.3-.11.47.47,0,0,1-.05-.66l.91-1.05a.46.46,0,1,1,.7.6c-.3.36-.6.71-.91,1.06A.44.44,0,0,1,435.8,255.33Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 436.255px 254.339px;"
                                        id="ele6belp6nhho" class="animable"></path>
                                    <path
                                        d="M439.55,250.71a.51.51,0,0,1-.28-.09.47.47,0,0,1-.09-.65c.55-.73,1.08-1.46,1.6-2.2a.47.47,0,0,1,.65-.11.47.47,0,0,1,.11.65c-.52.74-1.06,1.49-1.62,2.22A.46.46,0,0,1,439.55,250.71Zm4.11-6a.44.44,0,0,1-.24-.07.46.46,0,0,1-.15-.64c.47-.77.93-1.55,1.37-2.34a.46.46,0,0,1,.81.45c-.44.8-.91,1.59-1.39,2.38A.47.47,0,0,1,443.66,244.7Zm3.47-6.41a.46.46,0,0,1-.2,0,.47.47,0,0,1-.23-.61c.39-.83.76-1.66,1.1-2.48a.46.46,0,1,1,.86.35c-.35.84-.72,1.69-1.11,2.52A.47.47,0,0,1,447.13,238.29Zm2.68-6.77-.15,0a.48.48,0,0,1-.3-.59c.29-.87.55-1.74.78-2.6a.46.46,0,1,1,.89.25c-.23.87-.5,1.76-.78,2.64A.48.48,0,0,1,449.81,231.52Zm1.78-7.06h-.09a.47.47,0,0,1-.37-.54c.16-.88.3-1.78.41-2.67a.48.48,0,0,1,.52-.41.48.48,0,0,1,.41.52c-.12.91-.26,1.83-.43,2.73A.46.46,0,0,1,451.59,224.46Zm.79-7.24h0a.46.46,0,0,1-.45-.48c0-.71,0-1.41,0-2.13V214a.47.47,0,0,1,.46-.47h0a.47.47,0,0,1,.47.46v.59c0,.73,0,1.45,0,2.17A.46.46,0,0,1,452.38,217.22Zm-.2-7.28a.47.47,0,0,1-.46-.42c-.08-.89-.19-1.79-.32-2.69a.46.46,0,0,1,.39-.52.46.46,0,0,1,.53.39c.13.91.24,1.83.33,2.74a.47.47,0,0,1-.42.5ZM451,202.76a.46.46,0,0,1-.45-.36c-.21-.88-.44-1.76-.69-2.62a.47.47,0,0,1,.32-.58.46.46,0,0,1,.57.32c.26.88.5,1.78.7,2.67a.45.45,0,0,1-.35.55Zm-2.18-6.95a.46.46,0,0,1-.43-.29c-.33-.83-.7-1.66-1.08-2.48a.46.46,0,1,1,.84-.39c.39.83.76,1.68,1.1,2.52a.46.46,0,0,1-.43.64Zm-3.24-6.52a.46.46,0,0,1-.39-.22c-.47-.78-1-1.54-1.46-2.28a.47.47,0,0,1,.12-.65.48.48,0,0,1,.65.12c.51.76,1,1.54,1.48,2.33a.46.46,0,0,1-.4.7Zm-4.21-5.93a.48.48,0,0,1-.36-.17c-.58-.7-1.18-1.38-1.79-2a.47.47,0,0,1,.68-.64c.62.67,1.24,1.37,1.83,2.07a.48.48,0,0,1-.06.66A.5.5,0,0,1,441.4,183.36Zm-5.07-5.23A.47.47,0,0,1,436,178c-.67-.6-1.37-1.18-2.07-1.74a.46.46,0,1,1,.57-.73c.72.57,1.43,1.17,2.12,1.78a.46.46,0,0,1,0,.65A.48.48,0,0,1,436.33,178.13Zm-5.8-4.4a.44.44,0,0,1-.25-.08c-.77-.49-1.56-1-2.33-1.37a.48.48,0,0,1-.18-.64.47.47,0,0,1,.63-.18c.79.43,1.59.91,2.38,1.41a.47.47,0,0,1-.25.86Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 440.272px 211.057px;"
                                        id="elt6kwpgr6s28" class="animable"></path>
                                    <path
                                        d="M424,170.47l-.14,0a8.85,8.85,0,0,0-1.27-.31.46.46,0,0,1-.39-.53.46.46,0,0,1,.52-.39,10.08,10.08,0,0,1,1.43.35.46.46,0,0,1,.3.58A.48.48,0,0,1,424,170.47Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 423.333px 169.853px;"
                                        id="el9omfdnjq2fc" class="animable"></path>
                                </g>
                                <g id="freepik--paper-plane--inject-3" class="animable"
                                    style="transform-origin: 125.666px 431.783px;">
                                    <path
                                        d="M131.66,445.57a.45.45,0,0,0,0-.32A.46.46,0,0,0,131,445l-1.25.59a.45.45,0,0,0-.23.61.46.46,0,0,0,.61.23l1.27-.59A.47.47,0,0,0,131.66,445.57Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 130.582px 445.706px;"
                                        id="elwgdkj9uja4a" class="animable"></path>
                                    <path
                                        d="M125.93,448.25q-1.29.51-2.58,1a.46.46,0,1,1-.31-.87c.85-.3,1.7-.62,2.55-.95a.46.46,0,0,1,.6.26.42.42,0,0,1,0,.29A.42.42,0,0,1,125.93,448.25Zm-7,2.36c-.88.25-1.77.49-2.66.7a.46.46,0,1,1-.22-.9c.88-.21,1.76-.45,2.63-.7a.46.46,0,0,1,.57.32.39.39,0,0,1,0,.26A.45.45,0,0,1,119,450.61Zm-7.15,1.62c-.91.15-1.83.29-2.73.4a.46.46,0,0,1-.51-.41.47.47,0,0,1,.4-.52c.89-.1,1.79-.23,2.69-.38a.45.45,0,0,1,.53.38.44.44,0,0,1,0,.2A.46.46,0,0,1,111.83,452.23Zm-7.3.77c-.93,0-1.85.06-2.76.05a.47.47,0,0,1,0-.93c.89,0,1.8,0,2.71-.05a.46.46,0,0,1,.48.45.32.32,0,0,1,0,.14A.47.47,0,0,1,104.53,453Zm-7.34-.18c-.91-.09-1.83-.2-2.74-.33a.46.46,0,0,1-.39-.53.48.48,0,0,1,.53-.39c.89.13,1.79.24,2.68.32a.46.46,0,0,1,.42.51.22.22,0,0,1,0,.08A.47.47,0,0,1,97.19,452.82Zm-7.25-1.19c-.7-.16-1.4-.35-2.09-.54l-.57-.16a.46.46,0,0,1-.32-.57h0a.47.47,0,0,1,.58-.31l.56.16c.68.19,1.37.36,2.05.53a.47.47,0,0,1,.35.56h0A.47.47,0,0,1,89.94,451.63Zm-6.41-2.43a.47.47,0,0,1-.6.26c-.86-.32-1.71-.68-2.55-1a.46.46,0,0,1-.24-.61.47.47,0,0,1,.61-.24c.83.37,1.67.71,2.51,1a.46.46,0,0,1,.28.55A.09.09,0,0,0,83.53,449.2Zm-6.64-3a.46.46,0,0,1-.63.18c-.81-.43-1.61-.9-2.39-1.38a.47.47,0,0,1-.15-.64.46.46,0,0,1,.64-.15c.76.47,1.55.93,2.34,1.36a.48.48,0,0,1,.23.53Zm-6.15-3.91a.45.45,0,0,1-.65.09c-.72-.55-1.44-1.14-2.14-1.74a.48.48,0,0,1,0-.66.47.47,0,0,1,.66,0c.68.58,1.39,1.16,2.1,1.7a.48.48,0,0,1,.16.5A.31.31,0,0,1,70.74,442.3Zm-5.46-4.81a.45.45,0,0,1-.65,0c-.64-.66-1.25-1.36-1.84-2.05a.46.46,0,1,1,.71-.6c.58.68,1.18,1.36,1.8,2a.48.48,0,0,1,.11.45A.39.39,0,0,1,65.28,437.49Zm-4.64-5.61a.45.45,0,0,1-.64-.12c-.53-.76-1-1.54-1.51-2.31a.47.47,0,0,1,.16-.64.46.46,0,0,1,.64.15c.46.77,1,1.53,1.47,2.27a.45.45,0,0,1,.06.39A.39.39,0,0,1,60.64,431.88Zm-3.73-6.25a.47.47,0,0,1-.62-.22c-.41-.82-.79-1.67-1.14-2.51a.47.47,0,0,1,.86-.36c.34.83.72,1.65,1.11,2.47a.45.45,0,0,1,0,.32A.45.45,0,0,1,56.91,425.63Zm-2.75-6.75a.46.46,0,0,1-.58-.31c-.27-.89-.52-1.79-.72-2.67a.47.47,0,0,1,.91-.21c.19.86.43,1.74.7,2.61a.46.46,0,0,1,0,.26A.45.45,0,0,1,54.16,418.88Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 89.5114px 434.209px;"
                                        id="elmyslcl4ccm" class="animable"></path>
                                    <path
                                        d="M53.09,411.4a.61.61,0,0,0,0-.14,8.72,8.72,0,0,1,0-1.31.46.46,0,0,0-.92-.12,9.42,9.42,0,0,0,0,1.47.47.47,0,0,0,.92.1Z"
                                        style="fill: rgb(224, 224, 224); transform-origin: 52.6177px 410.582px;"
                                        id="elpo0afsm592g" class="animable"></path>
                                    <polygon points="142.44 443.08 199.19 414.99 158.34 454.14 142.44 443.08"
                                        style="fill: #12D30F; transform-origin: 170.815px 434.565px;" id="eladyz47a13nl"
                                        class="animable"></polygon>
                                    <g id="elu2g8vsex5rd">
                                        <polygon points="142.44 443.08 199.19 414.99 158.34 454.14 142.44 443.08"
                                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 170.815px 434.565px;"
                                            class="animable" id="elu8w3dea0vd"></polygon>
                                    </g>
                                    <polygon points="199.19 414.99 136.58 435.85 120.69 424.79 199.19 414.99"
                                        style="fill: #12D30F; transform-origin: 159.94px 425.42px;" id="el6v93y9l18yr"
                                        class="animable"></polygon>
                                    <g id="elugyjaz054gc">
                                        <polygon points="199.19 414.99 136.58 435.85 120.69 424.79 199.19 414.99"
                                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 159.94px 425.42px;"
                                            class="animable" id="elg1s9hl5hufr"></polygon>
                                    </g>
                                    <polygon
                                        points="136.58 435.85 139.12 451.76 142.44 443.08 199.19 414.99 136.58 435.85"
                                        style="fill: #12D30F; transform-origin: 167.885px 433.375px;" id="eln9la6vkg3cc"
                                        class="animable"></polygon>
                                    <g id="el8yyxy3aetnk">
                                        <polygon
                                            points="136.58 435.85 139.12 451.76 142.44 443.08 199.19 414.99 136.58 435.85"
                                            style="opacity: 0.2; transform-origin: 167.885px 433.375px;"
                                            class="animable" id="el1fwp7o0vk5z"></polygon>
                                    </g>
                                    <polygon points="139.12 451.76 147.74 446.76 142.44 443.08 139.12 451.76"
                                        style="fill: #12D30F; transform-origin: 143.43px 447.42px;" id="el6e2y26pwfs3"
                                        class="animable"></polygon>
                                    <g id="elkzfcc0k7gw">
                                        <polygon points="142.44 443.08 147.74 446.76 146.37 447.56 142.44 443.08"
                                            style="opacity: 0.2; transform-origin: 145.09px 445.32px;" class="animable"
                                            id="elqss0zzirfa"></polygon>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--character-3--inject-3" class="animable"
                                style="transform-origin: 58.72px 356.505px;">
                                <g id="freepik--Top--inject-3" class="animable"
                                    style="transform-origin: 58.72px 356.505px;">
                                    <path
                                        d="M69.76,332.84c-3.32-1.89-7.89-1.6-12.94,1.31C46.67,340,38.44,354.26,38.44,366c0,5.84,2.05,9.95,5.36,11.87l3.91,2.27a8.41,8.41,0,0,0,1.29.6,11,11,0,0,0,6.56.2q.61-.15,1.26-.36a20.46,20.46,0,0,0,3.83-1.75,31.6,31.6,0,0,0,7-5.63c.28-.3.57-.62.85-.94.6-.67,1.18-1.37,1.74-2.08s1.24-1.66,1.82-2.52,1.14-1.77,1.66-2.68C77,359.24,79,352.8,79,347s-2.07-10-5.4-11.9Z"
                                        style="fill: #12D30F; transform-origin: 58.72px 356.495px;" id="ela2h61j8fsiv"
                                        class="animable"></path>
                                    <g id="el78lmaxjs0qd">
                                        <path
                                            d="M69.76,332.84c-3.32-1.89-7.89-1.6-12.94,1.31C46.67,340,38.44,354.26,38.44,366c0,5.84,2.05,9.95,5.36,11.87l3.91,2.27a8.41,8.41,0,0,0,1.29.6,11,11,0,0,0,6.56.2q.61-.15,1.26-.36a20.46,20.46,0,0,0,3.83-1.75,31.6,31.6,0,0,0,7-5.63c.28-.3.57-.62.85-.94.6-.67,1.18-1.37,1.74-2.08s1.24-1.66,1.82-2.52,1.14-1.77,1.66-2.68C77,359.24,79,352.8,79,347s-2.07-10-5.4-11.9Z"
                                            style="opacity: 0.25; transform-origin: 58.72px 356.495px;" class="animable"
                                            id="eldxeha649038"></path>
                                    </g>
                                    <path
                                        d="M79,347c0,5.82-2,12.26-5.31,18-.52.91-1.07,1.81-1.66,2.68s-1.19,1.7-1.82,2.52-1.14,1.41-1.74,2.08c-.28.32-.57.64-.85.94a31.6,31.6,0,0,1-7,5.63,20.46,20.46,0,0,1-3.83,1.75q-.65.21-1.26.36a11,11,0,0,1-6.56-.2c-4.11-1.52-6.72-5.91-6.73-12.52,0-11.72,8.23-26,18.38-31.82S79,335.26,79,347Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 60.62px 357.642px;"
                                        id="elvgqkhlt02u" class="animable"></path>
                                    <g id="freepik--Character--inject-3" class="animable"
                                        style="transform-origin: 60.7727px 360.617px;">
                                        <g id="freepik--Arm--inject-3" class="animable"
                                            style="transform-origin: 71.16px 367.46px;">
                                            <path
                                                d="M73.72,365c-.52.91-1.07,1.81-1.66,2.68s-1.19,1.7-1.82,2.52l-1.64-4.71h0C70.82,364.78,72.26,364.44,73.72,365Z"
                                                style="fill: rgb(240, 153, 122); transform-origin: 71.16px 367.46px;"
                                                id="el6x2y29qr10e" class="animable"></path>
                                        </g>
                                        <g id="freepik--Chest--inject-3" class="animable"
                                            style="transform-origin: 62.81px 373.205px;">
                                            <path
                                                d="M72.06,367.64c-.58.86-1.19,1.7-1.82,2.52s-1.14,1.41-1.74,2.08c-.28.32-.57.64-.85.94a31.6,31.6,0,0,1-7,5.63,20.46,20.46,0,0,1-3.83,1.75q-.65.21-1.26.36c0-4.69-1.68-6.68-2-7l0,0,0,0h0a43.84,43.84,0,0,1,4.07-3.16l.1-.07a36.54,36.54,0,0,1,7.89-4.26l.22-.1,2.8-.84h0A30.32,30.32,0,0,1,72.06,367.64Z"
                                                style="fill: rgb(240, 240, 240); transform-origin: 62.81px 373.205px;"
                                                id="elokkrnt5zb2c" class="animable"></path>
                                        </g>
                                        <g id="freepik--Head--inject-3" class="animable"
                                            style="transform-origin: 60.0924px 356.549px;">
                                            <path id="freepik--Hair--inject-3"
                                                d="M72.31,362.63c.62-5.14-4.78-3.23-6.36-6l4.1-4.51c2.53-2.53,2-6.44,1.18-8.28-1.89-4.1-6.45-4.35-9.18-3.6-5.19,1.42-7.57,3.77-7.82,7-1.92.46-4.61,3.6-4.32,10.23a9.79,9.79,0,0,1-.37,4.22A26.07,26.07,0,0,0,48,365.26c-.53,2.05.13,4.62,2.21,4.35a1.73,1.73,0,0,1-.1-1.62c.25,2.3,3.85,2.67,5.46,1.59a1.36,1.36,0,0,1-1-.89c2.73.77,5-.54,7.61-2.47.48-.34.8-.53,2.36-.52,1,0,2.1-.18,3.84-1.77C69.47,362.93,71.18,361.41,72.31,362.63Z"
                                                style="fill: rgb(55, 71, 79); transform-origin: 60.0924px 355.034px;"
                                                class="animable"></path>
                                            <path
                                                d="M70,358.76a6.69,6.69,0,0,1-1,3,7.19,7.19,0,0,1-3.47,1.92l0,1.18,0,.75,0,.79,0,.74a7,7,0,0,1,2.88,5.11c-.28.32-.57.64-.85.94-3.09,0-7.76-.66-10.05-2.27v-.19l-.09-2-.21-4.8L57.16,361a1.31,1.31,0,0,1-.22.51,1.86,1.86,0,0,1-.72.59,2,2,0,0,1-1.74.1l-.13-.07a.38.38,0,0,1-.18-.09A.46.46,0,0,1,54,362l-.12-.08h0l-.12-.1a3.45,3.45,0,0,1-1-4c.42-1,1.58-1.92,2.44-1.57s1,.88,1.36,1.5,1.68.18,1.82-2.8c.12-2.77.34-5.35,1.42-6.9,1.63-2.32,3.68-2.11,4.43-1.23.63-1.46,1.85-2.31,3.07-1.94s2,1.68,2.67,6.66c0,.22.06.42.08.63h0A23.55,23.55,0,0,1,70,358.76Z"
                                                style="fill: rgb(255, 189, 167); transform-origin: 61.3755px 358.992px;"
                                                id="elh31nervy45t" class="animable"></path>
                                            <path
                                                d="M63,354a1,1,0,0,1-.92.88c-.41,0-.65-.46-.55-1a1,1,0,0,1,.91-.88C62.84,353.07,63.09,353.5,63,354Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 62.2629px 353.94px;"
                                                id="elcsnvffku07p" class="animable"></path>
                                            <path
                                                d="M62.16,353.09c-.48.15-.71,1-1.19.8a.57.57,0,0,0,1,.16C62.13,353.86,62.16,353.09,62.16,353.09Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 61.565px 353.686px;"
                                                id="elu1z0vyj74v" class="animable"></path>
                                            <path d="M68.73,349.85l-1.66-.46a1,1,0,0,1,1.16-.82A1,1,0,0,1,68.73,349.85Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 67.9366px 349.202px;"
                                                id="elaxao1lz1yzl" class="animable"></path>
                                            <path
                                                d="M67,352.57a.64.64,0,0,0,1,.26,1.12,1.12,0,0,0,.37-1.27.63.63,0,0,0-1-.25A1.1,1.1,0,0,0,67,352.57Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 67.6845px 352.065px;"
                                                id="elnrv4a2dqms" class="animable"></path>
                                            <path
                                                d="M67.62,351.18c.47-.15.83.46,1.25,0a.86.86,0,0,1-.87.74C67.77,351.89,67.62,351.18,67.62,351.18Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 68.245px 351.538px;"
                                                id="eljximp4b2dqh" class="animable"></path>
                                            <path
                                                d="M62.19,351.1l-1.57,1.65a1.25,1.25,0,0,1,.18-1.58A.91.91,0,0,1,62.19,351.1Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 61.3042px 351.78px;"
                                                id="el7qmmhsygs3" class="animable"></path>
                                            <path
                                                d="M62.67,358.49l2.57.07a1.68,1.68,0,0,1-1.68,1.49C62.86,360,62.55,359.34,62.67,358.49Z"
                                                style="fill: rgb(177, 102, 104); transform-origin: 63.9424px 359.27px;"
                                                id="el0jn5nomjg6r6" class="animable"></path>
                                            <path
                                                d="M64.29,359.89a1.12,1.12,0,0,0-1.51-.91l-.12.06a1,1,0,0,0,.9,1A1.42,1.42,0,0,0,64.29,359.89Z"
                                                style="fill: rgb(240, 153, 122); transform-origin: 63.475px 359.475px;"
                                                id="elj1llp8yd29a" class="animable"></path>
                                            <polygon points="64.41 351.71 65.22 356.68 67.6 354.9 64.41 351.71"
                                                style="fill: rgb(240, 153, 122); transform-origin: 66.005px 354.195px;"
                                                id="el1kgbfjbueix" class="animable"></polygon>
                                            <path
                                                d="M65.48,363.67a13.75,13.75,0,0,1-5,.4c-.58-.09-1.44-1-2.17-2.1,0,0,.65,2.41,1.94,2.89,2,.73,5.23,0,5.23,0Z"
                                                style="fill: rgb(240, 153, 122); transform-origin: 61.895px 363.577px;"
                                                id="elb4aovlz8kjg" class="animable"></path>
                                            <path
                                                d="M57.82,361.89a3.15,3.15,0,0,1-1,2.63A2.28,2.28,0,0,1,56,365a1.71,1.71,0,0,1-2.36-1.56,3,3,0,0,1,.23-1.54.81.81,0,0,0,.2.14,1.31,1.31,0,0,0,.38.18,1.93,1.93,0,0,0-.14,1,1.17,1.17,0,0,0,1.6,1.05,1.74,1.74,0,0,0,.78-.62,2,2,0,0,0,.42-1.47,1.15,1.15,0,0,0-1.58-1.05.28.28,0,0,1-.39-.26.48.48,0,0,1,.29-.5A1.72,1.72,0,0,1,57.82,361.89Z"
                                                style="fill: #12D30F; transform-origin: 55.728px 362.681px;"
                                                id="eli69zj2mwr6" class="animable"></path>
                                            <g id="eln8xouui00em">
                                                <path
                                                    d="M57.82,361.89a3.15,3.15,0,0,1-1,2.63A2.28,2.28,0,0,1,56,365a1.71,1.71,0,0,1-2.36-1.56,3,3,0,0,1,.23-1.54.81.81,0,0,0,.2.14,1.31,1.31,0,0,0,.38.18,1.93,1.93,0,0,0-.14,1,1.17,1.17,0,0,0,1.6,1.05,1.74,1.74,0,0,0,.78-.62,2,2,0,0,0,.42-1.47,1.15,1.15,0,0,0-1.58-1.05.28.28,0,0,1-.39-.26.48.48,0,0,1,.29-.5A1.72,1.72,0,0,1,57.82,361.89Z"
                                                    style="opacity: 0.2; transform-origin: 55.728px 362.681px;"
                                                    class="animable" id="elqappx3q26qb"></path>
                                            </g>
                                        </g>
                                        <g id="freepik--arm--inject-3" class="animable"
                                            style="transform-origin: 52.91px 377.603px;">
                                            <path
                                                d="M56.82,380.56q-.65.21-1.26.36a11,11,0,0,1-6.56-.2c.61-3.06,2-4.53,4.52-6.84h0l0,0C55.62,375.42,56.48,378.22,56.82,380.56Z"
                                                style="fill: rgb(255, 189, 167); transform-origin: 52.91px 377.603px;"
                                                id="eltnsqtntpvs" class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M68.86,334.88h0c5.64,0,9.15,4.64,9.15,12.1,0,5.46-1.84,11.66-5.18,17.48-.5.88-1,1.76-1.61,2.61s-1.17,1.67-1.78,2.46-1.14,1.42-1.7,2c-.27.31-.55.62-.83.91a30.35,30.35,0,0,1-6.77,5.45,19.3,19.3,0,0,1-3.64,1.67c-.4.13-.8.24-1.19.33a11.78,11.78,0,0,1-2.87.37,8.91,8.91,0,0,1-3.09-.53c-3.85-1.43-6.06-5.64-6.06-11.57,0-11.37,8-25.26,17.87-30.94a15.76,15.76,0,0,1,7.7-2.38m0-1a16.63,16.63,0,0,0-8.21,2.52c-10.15,5.85-18.38,20.1-18.38,31.82,0,6.61,2.62,11,6.73,12.52a9.64,9.64,0,0,0,3.44.6,13,13,0,0,0,3.12-.4q.61-.15,1.26-.36a20.46,20.46,0,0,0,3.83-1.75,31.6,31.6,0,0,0,7-5.63c.28-.3.57-.62.85-.94.6-.67,1.18-1.37,1.74-2.08s1.24-1.66,1.82-2.52,1.14-1.77,1.66-2.68C77,359.24,79,352.8,79,347c0-8.31-4.14-13.12-10.17-13.12Z"
                                        style="fill: #12D30F; transform-origin: 60.635px 357.57px;" id="elk4hcznq0ps"
                                        class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--character-2--inject-3" class="animable"
                                style="transform-origin: 270.645px 179.943px;">
                                <g id="freepik--top--inject-3" class="animable"
                                    style="transform-origin: 270.645px 179.943px;">
                                    <path
                                        d="M281.67,156.29c-3.32-1.88-7.89-1.59-12.94,1.32-10.15,5.86-18.38,20.11-18.38,31.83,0,5.84,2.05,9.95,5.36,11.87l3.91,2.27a9.48,9.48,0,0,0,1.29.6,11,11,0,0,0,6.55.2c.42-.1.84-.22,1.27-.36a21.06,21.06,0,0,0,3.83-1.75,31.78,31.78,0,0,0,7-5.63c.29-.31.58-.62.86-.94.6-.67,1.17-1.37,1.73-2.09s1.24-1.65,1.83-2.51,1.14-1.77,1.65-2.68c3.29-5.72,5.31-12.16,5.31-18s-2.06-10-5.39-11.9Z"
                                        style="fill: #12D30F; transform-origin: 270.645px 179.943px;" id="elsdhq9dep4ek"
                                        class="animable"></path>
                                    <g id="elwwmxr3nhsoi">
                                        <path
                                            d="M281.67,156.29c-3.32-1.88-7.89-1.59-12.94,1.32-10.15,5.86-18.38,20.11-18.38,31.83,0,5.84,2.05,9.95,5.36,11.87l3.91,2.27a9.48,9.48,0,0,0,1.29.6,11,11,0,0,0,6.55.2c.42-.1.84-.22,1.27-.36a21.06,21.06,0,0,0,3.83-1.75,31.78,31.78,0,0,0,7-5.63c.29-.31.58-.62.86-.94.6-.67,1.17-1.37,1.73-2.09s1.24-1.65,1.83-2.51,1.14-1.77,1.65-2.68c3.29-5.72,5.31-12.16,5.31-18s-2.06-10-5.39-11.9Z"
                                            style="opacity: 0.25; transform-origin: 270.645px 179.943px;"
                                            class="animable" id="el0ueat0iw693p"></path>
                                    </g>
                                    <path
                                        d="M290.93,170.44c0,5.82-2,12.26-5.31,18-.51.91-1.07,1.81-1.65,2.68s-1.19,1.7-1.83,2.51S281,195,280.41,195.7c-.28.32-.57.63-.86.94a31.78,31.78,0,0,1-7,5.63,21.06,21.06,0,0,1-3.83,1.75c-.43.14-.85.26-1.27.36a11,11,0,0,1-6.55-.2c-4.11-1.52-6.73-5.91-6.73-12.52,0-11.72,8.23-26,18.38-31.83S290.93,158.72,290.93,170.44Z"
                                        style="fill: rgb(250, 250, 250); transform-origin: 272.55px 181.059px;"
                                        id="elp1eoizd9wq" class="animable"></path>
                                    <g id="freepik--character--inject-3" class="animable"
                                        style="transform-origin: 271.805px 184.167px;">
                                        <g id="freepik--chest--inject-3" class="animable"
                                            style="transform-origin: 271.805px 184.167px;">
                                            <path
                                                d="M286,187.69l-.41.73c-.28.5-.58,1-.89,1.47s-.51.8-.77,1.2c-.58.87-1.19,1.71-1.82,2.52l-.17.21-1-5.46A12.92,12.92,0,0,1,286,187.69Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 283.47px 190.74px;"
                                                id="elpa75g3txn1r" class="animable"></path>
                                            <g id="freepik--chest--inject-3" class="animable"
                                                style="transform-origin: 271.795px 196.526px;">
                                                <path
                                                    d="M284.74,189.89c-.25.4-.51.8-.77,1.2-.58.87-1.19,1.71-1.82,2.52l-.17.21c-.51.65-1,1.28-1.57,1.88l-.85.93a31.65,31.65,0,0,1-7,5.64,21.44,21.44,0,0,1-3.83,1.75c-.43.14-.85.26-1.27.36a11.84,11.84,0,0,1-4.8.25,8.48,8.48,0,0,1-1.75-.45,8.64,8.64,0,0,1-2.06-1.09,5.13,5.13,0,0,1,1.28-3.25c2.42-1.91,3.8-3.12,5-4a18.19,18.19,0,0,1,9-5.73c2.2-.57,4.4-1.21,6.87-1.76A3.7,3.7,0,0,1,284.74,189.89Z"
                                                    style="fill: rgb(55, 71, 79); transform-origin: 271.795px 196.526px;"
                                                    id="elksscu6l5km" class="animable"></path>
                                            </g>
                                            <g id="freepik--head--inject-3" class="animable"
                                                style="transform-origin: 272.856px 180.573px;">
                                                <path
                                                    d="M265.88,169.87c-2.41,4-1.62,7.9-.54,11.52,1.26,4.13.69,6.25,3,6.76-1.08-13.72,3.7,1.41,13-12,1.68-2.42,1.53-8.48-.72-10.64C277.36,162.48,270.59,162.34,265.88,169.87Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 273.386px 175.858px;"
                                                    id="el8p2juizl3k4" class="animable"></path>
                                                <path
                                                    d="M265,185.88c1.39.66,2.55-1.24,2.55-1.24l.69,9.1s0,1.18,2.4,2c1.58.54,4.86.22,6.73,1.84.78-1.74,1.41-4.74-.34-6.67l-.14-2.48a5.74,5.74,0,0,0,1.88-.68,7.76,7.76,0,0,0,3.39-4.81c.71-3.56.37-8.55-.95-14.78-1.94-1.19-8.13.11-12,4,.31,3.78-.57,5.72-.52,7.11a4.93,4.93,0,0,1-.7,1.27c-.6.77-1.14-.69-1.68-1.18s-2.25-.9-3,1.35A4.47,4.47,0,0,0,265,185.88Z"
                                                    style="fill: rgb(177, 102, 104); transform-origin: 272.79px 182.657px;"
                                                    id="eluqk7l024lr" class="animable"></path>
                                                <path
                                                    d="M273.55,174.4,272,176a1.38,1.38,0,0,1,.26-1.64A.83.83,0,0,1,273.55,174.4Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 272.694px 175.036px;"
                                                    id="el6srh58gcedu" class="animable"></path>
                                                <path
                                                    d="M280.8,172.42l-1.93-.12a1.19,1.19,0,0,1,1.14-1.07A1,1,0,0,1,280.8,172.42Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 279.846px 171.825px;"
                                                    id="elv0u4ydpes8m" class="animable"></path>
                                                <path
                                                    d="M272.87,177.21a.66.66,0,0,0,.85.67,1.15,1.15,0,0,0,.73-1.14.67.67,0,0,0-.84-.67A1.14,1.14,0,0,0,272.87,177.21Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 273.66px 176.978px;"
                                                    id="elc831tvfrqw" class="animable"></path>
                                                <path
                                                    d="M279,175.09a.66.66,0,0,0,.85.67,1.12,1.12,0,0,0,.74-1.13.66.66,0,0,0-.85-.67A1.14,1.14,0,0,0,279,175.09Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 279.795px 174.86px;"
                                                    id="elui5yon1jmv" class="animable"></path>
                                                <path
                                                    d="M275.48,173.88l1.15,5.32,2.41-1.75A7.07,7.07,0,0,0,275.48,173.88Z"
                                                    style="fill: rgb(154, 74, 77); transform-origin: 277.26px 176.54px;"
                                                    id="elm01w6hjbefe" class="animable"></path>
                                                <path
                                                    d="M268.68,178.61c.17,3.78,1.71,4.1,3,4.16,2,.1,2.93-2.09,5.27-2.91,1.34-.46,1.68-.28,2.95.24a3.3,3.3,0,0,0,.95.22,1.35,1.35,0,0,0,1.41-1,15.65,15.65,0,0,0,0-4.66l-.08-.89a32,32,0,0,1,.44,7,10.44,10.44,0,0,1-1.67,5.17c-1.23,1.61-3.44,2.93-6.88,3.14s-4.78-.68-5.29-1.91c-1.64-4-1.28-6.22-1.78-6.91S268.68,178.61,268.68,178.61Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 274.79px 181.44px;"
                                                    id="el7wi25te6yjk" class="animable"></path>
                                                <path
                                                    d="M277.78,180.77c1.59-.26,2.41.22,2.48,1.39s-.19,2.71-1.1,3.4-.87-.48-.76-1.13-.2-.43-.71-.28-.74.13-.54.7.49,1.38-.59,1.56-1.89-.78-2.14-2.22S275.37,181.17,277.78,180.77Z"
                                                    style="fill: rgb(177, 102, 104); transform-origin: 277.329px 183.566px;"
                                                    id="elrth4k81kntm" class="animable"></path>
                                                <path
                                                    d="M275.62,182.32l2.71-.73a2,2,0,0,1-1.34,1.8A1,1,0,0,1,275.62,182.32Z"
                                                    style="fill: rgb(154, 74, 77); transform-origin: 276.97px 182.528px;"
                                                    id="ellgzxzquixkr" class="animable"></path>
                                                <path
                                                    d="M275.66,182.7a1,1,0,0,0,1.33.69,1.53,1.53,0,0,0,.75-.45A2.29,2.29,0,0,0,275.66,182.7Z"
                                                    style="fill: rgb(242, 143, 143); transform-origin: 276.7px 183.005px;"
                                                    id="elb3zkhkqf3kj" class="animable"></path>
                                            </g>
                                            <g id="freepik--head--inject-3" class="animable"
                                                style="transform-origin: 273.06px 194.578px;">
                                                <path
                                                    d="M277.33,197.59c-1-.42-3.75-1-4-.17-.15.59-.59,2.69-1.36,2.85a7,7,0,0,1-5.61-2.1,4.25,4.25,0,0,1-1.25-2.32s.9-2.33,1.46-3.44.71-1.75,1.33-2l.17,1.92A4.85,4.85,0,0,0,270,194.1C271.81,195,275.47,195.59,277.33,197.59Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 271.22px 195.352px;"
                                                    id="elgoagdy4cg05" class="animable"></path>
                                                <path
                                                    d="M277.33,197.59c.56-.79,1.48-3.64,2-3.67,1-.06,1.69.58,1.68,0s-.74-1.67-1.65-3.16c-.7-1.15-1.8-2-2.46-1.89l.16,2.65a6.47,6.47,0,0,1,.53,2.17A9.45,9.45,0,0,1,277.33,197.59Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 278.955px 193.225px;"
                                                    id="el4n3waaqsj4f" class="animable"></path>
                                            </g>
                                            <path
                                                d="M262.66,204.63a8.48,8.48,0,0,1-1.75-.45,8.64,8.64,0,0,1-2.06-1.09,9.06,9.06,0,0,1-1.24-1.08,25,25,0,0,1,2.52-2.17A11.81,11.81,0,0,1,262.66,204.63Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 260.135px 202.235px;"
                                                id="eljhjon60mjjj" class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M280.77,158.34h0c5.64,0,9.15,4.64,9.15,12.1,0,5.45-1.84,11.66-5.18,17.48-.5.88-1,1.76-1.61,2.61S282,192.2,281.34,193s-1.13,1.41-1.69,2c-.27.31-.56.61-.83.91a30.87,30.87,0,0,1-6.77,5.45,21,21,0,0,1-3.64,1.67c-.41.13-.81.24-1.19.33a11.78,11.78,0,0,1-2.87.37,8.87,8.87,0,0,1-3.09-.53c-3.85-1.43-6.06-5.64-6.07-11.57,0-11.38,8-25.26,17.88-30.95a15.84,15.84,0,0,1,7.7-2.37m0-1a16.71,16.71,0,0,0-8.21,2.51c-10.15,5.86-18.38,20.11-18.38,31.83,0,6.61,2.62,11,6.73,12.52a9.82,9.82,0,0,0,3.44.6,12.82,12.82,0,0,0,3.11-.4c.42-.1.84-.22,1.27-.36a21.06,21.06,0,0,0,3.83-1.75,31.78,31.78,0,0,0,7-5.63c.29-.31.58-.62.86-.94.6-.67,1.17-1.37,1.73-2.09s1.24-1.65,1.83-2.51,1.14-1.77,1.65-2.68c3.29-5.72,5.31-12.16,5.31-18,0-8.31-4.14-13.12-10.16-13.12Z"
                                        style="fill: #12D30F; transform-origin: 272.56px 181.03px;" id="el20du4w2v1o8"
                                        class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--character-1--inject-3" class="animable"
                                style="transform-origin: 347.166px 380.172px;">
                                <g id="freepik--character--inject-3" class="animable"
                                    style="transform-origin: 347.166px 380.172px;">
                                    <g id="freepik--Bottom--inject-3" class="animable"
                                        style="transform-origin: 352.96px 430.019px;">
                                        <path
                                            d="M363.06,435.6l7.24-14.27,14.57,8.53-18,21.21s-8.91-.82-10.34-5.47S360.61,437.14,363.06,435.6Z"
                                            style="fill: rgb(255, 168, 167); transform-origin: 370.583px 436.2px;"
                                            id="elbb1oyi2zmx" class="animable"></path>
                                        <path
                                            d="M352.79,441.2a7.6,7.6,0,0,0-2,2.21c-.59.87-.4,5.09-1,7s-1,2.48-1.93,4.94c-1,2.72-3,5.2-.79,12.2s5.64,10.33,8.57,12a7.71,7.71,0,0,0,3.54.86s3.84-1.46,3.25-3.73S352.79,441.2,352.79,441.2Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 354.281px 460.805px;"
                                            id="elzyciplkd9w" class="animable"></path>
                                        <path
                                            d="M369.65,448.88a8.33,8.33,0,0,1-1.53,2.41,19.36,19.36,0,0,0-2.49,7c-2.26,11.07,2.14,16.7-3.82,20.85-1.73,1.09-5.31.79-10.75-6.19-2.78-3.56-4.37-10.89-3.28-14.21s2.57-5.48,3.27-8,.33-7.31,1.74-9.5a10.22,10.22,0,0,1,3.46-3c1.06-.65,3.37-1.49,4.44-2.11s1.68-1.3,2.37-.52l-1.25,1.53c-1.94,2.69-1.4,3.09-1.35,4.52a22.53,22.53,0,0,1-.72,4.56c1.38-1.75,1.94-3.27,3.45-3s1.69.19,3.85,2.22S369.74,448.24,369.65,448.88Z"
                                            style="fill: #12D30F; transform-origin: 358.547px 457.438px;"
                                            id="elr7d0ui9ey4" class="animable"></path>
                                        <g id="ely9l0q3qv5cq">
                                            <path
                                                d="M369.65,448.88a8.33,8.33,0,0,1-1.53,2.41,19.36,19.36,0,0,0-2.49,7c-2.26,11.07,2.14,16.7-3.82,20.85-1.73,1.09-5.31.79-10.75-6.19-2.78-3.56-4.37-10.89-3.28-14.21s2.57-5.48,3.27-8,.33-7.31,1.74-9.5a10.22,10.22,0,0,1,3.46-3c1.06-.65,3.37-1.49,4.44-2.11s1.68-1.3,2.37-.52l-1.25,1.53c-1.94,2.69-1.4,3.09-1.35,4.52a22.53,22.53,0,0,1-.72,4.56c1.38-1.75,1.94-3.27,3.45-3s1.69.19,3.85,2.22S369.74,448.24,369.65,448.88Z"
                                                style="opacity: 0.4; transform-origin: 358.547px 457.438px;"
                                                class="animable" id="elss427csns8i"></path>
                                        </g>
                                        <g id="el1mwpr4k9big">
                                            <path
                                                d="M351.06,473c-2.78-3.56-4.37-10.89-3.28-14.21a28.42,28.42,0,0,1,1.28-3.22c-.05.22-.12.45-.15.65-.07.42-.12.86-.16,1.29a9.86,9.86,0,0,0,.55,5c.62,1.38,2.07,4.84,3.93,4.92,1.06,0,1.95-1,2.35-2.17.18-.5.46-1.84.46-1.84a16.23,16.23,0,0,1,4.84,2c2.7,1.78,2.6,2.18,2.6,2.18a7.15,7.15,0,0,0-.08,2.37,5.8,5.8,0,0,0,1,2.36,3.94,3.94,0,0,0,.69.56,7.2,7.2,0,0,1-3.28,6.3C360.08,480.23,356.5,479.93,351.06,473Z"
                                                style="opacity: 0.3; transform-origin: 356.264px 467.603px;"
                                                class="animable" id="eltfpru6yxc2"></path>
                                        </g>
                                        <path
                                            d="M365.63,458.29a37.61,37.61,0,0,0-.69,8.85c-1,2.83-1.91,2.75-2,1.28s1.84-7.57,3.29-12.6C366,456.65,365.8,457.49,365.63,458.29Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 364.583px 462.622px;"
                                            id="el3vgaf3jhl8q" class="animable"></path>
                                        <path
                                            d="M358.9,440.54a6.15,6.15,0,0,1,1.08-4.05,7.57,7.57,0,0,0,.71-.37c1.17-.66,1.68-1.3,2.37-.52l-1.25,1.54c-1.94,2.68-1.4,3.08-1.35,4.51a22.53,22.53,0,0,1-.72,4.56c-1.13,4.8-2.16,6.41-2.69,11s.38,7.59-.27,7.85-1.93-.26-2.17-3.9,1.37-9.75,2.51-12.65S359.13,442.48,358.9,440.54Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 358.823px 450.179px;"
                                            id="el16nokmssmxd" class="animable"></path>
                                        <path
                                            d="M355.72,463.71a.4.4,0,0,0,.23.12,10.88,10.88,0,0,1,7.26,4.26.45.45,0,0,0,.69-.59,11.72,11.72,0,0,0-7.77-4.55.45.45,0,0,0-.53.35A.42.42,0,0,0,355.72,463.71Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 359.797px 465.594px;"
                                            id="ely1pgmlgviqr" class="animable"></path>
                                        <path
                                            d="M356.29,459.92a.48.48,0,0,0,.23.13,12.18,12.18,0,0,1,7.64,4.64.46.46,0,0,0,.66.05.46.46,0,0,0,.05-.65,13.1,13.1,0,0,0-8.14-4.95.48.48,0,0,0-.56.35A.45.45,0,0,0,356.29,459.92Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 360.569px 461.993px;"
                                            id="elahiurwvq05h" class="animable"></path>
                                        <path
                                            d="M356.21,455.75a.48.48,0,0,0,.25.14,13.8,13.8,0,0,1,8.55,5.22.51.51,0,1,0,.77-.67,14.84,14.84,0,0,0-9.09-5.55.51.51,0,0,0-.61.39A.5.5,0,0,0,356.21,455.75Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 360.986px 458.081px;"
                                            id="elc39c7sonsdo" class="animable"></path>
                                        <path
                                            d="M356.81,452.19a.56.56,0,0,0,.25.14,13.44,13.44,0,0,1,8.36,5.09.49.49,0,0,0,.7.05.49.49,0,0,0,.06-.7,14.41,14.41,0,0,0-8.89-5.42.51.51,0,0,0-.61.37A.52.52,0,0,0,356.81,452.19Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 361.484px 454.465px;"
                                            id="elya8zbltcv7" class="animable"></path>
                                        <path
                                            d="M358.12,448.72a.48.48,0,0,0,.25.14,13.42,13.42,0,0,1,8.35,5.09.5.5,0,1,0,.77-.65,14.44,14.44,0,0,0-8.9-5.42.5.5,0,0,0-.6.38A.51.51,0,0,0,358.12,448.72Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 362.794px 450.998px;"
                                            id="el5c5gdjnrcyh" class="animable"></path>
                                        <polygon
                                            points="366.99 436.74 376.43 444.45 381.76 447.8 375.67 459.32 358.51 451.1 366.99 436.74"
                                            style="fill: rgb(255, 168, 167); transform-origin: 370.135px 448.03px;"
                                            id="el4930q1fx5qr" class="animable"></polygon>
                                        <path
                                            d="M347.76,385.22s34.34-5.69,49-5.59c15,.09,16.39,11.35,12.63,18.25-7.18,13.2-32.16,41.2-32.16,41.2s-8.39-3.84-11-11.1l5.7-13.07-18.19,5.79-2.09-2.55Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 379.458px 409.354px;"
                                            id="el8hrzrpnyh6l" class="animable"></path>
                                        <path
                                            d="M375,403.79a126.3,126.3,0,0,0-7.57,12.58l4.58-1.46c5.16-12.3,6.22-15.88,14.47-21.65C386.47,393.26,380.55,395.49,375,403.79Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 376.955px 404.815px;"
                                            id="elv95v2uzv66h" class="animable"></path>
                                        <path
                                            d="M347.76,385.22l-52.94,9.71s-4.2,19.51-.14,31.71c4,11.92,15.72,15.34,21.38,15.78,8.09.63,17.49-1.88,17.49-1.88a44.74,44.74,0,0,0,9.4,5.53c4.73,1.88,25.43,10.56,25.43,10.56s5.82-4.93,5.24-15.19l-21.9-23.29Z"
                                            style="fill: rgb(69, 90, 100); transform-origin: 333.286px 420.925px;"
                                            id="el1fmog7m1tq1" class="animable"></path>
                                        <path
                                            d="M368.38,456.63s1.13-.52,2.74-3.57c-5.36-1.26-23-8.16-28.69-10.58-10.13-4.29-13.26-8.83-13.26-8.83s-.07,3,4.38,6.89a44.74,44.74,0,0,0,9.4,5.53C347.68,448,368.38,456.63,368.38,456.63Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 350.145px 445.14px;"
                                            id="eljmv4pw0bz7" class="animable"></path>
                                        <path
                                            d="M322.72,438.6c-5.07.82-18.71-1.69-23.14-11.31-4.34-9.4-2.87-20.63-1.91-30.3l-1.63.39-2.87.77c-.76,8.59-1.61,18.74.9,28.36,3.17,12.17,16.33,15.47,22,15.91,8.09.63,17.49-1.88,17.49-1.88l-2.69-4.16A34.26,34.26,0,0,1,322.72,438.6Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 312.977px 419.756px;"
                                            id="elotmu37dhf0h" class="animable"></path>
                                        <path
                                            d="M354.07,420.65s-.95-1.14-3-3.49-5.23-6.8-13.55-6.48-24.29,1.76-24.29,1.76,16.67-2.84,22.43-3.79,9.59-.3,12.87,2.61,8.37,8.45,8.37,8.45Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 335.065px 414.446px;"
                                            id="el56gmkxpfc4k" class="animable"></path>
                                        <path d="M342.93,410a16.54,16.54,0,0,0,3.89-11.53s2,7.58-1.19,13.09Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 345.184px 405.015px;"
                                            id="elpan2c949gl" class="animable"></path>
                                        <path
                                            d="M403.39,453.8c4,1.59,6.54,3.2,8.4,5.64s2.44,4.9.67,7.86-5,6.42-8.9,6.19-6.25-1.19-9.84-3.13Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 403.623px 463.65px;"
                                            id="el2b8ckgb6s6q" class="animable"></path>
                                        <path
                                            d="M371.12,457.22c-.06,1.21,5,3.62,10.34,6.15,5.68,2.71,7.08,4.48,11.72,6.76,5.3,2.61,7.31,2.76,11.42,1.61s9.19-7,5.66-12.44c-2.88-4.41-6.62-5.62-12.28-7.11a105.93,105.93,0,0,1-13.25-4.29c-4.09-1.58-7.46-4.44-8.3-3.45.58.29,4.86,2.93,4.05,3.64-.2.37-.81.26-1.86-.18a1.8,1.8,0,0,0-1.47-.07,2.82,2.82,0,0,0-1.06,1.28,31.62,31.62,0,0,0-1.28,3.24c-.32.75-.18.31-.48,1.07a8.28,8.28,0,0,0-.88,2.9c.05.46.39.61.75.84s.87.51,1.21.77c.13.1.38.45.3.63s-.87.15-1.17,0-.83-.25-1.2-.39S372.05,457.65,371.12,457.22Z"
                                            style="fill: #12D30F; transform-origin: 391.283px 458.335px;"
                                            id="elxdyfzuwzlii" class="animable"></path>
                                        <g id="el4s8ycsadi27">
                                            <path
                                                d="M371.12,457.22c-.06,1.21,5,3.62,10.34,6.15,5.68,2.71,7.08,4.48,11.72,6.76,5.3,2.61,7.31,2.76,11.42,1.61s9.19-7,5.66-12.44c-2.88-4.41-6.62-5.62-12.28-7.11a105.93,105.93,0,0,1-13.25-4.29c-4.09-1.58-7.46-4.44-8.3-3.45.58.29,4.86,2.93,4.05,3.64-.2.37-.81.26-1.86-.18a1.8,1.8,0,0,0-1.47-.07,2.82,2.82,0,0,0-1.06,1.28,31.62,31.62,0,0,0-1.28,3.24c-.32.75-.18.31-.48,1.07a8.28,8.28,0,0,0-.88,2.9c.05.46.39.61.75.84s.87.51,1.21.77c.13.1.38.45.3.63s-.87.15-1.17,0-.83-.25-1.2-.39S372.05,457.65,371.12,457.22Z"
                                                style="opacity: 0.4; transform-origin: 391.283px 458.335px;"
                                                class="animable" id="elum4fyi67ofa"></path>
                                        </g>
                                        <g id="el2lrcfa2jkwk">
                                            <path
                                                d="M391.36,469.25c.76.38,5.57,2.62,7.08,1.28s-2.22-3.77-2.22-3.77-.59-3.63,3.79-9c.76.58,3.92.56,3.88-1.31s-5.35-4.14-5.42-4.17c5.42,1.45,9,2.7,11.79,7,3.53,5.41-1.54,11.3-5.66,12.44s-6.12,1-11.42-1.61C392.65,469.87,391.83,469.52,391.36,469.25Z"
                                                style="opacity: 0.3; transform-origin: 401.404px 462.34px;"
                                                class="animable" id="elgwd0jphv93o"></path>
                                        </g>
                                        <path
                                            d="M396.73,466.4c2,.67.63,2.49-2.3,1.9-4.41-.88-8.07-3.38-13-4.93-5.3-2.53-10.7-4.88-10.35-6.22.95.35,3,1.2,3,1.2.4.17,1.42.55,1.42.55,4,1.73,8.46,4.52,12.81,5.7C392.14,465.64,394.73,465.73,396.73,466.4Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 384.369px 462.783px;"
                                            id="elajin1po8jy8" class="animable"></path>
                                        <path
                                            d="M399.72,458.48c-1.84-1.06-2.16-2-5.76-3.62s-9.69-5.19-13.45-7.38a47.74,47.74,0,0,1-4.08-3c.62-.71,2.91-.05,5.21,1.4s3.69,2.36,6,3.55c4.42,2.65,9.46,4.45,12,6.07S401.55,459.55,399.72,458.48Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 388.878px 451.468px;"
                                            id="el3tggz7qtjmo" class="animable"></path>
                                        <path
                                            d="M400,458a.57.57,0,0,1-.11.16,16.09,16.09,0,0,0-3.43,8.89.53.53,0,0,1-.51.49.43.43,0,0,1-.4-.51,16.76,16.76,0,0,1,3.74-9.56.41.41,0,0,1,.64,0A.52.52,0,0,1,400,458Z"
                                            style="fill: rgb(240, 240, 240); transform-origin: 397.793px 462.428px;"
                                            id="el7orgfksl4j5" class="animable"></path>
                                        <path
                                            d="M396.43,455.4a.71.71,0,0,1-.1.14,22,22,0,0,0-4.25,10.5.54.54,0,0,1-.52.48.45.45,0,0,1-.39-.53,22.68,22.68,0,0,1,4.53-11.11.44.44,0,0,1,.65-.05A.53.53,0,0,1,396.43,455.4Z"
                                            style="fill: rgb(240, 240, 240); transform-origin: 393.821px 460.615px;"
                                            id="el8k7l4tos1k5" class="animable"></path>
                                        <path
                                            d="M388.58,465.66a.51.51,0,0,1-.42.32.44.44,0,0,1-.45-.47c.22-6.44,4.36-12.48,4.56-12.69a.42.42,0,0,1,.64,0,.56.56,0,0,1,0,.72s-4.05,5.94-4.24,11.93A.46.46,0,0,1,388.58,465.66Z"
                                            style="fill: rgb(240, 240, 240); transform-origin: 390.375px 459.326px;"
                                            id="elhp1bo1zu18" class="animable"></path>
                                        <path
                                            d="M385.29,463.56a.55.55,0,0,1-.42.32.44.44,0,0,1-.45-.47,18.93,18.93,0,0,1,4.8-12,.42.42,0,0,1,.64,0,.55.55,0,0,1-.08.72,18.18,18.18,0,0,0-4.44,11.22A.54.54,0,0,1,385.29,463.56Z"
                                            style="fill: rgb(240, 240, 240); transform-origin: 387.189px 457.571px;"
                                            id="elhwgivf71fyk" class="animable"></path>
                                        <path
                                            d="M381,461.75a.5.5,0,0,1-.41.32.43.43,0,0,1-.46-.46c0-6.69,4.74-11.87,5-12.08a.42.42,0,0,1,.64,0,.54.54,0,0,1-.06.71c-.05.05-4.59,5.06-4.61,11.28A.54.54,0,0,1,381,461.75Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 383.002px 455.727px;"
                                            id="elb57rftwuv5f" class="animable"></path>
                                    </g>
                                    <g id="freepik--top--inject-3" class="animable"
                                        style="transform-origin: 347.166px 356.477px;">
                                        <g id="freepik--arm--inject-3" class="animable"
                                            style="transform-origin: 373.052px 336.436px;">
                                            <path
                                                d="M348.5,332.34c7.22,4.2,19.72,11.08,24.3,13.39,0,0,13.15-10.72,17.93-15.16,2.1-1.95,2.45-2.92,2.55-4.06a20.3,20.3,0,0,1,.67-4.46c.49-1.67.82-2.26,1.38-4.35s.77-6.2.21-7.95c.39-.9,2.45-1.16,3.57.9a12.4,12.4,0,0,1,1.12,5.59c.07,1.24,0,2.57.41,2.73s2.06-.92,3.78-1.52,3.2-1.53,5.21-1.15a2.33,2.33,0,0,1,1.93,2.89,3.05,3.05,0,0,1-.92,1.29,2.46,2.46,0,0,1,1.94.38,2.72,2.72,0,0,1,.41,3.42,1.54,1.54,0,0,1,1.64,1.19c.33,1.13.33,2.29-.78,2.87,0,0,1,.12,1.1.67a2.81,2.81,0,0,1-.63,2.65,9,9,0,0,1-3.23,1.13s-.13.44-1.17,1.12c-.37.24-1.24.83-2.68,1.66a16.37,16.37,0,0,1-4,1.72c-1.35.4-2.2.28-5.55,4.3-2.16,2.59-10.71,12.23-15.35,16.93-7.05,7.14-8.81,6.06-17.61,2.47-9.6-3.91-18.25-8.49-18.25-8.49l-15.43-25C337.25,327.21,340.67,327.8,348.5,332.34Z"
                                                style="fill: rgb(255, 168, 167); transform-origin: 373.052px 336.436px;"
                                                id="el4r9b224ut54" class="animable"></path>
                                            <path
                                                d="M409.39,332.3a4.07,4.07,0,0,1-.48-.33,8.5,8.5,0,0,1-.92-.74,1,1,0,0,1-.32-.81,2.17,2.17,0,0,0,.51,0,5.48,5.48,0,0,0,1.42-.63,12.77,12.77,0,0,1,1.39-.51c.95-.31,1.91-.61,2.86-.94-1,.16-2,.37-3,.62a9.91,9.91,0,0,0-1.46.47,5.79,5.79,0,0,1-1.32.56,3.11,3.11,0,0,1-1.38-.21,3.21,3.21,0,0,1-1.26-.6,1.88,1.88,0,0,1-.33-.59.74.74,0,0,1,.06-.63,1.65,1.65,0,0,1,.8-.64,4.74,4.74,0,0,0,1.07.1,5.14,5.14,0,0,0,1.62-.59c.49-.27,1-.53,1.45-.82,1-.56,1.91-1.12,2.84-1.73-1,.44-2,.94-3,1.44a11.5,11.5,0,0,1-3,1.27,4.45,4.45,0,0,1-1.56-.19,8,8,0,0,1-1.48-.65,1.32,1.32,0,0,1-.79-1.19,1.19,1.19,0,0,1,.33-.79l.37-.11c.6-.17,1.24-.26,1.88-.42a6.62,6.62,0,0,0,1.82-.76,15.76,15.76,0,0,0,3-2.4,13.08,13.08,0,0,1-1.56,1.12,18.41,18.41,0,0,1-1.64,1,7.44,7.44,0,0,1-1.75.67c-.61.14-1.25.22-1.9.38-.31.08-.63.19-.92.25s-.41,0-.58-.25a1.62,1.62,0,0,1,.2-1.61,5.9,5.9,0,0,1,2.89-2.3l.05,0v0a2.46,2.46,0,0,1,.33-.79,6,6,0,0,1,.52-.72,4.7,4.7,0,0,0-.6.66,2.78,2.78,0,0,0-.41.76,5.79,5.79,0,0,0-3.11,2.26,2.93,2.93,0,0,0-.39,1,1.5,1.5,0,0,0,.15,1.09,1.14,1.14,0,0,0,.43.41s.05,0,.08,0a7.08,7.08,0,0,1-2.41,9.08,8.21,8.21,0,0,0,3.06-2.51,6.88,6.88,0,0,0,1.35-2.95l.44.5a1,1,0,0,0,0,.24,2.45,2.45,0,0,0,.35.73,3.09,3.09,0,0,0,1.39.76,5.62,5.62,0,0,0,1,.25.8.8,0,0,0-.09.41,1.43,1.43,0,0,0,.24.63,5.38,5.38,0,0,0,.92.87,4.37,4.37,0,0,0,.55.32,1.52,1.52,0,0,0,.64.19,4.73,4.73,0,0,0,1.25,0l-1.18-.29A2.45,2.45,0,0,1,409.39,332.3Zm-6.07-8.05,0,0h0Z"
                                                style="fill: rgb(242, 143, 143); transform-origin: 406.87px 325.86px;"
                                                id="elbhv47fym92r" class="animable"></path>
                                        </g>
                                        <path
                                            d="M294.54,363.17c1.19-17.32,1.14-24.81,2.86-30.48,2.63-.78,8.3-2.35,8.3-2.35a142.42,142.42,0,0,1,18.52-2.6l6.84-.26c3.71,3.56,12.25,11.87,15.42,19.08a14.83,14.83,0,0,1-4.31,17.06c.07,5.15,0,12.24,0,12.24a59,59,0,0,0,4.91,9.32c-.82,8.52-10.51,15.71-25.68,19.83a40.62,40.62,0,0,1-29-3S293.36,380.33,294.54,363.17Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 319.99px 366.948px;"
                                            id="el4cbi6lrkvg3" class="animable"></path>
                                        <path
                                            d="M342.25,343.45a13.3,13.3,0,0,0-3.83,2.64,37.67,37.67,0,0,1-4,3.93c-2.95,2.16-6.81,2.29-10.32,1.92-4.15-.44-8.26-1.48-12.45-.9a19.35,19.35,0,0,0-10.5,4.84c-.09.08-.1.45.08.34a25.45,25.45,0,0,1,14.51-3.92c4.58.24,9.07,1.66,13.68,1.17a13.19,13.19,0,0,0,5.44-1.71c1.83-1.11,3.11-2.83,4.6-4.33a12.22,12.22,0,0,1,5.72-3.31h0c-.27-.48-.55-.95-.86-1.43A15.87,15.87,0,0,0,342.25,343.45Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 323.133px 349.465px;"
                                            id="elc62ecren045" class="animable"></path>
                                        <path
                                            d="M298.87,345.69A18,18,0,0,1,310.54,341c4.23-.07,8.28,1.34,12.5.44a17.9,17.9,0,0,0,5.7-2.35,31.09,31.09,0,0,1,5.71-3.14,15.66,15.66,0,0,1,4-.87c-.39-.44-.77-.86-1.16-1.28-.54.08-1.09.18-1.62.3a18.64,18.64,0,0,0-5.53,2.35,27.94,27.94,0,0,1-6.4,3.36,17.68,17.68,0,0,1-7.2.5,35.92,35.92,0,0,0-6.79-.49,16.94,16.94,0,0,0-11,5.42C298.6,345.39,298.68,345.88,298.87,345.69Z"
                                            style="fill: rgb(224, 224, 224); transform-origin: 318.561px 339.767px;"
                                            id="el9ge9z5658z" class="animable"></path>
                                        <path
                                            d="M330.29,365.59s-4.1,5.52-12.74,4.92c-8.91-.63-10.94-7.9-10.94-7.9s0,9.64,10.67,10.39A12.79,12.79,0,0,0,330.29,365.59Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 318.45px 367.842px;"
                                            id="el83by2z1g626" class="animable"></path>
                                        <path
                                            d="M320.06,413.62v1a2.83,2.83,0,0,0,1.42,2.46l27,15.56a2.84,2.84,0,0,0,2.84,0L401,404a2.82,2.82,0,0,0,1.42-2.46v-.69l-52.45,30.29Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 361.24px 416.935px;"
                                            id="eldtop3nc4efq" class="animable"></path>
                                        <path
                                            d="M402.39,400.85l-29.42-17a1.7,1.7,0,0,0-1.69,0l-51,29.47a.38.38,0,0,0,0,.65l29.69,17.15Z"
                                            style="fill: rgb(250, 250, 250); transform-origin: 361.243px 407.373px;"
                                            id="elbfrzbbxkgcq" class="animable"></path>
                                        <polygon
                                            points="349.67 428.64 333.81 419.49 380.2 392.7 396.15 401.81 349.67 428.64"
                                            style="fill: rgb(224, 224, 224); transform-origin: 364.98px 410.67px;"
                                            id="elb8w0c2ugu8t" class="animable"></polygon>
                                        <polygon
                                            points="341.87 403.18 342.17 403.35 349.94 407.84 363.77 399.86 364.06 399.69 355.99 395.03 341.87 403.18"
                                            style="fill: rgb(224, 224, 224); transform-origin: 352.965px 401.435px;"
                                            id="elseuyicf6kb" class="animable"></polygon>
                                        <polygon
                                            points="342.17 403.35 349.94 407.84 363.77 399.86 355.99 395.37 342.17 403.35"
                                            style="fill: rgb(230, 230, 230); transform-origin: 352.97px 401.605px;"
                                            id="elog4iqhqyyz" class="animable"></polygon>
                                        <path
                                            d="M349.94,431.14V433a2.78,2.78,0,0,0,1.42-.38L401,404a2.82,2.82,0,0,0,1.42-2.46v-.69Z"
                                            style="fill: rgb(235, 235, 235); transform-origin: 376.18px 416.925px;"
                                            id="elf5feh69x9h9" class="animable"></path>
                                        <g id="elz8c97t13se">
                                            <g style="opacity: 0.5; mix-blend-mode: multiply; transform-origin: 376.18px 416.925px;"
                                                class="animable" id="el5ncv5sfwpa8">
                                                <path
                                                    d="M349.94,431.14V433a2.78,2.78,0,0,0,1.42-.38L401,404a2.82,2.82,0,0,0,1.42-2.46v-.69Z"
                                                    style="fill: rgb(224, 224, 224); transform-origin: 376.18px 416.925px;"
                                                    id="elv9zoyemc1l" class="animable"></path>
                                            </g>
                                        </g>
                                        <path
                                            d="M350.74,431.55a3.33,3.33,0,0,0,2.9-.22L403,402.81a3.36,3.36,0,0,0,1.64-2.35l5.4-32.25a3.28,3.28,0,0,0-.95-2.93l-51.33,29.64a2.45,2.45,0,0,0-1.2,1.73Z"
                                            style="fill: #12D30F; transform-origin: 380.415px 398.531px;"
                                            id="elj0esr1et5vn" class="animable"></path>
                                        <g id="el4x5m1tbwpw4">
                                            <g style="opacity: 0.7; transform-origin: 380.415px 398.531px;"
                                                class="animable" id="eltv22cfhg1rh">
                                                <path
                                                    d="M350.74,431.55a3.33,3.33,0,0,0,2.9-.22L403,402.81a3.36,3.36,0,0,0,1.64-2.35l5.4-32.25a3.28,3.28,0,0,0-.95-2.93l-51.33,29.64a2.45,2.45,0,0,0-1.2,1.73Z"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 380.415px 398.531px;"
                                                    id="elqp8sp3et1in" class="animable"></path>
                                            </g>
                                        </g>
                                        <path
                                            d="M349.94,431.14l.34.19a3.88,3.88,0,0,0,.46.22l5.85-34.9a2.45,2.45,0,0,1,1.2-1.73l51.33-29.64a3.26,3.26,0,0,0-.68-.53L357,394.45a2.47,2.47,0,0,0-1.2,1.74Z"
                                            style="fill: rgb(250, 250, 250); transform-origin: 379.53px 398.15px;"
                                            id="eleklotjllug" class="animable"></path>
                                        <path
                                            d="M378.56,401.78c.36-2.15,2.59-5,5-6.4s4-.75,3.67,1.41-2.59,5-5,6.41S378.2,403.94,378.56,401.78Z"
                                            style="fill: #12D30F; transform-origin: 382.892px 399.291px;"
                                            id="elzauwvjmfujg" class="animable"></path>
                                        <path
                                            d="M279.39,381.85c.05-6.32,4.11-33,7.18-40.1,2-4.58,3.46-6.92,10.76-9.06,6.82,4.67,6,20.55,5.09,24.08l-5.13,24.42,13,6.86c5.68,3,8.9,5.15,15,5.76s7.29.27,12.53,2.56a38.62,38.62,0,0,1,5.29,3c1.85,1.94,4.13,3.43,6.11,5.25,1.5,1,.14,1.73-1,1.82-3.26.11-5.9-2.41-8.82-3.44a10.81,10.81,0,0,1,.56,3.24c0,.87.24,1.94-.51,2.6a6.76,6.76,0,0,1-1.83.79,1.29,1.29,0,0,1-.35.86,2.2,2.2,0,0,1-1.56.43,6.58,6.58,0,0,1-.89-.11,1.65,1.65,0,0,1-1,1.29,7.1,7.1,0,0,1-3.75.2c-.18-.07-1.59-.8-2-1-.59-.3-1.13-.46-1.39-.84s.52-1.53,1.24-1.66a7.55,7.55,0,0,1,2.39.11,8.28,8.28,0,0,1-.74-2c-.67-1-5.35.12-9.53-.52-3.17-.48-5-2.91-6.48-3.44-8.34-3-19.07-4.74-28.13-8.41C278.11,391.49,279.33,388.41,279.39,381.85Z"
                                            style="fill: rgb(255, 168, 167); transform-origin: 314.58px 372.576px;"
                                            id="elsapgjfyvpmp" class="animable"></path>
                                        <path d="M339.43,403a9.28,9.28,0,0,0-1.78-4.19c1.64.56,2.82,4.62,2.82,4.62Z"
                                            style="fill: rgb(242, 143, 143); transform-origin: 339.06px 401.12px;"
                                            id="elgtobzkhyex" class="animable"></path>
                                        <path
                                            d="M337.65,409.61a9.76,9.76,0,0,0,0-2.59,22.13,22.13,0,0,0-.39-2.57,10.86,10.86,0,0,0-.75-2.5,4.69,4.69,0,0,0-1.6-2.05,3.79,3.79,0,0,1,.74,1,8,8,0,0,1,.51,1.16,19.08,19.08,0,0,1,.62,2.45c.18.84.33,1.68.49,2.52A21.55,21.55,0,0,1,337.65,409.61Z"
                                            style="fill: rgb(242, 143, 143); transform-origin: 336.323px 404.755px;"
                                            id="el5t20i23fypg" class="animable"></path>
                                        <path
                                            d="M334.85,410.79a12.07,12.07,0,0,0-.05-2.55,23.49,23.49,0,0,0-.43-2.51,19.18,19.18,0,0,0-.74-2.45,5,5,0,0,0-1.35-2.16,3.17,3.17,0,0,1,.59,1.1,11.82,11.82,0,0,1,.39,1.19c.23.8.44,1.61.62,2.43C334.26,407.47,334.62,409.11,334.85,410.79Z"
                                            style="fill: rgb(242, 143, 143); transform-origin: 333.587px 405.955px;"
                                            id="elppyuw8f0bdg" class="animable"></path>
                                        <path
                                            d="M328,408.78a4.31,4.31,0,0,1,1,.13c.34.08.59.24,1,.37l-.18-.27a1,1,0,0,0,.08.5,1.14,1.14,0,0,0,.25.39,1.45,1.45,0,0,0,.72.45,3.87,3.87,0,0,1-.44-.64,1.16,1.16,0,0,1-.11-.33.82.82,0,0,1,0-.3l0-.19-.2-.08a3.35,3.35,0,0,0-1-.19A2.14,2.14,0,0,0,328,408.78Z"
                                            style="fill: rgb(242, 143, 143); transform-origin: 329.435px 409.477px;"
                                            id="elkkfvxnnznf" class="animable"></path>
                                        <path
                                            d="M331.6,286.35c6.4.07,9.75,7.94,5.26,15.61-8,13.6-26.35,8.66-26.35,8.66l-3.27,11s-3-3.06-6.77-7.32c-6.83-7.64-5.82-19.08-1.19-21.59-1-10.57,20.52-17.71,29.92-8.61A13.28,13.28,0,0,1,331.6,286.35Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 317.248px 300.777px;"
                                            id="elps3ec5g31g" class="animable"></path>
                                        <path
                                            d="M331.89,289.65c2.69,1.44,5,7.71,4.56,20.05-.28,8.84-3.5,12.76-6.19,13.89-1.61.68-3.63.83-7.11.62l.14,4.72s6.56,5.47,5.14,17.18c-19.88-7.16-21-15.55-21-15.55l-.4-17.31c-.59,1.06-4.07,2.71-6.65-.28-3-3.5-2.61-7.88-.15-9.61s5.64-.36,6.94,2.55c2.8,1,6.28-2,5.59-12.58,3.25-1.91,9.87.24,11.95-.1C327.78,292.72,328.58,288.09,331.89,289.65Z"
                                            style="fill: rgb(255, 168, 167); transform-origin: 317.38px 317.72px;"
                                            id="elke480qxutxr" class="animable"></path>
                                        <path
                                            d="M331.89,289.65c-4-.09-4.21,4.13-8.05,8a15.58,15.58,0,0,1-13.67,4.73c0-.48-2.56-9.46,5.14-14S329.82,284.48,331.89,289.65Z"
                                            style="fill: rgb(55, 71, 79); transform-origin: 320.826px 293.946px;"
                                            id="elilt4lsxdur8" class="animable"></path>
                                        <path
                                            d="M301.8,311.51a1.45,1.45,0,0,0,2.88.27,1.44,1.44,0,0,0-1.31-1.56A1.42,1.42,0,0,0,301.8,311.51Z"
                                            style="fill: #12D30F; transform-origin: 303.243px 311.602px;"
                                            id="el6n7fwf65w7o" class="animable"></path>
                                        <path
                                            d="M323.15,324.21c-8.55-1.41-13.47-4.61-14.51-8,0,0,.76,4.45,3.24,6.31,3.47,2.61,11.34,4,11.34,4Z"
                                            style="fill: rgb(242, 143, 143); transform-origin: 315.93px 321.365px;"
                                            id="elwxq627vjxk" class="animable"></path>
                                        <path d="M327.2,315.14l-6-1.89a3,3,0,0,0,1.94,3.92A3.33,3.33,0,0,0,327.2,315.14Z"
                                            style="fill: rgb(177, 102, 104); transform-origin: 324.105px 315.278px;"
                                            id="elwa1u88m0bc" class="animable"></path>
                                        <path
                                            d="M324.47,317.28a3.12,3.12,0,0,1-1.35-.11,3,3,0,0,1-2.08-2.44A3.62,3.62,0,0,1,324.47,317.28Z"
                                            style="fill: rgb(242, 143, 143); transform-origin: 322.755px 316.02px;"
                                            id="elv2pxtwiuhe" class="animable"></path>
                                        <path d="M317.61,304.54a1.72,1.72,0,1,0,1.63-1.79A1.72,1.72,0,0,0,317.61,304.54Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 319.328px 304.468px;"
                                            id="elccgvkumodd6" class="animable"></path>
                                        <path d="M329.7,303.56a1.72,1.72,0,1,0,1.63-1.78A1.72,1.72,0,0,0,329.7,303.56Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 331.419px 303.498px;"
                                            id="el1lwabvdz1az" class="animable"></path>
                                        <polygon points="324.1 301.3 325.84 312.72 331.89 310.29 324.1 301.3"
                                            style="fill: rgb(242, 143, 143); transform-origin: 327.995px 307.01px;"
                                            id="eljvcfsz3tnhr" class="animable"></polygon>
                                        <path d="M334,300.51l-4-1.16a2,2,0,0,1,2.51-1.44A2.15,2.15,0,0,1,334,300.51Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 332.034px 299.169px;"
                                            id="eluh9iryfsnz" class="animable"></path>
                                        <path d="M316.12,300.75l3.79-1.86a2,2,0,0,0-2.76-1A2.2,2.2,0,0,0,316.12,300.75Z"
                                            style="fill: rgb(38, 50, 56); transform-origin: 317.921px 299.209px;"
                                            id="eltb0d8qm48w" class="animable"></path>
                                        <path
                                            d="M305.72,303.9c-.57-5.21,5.58-21,25.88-17.55,0,0-1-2.9-6.53-3.7-10.86-1.22-16.53,4.92-19,8.82a18.48,18.48,0,0,0-2.49,11.22A5.25,5.25,0,0,1,305.72,303.9Z"
                                            style="fill: #12D30F; transform-origin: 317.546px 293.196px;"
                                            id="eljimi5cpnc0k" class="animable"></path>
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
            <center style="margin-top: 40px">
                <h1 class="" style="color:#6EBD6C;">What our clients say about us</h1>
            </center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; ">
                @foreach ($reviewratings as $reviewrating)
                    <div class="row">
                        <div class="card-body" style="text-align: left">
                            <div class="">
                                <img src="https://www.pngitem.com/pimgs/m/334-3344170_user-vector-user-flat-png-transparent-png.png"
                                    class="card-img-top" alt="..." style="height: 50px; width:50px;">
                            </div>
                            <div style="margin-left: 70px; margin-top: -60px;">
                                <p>{{ $reviewrating->username }}</p>
                                <p>{{ $reviewrating->comments }}</p>
                                <p>
                                    @for ($i = 1; $i <= $reviewrating->star_rating; $i++)
                                        <span><i class="fa fa-star text-warning"></i></span>
                                    @endfor
                                </p>
                            </div>
                            <hr style="opacity: 0.1">
                        </div>
                    </div>
                @endforeach
            </div>
        </center>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
