/**
 * AngularJS Tutorial 1
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 */

/**
 * Main AngularJS Web Application
 */
var app = angular.module('jummp', [
  'ngRoute'
]);

/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    // Home
    .when("/", {templateUrl: "views/home.html", controller: "PageCtrl"})
    // Pages
    /*
        Rutas relacionadas a empleados
    */
    .when("/descubrir", {templateUrl: "views/mapa.html", controller: "PageCtrl"})
    .when("/registrar", {templateUrl: "views/registrar.html", controller: "PageCtrl"})
    .when("/restaurantes", {templateUrl: "views/restaurantes.html", controller: "PageCtrl"})

    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);

/**
 * Controls all other Pages

 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty(reconocio el controlador).");

});
