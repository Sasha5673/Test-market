var index = angular.module('/', []);

index.controller("indexController", function($scope, $window, $http){

    $scope.openProductesDetails = function(productId) {
        $window.location.href = "/productes?productId=" + productId;
    }

});