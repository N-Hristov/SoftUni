app.factory('userData', ['$resource', 'baseServiceURL', 'authentication', function ($resource, baseServiceURL, authentication) {

    function registerUser(user) {
        return $resource(baseServiceURL + 'user/register')
            .save(user)
            .$promise
            .then(function (data) {
                authentication.saveUser(data);
            });
    }

    function loginUser(user) {
        var resource = $resource(baseServiceURL + 'user/login').save(user);
        resource .$promise
            .then(function (data) {
                authentication.saveUser(data);
            });
        return resource;
    }

    function logoutUser() {
        return $resource(baseServiceURL + 'user/logout')
            .save(user)
            .$promise
            .then(function (data) {
                authentication.removeUser();
            });
    }

    return {
        register : registerUser,
        login : loginUser,
        logout : logoutUser
    }
}]);

