<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Meteo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300italic' rel='stylesheet' type='text/css'>

        <!-- font-awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="app" class="container-fluid">

          <!-- loading -->
          <section id="loading">
            <div class="row">
              <div class="col-sm-12">
                <div id="loading-message">loading...</div>
              </div>
            </div>
          </section>


          <!-- home -->
          <section id="home">
            <div class="row">
              <div class="col-sm-12">
                <div id="weather" class="centered-holder">

                  <div id="top-left" class="box-angle">
                    <div class="humidity"></div>
                    <div class="wind"></div>
                  </div>
                  <div id="top-right" class="box-angle">
                    <div class="temp">
                      <div class="high"></div>
                      <div class="low"></div>
                    </div>
                  </div>
                  <div id="bottom-left" class="box-angle">
                    <div class="city"></div>
                  </div>
                  <div id="bottom-right" class="box-angle">
                  </div>



                  <div id="sm" class="centered">


                  </div>

                  <div id="today" class="centered">
                    <div class="icon"></div>
                    <div class="string"></div>
                    <div> <img src="../public/img/montagna2.png"></div>
                  </div>

                </div>
                <!--
                <ul id="forecast">
                <ul>
                <div id="map">
                </div>
                -->




              </div>
            </div>
          </section>

          <!-- info -->
         <!-- <section id="info">
            <div class="row">
              <div class="col-sm-12 centered-holder">
                <div class="centered">
                  <p>This is the info section</p>
                </div>
              </div>
            </div>
          </section>


           <footer>
            <a href="./" class="link-home"><i class="fa fa-home"></i></a>
            <a href="#" class="link-refresh"><i class="fa fa-refresh"></i></a>
            <a href="#" class="link-info"><i class="fa fa-info"></i></a>
          </footer> 
        </div> -->


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/purl.js"></script>
        <script src="js/plugins.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script src="js/shake.js"></script>
        <script src="js/jquery.simpleWeather.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIRqmuU3qE-9IQ3KbTENdnCNXKzI0rqYQ"
        async defer></script>

        <!-- SCRIPT INIT -->
        <script>

          $(document).ready(function(){
            init()
            showSection("loading")
            getPosition()

          })
        </script>
    </body>
</html>
