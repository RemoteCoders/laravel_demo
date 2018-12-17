<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('teams')->truncate();

		DB::table('teams')->insert([
			[
				'id' => 1,
				'name' => 'Calgary Flames',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 2,
				'name' => 'Edmonton Oilers',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 3,
				'name' => 'Montreal Canadians',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 4,
				'name' => 'Ottawa Senators',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 5,
				'name' => 'Toronto Maple Leafs',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 6,
				'name' => 'Vancouver Canucks',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
			[
				'id' => 7,
				'name' => 'Winnipeg Jets',
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(),
			],
		]);

    }
}
