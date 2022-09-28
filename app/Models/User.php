<?php 
namespace App\Models;

use CodeIgniter\Model;

Class User extends Model{
    protected $table = 'user';
    protected $db;
    public function __construct(){
		parent::__construct();
        $this->db = \Config\Database::connect();

    }

    public function get_user_by_uid($uid)
    {
		$query = $this->db->query('select * from ' . $this->table.' where uid="'.$uid.'"');
        return $query->getResult();
    }

}