<?php 
namespace App\Models;

use CodeIgniter\Model;

Class Lbackend_model extends Model{
    protected $table = 'lbkend';
    protected $db;
    public function __construct(){
		parent::__construct();
        $this->db = \Config\Database::connect();

    }

    public function getData($uid)
    {
		$query = $this->db->query('select * from '.$this->table.' where uid="'.$uid.'" order by id desc');
        return $query->getResult();
    }

    public function UpdtbkndData($insData, $pid, $uid)
	{
		$this->db->table($this->table)->update($insData, array(
            "id" => $pid,'uid'=>$uid
        ));
        return $this->db->affectedRows();
	}

}