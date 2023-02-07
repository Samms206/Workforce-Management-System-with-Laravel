<?php

namespace Database\Seeders;

use App\Models\Departement;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        Departement::truncate();
        Schema::enableForeignKeyConstraints();
        
        $data = [
            ['name' => 'Sales & Marketing'],
            ['name' => 'HRD (Human Resources Department)'],
            ['name' => 'Purchasing'],
            ['name' => 'Production'],
            ['name' => 'QA (Quality Assurance)'],
            ['name' => 'Accounting'],
            ['name' => 'Warehouse'],
            ['name' => 'IT (Information & Technology)']
        ];

        foreach ($data as $value){
            Departement::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
