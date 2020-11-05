<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\EditRequest;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Validation de l'email de l'utilisateur
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function emailValidate(Request $request)
    {
        $user = User::find($request->user_id);

        if (is_null($user)) {
            return redirect()->route('welcome')
                             ->with('error', 'Une erreur est survenue lors de la validation de votre profil.');
        }

        if ($user->validate_token == $request->token) {
            $user->markEmailAsVerified();

            return redirect()->route('welcome')
                ->with('success', 'Votre profil a bien été validé avec succès!');
        }
        else {
            return redirect()->route('welcome')
                ->with('error', 'Une erreur est survenue lors de la validation de votre profil.');
        }
    }

    /**
     * Renvoi d'un mail de validation d'un utilisateur
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMailValidation(Request $request)
    {
        $user = User::find($request->user_id);

        if (is_null($user)) {
            return redirect()->route('welcome')
                ->with('error', 'Une erreur est survenue lors de l\'envoi de l\'email de validation.');
        }

        $user->sendMailValidation();
        return redirect()->route('home')
            ->with('success', 'Le mail de validation vous a été envoyé à l\'adresse ' . $user->email . '.');
    }

    /**
     * Affichage de la vue d'édition du profil utilisateur
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // public function profile()
    // {
    //     return view('user.profile',
    //     [
    //         'user' => Auth::user()
    //     ]);
    // }

    /**
     * Mise à jour de l'utilisateur
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function edit(EditRequest $request)
    // {
    //     $user = Auth::user();
    //     if (!$user->update($request->all())) {
    //         return redirect()->back()->withErrors(['Erreur lors de la mise à jour de vos informations.']);
    //     }

    //     return redirect()->route('home')
    //         ->with('success', 'Vos informations ont bien été mises à jour.');
    // }

    /**
     * Affichage de la vue d'édition du mot de passe
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // public function profilePwd()
    // {
    //     return view('user.profile_password');
    // }

    /**
     * Mise à jour du mot de passe
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function profilePwdEdit(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'password' => [
    //             'required',
    //             'min:8',
    //             'confirmed',
    //             'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
    //         ],
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->route('user.profile-pwd')
    //             ->withErrors($validator);
    //     }

    //     $user = Auth::user();
    //     $user->password = Hash::make($request->password);
    //     if (!$user->save()) {
    //         return redirect()->route('user.profile-pwd')
    //             ->withErrors(['Erreur lors de la mise à jour de votre mot de passe']);
    //     }

    //     return redirect()->route('home')
    //         ->with('success', 'Votre mot de passe a bien été mise à jour');
    // }
}
