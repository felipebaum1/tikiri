<?php
namespace App\Plugins\ServiceDesk\database\seeds;
use Illuminate\Database\Seeder;
use DB;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SdContractTypes extends Seeder{
    public function run() {
        $names = ['De concessão','Licença de Software','Manutenção','Suporte de Produto','Fornecimento',];
         $created_at = date('Y-d-m H:m:i');
        $updated_at = date('Y-d-m H:m:i');
        foreach($names as $name){
            DB::table('sd_contract_types')
                    ->insert(['name'=>$name,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at,
                ]);
        }
    }
}