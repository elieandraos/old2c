<?php

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamTableSeeder extends Seeder {

	/**
	 * Description
	 * @return type
	 */
	public function run()
	{		
		$this->cleanUp();

		Team::create([
			"name" => "Unassigned"
		]);
	}

	/**
	 * truncates the table before seeding
	 * @return type
	 */
	private function cleanUp()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('teams')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}