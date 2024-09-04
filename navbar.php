<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <link rel="icon" href="images/LogoCuadrado-SinFondo-LetraAzul.png" type="image/x-icon">
  <header id="cabeza" style="background-color: rgb(0, 0, 128); color: #F5F5F5; display: flex; justify-content: space-between;">
    <div  class="head1" style="height: 30px; padding: 5px 5px 15px 15px; display: flex; align-items: center;">
      <img src="images/gmap_marker.png" alt="Marker" style= "padding: 15px 5px 1px 35px ; height: 40px;">
      <p>Carrera 44 #5-67</p>
      <img src="images/llamada-telefonica.png" alt="Marker" style= "padding: 15px 5px 1px 35px ; height: 40px;">
      <p>3168512519</p>
      <img src="images/correo.png" alt="Marker" style= "padding: 15px 5px 1px 35px ; height: 40px;">
      <p>contacto@telemaxsoluciones.com</p>
    </div>
    <div style="height: 30px; padding: 5px 5px 15px 15px; display: flex; align-items: center;">
      <a href="https://www.speedtest.net/es" target="_blank" style="color: #F5F5F5; height: 1%; padding: 0 0 5px 0;">TEST DE VELOCIDAD </a>
      <a href="https://www.facebook.com/profile.php?id=61565223659124" target="_blank"><img src="images/facebook.png" alt="Marker" style= "padding: 15px 5px 1px 35px ; height: 50px;"></a>
      <a href=" https://www.instagram.com/telemaxsoluciones/" target="_blank"><img src="images/logotipo-de-instagram.png" alt="Marker" style= "padding: 15px 5px 1px 35px ; height: 40px;"></a>
      
    </div>
  </header>

  <head>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
    <title>TELEMAX</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <style>
      /* Añade el estilo CSS para el mapa */
      .google-map-container {
        height: 400px;
        position: relative;
      }
      .google-map {
        height: 100%;
        width: 100%;
      }
    </style>
    <script>
      // Carga la API de Google Maps
      function initMap() {
        // Configura las opciones del mapa
        var mapOptions = {
          center: { lat: 7.122173, lng: -73.126747 }, // Coordenadas de Bucaramanga
          zoom: 15, // Nivel de zoom
          styles: [
            // Añade los estilos del mapa aquí
            { featureType: "administrative", elementType: "labels.text.fill", stylers: [{ color: "#444444" }] },
            { featureType: "landscape", elementType: "all", stylers: [{ color: "#f2f2f2" }] },
            { featureType: "poi", elementType: "all", stylers: [{ visibility: "off" }] },
            { featureType: "poi.business", elementType: "geometry.fill", stylers: [{ visibility: "on" }] },
            { featureType: "road", elementType: "all", stylers: [{ saturation: -100 }, { lightness: 45 }] },
            { featureType: "road.highway", elementType: "all", stylers: [{ visibility: "simplified" }] },
            { featureType: "road.arterial", elementType: "labels.icon", stylers: [{ visibility: "off" }] },
            { featureType: "transit", elementType: "all", stylers: [{ visibility: "off" }] },
            { featureType: "water", elementType: "all", stylers: [{ color: "#b4d4e1" }, { visibility: "on" }] },
          ],
        };

        // Crea el mapa con las opciones configuradas
        var map = new google.maps.Map(document.getElementById("google-map"), mapOptions);

        // Añade un marcador en la ubicación de tu empresa
        var marker = new google.maps.Marker({
          position: { lat: 7.122173, lng: -73.126747 }, // Coordenadas de Calle de los Estudiantes 9-82, Bucaramanga, Santander, Colombia
          map: map,
          title: "Calle de los Estudiantes 9-82, Bucaramanga, Santander, Colombia",
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUTYWTf_-FxpiBFh_1gbli8-UV-8gnY0k=initMap"></script>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="" height="42" width="820" alt="smart home"></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>

    <div class="page">
      <div id="home">
        <!-- Page Header-->
        <header class="section page-header">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.php"><img src="images/Banner-FondoBlanco.png" alt="" width="223" height="50"/></a></div>
                  </div>
                  <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="home.php">Inicio</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="services.php">Internet</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="duo.php">Duo</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="pagfactura.php">Paga tu factura</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="team.php">Equipo</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="Solutions.php">Soluciones</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>