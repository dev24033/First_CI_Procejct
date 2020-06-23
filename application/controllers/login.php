<?php
class login extends MY_controller
{
	public function __construct()
	{ 
		parent::__construct();
		if($this->session->userdata('id'))
		return redirect("admin/welcome");
	}
	
	public function index()
	{
		//$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','user name','required|alpha');
		$this->form_validation->set_rules('pwd','password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			/*Data receive in php
			if(isset($_POST['submit']))
			{
				$uname=$_POST['uname'];
				$pass=$_POST['pwd'];
			}*/
			// codigniter calss/method. 
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pwd');
			//echo "User name is".$uname."<br>"."Password is".$pass; 
			$this->load->model('adminmodel');
			$login_id=$this->adminmodel->isvalidate($uname,$pass);
			/* print_r($uname);
			exit;  */
			if($login_id)
			{
				$this->session->set_userdata('id',$login_id);
				$this->session->set_userdata('uname',$uname);
				//print_r($uname);
				//exit;
				return redirect('admin/welcome');
			}
			else
			{
				
				$this->session->set_flashdata('login_failed','Invalid Username/Password');
				return redirect('login');
			}
		}
		else
		{
			//echo validation_errors();
			$this->load->view("admin/login");
		}
		
	}
	public function register()
	{
		$this->load->view('admin/register');
	}
	public function sendemail()
	{
		$this->form_validation->set_rules('username','User Name','required|alpha');
		$this->form_validation->set_rules('password','Password','required|max_length[12]');
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','last Name','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		if($this->form_validation->run())
		{
			$post=$this->input->post();
			$this->load->model('adminmodel','useradd');
			if($this->useradd->add_user($post))
			{
				$this->session->set_flashdata('user','User added successfully');
				$this->session->set_flashdata('user_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('user','User added successfully');
				$this->session->set_flashdata('user_class','alert-danger');
			}
			redirect('login/register');
			/* $this->email->from(set_value('email'),set_value('firstname'));
			$this->email->to("devendramcajiwaji@gmail.com");
			$this->email->subject("Registration Form...");
			
			$this->email->message("Thanku for registration");
			$this->email->set_newline("\r\n");
			$this->email->send();
			if(!$this->email->send())
			{
				show_error($this->email->print_debugger());
				
			}
			else
			{
				echo "Your email has been sent";
			} */
		}
		else
		{
			$this->load->view("admin/register");
		}
	}
}
?>