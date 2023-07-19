<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // Validator::make($input, [
        //     'first_name' => ['required', 'string', 'max:255'],
        //     'last_name' => ['required', 'string', 'max:255'],
        //     'birthdate' => ['required', 'date', 'max:255'],
        //     'address_line' => ['required', 'string', 'max:255'],
        //     'city' => ['required', 'string', 'max:255'],
        //     'region' => ['required', 'string', 'max:255'],
        //     'zip_code' => ['required', 'string', 'max:255'],
        //     'email' => [
        //         'required',
        //         'string',
        //         'email',
        //         'max:255',
        //         Rule::unique(User::class),
        //     ],
        //     'password' => $this->passwordRules(),
        // ])->validate();

        print_r($input);

        $address = UserAddress::query()->create([
            'address_line_1' => $input["address_line"],
            'city' => $input["city"],
            'region' => $input["region"],
            'zip_code' => $input["zip_code"],
        ]);

        return User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'address_id' => $address->id,
            'birthdate' => $input['birthdate'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
