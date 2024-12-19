<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Affiche le formulaire de connexion
    public function login()
    {
        return view('auth.login');
    }

    // Gère la soumission du formulaire de connexion
    public function handleLogin(AuthRequest $request)
    {
        // Supprime le dd() qui bloque l'exécution
        $credentials = $request->only(['email', 'password']);

        // Tente d'authentifier l'utilisateur
        if (Auth::attempt($credentials)) {
            // Redirige vers le tableau de bord si réussi
            return redirect()->route('dashboard');
        } else {
            // Redirige avec un message d'erreur si échec
            return redirect()->back()->with('error_msg', 'Paramètre de connexion non reconnu');
        }
    }
}
