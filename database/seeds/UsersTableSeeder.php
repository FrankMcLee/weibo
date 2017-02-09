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
        $users = factory(User::class)->times(100000)->make();
        User::insert($users->toArray());
        $user = User::find(1);
        $user->email = 'franklee@weibo.app';
        $user->mobile = '13162969505';
        $user->password = 'franklee';
    }
}
