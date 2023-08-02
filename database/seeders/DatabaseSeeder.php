<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $token = Str::random(16);
        $role = 'admin';
        $hash_password = Hash::make('admin', [
            'rounds' => 12,
        ]);

        $hash_token = Hash::make($token, [
            'rounds' => 12,
        ]);

        $data = [
            'login_nama' => 'administrator',
            'login_username' => 'admin',
            'login_password' => $hash_password,
            'login_email' => 'sayaadmin@gmail.com',
            'login_telepon' => '0812121212',
            'login_token' => $hash_token,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ];

        Login::create($data);


        // admin 2

        $token = Str::random(16);
        $role = 'admin';
        $hash_password = Hash::make('admin', [
            'rounds' => 12,
        ]);

        $hash_token = Hash::make($token, [
            'rounds' => 12,
        ]);

        $data = [
            'login_nama' => 'administrator 2',
            'login_username' => 'admin2',
            'login_password' => $hash_password,
            'login_email' => 'sayajugaadmin@gmail.com',
            'login_telepon' => '08121212123',
            'login_token' => $hash_token,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ];

        Login::create($data);

        // user 1
        $token = Str::random(16);
        $role = 'user';
        $hash_password = Hash::make('jancok', [
            'rounds' => 12,
        ]);

        $hash_token = Hash::make($token, [
            'rounds' => 12,
        ]);

        $data = [
            'login_nama' => 'hayat saya',
            'login_username' => 'example1',
            'login_password' => $hash_password,
            'login_email' => 'sayauser@gmail.com',
            'login_telepon' => '0812121212',
            'login_token' => $hash_token,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ];

        Login::create($data);

        //user 2

        $token = Str::random(16);
        $role = 'user';
        $hash_password = Hash::make('jancok', [
            'rounds' => 12,
        ]);

        $hash_token = Hash::make($token, [
            'rounds' => 12,
        ]);

        $data = [
            'login_nama' => 'saya hayat',
            'login_username' => 'example2',
            'login_password' => $hash_password,
            'login_email' => 'sayajugauser@gmail.com',
            'login_telepon' => '0812121212',
            'login_token' => $hash_token,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ];

        Login::create($data);
    }
}
