app.factory('townsData', ['$resource', 'baseServiceURL', function($resource, baseServiceURL) {
    var resource = $resource(baseServiceURL + 'towns');
    function getAllTowns() {
        return resource.query();
    }
    return {
        getTowns : getAllTowns
    };
}]);