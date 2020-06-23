<?php
class admin extends MY_controller
{
	
	
	
	
	public function welcome()
	{
		$this->load->model('adminmodel','ar');

		
		$config=[
				'base_url'=>base_url('admin/welcome'),
				'per_page'=>3,
				'total_rows'=>$this->ar->num_rows(),
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
		
		$articles=$this->ar->article_list($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('admin/dashboard',['articles'=>$articles]);
		
 		
	}
	public function add_article()
	{
		$this->load->view('admin/add_article');
		$this->input->post();
	}
	public function userValidation()
	{
		$config=[
		'upload_path'=>'./upload/',
		'allowed_types'=>'gif|jpg|png',
		];
		$this->load->library('upload',$config);
		if($this->form_validation->run('add_article_rules') && $this->upload->do_upload())
		{
			$post=$this->input->post();
			$data=$this->upload->data();
			/* echo "<pre>";
			print_r($data);
			exit; */
			
			$image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
			/* echo image_path;
			exit; */
			$post['image_path']=$image_path;
			$this->load->model('adminmodel','useradd');
			if($this->useradd->addm_article($post))
			{
				$this->session->set_flashdata('msg','Article added successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('msg','Article not added please try again!!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			return redirect('admin/welcome');
		}
		else
		{
			$upload_error=$this->upload->display_errors();
			$this->load->view('admin/add_article',compact('upload_error'));
		}
	}
	public function edituser($id)
	{
		
			$this->load->model('adminmodel','find');
			$rt=$this->find->find_article($id);
			$this->load->view('admin/edit_article',['article'=>$rt]);
			//echo "<pre>";
			//print_r($rt);
			//exit;			
	}		
	public function updatearticle($article_id)
	{
		if($this->form_validation->run('add_article_rules'))
		{
		$config=[
		'upload_path'=>'./upload/',
		'allowed_types'=>'gif|jpg|png',
		];
		$this->load->library('upload',$config);
		if($this->form_validation->run('add_article_rules'))
		{
			//post=$this->input->post();
			//$oldimg=$post['oldimg'];
			//unset($articleid);
			
			
			//print_r($oldimg);
			//exit; 
			if ($this->upload->do_upload()) 
			{
				$post=$this->input->post();
				$data=$this->upload->data();
				/* echo "<pre>";
				print_r($data);
				exit; */
			
				$image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
				/* echo image_path;
				exit; */
				$post['image_path']=$image_path;
				$this->load->model('adminmodel','editupdate');
				
				if($this->editupdate->update_article($article_id,$post))
				{
					//print_r($post);
					//exit;
					$this->session->set_flashdata('msg','Article Update successfully');
					$this->session->set_flashdata('msg_class','alert-success');
				}
				else
				{
					
					$this->session->set_flashdata('msg','Articles not update Please try again!!');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				return redirect('admin/welcome');
			}
			else
			{
				$image_path=$this->input->post(image_path);
				$post['image_path']=$image_path;
						 
				$this->load->model('adminmodel','editupdate');
				if($this->editupdate->update_article($article_id,$post))
				{
					//print_r($post);
					//exit;
					$this->session->set_flashdata('msg','Article Update successfully');
					$this->session->set_flashdata('msg_class','alert-success');
				}
				else
				{
					$this->session->set_flashdata('msg','Articles not update Please try again!!');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				return redirect('admin/welcome');
			}
		}
		else
		{
			$this->edituser($article_id);
		}

		}
	}
	public function del_article()
	{
		    $id=$this->input->post('id');
			$this->load->model('adminmodel','del');
			if($this->del->delm_article($id))
			{
				$this->session->set_flashdata('msg','Article deleted successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('msg','Article not deleted please try again!!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			return redirect('admin/welcome');
	}
	public function __construct()
	{ 
		parent::__construct();
		if(!$this->session->userdata('id'))
		return redirect("login");
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('login');
	}
	
	
	
	
}

?>