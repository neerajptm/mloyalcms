<?php 
namespace App\Models;

use CodeIgniter\Model;

Class Post extends Model{
    protected $table = 'post';
    protected $db;
    public function __construct(){
		parent::__construct();
        $this->db = \Config\Database::connect();

    }

}