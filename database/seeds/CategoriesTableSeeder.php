<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
    	Category::create(array(
            'name' => 'IT'
        ));

        Category::create(array(
            'name' => 'tourism'
        ));

        Category::create(array(
            'name' => 'construction'
        ));

        Category::create(array(
            'name' => 'accounting'
        ));
    }

}