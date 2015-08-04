@extends('master.index')
@section('page')
<div ng-controller="ResourceController">
    <h3>Form</h3>
    <button ng-click="create()" class="btn btn-primary">Create</button>
    <form data-ng-submit="button(form.id)" ng-model="form">
        <div class="form-group">
            <div class="col-md-3">
                <label>Name:</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" ng-model="form.username" placeholder="name">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <label>Password:</label>
            </div>
            <div class="col-md-6">
                <input type="password" class="form-control" ng-model="form.password" placeholder="password">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <label>Email:</label>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" ng-model="form.email" placeholder="email">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-block btn-primary" style="width:20%" value="@{{model}}">
        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody data-ng-init="init()">
            <tr ng-repeat="user in users">
                <td>@{{user.username}}</td>
                <td>@{{user.email}}</td>
                <td><button ng-click="edit(user.id)" class="btn btn-success">Edit</button></td>
                <td><button ng-click="delete(user.id)" class="btn btn-success">Delete</button></td>
            </tr>
        </tbody>
    </table>
</div>
@stop
@section('scripts')
<script>
    var movieapp=angular.module('movieApp',['ngResource','ngRoute', 'movieApp.services','movieApp.controllers','ngMessages']);
//    movieapp.service('Entry',function($resource){// movieapp ma register garnu pardaina
//
//    });
    angular.module('movieApp.services',[]).service('Entry',function($resource){
        return{
            user : $resource('http://localhost:8000/user/:id',{id:'@_id'},{
                'update':{
                    method:'PUT'
                }
            })
        }

    });
    movieapp.config(function($routeProvider){
        $routeProvider.when('/',{
            templateUrl:'views/main.html',
            controller:'ResourceController'
        });
    });
    angular.module('movieApp.controllers',[]).controller('ResourceController',function($scope,Entry) {
        $scope.model='Create';
        var entry=new Entry.user;
        $scope.create=function(){
          $scope.model='Create';
            $scope.form='';
        },
        $scope.button=function(id){
            if($scope.model=='Create'){
                enter();
            }
            else{
                update(id);
            }
        },
        update=function(id){
            var edit=Entry.user.get({id:id});
            Entry.user.update($scope.form,edit,function(data){
                console.log(data);
            })
        },
        enter=function(){
            Entry.user.save($scope.form,function(data){
                console.log(data[0]);
                $scope.init();
                $scope.form='';
            })
        },
        $scope.edit=function(id){
          Entry.user.get({id:id},function(data){
//                $scope.form='';
                $scope.form=data;
                $scope.model='Edit';
          })
        },
        $scope.delete=function(id){
            Entry.user.remove({id:id},function(data){
                console.log(data[0]);
                $scope.init();
            })
        },
        $scope.init=function() {
            Entry.user.query(function(data){
                $scope.users=data;
            });
        }
    });
</script>
@stop