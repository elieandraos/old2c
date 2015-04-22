<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Description
	 * @return type
	 */
	public function run()
	{		
		$this->cleanUp();

		User::create([
			"email" => "egg@old2c.com",
			"name" => "Egg",
			"password" => Hash::make("123456")
		]);

		User::create([
			"email" => "andzilla@old2c.com",
			"name" => "Andzilla",
			"password" => Hash::make("123456")
		]);
	}

	/**
	 * truncates the table before seeding
	 * @return type
	 */
	private function cleanUp()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('users')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}