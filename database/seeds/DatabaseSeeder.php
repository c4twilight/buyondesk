<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// $this->call(UsersTableSeeder::class);
		factory(App\User::class, 500)->create();
		// factory(App\sell::class, 250)->create();
	}
}
