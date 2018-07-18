

// module
var myA = angular.module(“myM”, []);
// controller
var myC = function($scope) {
    $scope.message = “angular file”;
};
// register 
    myA.controller(“myC”, myC);
