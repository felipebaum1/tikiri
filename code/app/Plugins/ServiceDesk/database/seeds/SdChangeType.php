<?php

namespace App\Plugins\ServiceDesk\database\seeds;

use Illuminate\Database\Seeder;
use DB;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SdChangeType extends Seeder {

    public function run() {
        $created_at = date('Y-d-m H:m:i');
        $updated_at = date('Y-d-m H:m:i');

        DB::table('sd_change_types')
                ->insert(['name' => 'Menor',
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
        ]);
        DB::table('sd_change_types')
                ->insert(['name' => 'Padrão',
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
        ]);
        DB::table('sd_change_types')
                ->insert(['name' => 'Maior',
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
        ]);
        DB::table('sd_change_types')
                ->insert(['name' => 'Emergencial',
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
        ]);
        
    }

}
