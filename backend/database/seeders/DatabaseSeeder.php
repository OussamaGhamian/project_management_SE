<?php

namespace Database\Seeders;

use App;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'f_name' => 'Ousama',
            'l_name' => 'Ousama',
            'email' => 'ousama@gmail.com',
            'password' => Hash::make('ousamaousamaousama'),
        ]);
        DB::table('users')->insert([
            'f_name' => 'Kasem',
            'l_name' => 'Kasem',
            'email' => 'kasem@gmail.com',
            'password' => Hash::make('kasemkasemkasem'),
        ]);
        DB::table('users')->insert([
            'f_name' => 'Mahmoud',
            'l_name' => 'Mahmoud',
            'email' => 'mahmoud@gmail.com',
            'password' => Hash::make('mahmoudmahmoudmahmoud'),
        ]);
        DB::table('users')->insert([
            'f_name' => 'Avo',
            'l_name' => 'Avo',
            'email' => 'avo@gmail.com',
            'password' => Hash::make('avoavoavo'),
        ]);


        $seed = new Organization();
        $seed->run();
        $seed = new Project();
        $seed->run();
        $seed = new Team();
        $seed->run();
        $seed = new Task();
        $seed->run();


        for ($i = 0; $i < 5; $i++) {
            DB::table('project_team')->insert([
                'project_id' => App\Models\Project::all()->random()->id,
                'team_id' => App\Models\Team::all()->random()->id,
            ]);
            DB::table('team_user')->insert([
                'team_id' => App\Models\Team::all()->random()->id,
                'user_id' => App\Models\User::all()->random()->id,
            ]);
        }
    }
}
