app.controller('UserAdsCtrl', ['$scope', 'adsData', 'filter',  function($scope, adsData, filter){
    $scope.ready = false;

    function loadUserAds(filterParams) {
        filterParams = filterParams || {};
        userActions.getUserAds(filterParams)
            .$promise
            .then(function (data) {
                $scope.adsData = data;
                $scope.ready = true;
            });
    }

    loadUserAds();

    $scope.$on('categoryClicked', function(event, category) {
        loadUserAds(filter.getFilterParams());
    });

    $scope.$on('townClicked', function(event, town) {
        loadUserAds(filter.getFilterParams());
    });
}]);