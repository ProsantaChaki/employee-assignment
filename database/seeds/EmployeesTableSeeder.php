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
                'name'           => 'Ikrum Hossain',
                'emoplyee_no'    => 'SE_002',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Sm. Mujahid',
                'emoplyee_no'    => 'SE_003',
                'designation_id' => 3,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 50000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Sajol Hossain',
                'emoplyee_no'    => 'SE_004',
                'designation_id' => 3,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 50000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 5,
                'name'           => 'Akash Datta',
                'emoplyee_no'    => 'SE_005',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 6,
                'name'           => 'Mr. Chaki',
                'emoplyee_no'    => 'SE_006',
                'designation_id' => 2,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 25000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 7,
                'name'           => 'Mr Anik',
                'emoplyee_no'    => 'SE_007',
                'designation_id' => 2,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 23000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 8,
                'name'           => 'Mehedi Ruen',
                'emoplyee_no'    => 'SE_008',
                'designation_id' => 3,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 9,
                'name'           => 'Prosanta Roy',
                'emoplyee_no'    => 'SE_009',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 10,
                'name'           => 'Md. Saju',
                'emoplyee_no'    => 'SE_010',
                'designation_id' => 1,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 11,
                'name'           => 'Probhas Ranjon',
                'emoplyee_no'    => 'SE_011',
                'designation_id' => 2,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 30000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ],
            [
                'id'             => 12,
                'name'           => 'Saiful Islam',
                'emoplyee_no'    => 'SE_012',
                'designation_id' => 3,
                'department'     => 'Laravel',
                'company'        => 'Softbd LTD',
                'salary'         => 50000,
                'joining_date'   => '2020-09-01',
                'termination_date' => null,
            ]
        ];

        Employees::insert($employee);
    }
}
