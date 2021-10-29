<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include base_path().'/database/seeds/public_health_office.php';
        $roles = $role;
        DB::table('role')->delete();
        foreach($roles as $r){
            Role::create($r);
        }
    }
}
