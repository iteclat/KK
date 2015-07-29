/**
 * Created by sazanrjb on 7/28/15.
 */
var app = angular.module('myApp',[],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('myCtrl',function($scope,$http){
    select();
    $scope.insert = function(){
        $http.post('/r_owner',{
            ownerName:$scope.ownerName,branch:$scope.branch,multiple:$scope.multiple
        }).success(function(data,status,headers,config){
            console.log(data);
        });
        select();
    }


    function select(){
        var names = $http.get('http://localhost:8000/r_owner/display')
            .success(function(response){
                $scope.infos = response.records;
            });
    }

    $scope.edit = true;
    $scope.ownerName = "";
    $scope.branch = "";
    $scope.editOwner = function(id){

        if(id == 'new'){
            $scope.edit = true;
            $scope.ownerName = "";
            $scope.branch = "";
        }else{
            angular.forEach($scope.infos,function(value,key){
                if(id == value.id){
                    $scope.ownerName = value.owner_name;
                    if(value.branch == 1){

                    }else{

                    }
                }
                $scope.edit=false;
            });
        }
    }

    $scope.deleteOwner = function(id){
        $http.delete('/r_owner/'+id).success(function(data,status,headers,config){
            console.log(data);
        });
        select();
    }

});

$(document).ready(function(){

});
