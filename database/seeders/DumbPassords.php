<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DumbPassords extends Seeder
{
    /**
     * Make all passwords dumb, i.e= password = initials
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Models\User::all() as $user) {
            $user->password = password_hash($user->initials,PASSWORD_DEFAULT);
            $user->save();
        }
    }
}
