<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('app.gestionUsuarios', compact('users')); 
    }

    public function ver($id){
        $user = User::find($id);

        dd($user);

        return view('app.verUsuario',['user'=>$user]);
    }

    public function actualizar($id){
        $user = User::find($id);
        return view('app.actualizarUsuario',['user'=>$user]);
    }

    public function update(ItemUpdateRequest $request, $id){        
        // Recibo todos los datos desde el formulario Actualizar
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
    
        // Actualizo los datos en la tabla 'jugos'
        $user->save();
    
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('app.gestionUsuarios');
    }

    public function eliminar($id){
        // Indicamos el 'id' del registro que se va Eliminar
        $user = User::find($id);
                 
        // Elimino el registro de la tabla 'jugos' 
        User::destroy($id);
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('app.gestionUsuarios');
    }

}
