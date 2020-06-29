<?php
Class Duplicate_question_model extends CI_Model
{
 
  
 function check_duplicate($limit){
	 
	$question=strip_tags($this->input->post('question'));
			 $this->db->like('e_learn_qbank.question',$question);

	 
		 $this->db->join('e_learn_category','e_learn_category.cid=e_learn_qbank.cid');
	 $this->db->join('e_learn_level','e_learn_level.lid=e_learn_qbank.lid');
	 $this->db->limit(5,$limit);
		$this->db->order_by('e_learn_qbank.qid','desc');
		$query=$this->db->get('e_learn_qbank');
		return $query->result_array();
 }
 
  

 
}







 



?>
