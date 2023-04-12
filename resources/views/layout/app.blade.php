<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            #header {
                font-family: Monospace;
                text-align:center;
                font-size: 17px;
                font-weight: semibold;
                padding: 15px;
            }
            /* The navbar container */
            #topnav {
              overflow: hidden;
              background-color: white;
              width: 100%;
            }
            /* Navbar links */
            #topnav a {
                float: right;
                display: block;
                color: black;
                text-align: center;
                padding: 24px 48px;
                text-decoration: none;
                font-size: 16px;
                font-weight: semibold;
            }

            /* Links - change color on hover */
            #topnav a:hover {
              color: white;
              background-color: red;
            }
            .main {
                background-image: url("/storage/home.jpg");
                width: 100%;
            }
            .main-text {
                position: absolute;
                top: 200px;
                left: 50px;
                width: 50%;
                padding: 100px;
                height: 400px;
                color: white;
            }
            #main-action {
                position: static;
                background-color: red;
                color: white;
                border: 1px solid white;
                border-radius: 15 px;
                padding: 15px;
                margin-top: 10px;
            }
            #main-action:hover {
                background-color: white;
                font-weight: bold;
                color: red;
            }
            #main-image {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            #judul {
                text-align:center;
                padding:15px;
            }
            #content div {
                padding: 15px;
            }
            
            #diff {
                background-color: red;
                color: white;
            }

            #kendaraan a {
                text-decoration: none;
                color: black;
            }

            /* Create three equal columns that float next to each other */
            table {
                border: 1px solid red;
                border-collapse:collapse;
                margin-right: auto;
                margin-left: auto;
                margin-bottom: 50px;
            }
            td, th {
                border: 1px solid red;
                text-align: center;
                font-size: 25px;
            }
            th {
                background-color: red;
            }
            .container::after {
                content: "";
                clear: both;
                display: table; 
            }
            .clearfix::after {
                content: "";
                clear: both;
                display: table; 
            }
            #footer {
                border: 1px solid red;
              background-color: black;
              text-align: left;
              padding: 10px;
              color: white;
            }
            #map{
                height: 200px;
                width: 50%;
                border: 1px solid black;
                background-color: white;
                text-align: center;
                color: black;
            }
        </style>
    </head>
    <body>
    <!--header-->
        <div id="header">
            <h5>belajar<i><b><mark style="background-color: red; color: white;">Nyetir</mark></b></i></h5>
        </div>
        <div style="float: left; width:75%; border: 1px solid black;"></div>
        <div style="float: right; width:25%; border: 1px solid red;"></div>
        <div style="float: left; width:25%; border: 1px dashed red;"></div>
        <div style="float: right; width:75%; border: 1px solid black;"></div>
    <!--navigation-->
        <div class="container">
            <div class="row" id="topnav">
                <a class="col-lg-2 col-sm-6" href="/">Home</a>
                <a class="col-lg-2 col-sm-6" href="#paket">Paket</a>
                <a class="col-lg-2 col-sm-6" href="#trainer">Profil</a>
                <a class="col-lg-2 col-sm-6" href="#kendaraan">Kendaraan</a>
                <a class="col-lg-2 col-sm-6" href="#jadwal">Jadwal</a>
                <a class="col-lg-2 col-sm-6" href="#footer">Kontak</a>
            </div>
        </div>
    <!--main*/-->
        <div class="main">
            <div class="main-text">
                <h1>@yield('title')</h1>
                <h3 id="main-subtitle">@yield('subtitle')</h3>
                @hasSection('main-action')
                    @yield('main-action')
                @endif
            </div>
            <img id="main-image" src="/storage/home.jpg" width=60% height=500px>
        </div>
    <!--Content-->
        <div class="clearfix">
            @yield('content')
        </div>
    <!--Footer: Lokasi, Kontak-->
        <div id="footer">
            <div class="container">
                <div class="row" id="content">
                    <div class="col-6">
                        <h3>Lokasi</h3>
                        <p>Jln. Merdeka, Kel. Sejahtera, Kec. Makmur, Kota Adil, Negara Beradab</p>
                        <p style="font-size:10px; padding:0;">Google Map</p>
                        <div id="map">Google Map</div>
                    </div>
                    <div class="col-6">
                        <h3>Kontak</h3>
                        <ul>
                            <li>Email: belajarnyetir@example.com</li>
                            <li>WhatsApp: 0812345678</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!--Copyright-->
        <div id="copyright">
            <p style="background-color: white; color: black; text-align: left; margin-left:20px;">Copyright@ 2023 belajarnyetir</p>
        </div>

    </body>
</html>
