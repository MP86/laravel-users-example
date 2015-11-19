<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Clean up
        DB::table('users')->delete();
		
		// Seed
        $this->call(UsersSeeder::class);

        Model::reguard();
    }
}