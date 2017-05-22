<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	// $users = User::All();
    	$users = User::paginate(10);
    	// return $users;	
		return view('admin.users.index',compact('users'));
	}

	public function create()
	{
		return view('admin.users.create');
	}

	public function store(Request $request)
	{
		User::create($request->all());
		return 'success';
		return $request->all();
	}
}
