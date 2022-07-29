<?php 
namespace App\Database\Seeds;
class Dados extends \CodeIgniter\Database\Seeder{
    public function run(){
        $data = [
            'titulo' => 'Test',
            'descricao' => 'text test',
            'obs' => 'obs'
        ];

        $this->db->table('dados')->insert($data);
    }
}