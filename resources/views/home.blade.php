<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('public/css/home.css') }}" />
</head>

<body style="overflow-x:hidden">
    @extends('order_management.layout')
    @section('title', 'Home')
    @section('content')
        <div classname="" style="margin-left:100px">
            <img src="http://unblast.com/wp-content/uploads/2020/05/Farming-Vector-Illustration.jpg" alt="Home Image"
                style="float: right; width: 45%; height: 85%;" />
            <h1 style="margin-top:20px; color:#6EBD6C; text-align:left;">
                A New Way to Invest<br/>
                in Agriculture
            </h1>
            <span style="font-size: 20">
                Our portfolio of businesses caters to the entire Agri Value Chain and includes Seeds & Planting
                Materials,
                Crop Protection Compounds, Agri Equipment, Animal Health Products, Organic and Mineral Fertilizer,
                Environmental Science Products, Pre and Post Harvest Management Systems & Products, Green House and
                Protected Agriculture Structures as well as Water Management & Irrigation Systems. Our selection of
                services
                includes Pest Management and Landscaping.
            </span>
            <br />
            <button type="button" class="btn"
                style="float: left; margin-top: 20px; background-color:#6EBD6C; color: white; width:200px;">
                <span>Get Started </span>
            </button>
            <img src="https://media.istockphoto.com/vectors/farmer-working-on-garden-vector-id1303644694?k=20&m=1303644694&s=612x612&w=0&h=xMAA4N-0vvzcZJy12DpGEiKltyHrv1rGIKcl0v6iOP4="
                alt="leaves Image" style="float: left; width: 30%;height: 50%; margin-top: 60px;  margin-left: -260px;" />
            <div style="padding-left: 280px; padding-top: 100px">
                <h2 style="color:#6EBD6C;">The Future of Agriculture <br />investments</h2><br />
                <span style="font-size: 20">
                    Supporting Sustainable Greener Agriculture with Innovation, Quality Inputs and Extension Services.
                </span>
                <br />
            </div>
            <div class="" style="margin-top: 180px; margin-right: 40px; ">
                <center>
                    <h1 class="" style="color:#6EBD6C;">Our Services</h1>
                </center><br />
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#6EBD6C;">Agricultural Products</h5>
                                <p class="card-text">We provide the client with the best products in agriculture.</p>
                                <a href="#" class="btn" style="background-color:#6EBD6C; color:white;">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#6EBD6C;">Agricultural Equipments</h5>
                                <p class="card-text">We provide the client with the best equipments in agriculture.</p>
                                <a href="#" class="btn" style="background-color:#6EBD6C; color:white;">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div><br />
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#6EBD6C;">Platform to sell your goods</h5>
                                <p class="card-text">We provide the client with the best platform to sell their
                                    agricultural
                                    products.</p>
                                <a href="#" class="btn" style="background-color:#6EBD6C; color:white;">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#6EBD6C;">Platform to buy your goods</h5>
                                <p class="card-text">We provide the client with the best platform to buys agricultural
                                    products.</p>
                                <a href="#" class="btn" style="background-color:#6EBD6C; color:white;">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="margin-top: 100px; margin-right: 40px; ">
                <div class="card text-bg-success mb-3" style="max-width: auto;">
                    <div class="card-header">
                        <h2 class="" style="color:#6EBD6C;">About Us</h2>
                    </div>
                    <div class="card-body">
                        <img src="https://thumbs.dreamstime.com/b/logotype-agriculture-logo-field-wheat-stylized-eco-logo-green-energy-fields-logotype-agriculture-logo-field-117795540.jpg"
                            alt="Home Image" style="float: right; width: 25%; height: 25%; margin-right:80px" />
                        <p class="card-text">Our system is an online Agriculture product buying and selling platform
                            (E-Marketplace)<br />
                            which the user can sell their products (Fruits, vegetables, seeds, fertilizer, and equipment
                            <br />
                            related to agriculture field) and users can buy any of products as they wish. <br />The
                            system
                            is mainly focused on Sri Lankan agriculture sector.
                        </p>
                        <p class="card-text"> From this website Farmers will be able to get their needed products for
                            their
                            plantation and agricultural activities<br />
                            This website also support the buyers who need to buy the needed equipments and products for
                            their purposes.<br /> Any Client can sell their products in this website. This will be very
                            helpful for client involve in agricultural sector<br /> to fullfill their needs and wants.
                    </div>
                </div>
                <div class="" style="margin-top: 90px; margin-right: 40px; ">
                    <center>
                        <h1 class="" style="color:#6EBD6C;">What our clients say about us</h1>
                    </center>
                    <a href="/review">
                        <button type="button"
                            class="btn"style="float:right; background-color:#6EBD6C; color: white;
                        width:200px;">
                            <span>Post a review</span>
                        </button><br />
                    </a>
                    <div class="card-deck" style="margin-top: 30px">
                        <div class="card" style="background-color:#F7F7F7;">
                            <center><img
                                    src="https://www.pngitem.com/pimgs/m/334-3344170_user-vector-user-flat-png-transparent-png.png"
                                    class="card-img-top" alt="..." style="height: 200px; width:200px;"></center>
                            <div class="card-body">
                                <h5 class="card-title">John Doe</h5>
                                <p class="card-text">Great service, efficient communication and a really easy way to
                                    get a
                                    mortgage with lots of help and support to get the right deal.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card" style="background-color:#F7F7F7;">
                            <center><img
                                    src="https://png.pngitem.com/pimgs/s/130-1300253_female-user-icon-png-download-user-image-color.png"
                                    class="card-img-top" alt="..." style="height: 200px; width:200px;"></center>
                            <div class="card-body">
                                <h5 class="card-title">Ann Mary</h5>
                                <p class="card-text">We were provided excellent customer service. All responses were
                                    prompt
                                    and professional. Clearly, the upfront statement on our policy stated it was limited
                                    which told us that our preliminary research was not well thought out.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card" style="background-color:#F7F7F7;">
                            <center><img
                                    src="https://png.pngitem.com/pimgs/s/22-220721_circled-user-male-type-user-colorful-icon-png.png"
                                    class="card-img-top" alt="..." style="height: 200px; width:200px;"></center>
                            <div class="card-body">
                                <h5 class="card-title">Peter Stuward</h5>
                                <p class="card-text">Excellent customer service! Whenever I needed something they were
                                    there for me.<br />Thank you guys.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
