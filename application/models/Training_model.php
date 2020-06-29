<?php

class Training_model extends CI_Model
{
	public function saveVideo($data){
		
		$this->db->insert('e_learn_video',$data);
	}
	public function allVideo(){
		
		$this->db->select("*");
		$data=$this->db->get('e_learn_video');
		return $data->result();
	}
	
	public function num_video(){
		$this->db->select("*");
		$data=$this->db->get('e_learn_video');
		return $data->num_rows();
		
	}
	public function getVideo($id)
	{
		$this->db->where('id',$id);
		$this->db->select("*");
		$data=$this->db->get('e_learn_video');
		return $data->row();
		
	}
	public function updateVideo($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('e_learn_video',$data);

		
	}
	public function deleteVideo($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('e_learn_video');

		
	}
}
?>