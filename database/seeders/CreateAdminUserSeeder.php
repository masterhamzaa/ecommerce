<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seeder
       User::create([
            'id' => env('ADMIN_ID'),
            'name' => env('NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => bcrypt(env('PWD')),
            'role' => "admin",
        ]);

    }
}
