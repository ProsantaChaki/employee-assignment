<?php

use App\Designations;
use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    public function run()
    {
        $designation = [
            [
                'id'         => '1',
                'name'      => 'Software Engineer',
                'created_at' => '2020-08-15 19:14:42',
                'updated_at' => '2020-08-15 19:14:42',
            ],
            [
                'id'         => '2',
                'name'      => 'Junior Software Engineer',
                'created_at' => '2020-08-15 19:14:42',
                'updated_at' => '2020-08-15 19:14:42',
            ],
            [
                'id'         => '3',
                'name'      => 'Senior Software Engineer',
                'created_at' => '2020-08-15 19:14:42',
                'updated_at' => '2020-08-15 19:14:42',
            ]
            ];

        Designations::insert($designation);
    }
}
