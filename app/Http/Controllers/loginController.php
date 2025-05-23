<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Exception;

class loginController extends Controller
{
    public function cadastrarUsuario(Request $request){
        try{
            $emailUsuario = $request->input('email');
            $senhaUsuario = $request->input('password');

            $usuario = new Usuario();
            $usuario->email = $emailUsuario;
            $usuario->password = Hash::make($senhaUsuario); // Sempre criptografar a senha!
            $usuario->save();

            return redirect()->route('home')->with('success', 'Usuário cadastrado com sucesso!');


        }catch(Exception $e){
            return view('home')->with(['error' => 'Falha ao efetuar o login', 'message' => $e->getMessage()], 500);
        }
    }
}
