'use strict';

var app = angular.module('adsApp', ['ngRoute']);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/' , {
        templateUrl: 'templates/public/home.html' ,
        controller: 'HomeCtrl'
    });
    $routeProvider.otherwise({
        redirectTo: '/'
    });
}]);