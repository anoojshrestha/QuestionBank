<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	'category' => 'Computer Programming',
	        'title' => 'How to install php?',
	        'description' => 'I am having a problem while installing php in windows 8. Please help me.',
        	]);
    }
}
