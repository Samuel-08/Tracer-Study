<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([
            [
                "nama" => "Admin",
                "email" => "admin@mail.com",
                "phone_no" => "7899654125",
                "role" => "admin",
                "password" => password_hash("admin456", PASSWORD_DEFAULT),
            ],
            [
                "nama" => "user",
                "email" => "user@mail.com",
                "phone_no" => "8888888888",
                "role" => "user",
                "password" => password_hash("alluser123", PASSWORD_DEFAULT),
            ],
        ]);
    }
}
