<?php

namespace Cinema\Http\Controllers;
use Cinema\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        // if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
        // return redirect('admin');
        // }

         // Obtenemos los datos del formulario
        $data = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];
 
        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            return redirect('admin');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
       // return Redirect::back()->with('error_message', 'Datos Incorrectos')->withInput();

        Session::flash('message-error', 'Datos Incorrectos');
         return redirect('/');

        // if(Auth::attempt(['email' => bcrypt($request['email']), 'password' =>  bcrypt($request['password'])])){
        //  return redirect('admin');
        //  }


        // Session::flash('message-error', 'Datos Incorrectos');
        // return redirect('/');
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
