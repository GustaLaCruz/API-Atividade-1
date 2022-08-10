<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedProdutos extends Seeder
{
    public function run()
    {
        $nome =['Carlos','Antonio','Chavez','Kiko','Madruga','Abner'];
        $salario =[9000,7800,15000,4500,23000,7000];
        $ocupacao =['Segurança','Progamador Junior','Programador Senior','Designer Senior','Zelador','Do K.R.L'];
        $nivel =['9','5','7','1','999','666'];
        $sexo = ['M','M','M','M','M','M'];
        for($x = 0; $x<6; $x++){
            $data = [
                'nome' => $nome[$x],
                'salario'    => $salario[$x],
                'ocupacao' => $ocupacao[$x],
                'nivel' => $nivel[$x],
                'sexo' => $sexo[$x]
            ];

            $this->db->table('tb_funcionarios')->insert($data);
        }
    }
}