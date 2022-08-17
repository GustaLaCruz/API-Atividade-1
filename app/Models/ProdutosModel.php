<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
   protected $table ='tb_funcionarios';
   protected $primaryKey = 'id';
   protected $allowedFields = ['nome', 'salario', 'ocupacao', 'nivel', 'sexo']; 

   public function getProduto($id){
        return $this->asArray()->where(['id'=>$id])->first();
   }
   public function getFuncionario(){


      return $this->asArray()->find([1, 2, 3]);
      //$query = $db->query('SELECT * FROM tb_funcionarios LIMIT 3');
      //$results = $query->getResult();
      //return $results->asArray();
   }
}