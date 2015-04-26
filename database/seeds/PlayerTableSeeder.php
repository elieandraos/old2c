<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Player;

use Carbon\Carbon;

class PlayerTableSeeder extends Seeder {
	/**
	 * Description
	 * @return type
	 */
	public function run()
	{	
		$this->cleanUp();
		$faker = Faker::create();
		$roles = ['Mid', 'Carry', 'Support', 'Offlaner', 'Jungler', 'Roaming' ];
		$levels = [1,2,3,4,5];
		
		for($i=0;$i<15;$i++)
		{	
			$key = array_rand($roles);
			$key2 = array_rand($levels);

			$player = Player::create([
				'steam_id' => $faker->randomNumber(8),
				'steam_nickname' => $faker->userName,
				'steam_avatar' => $faker->imageUrl(320,240),
				'steam_url' => $faker->url,
				'role' => $roles[$key],
				'level' => $levels[$key2],
				'team_id' => 1
			]);
		}
	}
	/**
	 * truncates the table before seeding
	 * @return type
	 */
	private function cleanUp()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('players')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}
}