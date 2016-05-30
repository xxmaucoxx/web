<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Jumm!</title>

    <!-- CSS  -->
    <link href="public/min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="public/min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="public/css/style.css" type="text/css" rel="stylesheet" >
    <link href="public/css/kira.css" type="text/css" rel="stylesheet" >
</head>
<body id="top" class="scrollspy" ng-app="jummp">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="orange darken-4" role="navigation" >
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo">Jummp!</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#/descubrir">Descubrir</a></li>
                    <li><a href="#/restaurantes">Restaurantes</a></li>
                    <li><a href="#/registrar">Registrate</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#/descubrir">Descubrir</a></li>
                    <li><a href="#/restaurantes">Restaurantes</a></li>
                    <li><a href="#/registrar">Registrate</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>
<div ng-view></div>
<!--Footer-->
<footer id="contact" class="page-footer default_color2 scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 m6 s12">
                <h5 class="white-text">Desarrollador</h5>
                <ul>
                    <li class="white-text">Victor Manuel Ap</li>
                    <li class="white-text"><img src="public/img/kira.jpg" width="50" height="50" alt="" class="circle responsive-img"></li>
                </ul>
            </div>
            <div class="col l6 m6   s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/btr.kira">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Universidad Jose Carlos Mariategui <a class="white-text" href="http://joashpereira.com"> - Victor Manuel Ap</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
        </div>
    </div>
</footer>


    <!--  Scripts-->

    <script src="public/js/jquery-2.1.1.min.js"></script>
    <script src="public/js/angular.min.js"></script>
    <script src="public/js/angular-route.min.js"></script>
    <script src="public/js/main.js"></script>
    <!--  Controladores de Angular-->
    <script src="public/Angular-Controller/mapaController.js"></script>
    <script src="public/Angular-Controller/restaurantesController.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl11fqFXeNdnZXg6esPbgTj8MiOCxjnAM"></script>

    <script src="public/min/plugin-min.js"></script>
    <script src="public/min/custom-min.js"></script>

    </body>
</html>
