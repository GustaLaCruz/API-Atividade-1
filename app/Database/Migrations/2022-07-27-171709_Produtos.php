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
            'nome'=>[
                'type'=>'varchar',
                'constraint'=>'100',
            ],

        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('tb_produtos');
    }

    public function down()
    {
        $this->forge->dropTable('tb_produtos');
    }
}
