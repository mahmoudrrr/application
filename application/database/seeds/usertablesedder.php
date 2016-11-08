<?php

use Illuminate\Database\Seeder;
use App\User;
class usertablesedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users');
        User::create(['username' =>'mahmoud','password' =>bcrypt('mhmoed123'), 'email' => 'mhmoednew','remember_token' =>'' ]);
    }
}
