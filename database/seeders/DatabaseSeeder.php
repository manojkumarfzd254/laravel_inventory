<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MenuSeeder;
use Database\Seeders\ModulesTableSeeder;
use Database\Seeders\SettingsTableSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $RoleSeeder = new RoleSeeder();
        $RoleSeeder->run();
        $UserSeeder = new UserSeeder();
        $UserSeeder->run();
        $MenuSeeder = new MenuSeeder();
        $MenuSeeder->run();
        $SettingsTableSeeder = new SettingsTableSeeder();
        $SettingsTableSeeder->run();
        $ModulesTableSeeder = new ModulesTableSeeder();
        $ModulesTableSeeder->run();
        // User::factory(20)->create();
    }
}
