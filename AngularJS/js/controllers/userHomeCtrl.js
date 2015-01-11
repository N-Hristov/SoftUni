app.controller('UserHomeCtrl', ['$scope', 'authentication', function ($scope, authentication) {
    $scope.pageTitle = "Home";
    $scope.userName = authentication.getUser().username;
    $scope.isLoggedIn = authentication.isLoggedIn();
}]);
