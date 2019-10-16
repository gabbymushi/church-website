<?php

use Illuminate\Database\Seeder;
use App\EventCategory;

class EventsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventCategory::create([
          'name'=>'All Events',
          
    	]);
    }
}
