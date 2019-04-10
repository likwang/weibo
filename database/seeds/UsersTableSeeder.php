<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = factory(User::class)->times(1000)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'imclam';
        $user->email = '280676861@qq.com';
        $user->is_admin = 1;
        $user->password = bcrypt('123456');
        $user->save();

    }
}
