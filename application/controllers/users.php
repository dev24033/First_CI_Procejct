<?php
class Users extends MY_controller
{
	public function index()
	{
		log_message('error','error message in this line');
		log_message('debug','debug message in this line');
		//log_message('info','info message in this line');
		log_message('info','index method colled');
		$this->load->model('adminmodel','ar');

		
		$config=[
				'base_url'=>base_url('users/index'),
				'per_page'=>2,
				'total_rows'=>$this->ar->all_articles_count(),
				'full_tag_open'=>"<ul class='pagination'>",
				'full_tag_close'=>"</ul>",
				'next_tag_open'=>"<li>",
				'next_tag_close'=>"</li>",
				'prev_tag_open'=>"<li>",
				'prev_tag_close'=>"</li>",
				'num_tag_open'=>"<li>",
				'num_tag_close'=>"</li>",
				'cur_tag_open'=>"<li class='active'><a>",  //manualy add ancor tag in active class
				'cur_tag_close'=>"</a></li>"
				];
		$this->pagination->initialize($config);
		
		$articles=$this->ar->all_articlelist($config['per_page'],$this->uri->segment(3));
		/* echo "<pre>";
		print_r(compact('articles'));
		exit; */
		//$this->load->view('users/homepage',['articles'=>$articles]);
		$this->load->view('users/homepage',compact('articles'));
	}
	
	public function view_article($id)
	{
		
		//$id=$this->input->GET('id');
		//$post=$this->input->post();
		//print_r($id);
		//exit;
		$this->load->model('adminmodel','ar');
		$articles=$this->ar->article_detail($id);
		/* echo "<pre>";
		print_r($articles);
		exit;  */
		$this->load->view('users/view_article',['articles'=>$articles]);
		//$this->load->view('users/homepage',compact('articles'));
	}
	
}
?>