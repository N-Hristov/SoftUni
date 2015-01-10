app.factory('categoriesData', ['$resource', 'baseServiceURL', function($resource, baseServiceURL) {

    function getAllCategories() {
        return $resource(baseServiceURL + 'categories').query();
    }

    return {
        getCategories : getAllCategories
    };
}]);