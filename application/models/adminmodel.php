<?php
class adminmodel extends CI_Model
{
	public function isvalidate($username,$password)
	{
		//$this->db->query("select * from users where username='$username',password=$password");
		$qry=$this->db->where(['username'=>$username,'password'=>$password])
					 ->get('users');
					 //echo "<pre>";
					 //print_r($qry->row()->id);
					 
					 
		//another method for run query
		//$qry=$this->db->where('username','password')
		//			->where('$username','$password')
		//			->from('users');
		if($qry->num_rows())
		{
			return $qry->row()->id;
			
		}
		else
		{
			return false;
		}
	}
	
	public function article_list($limit,$offset)
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()                  //select('*')
				 ->from('articles')
				 ->where(['user_id'=>$id])
				 ->limit($limit,$offset)
				 ->get();
				 //echo "<pre>";                //use this for debugging
				// print_r($q->result());
				 //exit;
				 return $q->result();
	}
	public function num_rows()
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select()
				->from('articles')
				->where(['user_id'=>$id]) 
				->get();
				return $q->num_rows();
	}
	public function addm_article($array)
	{
		//$t=$array['title'];
		//$this->db->insert('articles',['article_title',$t]);
		return $this->db->insert('articles',$array);                  // second method reduce code.
	}
	
	public function add_user($array)
	{
		return $this->db->insert('users',$array);                 
	}
	
	public function delm_article($id)
	{
		return $this->db->delete('articles',['id'=>$id]);                 
	}
	public function find_article($articleid)
	{
		$q=$this->db->select(['article_title','article_body','id','image_path'])
				 ->where('id',$articleid)
				 ->get('articles');
		return $q->row();
	}
	 public function update_article($articleid,Array $article)
	{
		//print_r($article);
		//exit;
		return $this->db->where('id',$articleid)
						->update('articles',$article);

	}
	
	function user_m($user_id)
	{
		
				$this->db->select('*');
				$this->db->Where('id',$user_id);
				$query = $this->db->get('users');

				return $query->result_array();
				
		 
	}
	
	public function all_articles_count()
	{
		$q=$this->db->select()
					->from('articles')
					->get();
					return $q->num_rows();
	}
	public function all_articlelist($limit,$offset)
	{
		$q=$this->db->select()
					->from('articles')
					->limit($limit,$offset)
					->get();
					return $q->result();
	}
	
	public function article_detail($id)
	{
		//print_r($id);
		//exit;
		$q=$this->db->select()
					->from('articles')
					->where('id',$id)
					
					->get();
					return $q->result();
					/* echo "<pre>";
					print_r($q->result());
					exit; */
					
	}
	
	
}
?>