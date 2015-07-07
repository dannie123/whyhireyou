<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use Faker\Factory as Faker;

class TypesTableSeeder extends Seeder {

    public function run()
    {
    	Type::create(array(
            'name' => 'full time',
            'color' => '#81b800'
        ));

        Type::create(array(
            'name' => 'part time',
            'color' => '#4c9ef1'
        ));

        Type::create(array(
            'name' => 'freelance',
            'color' => '#d4d4d4'
        ));
    }

}