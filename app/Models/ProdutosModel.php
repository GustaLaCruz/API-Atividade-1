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
   public function getFuncionario($id){
      $sql='SELECT * FROM tb_funcionarios LIMIT 3';    
      $query = $this->db->query($SQL);
      return $query->result();
      //return $this->asArray()->where(['id'=>$id])->first();
   }
}