<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Category::class, 5)
        	->create()
        	->each(function($category){
    			//Tao khoa ngoai
        		for ($i=0; $i < 2; $i++) {
        			$category->products()->save(factory(App\Product::class)->create());
        		}
        	});
    }
}
