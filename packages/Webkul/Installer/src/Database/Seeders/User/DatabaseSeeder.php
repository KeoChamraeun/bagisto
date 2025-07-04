<?php

namespace Webkul\Installer\Database\Seeders\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run()
    {
        $parameters = ['default_locale' => 'en']; // or 'km'

        (new RolesTableSeeder)->run($parameters);
        (new AdminsTableSeeder)->run($parameters);
    }
}
