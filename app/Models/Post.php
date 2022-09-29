<?php 
namespace App\Models;

use CodeIgniter\Model;

Class Post extends Model{
    protected $table = 'posts';
    protected $db;
    public function __construct(){
		parent::__construct();
        $this->db = \Config\Database::connect();

    }

    public function AddPost($data = array())
	{
		$this->db->table($this->table)->insert($data);
        return $this->db->insertID();
	}

    public function getPostById($postid,$rescount = null)
    {

		$query = $this->db->query('select * from '.$this->table.' where id="'.$postid.'" order by id desc');
        if($rescount == 'all'){
            return $query->getResult();
        }else {
            return $query->getResult()[0];
        }
        
    }

    public function getPostByUid($uid)
    {
		$query = $this->db->query('select * from '.$this->table.' where uid="'.$uid.'" order by id desc');        
        return $query->getResult();                
    }

    public function UpdtPostData($insData, $pid, $uid)
	{
		$this->db->table($this->table)->update($insData, array(
            "id" => $pid,'uid'=>$uid
        ));
        return $this->db->affectedRows();
	}

}