 ///. <reference path=“angular.js”/>

// module
var myApp = angular.module(“myModule”, []);
// controller
var myController = function($scope) {
    $scope.message =“angular file”;
// register 
    myApp.controller(“myController”, myController);
};