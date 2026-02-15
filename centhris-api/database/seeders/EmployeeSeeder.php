<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Employee::create(['full_name' => 'John Doe']);
        Employee::create(['full_name' => 'Jane Smith']);
        Employee::create(['full_name' => 'Francis Bandelaria']);
    }
}
