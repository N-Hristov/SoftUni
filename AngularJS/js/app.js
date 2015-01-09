'use strict';

var app = angular.module('adsApp', ['ngRoute', 'ngResource']);

app.constant('baseServiceURL', 'http://softuni-ads.azurewebsites.net/api/');

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/' , {
        templateUrl: '/templates/public/home.html' ,
        controller: 'HomeCtrl'
    });
    $routeProvider.when('/login', {
        templateUrl: '/templates/public/login.html' ,
        controller: 'LoginCtrl'
    });
    $routeProvider.when('/register', {
        templateUrl: '/templates/public/register.html' ,
        controller: 'RegisterCtrl'
    });
    $routeProvider.otherwise({
        redirectTo: '/'
    });

    // Web Storage

}]);