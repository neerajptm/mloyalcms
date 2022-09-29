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

    public function getData($uid,$cmpid = null)
    {
        if($cmpid){
            $query = $this->db->query('select * from '.$this->table.' where uid="'.$uid.'" and id = "'.$cmpid.'" order by id desc');
        }else {
            $query = $this->db->query('select * from '.$this->table.' where uid="'.$uid.'" order by id desc');
        }
		// echo $this->db->getLastQuery();die;
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