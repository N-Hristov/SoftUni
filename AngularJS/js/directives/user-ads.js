app.directive('userAds', function(){
    return {
        controller: 'UserAdsCtrl',
        restrict: 'E',
        templateUrl: 'templates/user/user-ads.html',
        replace: true
    };
});