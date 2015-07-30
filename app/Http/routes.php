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
Route::get('/', 'WelcomeController@index');
Route::get('/user/create',function(){
	$user=new App\User();
	if($user){
		$user->username='sujan';
		$user->password=bcrypt('nepal123');
		$user->status=1;
		$user->email='prajapati_sujan1@hotmail.com';
		$user->recover=0;
		$user->social=0;
		if($user->save()){
			echo 'Successfully Insereted';		
}	
	}
});
Route::resource('/users/','UserController');
Route::get('/restaurant_owner', 'RestaurantOwnerController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);