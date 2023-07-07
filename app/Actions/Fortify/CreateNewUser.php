<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'role' => ['required', 'in:cliente,entrenador'],
            'especialidad' => ['required_if:role,entrenador', 'in:Preparadorfisico,otro'],
            'peso' => ['nullable', 'numeric', 'required_if:role,cliente'],
            'altura' => ['nullable', 'numeric', 'required_if:role,cliente'],
            'genero' => ['required_if:role,cliente', 'in:hombre,mujer,otro'],
            'edad' => ['nullable', 'integer', 'min:0', 'required_if:role,cliente'],
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => $input['role'],
        ]);

        if ($input['role'] === 'cliente') {
            $user->peso = $input['peso'];
            $user->altura = $input['altura'];
            $user->genero = $input['genero'];
            $user->edad = $input['edad'];
        } elseif ($input['role'] === 'entrenador') {
            $user->especialidad = $input['especialidad'];
        }

        $user->save();

        return $user;
    }
}


