<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/',function(\App\Role $admin,\App\Permission $editUser){
////    $owners=$owner::find(1);
////    $createPosts=$createPost::find(1);
////    var_dump($createPosts->id);
////    $owners->perms()->sync(array($createPosts->id));
////    var_dump($owners);
////    $owners->attachPermissions(array($createPosts));
//    $admins=$admin->find(5);
//    $editUsers=$editUser->find(4);
//
//    $admins->attachPermission($editUsers);
//
//});
//Route::get('/', 'WelcomeController@index');
Route::get('/restaurant_owner', 'RestaurantOwnerController@index');
Route::get('home', 'HomeController@index');
Route::resource('r_owner','RestaurantOwnerController');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
