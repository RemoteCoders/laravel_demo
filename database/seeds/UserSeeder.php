<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
			[
				'id' => 1,
				'name' => 'Test Account',
				'email' => 'test@test.com',
				'email_verified_at' => Carbon::now(),
				'password' => bcrypt('12345'),
				'remember_token' => null,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
		]);
    }
}
