app.controller('restaurantesController', function($scope,$http) {
     $scope.getres = function () {
        $http.get('controller/restauranteController.php').then(function successCallback(response) {
            $scope.datos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
});