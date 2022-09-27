<?php 
namespace App\Models;

use CodeIgniter\Model;

Class User extends Model{
    protected $table = 'bkend';
    protected $db;
    public function __construct(){
		parent::__construct();
        $this->db = \Config\Database::connect();

    }

}