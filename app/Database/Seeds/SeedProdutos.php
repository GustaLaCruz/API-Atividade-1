<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedProdutos extends Seeder
{
    public function run()
    {
        $descricao =['PC Gamer Kratos','PC Gamer Asgard','PC Gamer Valhalla','PC Gamer Loki','PC Gamer Odin','PC Gamer Balde'];
        $valor =[9000,7800,15000,4500,23000,7000];
        for($x = 0; $x<6; $x++){
            $data = [
                'descricao' => $descricao[$x],
                'valor'    => $valor[$x],
            ];

            $this->db->table('tb_produtos')->insert($data);
        }
    }
}