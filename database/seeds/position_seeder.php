<?php

use App\Models\Position;
use Illuminate\Database\Seeder;

class position_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include base_path().'/database/seeds/public_health_office.php';
        $positions = $position;
        DB::table('position')->delete();
        foreach($positions as $p){
            Position::create($p);
        }
    }
}
