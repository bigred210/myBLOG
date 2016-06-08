<?php

class UserTableSeeder extends Seeder 
{
    public function run()
    {
        $user = new User();
        $user->username = 'JW';
        $user->email = 'jw@blog.dev';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->username = 'Jerod_West';
        $user->email = 'Jerod_West@blog.dev';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->username = 'wildRojo';
        $user->email = 'wildRojo@blog.dev';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        var_dump($_ENV['USER_PASSWORD']);
    
    }
}
