<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Operator', 'Question Reviewer', 'Admin'];

        foreach ($roles as $role) {
            factory(App\Role::class)->create(['role' => $role]);
        }
    }
}
