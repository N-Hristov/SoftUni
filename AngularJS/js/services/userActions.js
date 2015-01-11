app.factory('UserActionsFactory', ['authentication', 'baseServiceUrl','$resource',function (authentication, baseServiceUrl, $resource) {

    function getUserAds(){
        var headers =  authentication.getHeaders();
        var resource = $resource(baseServiceURL + 'user/ads' + headers);
        return resource.query()
    }

    return {
        getUserAds : getUserAds,
        publishNewAd : publishNewAd,
        logout : logoutUser
    }
}]);