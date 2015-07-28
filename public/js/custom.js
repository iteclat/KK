/**
 * Created by sazanrjb on 7/28/15.
 */
var app = angular.module('myApp',[],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('myCtrl',function($scope){
    var ownerName = $scope.ownerName;
    var branch = $scope.branch;
    var multiple = $scope.multiple;
});

$(document).ready(function(){

});
