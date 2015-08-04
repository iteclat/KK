<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
class UserController extends Controller {

	private $user;
	public function __construct(User $user){
		$this->user=$user;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return User::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		echo 'ok';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(\Request::json()){
			$input=\Input::all();
			$this->user->username=$input['username'];
			$this->user->password=bcrypt($input['password']);
			$this->user->email=$input['email'];
			if($this->user->save()){
				return 1;
			}
		}
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$user=$this->user->find($id);
		return $user;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		if(\Request::json()){
			$user=$this->user->find($id);
			$user->username=\Input::get('username');
			$user->email=\Input::get('email');
			$user->password=bcrypt(\Input::get('password'));
			$user->email=\Input::get('email');
			if($user->save()){
				return 1;
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$user=$this->user->find($id);
		if($user->delete()){
			return 1;
		}
	}

}
