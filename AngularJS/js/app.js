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

    $routeProvider.when('user/ads', {
        templateUrl: '/templates/user/userHome.html' ,
        controller: 'UserHomeCtrl'
    });

    //$routeProvider.when('user/ads/publish', {
    //    templateUrl: '/templates/user/adsEditor.html' ,
    //    controller: 'PublishNewAdCtrl'
    //});

    $routeProvider.otherwise({
        redirectTo: '/'
    });


    //// Auth Check
    //app.run(function ($rootScope, $location, authentication) {
    //    $rootScope.$on('$locationChangeStart', function (event) {
    //        if ($location.path().indexOf("/user/") != -1 && !authentication.isLoggedIn()) {
    //            // Authorization check: anonymous site visitors cannot access user routes
    //            $location.path("/");
    //        }
    //    });
    //});

}]);