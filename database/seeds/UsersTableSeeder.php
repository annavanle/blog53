<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = App\User::create([
            'name' => 'van le',
            'email' => 'anna.vanle@gmail.com',
            'password' => bcrypt('altegra1101'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'something about me',
            'facebook' => 'facebook.com',
            'linkedin' => 'linkedin.com'

        ]);

        
    }
}
 