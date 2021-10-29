<?php

use App\Models\OfficerGeneral;
use Illuminate\Database\Seeder;

class public_health_center_doctor_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include base_path().'/database/seeds/public_health_office.php';
        $officer_generals = $officer_general;
        DB::table('officer_general')->delete();
        foreach($officer_generals as $og){
            OfficerGeneral::create($og);
        }
    }
}
