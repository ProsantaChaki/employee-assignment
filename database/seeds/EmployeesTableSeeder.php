<?php

use App\Employees;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {

        $employee = [
            [
                'id'             => 1,
                'name'           => 'Prosanta Chaki',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Kajol Chaki',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Mr X',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 2,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Mr. Y',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 3,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 5,
                'name'           => 'Prosanta Chaki',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 6,
                'name'           => 'Kajol Chaki',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 7,
                'name'           => 'Mr X',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 2,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 8,
                'name'           => 'Mr. Y',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 3,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 9,
                'name'           => 'Prosanta Chaki',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 10,
                'name'           => 'Kajol Chaki',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 11,
                'name'           => 'Mr X',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 2,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 12,
                'name'           => 'Mr. Y',
                'emoplyee_no'    => 'SE_001',
                'designation_id' => 3,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ]
        ];

        Employees::insert($employee);
    }
}
