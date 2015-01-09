app.factory('authentication', function(){
    var key = 'user';
    function saveUserData(data){
        sessionStorage.setItem(key, angular.toJson(data));
    }

    function getUserData(){
        return angular.fromJson(sessionStorage.getItem(key));
    }

    function getHeaders(argument){
        var headers = {};
        var userData = getUserData();
        if (userData) {
            headers.Authorization = 'Bearer ' + getUserData().access_token;
        }

        return headers;
    }

    function removeUser(){
        localStorage.removeItem(key);
    }

    return {
        saveUser: saveUserData,
        getUser: getUserData,
        getHeaders: getHeaders,
        removeUser: removeUser
    }
});
