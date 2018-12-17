<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->truncate();

		DB::table('players')->insert([
			[
				'id' => 1,
				'first_name' => 'Mark',
				'last_name' => 'Giordano',
				'team_id' => 1,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 2,
				'first_name' => 'Johnny',
				'last_name' => 'Gaudreau',
				'team_id' => 1,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 3,
				'first_name' => 'Sean',
				'last_name' => 'Monahan',
				'team_id' => 1,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 4,
				'first_name' => 'Leon',
				'last_name' => 'Draisaitl',
				'team_id' => 2,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 5,
				'first_name' => 'Connor',
				'last_name' => 'McDavid',
				'team_id' => 2,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 6,
				'first_name' => 'Ryan',
				'last_name' => 'Nugent-Hopkins',
				'team_id' => 2,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 7,
				'first_name' => 'Carey',
				'last_name' => 'Price',
				'team_id' => 3,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 8,
				'first_name' => 'Max',
				'last_name' => 'Domi',
				'team_id' => 3,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 9,
				'first_name' => 'Shae',
				'last_name' => 'Weber',
				'team_id' => 3,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 10,
				'first_name' => 'Craig',
				'last_name' => 'Anderson',
				'team_id' => 4,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 11,
				'first_name' => 'Cody',
				'last_name' => 'Ceci',
				'team_id' => 4,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 12,
				'first_name' => 'J-G',
				'last_name' => 'Pageau',
				'team_id' => 4,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 13,
				'first_name' => 'Auston',
				'last_name' => 'Matthews',
				'team_id' => 5,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 14,
				'first_name' => 'Mitch',
				'last_name' => 'Marner',
				'team_id' => 5,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 15,
				'first_name' => 'Morgan',
				'last_name' => 'Rielly',
				'team_id' => 5,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 16,
				'first_name' => 'Jay',
				'last_name' => 'Beagle',
				'team_id' => 6,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 17,
				'first_name' => 'Elias',
				'last_name' => 'Pettersson',
				'team_id' => 6,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 18,
				'first_name' => 'Erik',
				'last_name' => 'Gudbranson',
				'team_id' => 6,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 19,
				'first_name' => 'Patrik',
				'last_name' => 'Laine',
				'team_id' => 7,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 20,
				'first_name' => 'Bryan',
				'last_name' => 'Little',
				'team_id' => 7,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 21,
				'first_name' => 'Dustin',
				'last_name' => 'Byfuglien',
				'team_id' => 7,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
		]);
    }
}
