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
            'titlename' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'lastname', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'std_id' => ['','string','max:100'], 
        ])->validate();

        return User::create([
            'titlename' => $input['titlename'],
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'std_id' => $input['std_id']->default(NULL),
            'password' => Hash::make($input['password']),
            'role' => 0,
            'active' => 0,
        ]);
    }
}
