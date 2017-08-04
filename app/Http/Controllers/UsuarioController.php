<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
    $this->middleware('admin',['only' => ['create','edit']]);
}


    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(10);
        return view('usuario.index')->with('users',$users);
    }


    public function create()
    {
        Session::flash('message','usuario Creado');
        return view('usuario.create');
   }

 
    public function store(UserCreateRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            ]);

        return redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
      $user = User::find($id);
      $user->fill($request->all());
      $user->save();
      Session::flash('message','usuario Editado');
      return redirect::to('/usuario');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
         Session::flash('message','usuario Eliminado Correctamente');
      return redirect::to('/usuario'); 

    }
}
