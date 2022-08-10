<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'int',
                'auto_increment'=>true
            ],
            'nome'=>[
                'type'=>'varchar',
                'constraint'=>'100',
            ],
            'salario'=>[
                'type'=>'double'
            ],
            'ocupacao'=>[
                'type'=>'varchar',
                'constraint'=>'100',
            ],
            'nivel'=>[
                'type'=>'int',
                'constraint'=>'3',
            ],
            'sexo'=>[
                'type'=>'varchar',
                'constraint'=>'1',
            ],

        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('tb_funcionarios');
    }

    public function down()
    {
        $this->forge->dropTable('tb_funcionarios');
    }
}
