app.factory('UserActionsFactory', ['authentication', 'baseServiceUrl','$resource',function (authentication, baseServiceUrl, $resource) {

    var resource = $resource(baseServiceURL + 'ads:adId', {adId: '@id'}, {
        update: { method : 'PUT'}
    });

    function getUserAds(){
        var headers =  authentication.getHeaders();
        var resource = $resource(baseServiceURL + 'user/ads' + headers);
        return resource.get()
    }

    return {
        getUserAds : getUserAds,
        publishNewAd : publishNewAd,
        logout : logoutUser
    }
}]);